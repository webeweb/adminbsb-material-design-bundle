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
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Fix a color.
     *
     * @param string $name The color name.
     * @param string $prefix The color prefix.
     * @return string Returns the prefix color in case of success, default color otherwise.
     */
    public static function fixColor($name, $prefix = "") {
        if (false === array_key_exists($name, DefaultColorProvider::getColors())) {
            $name = "red";
        }
        return $prefix . $name;
    }

}
