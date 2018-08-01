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
 * AbstractIconTwigExtension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractIconTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @param string $class The icon class.
     * @return string Returns the AdminBSB icon.
     */
    protected function adminBSBIcon($name, $style, $class = null) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["material-icons", $class];
        $attributes["style"] = $style;

        // Initialize the parameters.
        $innerHTML = null !== $name ? $name : "home";

        // Return the HTML.
        return self::bootstrapHTMLElement("i", $innerHTML, $attributes);
    }

}
