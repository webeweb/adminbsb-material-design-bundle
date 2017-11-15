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

		$this->assertCount(6, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("h1", $res[0]->getName());
		$this->assertEquals([$obj, "h1Function"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
		$this->assertEquals("h2", $res[1]->getName());
		$this->assertEquals([$obj, "h2Function"], $res[1]->getCallable());
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
		$this->assertEquals("h3", $res[2]->getName());
		$this->assertEquals([$obj, "h3Function"], $res[2]->getCallable());
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
		$this->assertEquals("h4", $res[3]->getName());
		$this->assertEquals([$obj, "h4Function"], $res[3]->getCallable());
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
		$this->assertEquals("h5", $res[4]->getName());
		$this->assertEquals([$obj, "h5Function"], $res[4]->getCallable());
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
		$this->assertEquals("h6", $res[5]->getName());
		$this->assertEquals([$obj, "h6Function"], $res[5]->getCallable());
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
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
		$this->assertEquals($res0, $obj->h1Function($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = "<h1>content</h1>";
		$this->assertEquals($res1, $obj->h1Function($arg1));

		$arg2	 = ["class" => "class"];
		$res2	 = '<h1 class="class">&nbsp;</h1>';
		$this->assertEquals($res2, $obj->h1Function($arg2));

		$arg9	 = ["content" => "content", "class" => "class"];
		$res9	 = '<h1 class="class">content</h1>';
		$this->assertEquals($res9, $obj->h1Function($arg9));
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
		$this->assertEquals($res, $obj->h2Function($arg));
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
		$this->assertEquals($res, $obj->h3Function($arg));
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
		$this->assertEquals($res, $obj->h4Function($arg));
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
		$this->assertEquals($res, $obj->h5Function($arg));
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
		$this->assertEquals($res, $obj->h6Function($arg));
	}

}
