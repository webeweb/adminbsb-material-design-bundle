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

use WBW\Bundle\AdminBSBBundle\Assets\Navigation\MaterialIcons\BreadcrumbNodeActionNewUsersGroup;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Breadcrumb node action "new users group" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets\Navigation\MaterialIcons
 */
class BreadcrumbNodeActionNewUsersGroupTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BreadcrumbNodeActionNewUsersGroup("route");

        $this->assertEquals("navigation.node.action.new", $obj->getLabel());
        $this->assertEquals("mi:group_add", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
