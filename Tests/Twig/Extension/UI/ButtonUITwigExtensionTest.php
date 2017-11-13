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
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ButtonUITwigExtension;

/**
 * Button UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ButtonUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the buttonDangerFunction() method.
	 *
	 * @return void
	 */
	public function testButtonDangerFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-danger waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonDangerFunction($arg0), "The method buttonDangerFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonDefaultFunction() method.
	 *
	 * @return void
	 */
	public function testButtonDefaultFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-default waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonDefaultFunction($arg0), "The method buttonDefaultFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonInfoFunction() method.
	 *
	 * @return void
	 */
	public function testButtonInfoFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-info waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonInfoFunction($arg0), "The method buttonInfoFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonPrimaryFunction() method.
	 *
	 * @return void
	 */
	public function testButtonPrimaryFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-primary waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonPrimaryFunction($arg0), "The method buttonPrimaryFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonSuccessFunction() method.
	 *
	 * @return void
	 */
	public function testButtonSuccessFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-success waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonSuccessFunction($arg0), "The method buttonSuccessFunction() does not return the expected value");
	}

	/**
	 * Tests the buttonSuccessFunction() method.
	 *
	 * @return void
	 */
	public function testButtonWarningFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-warning waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->buttonWarningFunction($arg0), "The method buttonWarningFunction() does not return the expected value");
	}

	/**
	 * Tests the getFilters() method.
	 *
	 * @return void
	 */
	public function testGetFilters() {

		$obj = new ButtonUITwigExtension();

		$res = $obj->getFilters();

		$this->assertCount(1, $res, "The method getFilters() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFilter::class, $res[0], "The method getFilters() does not return the expected object on item 0");
		$this->assertEquals("linkButton", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "linkButtonFilter"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");
	}

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new ButtonUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(7, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("buttonDanger", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "buttonDangerFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("buttonDefault", $res[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "buttonDefaultFunction"], $res[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("buttonInfo", $res[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "buttonInfoFunction"], $res[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3], "The method getFunctions() does not return the expected object on item 3");
		$this->assertEquals("buttonPrimary", $res[3]->getName(), "The method getName() does not return the expected name on item 3");
		$this->assertEquals([$obj, "buttonPrimaryFunction"], $res[3]->getCallable(), "The method getCallable() does not return the expected callable on item 3");
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 3");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4], "The method getFunctions() does not return the expected object on item 4");
		$this->assertEquals("buttonSuccess", $res[4]->getName(), "The method getName() does not return the expected name on item 4");
		$this->assertEquals([$obj, "buttonSuccessFunction"], $res[4]->getCallable(), "The method getCallable() does not return the expected callable on item 4");
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 4");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5], "The method getFunctions() does not return the expected object on item 5");
		$this->assertEquals("buttonWarning", $res[5]->getName(), "The method getName() does not return the expected name on item 5");
		$this->assertEquals([$obj, "buttonWarningFunction"], $res[5]->getCallable(), "The method getCallable() does not return the expected callable on item 5");
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 5");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[6], "The method getFunctions() does not return the expected object on item 6");
		$this->assertEquals("materialDesignButton", $res[6]->getName(), "The method getName() does not return the expected name on item 6");
		$this->assertEquals([$obj, "materialDesignButtonFunction"], $res[6]->getCallable(), "The method getCallable() does not return the expected callable on item 6");
		$this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 6");
	}

	/**
	 * Tests the linkButtonFilter() method.
	 *
	 * @return void
	 */
	public function testLinkButtonFilter() {

		$obj = new ButtonUITwigExtension();

		$btn = $obj->materialDesignButtonFunction();

		$res0 = '<a class="btn bg-red waves-effect" href="javascript: void(0);">&nbsp;</a>';
		$this->assertEquals($res0, $obj->linkButtonFilter($btn), "The method linkButtonFilter() does not return the expected value");

		$res1 = '<a class="btn bg-red waves-effect" href="https://github.com">&nbsp;</a>';
		$this->assertEquals($res1, $obj->linkButtonFilter($btn, "https://github.com"), "The method linkButtonFilter() does not return the expected value");
	}

	/**
	 * Tests the materialDesignButtonFunction() method.
	 *
	 * @return void
	 */
	public function testMaterialDesignButtonFunction() {

		$obj = new ButtonUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn bg-red waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res0, $obj->materialDesignButtonFunction($arg0), "The method materialDesignButtonFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<button class="btn bg-red waves-effect" type="button">content</button>';
		$this->assertEquals($res1, $obj->materialDesignButtonFunction($arg1), "The method materialDesignButtonFunction() does not return the expected value with content");

		$arg2	 = ["title" => "title"];
		$res2	 = '<button class="btn bg-red waves-effect" title="title" type="button" data-toggle="tooltip">&nbsp;</button>';
		$this->assertEquals($res2, $obj->materialDesignButtonFunction($arg2), "The method materialDesignButtonFunction() does not return the expected value with title");

		$arg3	 = ["size" => "lg"];
		$res3	 = '<button class="btn bg-red waves-effect btn-lg" type="button">&nbsp;</button>';
		$this->assertEquals($res3, $obj->materialDesignButtonFunction($arg3), "The method materialDesignButtonFunction() does not return the expected value with size");

		$arg4	 = ["block" => true];
		$res4	 = '<button class="btn bg-red waves-effect btn-block" type="button">&nbsp;</button>';
		$this->assertEquals($res4, $obj->materialDesignButtonFunction($arg4), "The method materialDesignButtonFunction() does not return the expected value with block");

		$arg5	 = ["disable" => true];
		$res5	 = '<button class="btn bg-red waves-effect" type="button" disabled="disabled">&nbsp;</button>';
		$this->assertEquals($res5, $obj->materialDesignButtonFunction($arg5), "The method materialDesignButtonFunction() does not return the expected value with disable");

		$arg6	 = ["icon" => "person"];
		$res6	 = '<button class="btn bg-red waves-effect" type="button"><i class="material-icons">person</i>&nbsp;</button>';
		$this->assertEquals($res6, $obj->materialDesignButtonFunction($arg6), "The method materialDesignButtonFunction() does not return the expected value with icon");

		$arg7	 = ["circle" => true];
		$res7	 = '<button class="btn bg-red waves-effect btn-circle waves-circle waves-float" type="button">&nbsp;</button>';
		$this->assertEquals($res7, $obj->materialDesignButtonFunction($arg7), "The method materialDesignButtonFunction() does not return the expected value with circle");

		$arg8	 = ["color" => "black"];
		$res8	 = '<button class="btn bg-black waves-effect" type="button">&nbsp;</button>';
		$this->assertEquals($res8, $obj->materialDesignButtonFunction($arg8), "The method materialDesignButtonFunction() does not return the expected value with color");

		$arg9	 = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person", "color" => "black"];
		$res9	 = '<button class="btn bg-black waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
		$this->assertEquals($res9, $obj->materialDesignButtonFunction($arg9), "The method materialDesignButtonFunction() does not return the expected value with content, title, size, disable, icon and color");
	}

}
