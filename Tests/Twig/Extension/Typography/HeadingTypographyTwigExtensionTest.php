<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
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
 * @author webeweb <https://github.com/webeweb/>
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
        $this->assertEquals("absbmdHeading1", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdHeading1Function"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("absbmdHeading2", $res[1]->getName());
        $this->assertEquals([$obj, "absbmdHeading2Function"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("absbmdHeading3", $res[2]->getName());
        $this->assertEquals([$obj, "absbmdHeading3Function"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("absbmdHeading4", $res[3]->getName());
        $this->assertEquals([$obj, "absbmdHeading4Function"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("absbmdHeading5", $res[4]->getName());
        $this->assertEquals([$obj, "absbmdHeading5Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("absbmdHeading6", $res[5]->getName());
        $this->assertEquals([$obj, "absbmdHeading6Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the absbmdHeading1Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdHeading1Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<h1></h1>";
        $this->assertEquals($res0, $obj->absbmdHeading1Function($arg0));

        $arg1 = ["content" => "content"];
        $res1 = "<h1>content</h1>";
        $this->assertEquals($res1, $obj->absbmdHeading1Function($arg1));

        $arg2 = ["description" => "description"];
        $res2 = '<h1><small>description</small></h1>';
        $this->assertEquals($res2, $obj->absbmdHeading1Function($arg2));

        $arg3 = ["class" => "class"];
        $res3 = '<h1 class="class"></h1>';
        $this->assertEquals($res3, $obj->absbmdHeading1Function($arg3));

        $arg9 = ["content" => "content", "description" => "description", "class" => "class"];
        $res9 = '<h1 class="class">content <small>description</small></h1>';
        $this->assertEquals($res9, $obj->absbmdHeading1Function($arg9));
    }

    /**
     * Tests the absbmdHeading2Function() method.
     *
     * @return void
     */
    public function testAbsbmdHeading2Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h2></h2>";
        $this->assertEquals($res, $obj->absbmdHeading2Function($arg));
    }

    /**
     * Tests the absbmdHeading3Function() method.
     *
     * @return void
     */
    public function testAbsbmdHeading3Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h3></h3>";
        $this->assertEquals($res, $obj->absbmdHeading3Function($arg));
    }

    /**
     * Tests the absbmdHeading4Function() method.
     *
     * @return void
     */
    public function testAbsbmdHeading4Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h4></h4>";
        $this->assertEquals($res, $obj->absbmdHeading4Function($arg));
    }

    /**
     * Tests the absbmdHeading5Function() method.
     *
     * @return void
     */
    public function testAbsbmdHeading5Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h5></h5>";
        $this->assertEquals($res, $obj->absbmdHeading5Function($arg));
    }

    /**
     * Tests the absbmdHeading6Function() method.
     *
     * @return void
     */
    public function testAbsbmdHeading6Function() {

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h6></h6>";
        $this->assertEquals($res, $obj->absbmdHeading6Function($arg));
    }

}
