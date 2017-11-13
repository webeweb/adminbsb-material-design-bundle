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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\IconUITwigExtension;

/**
 * Icon UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class IconUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new IconUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(1, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("materialDesignIcon", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "materialDesignIconFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");
	}

	/**
	 * Tests the materialDesignIconFunction() method.
	 */
	public function testMaterialDesignIconFunction() {

		$service = new IconUITwigExtension();

		$arg0	 = [];
		$res0	 = '<i class="material-icons col-red">home</i>';
		$this->assertEquals($res0, $service->materialDesignIconFunction($arg0), "The mesthod materialDesignIconFunction() does not return the expected value");

		$arg1	 = ["name" => "person"];
		$res1	 = '<i class="material-icons col-red">person</i>';
		$this->assertEquals($res1, $service->materialDesignIconFunction($arg1), "The method materialDesignIconFunction() does not return the expected value with name");

		$arg2	 = ["color" => "black"];
		$res2	 = '<i class="material-icons col-black">home</i>';
		$this->assertEquals($res2, $service->materialDesignIconFunction($arg2), "The method materialDesignIconFunction() does not return the expected value with color");

		$arg3	 = ["style" => "margin: 4px;"];
		$res3	 = '<i class="material-icons col-red" style="margin: 4px;">home</i>';
		$this->assertEquals($res3, $service->materialDesignIconFunction($arg3), "The method materialDesignIconFunction() does not return the expected value with style");

		$arg4	 = ["name" => "person", "color" => "black", "style" => "margin: 4px;"];
		$res4	 = '<i class="material-icons col-black" style="margin: 4px;">person</i>';
		$this->assertEquals($res4, $service->materialDesignIconFunction($arg4), "The method materialDesignIconFunction() does not return the expected value with name, color and style");
	}

}
