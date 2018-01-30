<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node\Action;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\Action\BreadcrumbNodeImportAction;

/**
 * Breadcrumb node "Import" action test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node\Action
 * @final
 */
final class BreadcrumbNodeImportActionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new BreadcrumbNodeImportAction("route");

        $this->assertEquals("navigation.node.action.import", $obj->getId());
        $this->assertEquals("file_download", $obj->getIcon());
        $this->assertEquals("route", $obj->getRoute());
    }

}
