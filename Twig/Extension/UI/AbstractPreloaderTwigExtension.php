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
use WBW\Library\Core\Utility\Argument\StringUtility;

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
     * @param string $class The preloader class.
     * @param string $size The preloader size.
     * @return string Returns the AdminBSB preloader.
     */
    protected function adminBSBPreloader($class, $size) {

        // Initialize the template.
        $template = '<div %attributes1%><div %attributes2%><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["preloader"]["class"] = ["preloader", in_array($size, ["xs", "sm", "l", "xl"]) ? "pl-size-" . $size : null];
        $attributes["spinner"]["class"]   = ["spinner-layer", $class];

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes1%", "%attributes2%"], [StringUtility::parseArray($attributes["preloader"]), StringUtility::parseArray($attributes["spinner"])]);
    }

}
