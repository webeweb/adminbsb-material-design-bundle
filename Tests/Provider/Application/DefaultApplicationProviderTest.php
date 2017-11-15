<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Application;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application\DefaultApplicationProvider;

/**
 * Default application provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Application
 * @final
 */
final class DefaultApplicationProviderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new DefaultApplicationProvider();

		$this->assertEquals("AdminBSB Material Design", $obj->getDescription());
		$this->assertEquals("/", $obj->getHome());
		$this->assertEquals("AdminBSB<b>MaterialDesign</b>", $obj->getName());
		$this->assertEquals("/", $obj->getRoute());
		$this->assertEquals("AdminBSB Material Design", $obj->getTitle());
		$this->assertEquals("~1.0@dev", $obj->getVersion());
		$this->assertEquals("2017", $obj->getYear());
	}

}
