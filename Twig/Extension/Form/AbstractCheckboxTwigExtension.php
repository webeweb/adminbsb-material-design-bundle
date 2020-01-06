<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\Helper\StringHelper;

/**
 * Abstract checkbox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractCheckboxTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a AdminBSB checkbox.
     *
     * @param string $content The content.
     * @param string $name The name.
     * @param string $id The id.
     * @param bool $checked Checked ?
     * @param bool $disabled Disabled ?
     * @param bool $filledIn Filled in ?
     * @param string $class The class.
     * @return string Returns the AdminBSB checkbox.
     */
    protected function adminBSBCheckbox($content, $name, $id, $checked, $disabled, $filledIn, $class) {

        $template = "<input %attributes%>%innerHTML%";

        $attributes = [];

        $attributes["class"]    = [true === $filledIn ? "filled-in" : null, $class];
        $attributes["name"]     = $name;
        $attributes["type"]     = "checkbox";
        $attributes["id"]       = $id;
        $attributes["checked"]  = true === $checked ? "checked" : null;
        $attributes["disabled"] = true === $disabled ? "disabled" : null;

        $innerHTML = static::coreHTMLElement("label", $content, ["for" => $attributes["id"]]);

        return str_replace(["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $innerHTML], $template);
    }
}
