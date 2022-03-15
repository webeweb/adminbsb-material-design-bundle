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

use Twig\Environment;
use WBW\Bundle\AdminBSBBundle\Helper\ColorHelper;
use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension as BaseTwigExtension;

/**
 * Abstract Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractTwigExtension extends BaseTwigExtension {

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Material Design color.
     *
     * @param string|null $name The name.
     * @param string $prefix The prefix.
     * @return string Returns the Material Design color.
     */
    public static function materialDesignColor(?string $name, string $prefix = ""): string {
        return ColorHelper::materialDesignColor($name, $prefix);
    }
}
