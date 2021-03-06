<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Navigation\MaterialIcons;

use WBW\Bundle\CoreBundle\Navigation\BreadcrumbNode;

/**
 * Breadcrumb node action "New users group".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Navigation\MaterialIcons
 */
class BreadcrumbNodeActionNewUsersGroup extends BreadcrumbNode {

    /**
     * Constructor.
     *
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $uri = null, string $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.new", "mi:group_add", $uri, $matcher);
    }
}
