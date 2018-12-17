<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Navigation;

use WBW\Bundle\BootstrapBundle\Navigation\BreadcrumbNode;

/**
 * FOSUserNavigationProvider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Navigation
 */
class FOSUserNavigationProvider {

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
