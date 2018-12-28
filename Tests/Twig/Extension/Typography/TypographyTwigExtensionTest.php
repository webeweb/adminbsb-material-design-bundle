<?php

/*
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
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;

/**
 * Typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography
 */
class TypographyTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBBoldFunction() method.
     *
     * @return void
     */
    public function testAdminBSBBoldFunction() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-bold">content</span>';
        $this->assertEquals($res, $obj->adminBSBBoldFunction($arg));
    }

    /**
     * Tests the adminBSBBoldFunction() method.
     *
     * @return void
     */
    public function testAdminBSBBoldFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-bold"></span>';
        $this->assertEquals($res, $obj->adminBSBBoldFunction($arg));
    }

    /**
     * Tests the adminBSBItalicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBItalicFunction() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-italic">content</span>';
        $this->assertEquals($res, $obj->adminBSBItalicFunction($arg));
    }

    /**
     * Tests the adminBSBItalicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBItalicFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-italic"></span>';
        $this->assertEquals($res, $obj->adminBSBItalicFunction($arg));
    }

    /**
     * Tests the adminBSBLineThroughFunction() method.
     *
     * @return void
     */
    public function testAdminBSBLineThroughFunction() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-line-through">content</span>';
        $this->assertEquals($res, $obj->adminBSBLineThroughFunction($arg));
    }

    /**
     * Tests the adminBSBLineThroughFunction() method.
     *
     * @return void
     */
    public function testAdminBSBLineThroughFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-line-through"></span>';
        $this->assertEquals($res, $obj->adminBSBLineThroughFunction($arg));
    }

    /**
     * Tests the adminBSBOverlineFunction() method.
     *
     * @return void
     */
    public function testAdminBSBOverlineFunction() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-overline">content</span>';
        $this->assertEquals($res, $obj->adminBSBOverlineFunction($arg));
    }

    /**
     * Tests the adminBSBOverlineFunction() method.
     *
     * @return void
     */
    public function testAdminBSBOverlineFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-overline"></span>';
        $this->assertEquals($res, $obj->adminBSBOverlineFunction($arg));
    }

    /**
     * Tests the adminBSBUnderlineFunction() method.
     *
     * @return void
     */
    public function testAdminBSBUnderlineFunction() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-underline">content</span>';
        $this->assertEquals($res, $obj->adminBSBUnderlineFunction($arg));
    }

    /**
     * Tests the adminBSBUnderlineFunction() method.
     *
     * @return void
     */
    public function testAdminBSBUnderlineFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-underline"></span>';
        $this->assertEquals($res, $obj->adminBSBUnderlineFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.typography", TypographyTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

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

}
