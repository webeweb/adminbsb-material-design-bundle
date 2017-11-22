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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\Action\BreadcrumbNodeExportAction;

/**
 * Breadcrumb node "Export" action test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Navigation\Node\Action
 * @final
 */
final class BreadcrumbNodeExportActionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new BreadcrumbNodeExportAction("route");

		$this->assertEquals("navigation.node.action.export", $obj->getId());
		$this->assertEquals("file_upload", $obj->getIcon());
		$this->assertEquals("route", $obj->getRoute());
	}

}
