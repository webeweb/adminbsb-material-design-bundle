<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation;

use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * FOSUserNavigationProvider.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation
 * @final
 */
final class FOSUserNavigationProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Get the breadcrumb.
     *
     * @return BreadcrumbNode Returns the breadcrumb.
     */
    public function getBreadcrumb() {

        // Initialize the breadcrumb.
        $breadcrumb = new BreadcrumbNode("label.user", "person");
        $breadcrumb->addNode(new BreadcrumbNode("label.user_profile_edit", "person", "fos_user_profile_edit"));
        $breadcrumb->addNode(new BreadcrumbNode("label.user_change_password", "person", "fos_user_change_password"));

        // Return the breadcrumb.
        return $breadcrumb;
    }

}
