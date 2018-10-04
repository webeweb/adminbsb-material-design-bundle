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
 * Abstract radio button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractRadioButtonTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a AdminBSB radio button.
     *
     * @param string $content The content.
     * @param string $name The name.
     * @param string $id The id.
     * @param bool $checked Checked ?
     * @param bool $disabled Disabled ?
     * @param bool $withGap With gap ?
     * @param string $class The class.
     * @return string Returns the AdminBSB radio button.
     */
    protected function adminBSBRadioButton($content, $name, $id, $checked, $disabled, $withGap, $class) {

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
        return StringHelper::replace($template, ["%attributes%", "%innerHTML%"], [StringHelper::parseArray($attributes), $innerHTML]);
    }

}
