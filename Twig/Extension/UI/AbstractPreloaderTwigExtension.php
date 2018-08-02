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

/**
 * Abstract preloader Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractPreloaderTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB preloader.
     *
     * @param string $class The class.
     * @param string $size The size.
     * @return string Returns the AdminBSB preloader.
     */
    protected function adminBSBPreloader($class, $size) {

        // Initialize the values.
        $sizes = ["xs", "sm", "l", "xl"];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = "preloader";
        $attributes["class"][] = true === in_array($size, $sizes) ? "pl-size-" . $size : null;

        // Initialize the parameters.
        $content   = "<div class=\"circle-clipper left\"><div class=\"circle\"></div></div><div class=\"circle-clipper right\"><div class=\"circle\"></div></div>";
        $innerHTML = self::bootstrapHTMLElement("div", $content, ["class" => ["spinner-layer", $class]]);

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $innerHTML, $attributes);
    }

}
