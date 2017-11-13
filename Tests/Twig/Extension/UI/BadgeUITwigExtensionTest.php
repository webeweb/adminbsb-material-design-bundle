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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\BadgeUITwigExtension;

/**
 * Badge UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class BadgeUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the buttonBadgeDangerFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgeDangerFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-danger btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeDangerFunction($arg0), "The method buttonBadgeDangerFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonBadgeDefaultFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgeDefaultFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-default btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeDefaultFunction($arg0), "The method buttonBadgeDefaultFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonBadgeInfoFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgeInfoFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-info btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeInfoFunction($arg0), "The method buttonBadgeInfoFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonBadgePrimaryFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgePrimaryFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-primary btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgePrimaryFunction($arg0), "The method buttonBadgePrimaryFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonBadgeSuccessFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgeSuccessFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-success btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeSuccessFunction($arg0), "The method buttonBadgeSuccessFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonBadgeWarningFunction() method.
	 *
	 * @return void
	 */
	public function testButtonBadgeWarningFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-warning btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeWarningFunction($arg0), "The method buttonBadgeWarningFunction() does not return the expected value");
	}

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new BadgeUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(8, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("buttonBadgeDanger", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "buttonBadgeDangerFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("buttonBadgeDefault", $res[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "buttonBadgeDefaultFunction"], $res[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("buttonBadgeInfo", $res[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "buttonBadgeInfoFunction"], $res[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3], "The method getFunctions() does not return the expected object on item 3");
		$this->assertEquals("buttonBadgePrimary", $res[3]->getName(), "The method getName() does not return the expected name on item 3");
		$this->assertEquals([$obj, "buttonBadgePrimaryFunction"], $res[3]->getCallable(), "The method getCallable() does not return the expected callable on item 3");
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 3");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4], "The method getFunctions() does not return the expected object on item 4");
		$this->assertEquals("buttonBadgeSuccess", $res[4]->getName(), "The method getName() does not return the expected name on item 4");
		$this->assertEquals([$obj, "buttonBadgeSuccessFunction"], $res[4]->getCallable(), "The method getCallable() does not return the expected callable on item 4");
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 4");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5], "The method getFunctions() does not return the expected object on item 5");
		$this->assertEquals("buttonBadgeWarning", $res[5]->getName(), "The method getName() does not return the expected name on item 5");
		$this->assertEquals([$obj, "buttonBadgeWarningFunction"], $res[5]->getCallable(), "The method getCallable() does not return the expected callable on item 5");
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 5");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[6], "The method getFunctions() does not return the expected object on item 6");
		$this->assertEquals("listBadge", $res[6]->getName(), "The method getName() does not return the expected name on item 6");
		$this->assertEquals([$obj, "listBadgeFunction"], $res[6]->getCallable(), "The method getCallable() does not return the expected callable on item 6");
		$this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 6");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[7], "The method getFunctions() does not return the expected object on item 7");
		$this->assertEquals("materialDesignButtonBadge", $res[7]->getName(), "The method getName() does not return the expected name on item 7");
		$this->assertEquals([$obj, "materialDesignButtonBadgeFunction"], $res[7]->getCallable(), "The method getCallable() does not return the expected callable on item 7");
		$this->assertEquals(["html"], $res[7]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 7");
	}

	/**
	 * Tests the listBadgeFunction() method.
	 *
	 * @return void
	 */
	public function testListBadgeFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res0, $obj->listBadgeFunction($arg0), "The method listBadgeFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">content</span>&nbsp;</a>';
		$this->assertEquals($res1, $obj->listBadgeFunction($arg1), "The method listBadgeFunction() does not return the expected value with content");

		$arg2	 = ["label" => "label"];
		$res2	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">&nbsp;</span>label</a>';
		$this->assertEquals($res2, $obj->listBadgeFunction($arg2), "The method listBadgeFunction() does not return the expected value with label");

		$arg3	 = ["color" => "black"];
		$res3	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-black">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res3, $obj->listBadgeFunction($arg3), "The method listBadgeFunction() does not return the expected value with large");

		$arg4	 = ["link" => "http://domain.tld"];
		$res4	 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-red">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res4, $obj->listBadgeFunction($arg4), "The method listBadgeFunction() does not return the expected value with link");

		$arg9	 = ["content" => "content", "label" => "label", "color" => "black", "link" => "http://domain.tld"];
		$res9	 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-black">content</span>label</a>';
		$this->assertEquals($res9, $obj->listBadgeFunction($arg9), "The method listBadgeFunction() does not return the expected value with content, label, color and link");
	}

	/**
	 * Tests the materialDesignButtonBadgeFunction() method.
	 *
	 * @return void
	 */
	public function testMaterialDesignButtonBadgeFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn bg-red btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->materialDesignButtonBadgeFunction($arg0), "The method materialDesignButtonBadgeFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<button class="btn bg-red btn-block waves-effect" type="button">content<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res1, $obj->materialDesignButtonBadgeFunction($arg1), "The method materialDesignButtonBadgeFunction() does not return the expected value with content");

		$arg2	 = ["label" => "label"];
		$res2	 = '<button class="btn bg-red btn-block waves-effect" type="button">&nbsp;<span class="badge">label</span></button>';
		$this->assertEquals($res2, $obj->materialDesignButtonBadgeFunction($arg2), "The method materialDesignButtonBadgeFunction() does not return the expected value with label");

		$arg3	 = ["large" => true];
		$res3	 = '<button class="btn bg-red btn-block waves-effect btn-lg" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res3, $obj->materialDesignButtonBadgeFunction($arg3), "The method materialDesignButtonBadgeFunction() does not return the expected value with large");

		$arg4	 = ["color" => "black"];
		$res4	 = '<button class="btn bg-black btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res4, $obj->materialDesignButtonBadgeFunction($arg4), "The method materialDesignButtonBadgeFunction() does not return the expected value with color");

		$arg9	 = ["content" => "content", "label" => "label", "large" => true, "color" => "black"];
		$res9	 = '<button class="btn bg-black btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';
		$this->assertEquals($res9, $obj->materialDesignButtonBadgeFunction($arg9), "The method materialDesignButtonBadgeFunction() does not return the expected value with content, label, large and color");
	}

}
