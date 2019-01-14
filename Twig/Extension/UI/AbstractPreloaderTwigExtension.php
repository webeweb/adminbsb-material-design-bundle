<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract preloader Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractPreloaderTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB preloader.
     *
     * @param string $class The class.
     * @param string $size The size.
     * @return string Returns the AdminBSB preloader.
     */
    protected function adminBSBPreloader($class, $size) {

        // Initialize the values.
        $sizes = ["xs", "sm", "l", "xl"];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = "preloader";
        $attributes["class"][] = true === in_array($size, $sizes) ? "pl-size-" . $size : null;

        // Initialize the parameters.
        $content   = "<div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div>";
        $innerHTML = static::coreHTMLElement("div", $content, ["class" => ["spinner-layer", $class]]);

        // Return the HTML.
        return static::coreHTMLElement("div", $innerHTML, $attributes);
    }
}
