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
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract switch button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractSwitchButtonTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB switch button.
     *
     * @param string $offLabel The off label.
     * @param string $name The name.
     * @param bool $checked Checked ?
     * @param bool $disabled Disable ?
     * @param string $onLabel The on label.
     * @param array $attrs The attributes.
     * @param string $class The class.
     * @return string Returns the AdminBSB switch button.
     */
    protected function adminBSBSwitchButton($offLabel, $name, $checked, $disabled, $onLabel, array $attrs, $class) {

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
        $input = StringHelper::replace($template, ["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $span]);
        $label = self::bootstrapHTMLElement("label", $lLabel . $input . $rLabel);

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $label, ["class" => "switch"]);
    }

}
