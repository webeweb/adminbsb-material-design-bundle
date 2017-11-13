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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\AlertUITwigExtension;

/**
 * Alert UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class AlertUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the basicAlertDangerFunction() method.
	 *
	 * @return void
	 */
	public function testBasicAlertDangerFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-danger">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertDangerFunction($arg0), "The method basicAlertDangerFunction() does not return the expected value");
	}

	/**
	 * Tests the basicAlertInfoFunction() method.
	 *
	 * @return void
	 */
	public function testBasicAlertInfoFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-info">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertInfoFunction($arg0), "The method basicAlertInfoFunction() does not return the expected value");
	}

	/**
	 * Tests the basicAlertSuccessFunction() method.
	 *
	 * @return void
	 */
	public function testBasicAlertSuccessFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-success">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertSuccessFunction($arg0), "The method basicAlertSuccessFunction() does not return the expected value");
	}

	/**
	 * Tests the basicAlertWarningFunction() method.
	 *
	 * @return void
	 */
	public function testBasicAlertWarningFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-warning">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertWarningFunction($arg0), "The method basicAlertWarningFunction() does not return the expected value");
	}

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new AlertUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(6, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("basicAlertDanger", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "basicAlertDangerFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("basicAlertInfo", $res[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "basicAlertInfoFunction"], $res[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("basicAlertSuccess", $res[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "basicAlertSuccessFunction"], $res[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3], "The method getFunctions() does not return the expected object on item 3");
		$this->assertEquals("basicAlertWarning", $res[3]->getName(), "The method getName() does not return the expected name on item 3");
		$this->assertEquals([$obj, "basicAlertWarningFunction"], $res[3]->getCallable(), "The method getCallable() does not return the expected callable on item 3");
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 3");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4], "The method getFunctions() does not return the expected object on item 4");
		$this->assertEquals("linkAlert", $res[4]->getName(), "The method getName() does not return the expected name on item 4");
		$this->assertEquals([$obj, "linkAlertFunction"], $res[4]->getCallable(), "The method getCallable() does not return the expected callable on item 4");
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 4");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5], "The method getFunctions() does not return the expected object on item 5");
		$this->assertEquals("materialDesignAlert", $res[5]->getName(), "The method getName() does not return the expected name on item 5");
		$this->assertEquals([$obj, "materialDesignAlertFunction"], $res[5]->getCallable(), "The method getCallable() does not return the expected callable on item 5");
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 5");
	}

	/**
	 * Tests the linkAlertFunction() method.
	 *
	 * @return void
	 */
	public function testLinkAlertFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res0, $obj->linkAlertFunction($arg0), "The method linkAlertFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<div class="alert bg-red">content</div>';
		$this->assertEquals($res1, $obj->linkAlertFunction($arg1), "The method linkAlertFunction() does not return the expected value with content");

		$arg2	 = ["dismissible" => true];
		$res2	 = '<div class="alert bg-red alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>&nbsp;</div>';
		$this->assertEquals($res2, $obj->linkAlertFunction($arg2), "The method linkAlertFunction() does not return the expected value with dissmisible");

		$arg3	 = ["color" => "exception"];
		$res3	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res3, $obj->linkAlertFunction($arg3), "The method linkAlertFunction() does not return the expected value with color");

		$arg4	 = ["color" => "black"];
		$res4	 = '<div class="alert bg-black">&nbsp;</div>';
		$this->assertEquals($res4, $obj->linkAlertFunction($arg4), "The method linkAlertFunction() does not return the expected value with color");

		$arg9	 = ["content" => "content", "dismissible" => true, "color" => "black"];
		$res9	 = '<div class="alert bg-black alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
		$this->assertEquals($res9, $obj->linkAlertFunction($arg9), "The method linkAlertFunction() does not return the expected value with content, dissmisible and color");
	}

	/**
	 * Tests the materialDesignAlertFunction() method.
	 *
	 * @return void
	 */
	public function testMaterialDesignAlertFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res0, $obj->materialDesignAlertFunction($arg0), "The method materialDesignAlertFunction() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<div class="alert bg-red">content</div>';
		$this->assertEquals($res1, $obj->materialDesignAlertFunction($arg1), "The method materialDesignAlertFunction() does not return the expected value with content");

		$arg2	 = ["dismissible" => true];
		$res2	 = '<div class="alert bg-red alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>&nbsp;</div>';
		$this->assertEquals($res2, $obj->materialDesignAlertFunction($arg2), "The method materialDesignAlertFunction() does not return the expected value with dissmisible");

		$arg3	 = ["color" => "exception"];
		$res3	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res3, $obj->materialDesignAlertFunction($arg3), "The method materialDesignAlertFunction() does not return the expected value with color");

		$arg4	 = ["color" => "black"];
		$res4	 = '<div class="alert bg-black">&nbsp;</div>';
		$this->assertEquals($res4, $obj->materialDesignAlertFunction($arg4), "The method materialDesignAlertFunction() does not return the expected value with color");

		$arg5	 = ["content" => "content", "dismissible" => true, "color" => "black"];
		$res5	 = '<div class="alert bg-black alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
		$this->assertEquals($res5, $obj->materialDesignAlertFunction($arg5), "The method materialDesignAlertFunction() does not return the expected value with content, dissmisible and color");
	}

}
