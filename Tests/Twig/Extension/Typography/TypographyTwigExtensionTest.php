<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;

/**
 * Typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class TypographyTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new TypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBBold", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBBoldFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBItalic", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBItalicFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBOverline", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBOverlineFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBLineThrough", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBLineThroughFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBUnderline", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBUnderlineFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBBoldFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBBoldFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-bold"></span>';
        $this->assertEquals($res0, $obj->adminBSBBoldFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-bold">content</span>';
        $this->assertEquals($res9, $obj->adminBSBBoldFunction($arg9));
    }

    /**
     * Tests the adminBSBItalicFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBItalicFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-italic"></span>';
        $this->assertEquals($res0, $obj->adminBSBItalicFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-italic">content</span>';
        $this->assertEquals($res9, $obj->adminBSBItalicFunction($arg9));
    }

    /**
     * Tests the adminBSBOverlineFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBOverlineFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-overline"></span>';
        $this->assertEquals($res0, $obj->adminBSBOverlineFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-overline">content</span>';
        $this->assertEquals($res9, $obj->adminBSBOverlineFunction($arg9));
    }

    /**
     * Tests the adminBSBLineThroughFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBLineThroughFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-line-through"></span>';
        $this->assertEquals($res0, $obj->adminBSBLineThroughFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-line-through">content</span>';
        $this->assertEquals($res9, $obj->adminBSBLineThroughFunction($arg9));
    }

    /**
     * Tests the adminBSBUnderlineFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBUnderlineFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-underline"></span>';
        $this->assertEquals($res0, $obj->adminBSBUnderlineFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-underline">content</span>';
        $this->assertEquals($res9, $obj->adminBSBUnderlineFunction($arg9));
    }

}
