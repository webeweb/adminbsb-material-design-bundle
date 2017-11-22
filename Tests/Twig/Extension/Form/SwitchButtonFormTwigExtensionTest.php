<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Form;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form\SwitchButtonFormTwigExtension;

/**
 * Switch button form Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Form
 * @final
 */
final class SwitchButtonFormTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new SwitchButtonFormTwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(2, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("basicSwitchButton", $res[0]->getName());
		$this->assertEquals([$obj, "basicSwitchButtonFunction"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
		$this->assertEquals("materialDesignSwitchButton", $res[1]->getName());
		$this->assertEquals([$obj, "materialDesignSwitchButtonFunction"], $res[1]->getCallable());
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
	}

	/**
	 * Tests the basicSwitchButtonFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicSwitchButton() {

		$obj = new SwitchButtonFormTwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="switch"><label><input type="checkbox"><span class="lever"></span></label></div>';
		$this->assertEquals($res0, $obj->basicSwitchButtonFunction($arg0));
	}

	/**
	 * Tests the materialDesignSwitchButtonFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignSwitchButtonSwitchButton() {

		$obj = new SwitchButtonFormTwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-red"></span></label></div>';
		$this->assertEquals($res0, $obj->materialDesignSwitchButtonFunction($arg0));

		$arg1	 = ["offLabel" => "offLabel"];
		$res1	 = '<div class="switch"><label>offLabel<input type="checkbox"><span class="lever switch-col-red"></span></label></div>';
		$this->assertEquals($res1, $obj->materialDesignSwitchButtonFunction($arg1));

		$arg2	 = ["name" => "name"];
		$res2	 = '<div class="switch"><label><input name="name" type="checkbox"><span class="lever switch-col-red"></span></label></div>';
		$this->assertEquals($res2, $obj->materialDesignSwitchButtonFunction($arg2));

		$arg3	 = ["checked" => true];
		$res3	 = '<div class="switch"><label><input type="checkbox" checked="checked"><span class="lever switch-col-red"></span></label></div>';
		$this->assertEquals($res3, $obj->materialDesignSwitchButtonFunction($arg3));

		$arg4	 = ["disabled" => true];
		$res4	 = '<div class="switch"><label><input type="checkbox" disabled="disabled"><span class="lever switch-col-red"></span></label></div>';
		$this->assertEquals($res4, $obj->materialDesignSwitchButtonFunction($arg4));

		$arg5	 = ["onLabel" => "onLabel"];
		$res5	 = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-red"></span>onLabel</label></div>';
		$this->assertEquals($res5, $obj->materialDesignSwitchButtonFunction($arg5));

		$arg6	 = ["color" => "black"];
		$res6	 = '<div class="switch"><label><input type="checkbox"><span class="lever switch-col-black"></span></label></div>';
		$this->assertEquals($res6, $obj->materialDesignSwitchButtonFunction($arg6));

		$arg9	 = ["offLabel" => "offLabel", "name" => "name", "checked" => true, "disabled" => true, "onLabel" => "onLabel", "color" => "black"];
		$res9	 = '<div class="switch"><label>offLabel<input name="name" type="checkbox" checked="checked" disabled="disabled"><span class="lever switch-col-black"></span>onLabel</label></div>';
		$this->assertEquals($res9, $obj->materialDesignSwitchButtonFunction($arg9));
	}

}
