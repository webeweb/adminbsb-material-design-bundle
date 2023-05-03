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
use WBW\Library\Types\Helper\StringHelper;

/**
 * Abstract checkbox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractCheckboxTwigExtension extends AbstractTwigExtension {

    /**
     * Display a AdminBSB checkbox.
     *
     * @param string|null $content The content.
     * @param string|null $name The name.
     * @param string|null $id The id.
     * @param bool $checked Checked ?
     * @param bool $disabled Disabled ?
     * @param bool $filledIn Filled in ?
     * @param string|null $class The class.
     * @return string Returns the AdminBSB checkbox.
     */
    protected function adminBSBCheckbox(?string $content, ?string $name, ?string $id, bool $checked, bool $disabled, bool $filledIn, ?string $class): string {

        $template = "<input %attributes%>%innerHTML%";

        $attributes = [
            "class"    => [true === $filledIn ? "filled-in" : null, $class],
            "name"     => $name,
            "type"     => "checkbox",
            "id"       => $id,
            "checked"  => true === $checked ? "checked" : null,
            "disabled" => true === $disabled ? "disabled" : null,
        ];

        $innerHTML = static::coreHtmlElement("label", $content, ["for" => $attributes["id"]]);

        return str_replace(["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $innerHTML], $template);
    }
}
