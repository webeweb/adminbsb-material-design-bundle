<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension;

use Twig_Extension;
use WBW\Bundle\AdminBSBBundle\Provider\Color\DefaultColorProvider;

/**
 * Abstract AdminBSB Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractAdminBSBTwigExtension extends Twig_Extension {

    /**
     * Default content.
     *
     * @var string
     */
    const DEFAULT_CONTENT = "&nbsp;";

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Fix a color.
     *
     * @param string $name The color name.
     * @param string $prefix The color prefix.
     * @return string Returns the prefix color in case of success, default color otherwise.
     */
    public static function fixColor($name, $prefix = "") {
        if (false === array_key_exists($name, DefaultColorProvider::getColors())) {
            $name = "red";
        }
        return $prefix . $name;
    }

}
