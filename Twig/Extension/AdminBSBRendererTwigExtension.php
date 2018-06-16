<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;

/**
 * AdminBSB renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension
 */
class AdminBSBRendererTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Render an icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @return string Returns a rendered icon.
     */
    public static function renderIcon($name, $style = null) {


        // Determines the handler.
        $handler = explode(":", $name);

        // Get and check the parse count.
        $parseNb = count($handler);
        if ($parseNb < 1 || 2 < $parseNb) {
            return "";
        }
        if (1 === count($handler)) {
            $handler = ["md", $name];
        }

        // Initialize the output.
        $output = "";

        // Swith into handler.
        switch ($handler[0]) {

            case "md": // Material Design
                $output = (new IconUITwigExtension())->renderIcon($handler[1], $style);
                break;

            default:
                $output = BootstrapRendererTwigExtension::renderIcon($name, $style);
                break;
        }

        // Return the output.
        return $output;
    }

}
