<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Assets\Navigation\MaterialIcons;

use WBW\Bundle\AdminBSBBundle\Assets\Navigation\MaterialIcons\NavigationNodeDashboard;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Navigation node "dashboard" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets\Navigation\MaterialIcons
 */
class NavigationNodeDashboardTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new NavigationNodeDashboard("route");

        $this->assertEquals("navigation.node.dashboard", $obj->getLabel());
        $this->assertEquals("mi:dashboard", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
