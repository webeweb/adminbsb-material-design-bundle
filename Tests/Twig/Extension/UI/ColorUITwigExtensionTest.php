<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ColorUITwigExtension;

/**
 * Color UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ColorUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new ColorUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(1, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("materialDesignColor", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "materialDesignColorFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");
	}

	/**
	 * Tests the materialDesignColorFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignColorFunction() {

		$service = new ColorUITwigExtension();

		$arg0	 = [];
		$res0	 = "col-red";
		$this->assertEquals($res0, $service->materialDesignColorFunction($arg0), "The mesthod materialDesignColorFunction() does not return the expected value");

		$arg1	 = ["out" => "hex"];
		$res1	 = "#F44336";
		$this->assertEquals($res1, $service->materialDesignColorFunction($arg1), "The method materialDesignColorFunction() does not return the expected value with name");

		$arg2	 = ["name" => "black"];
		$res2	 = "col-black";
		$this->assertEquals($res2, $service->materialDesignColorFunction($arg2), "The method materialDesignColorFunction() does not return the expected value with name and code");

		$arg9	 = ["name" => "black", "code" => "500", "out" => "hex"];
		$res9	 = "#000000";
		$this->assertEquals($res9, $service->materialDesignColorFunction($arg9), "The method materialDesignColorFunction() does not return the expected value with name, color and style");
	}

}
