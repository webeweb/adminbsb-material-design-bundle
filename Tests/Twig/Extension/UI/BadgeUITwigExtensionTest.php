<?php

/**
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
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new BadgeUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(8, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("buttonBadgeDanger", $res[0]->getName());
		$this->assertEquals([$obj, "buttonBadgeDangerFunction"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
		$this->assertEquals("buttonBadgeDefault", $res[1]->getName());
		$this->assertEquals([$obj, "buttonBadgeDefaultFunction"], $res[1]->getCallable());
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
		$this->assertEquals("buttonBadgeInfo", $res[2]->getName());
		$this->assertEquals([$obj, "buttonBadgeInfoFunction"], $res[2]->getCallable());
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
		$this->assertEquals("buttonBadgePrimary", $res[3]->getName());
		$this->assertEquals([$obj, "buttonBadgePrimaryFunction"], $res[3]->getCallable());
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
		$this->assertEquals("buttonBadgeSuccess", $res[4]->getName());
		$this->assertEquals([$obj, "buttonBadgeSuccessFunction"], $res[4]->getCallable());
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
		$this->assertEquals("buttonBadgeWarning", $res[5]->getName());
		$this->assertEquals([$obj, "buttonBadgeWarningFunction"], $res[5]->getCallable());
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
		$this->assertEquals("listBadge", $res[6]->getName());
		$this->assertEquals([$obj, "listBadgeFunction"], $res[6]->getCallable());
		$this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[7]);
		$this->assertEquals("materialDesignButtonBadge", $res[7]->getName());
		$this->assertEquals([$obj, "materialDesignButtonBadgeFunction"], $res[7]->getCallable());
		$this->assertEquals(["html"], $res[7]->getSafe(new Twig_Node()));
	}

	/**
	 * Tests the buttonBadgeDangerFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgeDangerFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-danger btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeDangerFunction($arg0));
	}

	/**
	 * Tests the buttonBadgeDefaultFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgeDefaultFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-default btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeDefaultFunction($arg0));
	}

	/**
	 * Tests the buttonBadgeInfoFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgeInfoFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-info btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeInfoFunction($arg0));
	}

	/**
	 * Tests the buttonBadgePrimaryFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgePrimaryFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-primary btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgePrimaryFunction($arg0));
	}

	/**
	 * Tests the buttonBadgeSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgeSuccessFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-success btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeSuccessFunction($arg0));
	}

	/**
	 * Tests the buttonBadgeWarningFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testButtonBadgeWarningFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn btn-warning btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->buttonBadgeWarningFunction($arg0));
	}

	/**
	 * Tests the listBadgeFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testListBadgeFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res0, $obj->listBadgeFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">content</span>&nbsp;</a>';
		$this->assertEquals($res1, $obj->listBadgeFunction($arg1));

		$arg2	 = ["label" => "label"];
		$res2	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-red">&nbsp;</span>label</a>';
		$this->assertEquals($res2, $obj->listBadgeFunction($arg2));

		$arg3	 = ["color" => "black"];
		$res3	 = '<a class="list-group-item" href="javascript: void(0);"><span class="badge bg-black">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res3, $obj->listBadgeFunction($arg3));

		$arg4	 = ["link" => "http://domain.tld"];
		$res4	 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-red">&nbsp;</span>&nbsp;</a>';
		$this->assertEquals($res4, $obj->listBadgeFunction($arg4));

		$arg9	 = ["content" => "content", "label" => "label", "color" => "black", "link" => "http://domain.tld"];
		$res9	 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-black">content</span>label</a>';
		$this->assertEquals($res9, $obj->listBadgeFunction($arg9));
	}

	/**
	 * Tests the materialDesignButtonBadgeFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignButtonBadgeFunction() {

		$obj = new BadgeUITwigExtension();

		$arg0	 = [];
		$res0	 = '<button class="btn bg-red btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res0, $obj->materialDesignButtonBadgeFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<button class="btn bg-red btn-block waves-effect" type="button">content<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res1, $obj->materialDesignButtonBadgeFunction($arg1));

		$arg2	 = ["label" => "label"];
		$res2	 = '<button class="btn bg-red btn-block waves-effect" type="button">&nbsp;<span class="badge">label</span></button>';
		$this->assertEquals($res2, $obj->materialDesignButtonBadgeFunction($arg2));

		$arg3	 = ["large" => true];
		$res3	 = '<button class="btn bg-red btn-block waves-effect btn-lg" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res3, $obj->materialDesignButtonBadgeFunction($arg3));

		$arg4	 = ["color" => "black"];
		$res4	 = '<button class="btn bg-black btn-block waves-effect" type="button">&nbsp;<span class="badge">&nbsp;</span></button>';
		$this->assertEquals($res4, $obj->materialDesignButtonBadgeFunction($arg4));

		$arg9	 = ["content" => "content", "label" => "label", "large" => true, "color" => "black"];
		$res9	 = '<button class="btn bg-black btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';
		$this->assertEquals($res9, $obj->materialDesignButtonBadgeFunction($arg9));
	}

}
