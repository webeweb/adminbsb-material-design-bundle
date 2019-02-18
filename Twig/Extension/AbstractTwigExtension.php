<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension;

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Provider\Color\DefaultColorProvider;
use WBW\Bundle\CoreBundle\Helper\ColorHelper;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension as BaseTwigExtension;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractTwigExtension extends BaseTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Material Design color.
     *
     * @param string $name The name.
     * @param string $prefix The prefix.
     * @return string Returns the Material Design color.
     */
    public static function materialDesignColor($name, $prefix = "") {

        $colors = ColorHelper::getMaterialDesignColorPalette();

        $color = $colors[0];

        foreach ($colors as $current) {
            if ($name !== $current->getName()) {
                continue;
            }
            $color = $current;
        }

        return implode("", [$prefix, $color->getName()]);
    }
}
