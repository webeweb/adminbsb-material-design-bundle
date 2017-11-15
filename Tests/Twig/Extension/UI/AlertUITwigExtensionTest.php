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
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new AlertUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(6, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("basicAlertDanger", $res[0]->getName());
		$this->assertEquals([$obj, "basicAlertDangerFunction"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
		$this->assertEquals("basicAlertInfo", $res[1]->getName());
		$this->assertEquals([$obj, "basicAlertInfoFunction"], $res[1]->getCallable());
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
		$this->assertEquals("basicAlertSuccess", $res[2]->getName());
		$this->assertEquals([$obj, "basicAlertSuccessFunction"], $res[2]->getCallable());
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
		$this->assertEquals("basicAlertWarning", $res[3]->getName());
		$this->assertEquals([$obj, "basicAlertWarningFunction"], $res[3]->getCallable());
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
		$this->assertEquals("linkAlert", $res[4]->getName());
		$this->assertEquals([$obj, "linkAlertFunction"], $res[4]->getCallable());
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
		$this->assertEquals("materialDesignAlert", $res[5]->getName());
		$this->assertEquals([$obj, "materialDesignAlertFunction"], $res[5]->getCallable());
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
	}

	/**
	 * Tests the basicAlertDangerFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicAlertDangerFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-danger">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertDangerFunction($arg0));
	}

	/**
	 * Tests the basicAlertInfoFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicAlertInfoFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-info">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertInfoFunction($arg0));
	}

	/**
	 * Tests the basicAlertSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicAlertSuccessFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-success">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertSuccessFunction($arg0));
	}

	/**
	 * Tests the basicAlertWarningFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicAlertWarningFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert alert-warning">&nbsp;</div>';
		$this->assertEquals($res0, $obj->basicAlertWarningFunction($arg0));
	}

	/**
	 * Tests the linkAlertFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testLinkAlertFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res0, $obj->linkAlertFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<div class="alert bg-red">content</div>';
		$this->assertEquals($res1, $obj->linkAlertFunction($arg1));

		$arg2	 = ["dismissible" => true];
		$res2	 = '<div class="alert bg-red alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>&nbsp;</div>';
		$this->assertEquals($res2, $obj->linkAlertFunction($arg2));

		$arg3	 = ["color" => "exception"];
		$res3	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res3, $obj->linkAlertFunction($arg3));

		$arg4	 = ["color" => "black"];
		$res4	 = '<div class="alert bg-black">&nbsp;</div>';
		$this->assertEquals($res4, $obj->linkAlertFunction($arg4));

		$arg9	 = ["content" => "content", "dismissible" => true, "color" => "black"];
		$res9	 = '<div class="alert bg-black alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
		$this->assertEquals($res9, $obj->linkAlertFunction($arg9));
	}

	/**
	 * Tests the materialDesignAlertFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignAlertFunction() {

		$obj = new AlertUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res0, $obj->materialDesignAlertFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<div class="alert bg-red">content</div>';
		$this->assertEquals($res1, $obj->materialDesignAlertFunction($arg1));

		$arg2	 = ["dismissible" => true];
		$res2	 = '<div class="alert bg-red alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>&nbsp;</div>';
		$this->assertEquals($res2, $obj->materialDesignAlertFunction($arg2));

		$arg3	 = ["color" => "exception"];
		$res3	 = '<div class="alert bg-red">&nbsp;</div>';
		$this->assertEquals($res3, $obj->materialDesignAlertFunction($arg3));

		$arg4	 = ["color" => "black"];
		$res4	 = '<div class="alert bg-black">&nbsp;</div>';
		$this->assertEquals($res4, $obj->materialDesignAlertFunction($arg4));

		$arg5	 = ["content" => "content", "dismissible" => true, "color" => "black"];
		$res5	 = '<div class="alert bg-black alert-dismissible"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
		$this->assertEquals($res5, $obj->materialDesignAlertFunction($arg5));
	}

}
