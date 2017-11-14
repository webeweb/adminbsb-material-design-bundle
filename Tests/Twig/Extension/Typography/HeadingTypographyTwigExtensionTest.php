<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Typography;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;

/**
 * Heading typography Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class HeadingTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new HeadingTypographyTwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(6, $res, "The method getFunctions() does not return the expected count");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0], "The method getFunctions() does not return the expected object on item 0");
		$this->assertEquals("h1", $res[0]->getName(), "The method getName() does not return the expected name on item 0");
		$this->assertEquals([$obj, "h1Function"], $res[0]->getCallable(), "The method getCallable() does not return the expected callable on item 0");
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 0");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1], "The method getFunctions() does not return the expected object on item 1");
		$this->assertEquals("h2", $res[1]->getName(), "The method getName() does not return the expected name on item 1");
		$this->assertEquals([$obj, "h2Function"], $res[1]->getCallable(), "The method getCallable() does not return the expected callable on item 1");
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 1");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2], "The method getFunctions() does not return the expected object on item 2");
		$this->assertEquals("h3", $res[2]->getName(), "The method getName() does not return the expected name on item 2");
		$this->assertEquals([$obj, "h3Function"], $res[2]->getCallable(), "The method getCallable() does not return the expected callable on item 2");
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 2");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3], "The method getFunctions() does not return the expected object on item 3");
		$this->assertEquals("h4", $res[3]->getName(), "The method getName() does not return the expected name on item 3");
		$this->assertEquals([$obj, "h4Function"], $res[3]->getCallable(), "The method getCallable() does not return the expected callable on item 3");
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 3");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4], "The method getFunctions() does not return the expected object on item 4");
		$this->assertEquals("h5", $res[4]->getName(), "The method getName() does not return the expected name on item 4");
		$this->assertEquals([$obj, "h5Function"], $res[4]->getCallable(), "The method getCallable() does not return the expected callable on item 4");
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 4");

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5], "The method getFunctions() does not return the expected object on item 5");
		$this->assertEquals("h6", $res[5]->getName(), "The method getName() does not return the expected name on item 5");
		$this->assertEquals([$obj, "h6Function"], $res[5]->getCallable(), "The method getCallable() does not return the expected callable on item 5");
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()), "The method getSafe() does not return the expected safe on item 5");
	}

	/**
	 * Tests the h1Function() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testH1Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg0	 = [];
		$res0	 = "<h1>&nbsp;</h1>";
		$this->assertEquals($res0, $obj->h1Function($arg0), "The method h1Function() does not return the expected value");

		$arg1	 = ["content" => "content"];
		$res1	 = "<h1>content</h1>";
		$this->assertEquals($res1, $obj->h1Function($arg1), "The method h1Function() does not return the expected value with content");

		$arg2	 = ["class" => "class"];
		$res2	 = '<h1 class="class">&nbsp;</h1>';
		$this->assertEquals($res2, $obj->h1Function($arg2), "The method h1Function() does not return the expected value with class");

		$arg9	 = ["content" => "content", "class" => "class"];
		$res9	 = '<h1 class="class">content</h1>';
		$this->assertEquals($res9, $obj->h1Function($arg9), "The method h1Function() does not return the expected value with content and class");
	}

	/**
	 * Tests the h2Function() method.
	 *
	 * @return void
	 */
	public function testH2Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg = [];
		$res = "<h2>&nbsp;</h2>";
		$this->assertEquals($res, $obj->h2Function($arg), "The method h2Function() does not return the expected value");
	}

	/**
	 * Tests the h3Function() method.
	 *
	 * @return void
	 */
	public function testH3Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg = [];
		$res = "<h3>&nbsp;</h3>";
		$this->assertEquals($res, $obj->h3Function($arg), "The method h3Function() does not return the expected value");
	}

	/**
	 * Tests the h4Function() method.
	 *
	 * @return void
	 */
	public function testH4Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg = [];
		$res = "<h4>&nbsp;</h4>";
		$this->assertEquals($res, $obj->h4Function($arg), "The method h4Function() does not return the expected value");
	}

	/**
	 * Tests the h5Function() method.
	 *
	 * @return void
	 */
	public function testH5Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg = [];
		$res = "<h5>&nbsp;</h5>";
		$this->assertEquals($res, $obj->h5Function($arg), "The method h5Function() does not return the expected value");
	}

	/**
	 * Tests the h6Function() method.
	 *
	 * @return void
	 */
	public function testH6Function() {

		$obj = new HeadingTypographyTwigExtension();

		$arg = [];
		$res = "<h6>&nbsp;</h6>";
		$this->assertEquals($res, $obj->h6Function($arg), "The method h6Function() does not return the expected value");
	}

}
