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

use WBW\Bundle\AdminBSBBundle\Navigation\MaterialIcons\BreadcrumbNodeActionImport;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;

/**
 * Breadcrumb node action "Import" test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Navigation\MaterialIcons
 */
class BreadcrumbNodeActionImportTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new BreadcrumbNodeActionImport("route");

        $this->assertEquals("navigation.node.action.import", $obj->getId());
        $this->assertEquals("mi:file_upload", $obj->getIcon());
        $this->assertEquals(NavigationInterface::NAVIGATION_MATCHER_URL, $obj->getMatcher());
        $this->assertEquals("route", $obj->getUri());
    }

}
