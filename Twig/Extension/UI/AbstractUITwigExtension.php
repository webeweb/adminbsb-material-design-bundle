<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Provider\Color\DefaultColorProvider;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractUITwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB badge.
     *
     * @param string $content The badge content.
     * @param string $label The badge label.
     * @param boolean $large Large badge ?
     * @param string $class The badge class.
     * @param boolean $list List badge ?
     * @param string $link The badge link.
     * @return string Returns the AdminBSB badge.
     */
    final protected function adminBSBBadge($content, $label, $large, $class, $list = false, $link = false) {

        // Initialize the template.
        $template = '<button %attributes%>%innerHTML%<span class="badge">%label%</span></button>';
        if (true === $list) {
            $template = '<a class="list-group-item" href="%href%"><span %attributes%>%innerHTML%</span>%label%</a>';
        }

        // Initialize the attributes.
        $attributes = [];

        if (true === $list) {
            $attributes["class"] = ["badge", $class];
        } else {
            $attributes["class"]   = ["btn", $class, "btn-block", "waves-effect"];
            $attributes["class"][] = true === $large ? "btn-lg" : null;
            $attributes["type"]    = "button";
        }

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";
        $spanLabel = null !== $label ? $label : "";
        $href      = null !== $link ? $link : self::DEFAULT_HREF;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%", "%label%", "%href%"], [StringUtility::parseArray($attributes), $innerHTML, $spanLabel, $href]);
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
    final protected function adminBSBButton($content, $title, $size, $block, $disable, $class, $icon, $circle) {

        // Disable the parameters.
        $circle = null !== $content ? false : $circle;
        $style  = null !== $content ? "margin: -4px 2px 0; vertical-align: sub;" : "";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]       = ["btn", $class, "waves-effect"];
        $attributes["class"][]     = true === $block ? "btn-block" : null;
        $attributes["class"][]     = true === $circle ? "btn-circle" . ("lg" === $size ? "-lg" : "") . " waves-circle waves-float" : null;
        $attributes["class"][]     = true !== $circle && true === in_array($size, ["lg", "sm", "xs"]) ? "btn-" . $size : null;
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

    /**
     * Displays an AdminBSB color.
     *
     * @param string $name The color name.
     * @param string $code The color code.
     * @param string $output The output.
     * @return string Returns the AdminBSB color.
     */
    final protected function adminBSBColor($name, $code, $output) {

        // Initialize the parameters.
        $_name = self::fixColor($name, "");
        $_code = null !== $code ? $code : "500";

        // Return the HTML.
        return "hex" === $output ? DefaultColorProvider::getColors()[$_name][$_code] : "col-" . $_name;
    }

    /**
     * Displays an AdminBSB icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @param string $class The icon class.
     * @return string Returns the AdminBSB icon.
     */
    final protected function adminBSBIcon($name, $style, $class = null) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["material-icons", $class];
        $attributes["style"] = $style;

        // Initialize the parameters.
        $innerHTML = null !== $name ? $name : "home";

        // Return the HTML.
        return self::bootstrapHTMLElement("i", $innerHTML, $attributes);
    }

    /**
     * Displays an AdminBSB preloader.
     *
     * @param string $class The preloader class.
     * @param string $size The preloader size.
     * @return string Returns the AdminBSB preloader.
     */
    final protected function adminBSBPreloader($class, $size) {

        // Initialize the template.
        $template = '<div %attributes1%><div %attributes2%><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["preloader"]["class"] = ["preloader", in_array($size, ["xs", "sm", "l", "xl"]) ? "pl-size-" . $size : null];
        $attributes["spinner"]["class"]   = ["spinner-layer", $class];

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes1%", "%attributes2%"], [StringUtility::parseArray($attributes["preloader"]), StringUtility::parseArray($attributes["spinner"])]);
    }

}
