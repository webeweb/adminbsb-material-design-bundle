<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Widget;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Widget\CardWidgetTwigExtension;

/**
 * Card widget Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Widget
 * @final
 */
final class CardWidgetTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new CardWidgetTwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(1, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("cardHeader", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "cardHeaderFunction"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");
	}

	/**
	 * Tests the cardHeaderFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testCardHeaderFunction() {

		$obj = new CardWidgetTwigExtension();

		$arg0	 = [];
		$res0	 = '<h2 class="card-header">&nbsp;</h2>';
		$this->assertEquals($res0, $obj->cardHeaderFunction($arg0), "The method cardHeaderFunction() does not return the expecetd value");

		$arg1	 = ["content" => "content"];
		$res1	 = '<h2 class="card-header">content</h2>';
		$this->assertEquals($res1, $obj->cardHeaderFunction($arg1), "The method cardHeaderFunction() does not return the expecetd value with content");

		$arg2	 = ["description" => "description"];
		$res2	 = '<h2 class="card-header">&nbsp;<small>description</small></h2>';
		$this->assertEquals($res2, $obj->cardHeaderFunction($arg2), "The method cardHeaderFunction() does not return the expecetd value with description");

		$arg3	 = ["icon" => "person"];
		$res3	 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>&nbsp;</h2>';
		$this->assertEquals($res3, $obj->cardHeaderFunction($arg3), "The method cardHeaderFunction() does not return the expecetd value with icon");

		$arg9	 = ["content" => "content", "description" => "description", "icon" => "person"];
		$res9	 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>content<small>description</small></h2>';
		$this->assertEquals($res9, $obj->cardHeaderFunction($arg9), "The method cardHeaderFunction() does not return the expecetd value with content, description and icon");
	}

}
