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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\LabelUITwigExtension;

/**
 * Label UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class LabelUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new LabelUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(7, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("labelDanger", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "labelDangerFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("labelDefault", $res[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "labelDefaultFunction"], $res[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("labelInfo", $res[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "labelInfoFunction"], $res[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3], "The method getFunctions() does not return the expected object on item 3");
		$this->assertEquals("labelPrimary", $res[3]->getName(), "The method getName() does not return the expected name on item 3");
		$this->assertEquals([$obj, "labelPrimaryFunction"], $res[3]->getCallable(), "The method getCallable() does not return the expected callable on item 3");
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 3");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4], "The method getFunctions() does not return the expected object on item 4");
		$this->assertEquals("labelSuccess", $res[4]->getName(), "The method getName() does not return the expected name on item 4");
		$this->assertEquals([$obj, "labelSuccessFunction"], $res[4]->getCallable(), "The method getCallable() does not return the expected callable on item 4");
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 4");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5], "The method getFunctions() does not return the expected object on item 5");
		$this->assertEquals("labelWarning", $res[5]->getName(), "The method getName() does not return the expected name on item 5");
		$this->assertEquals([$obj, "labelWarningFunction"], $res[5]->getCallable(), "The method getCallable() does not return the expected callable on item 5");
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 5");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[6], "The method getFunctions() does not return the expected object on item 6");
		$this->assertEquals("materialDesignLabel", $res[6]->getName(), "The method getName() does not return the expected name on item 6");
		$this->assertEquals([$obj, "materialDesignLabelFunction"], $res[6]->getCallable(), "The method getCallable() does not return the expected callable on item 6");
		$this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 6");
	}

	/**
	 * Tests the labelDangerFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelDangerFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-danger">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelDangerFunction($arg0), "The method labelDangerFunction() does not return the expected value");
	}

	/**
	 * Tests the labelDefaultFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelDefaultFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-default">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelDefaultFunction($arg0), "The method labelDefaultFunction() does not return the expected value");
	}

	/**
	 * Tests the labelInfoFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelInfoFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-info">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelInfoFunction($arg0), "The method labelInfoFunction() does not return the expected value");
	}

	/**
	 * Tests the labelPrimaryFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelPrimaryFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-primary">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelPrimaryFunction($arg0), "The method labelPrimaryFunction() does not return the expected value");
	}

	/**
	 * Tests the labelSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelSuccessFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-success">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelSuccessFunction($arg0), "The method labelSuccessFunction() does not return the expected value");
	}

	/**
	 * Tests the labelSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLabelWarningFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-warning">&nbsp;</span>';
		$this->assertEquals($res0, $obj->labelWarningFunction($arg0), "The method labelWarningFunction() does not return the expected value");
	}

	/**
	 * Tests the materialDesignLabelFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignLabelFunction() {

		$obj = new LabelUITwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label bg-red">&nbsp;</span>';
		$this->assertEquals($res0, $obj->materialDesignLabelFunction($arg0), "The method materialDesignLabelFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<span class="label bg-red">content</span>';
		$this->assertEquals($res1, $obj->materialDesignLabelFunction($arg1), "The method materialDesignLabelFunction() does not return the expected value with content");

		$arg7	 = ["color" => "black"];
		$res7	 = '<span class="label bg-black">&nbsp;</span>';
		$this->assertEquals($res7, $obj->materialDesignLabelFunction($arg7), "The method materialDesignLabelFunction() does not return the expected value with color");

		$arg9	 = ["content" => "content", "color" => "black"];
		$res9	 = '<span class="label bg-black">content</span>';
		$this->assertEquals($res9, $obj->materialDesignLabelFunction($arg9), "The method materialDesignLabelFunction() does not return the expected value with content and color");
	}

}
