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
use WBW\Library\Core\Helper\Argument\StringHelper;

/**
 * Abstract checkbox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractCheckboxTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a AdminBSB checkbox.
     *
     * @param string $content The content.
     * @param string $name The name.
     * @param string $id The id.
     * @param boolean $checked Checked ?
     * @param boolean $disabled Disabled ?
     * @param boolean $filledIn Filled in ?
     * @param string $class The class.
     * @return string Returns the AdminBSB checkbox.
     */
    protected function adminBSBCheckbox($content, $name, $id, $checked, $disabled, $filledIn, $class) {

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
        return StringHelper::replace($template, ["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $innerHTML]);
    }

}
