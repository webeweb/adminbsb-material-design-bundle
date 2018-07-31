<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractFormTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a AdminBSB checkbox.
     *
     * @param string $content The checkbox content.
     * @param string $name The checkbox name.
     * @param string $id The checkbox id.
     * @param boolean $checked Checked ?
     * @param boolean $disabled Disabled ?
     * @param boolean $filledIn Filled in ?
     * @param string $class The checkbox class.
     * @return string Returns the AdminBSB checkbox.
     */
    final protected function adminBSBCheckbox($content, $name, $id, $checked, $disabled, $filledIn, $class) {

        // Initialize the template.
        $template = "<input %attributes%>%innerHTML%";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]    = [true === $filledIn ? "filled-in" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "checkbox";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        // Check the parameters.
        $innerHTML = self::bootstrapHTMLElement("label", $content, ["for" => $attributes["id"]]);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a AdminBSB radio button.
     *
     * @param string $content The radio button content.
     * @param string $name The radio button name.
     * @param string $id The radio button id.
     * @param boolean $checked Checked ?
     * @param boolean $disabled Disabled ?
     * @param boolean $withGap With gap ?
     * @param string $class The radio button class.
     * @return string Returns the AdminBSB radio button.
     */
    final protected function adminBSBRadioButton($content, $name, $id, $checked, $disabled, $withGap, $class) {

        // Initialize the template.
        $template = "<input %attributes%>%innerHTML%";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]    = [true === $withGap ? "with-gap" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "radio";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        // Check the parameters.
        $innerHTML = self::bootstrapHTMLElement("label", $content, ["for" => $attributes["id"]]);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB switch button.
     *
     * @param string $offLabel The switch button off label.
     * @param string $name The switch button name.
     * @param boolean $checked Checked switch button ?
     * @param boolean $disabled Disable switch button ?
     * @param string $onLabel The switch button on label.
     * @param array $attrs The switch button attributes.
     * @param string $class The switch button class.
     * @return string Returns the AdminBSB switch button.
     */
    final protected function adminBSBSwitchButton($offLabel, $name, $checked, $disabled, $onLabel, array $attrs, $class = null) {

        // Initialize the template.
        $template = "<input %attributes%>%innerHTML%";

        // Initialize the attributes.
        $attributes = $attrs;

        $attributes["name"]     = $name;
        $attributes["type"]     = "checkbox";
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        // Initialize the parameters.
        $lLabel = null !== $offLabel ? $offLabel : "";
        $rLabel = null !== $onLabel ? $onLabel : "";

        $span  = self::bootstrapHTMLElement("span", null, ["class" => ["lever", $class]]);
        $input = StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $span]);
        $label = self::bootstrapHTMLElement("label", $lLabel . $input . $rLabel);

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $label, ["class" => "switch"]);
    }

}
