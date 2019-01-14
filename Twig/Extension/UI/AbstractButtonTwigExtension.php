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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB button.
     *
     * @param string $content The button content.
     * @param string $title The button title.
     * @param string $size The button size.
     * @param bool $block Block button ?
     * @param booelan $disable Disable button ?
     * @param string $class The button class.
     * @param string $icon The button icon.
     * @param bool $circle Circle button ?
     * @return string Returns the AdminBSB button.
     */
    protected function adminBSBButton($content, $title, $size, $block, $disable, $class, $icon, $circle) {

        // Disable the parameters.
        $circle = null !== $content ? false : $circle;
        $style  = null !== $content ? "margin: -4px 2px 0; vertical-align: sub;" : "";

        // Initialize the values.
        $sizes = ["lg", "sm", "xs"];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]       = ["btn", $class, "waves-effect"];
        $attributes["class"][]     = true === $block ? "btn-block" : null;
        $attributes["class"][]     = true === $circle ? "btn-circle" . ("lg" === $size ? "-lg" : "") . " waves-circle waves-float" : null;
        $attributes["class"][]     = true !== $circle && true === in_array($size, $sizes) ? "btn-" . $size : null;
        $attributes["title"]       = $title;
        $attributes["type"]        = "button";
        $attributes["data-toggle"] = null !== $title ? "tooltip" : null;
        $attributes["disabled"]    = true === $disable ? "disabled" : null;

        // Handle the parameters.
        $innerHTML = null !== $content ? $content : "";
        $glyphicon = null !== $icon ? RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $icon, $style) : "";

        // Return the HTML.
        return static::coreHTMLElement("button", $glyphicon . $innerHTML, $attributes);
    }
}
