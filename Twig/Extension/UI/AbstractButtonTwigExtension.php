<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB button.
     *
     * @param string $content The button content.
     * @param string $title The button title.
     * @param string $size The button size.
     * @param boolean $block Block button ?
     * @param booelan $disable Disable button ?
     * @param string $class The button class.
     * @param string $icon The button icon.
     * @param boolean $circle Circle button ?
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
        $glyphicon = null !== $icon ? AdminBSBRendererTwigExtension::renderIcon($icon, $style) : "";

        // Return the HTML.
        return self::bootstrapHTMLElement("button", $glyphicon . $innerHTML, $attributes);
    }

}
