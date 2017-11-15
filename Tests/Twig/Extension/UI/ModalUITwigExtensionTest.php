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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ModalUITwigExtension;

/**
 * Modal UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ModalUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new ModalUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(1, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("modalHeader", $res[0]->getName());
		$this->assertEquals([$obj, "modalHeaderFunction"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
	}

	/**
	 * Tests the modalHeaderFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testModalHeaderFunction() {

		$obj = new ModalUITwigExtension();

		$arg0	 = [];
		$res0	 = '<h3 class="modal-title">&nbsp;</h3>';
		$this->assertEquals($res0, $obj->modalHeaderFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<h3 class="modal-title">content</h3>';
		$this->assertEquals($res1, $obj->modalHeaderFunction($arg1));

		$arg3	 = ["icon" => "person"];
		$res3	 = '<h3 class="modal-title"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>&nbsp;</h3>';
		$this->assertEquals($res3, $obj->modalHeaderFunction($arg3));

		$arg9	 = ["content" => "content", "icon" => "person"];
		$res9	 = '<h3 class="modal-title"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>content</h3>';
		$this->assertEquals($res9, $obj->modalHeaderFunction($arg9));
	}

}
