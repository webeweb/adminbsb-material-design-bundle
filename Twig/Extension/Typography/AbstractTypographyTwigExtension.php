<?php

/*
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2018 All rights reserved.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography
 * @abstract
 */
abstract class AbstractTypographyTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB bold text.
     *
     * @param string $content The content.
     * @return string Returns the AdminBSB bold text.
     */
    protected function adminBSBBold($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes
        $attributes = [];

        $attributes["class"] = "font-bold";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB italic text.
     *
     * @param string $content The content.
     * @return string Returns the AdminBSB italic text.
     */
    protected function adminBSBItalic($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes
        $attributes = [];

        $attributes["class"] = "font-italic";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB line through text.
     *
     * @param string $content The content.
     * @return string Returns the AdminBSB line through text.
     */
    protected function adminBSBLineThrough($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes
        $attributes = [];

        $attributes["class"] = "font-line-through";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB overlined text.
     *
     * @param string $content The content.
     * @return string Returns the AdminBSB overlined text.
     */
    protected function adminBSBOverline($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes
        $attributes = [];

        $attributes["class"] = "font-overline";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB underlined text.
     *
     * @param string $content The content.
     * @return string Returns the AdminBSB underlined text.
     */
    protected function adminBSBUnderline($content) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes
        $attributes = [];

        $attributes["class"] = "font-underline";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

}
