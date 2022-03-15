<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Navigation\MaterialIcons;

use WBW\Bundle\AdminBSBBundle\Asset\Navigation\MaterialIcons\BreadcrumbNodeActionNew;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * Breadcrumb node action "New" test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Navigation\MaterialIcons
 */
class BreadcrumbNodeActionNewTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BreadcrumbNodeActionNew("route");

        $this->assertEquals("navigation.node.action.new", $obj->getLabel());
        $this->assertEquals("mi:add", $obj->getIcon());
        $this->assertEquals(NavigationNodeInterface::MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }
}
