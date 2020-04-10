<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Navigation\MaterialIcons;

use WBW\Bundle\AdminBSBBundle\Navigation\MaterialIcons\NavigationNodeUsersGroups;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;

/**
 * Navigation node "Users groups" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Navigation\MaterialIcons
 */
class NavigationNodeUsersGroupsTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new NavigationNodeUsersGroups("route");

        $this->assertEquals("navigation.node.usersGroups", $obj->getLabel());
        $this->assertEquals("mi:group", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
