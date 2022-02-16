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

use Twig\Node\Node;
use Twig\TwigFunction;
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
     * Tests adminBSBBoldFunction()
     *
     * @return void
     */
    public function testAdminBSBBoldFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-bold">content</span>';

        $this->assertEquals($res, $obj->adminBSBBoldFunction($arg));
    }

    /**
     * Tests adminBSBBoldFunction()
     *
     * @return void
     */
    public function testAdminBSBBoldFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-bold"></span>';

        $this->assertEquals($res, $obj->adminBSBBoldFunction($arg));
    }

    /**
     * Tests adminBSBItalicFunction()
     *
     * @return void
     */
    public function testAdminBSBItalicFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-italic">content</span>';

        $this->assertEquals($res, $obj->adminBSBItalicFunction($arg));
    }

    /**
     * Tests adminBSBItalicFunction()
     *
     * @return void
     */
    public function testAdminBSBItalicFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-italic"></span>';

        $this->assertEquals($res, $obj->adminBSBItalicFunction($arg));
    }

    /**
     * Tests adminBSBLineThroughFunction()
     *
     * @return void
     */
    public function testAdminBSBLineThroughFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-line-through">content</span>';

        $this->assertEquals($res, $obj->adminBSBLineThroughFunction($arg));
    }

    /**
     * Tests adminBSBLineThroughFunction()
     *
     * @return void
     */
    public function testAdminBSBLineThroughFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-line-through"></span>';

        $this->assertEquals($res, $obj->adminBSBLineThroughFunction($arg));
    }

    /**
     * Tests adminBSBOverlineFunction()
     *
     * @return void
     */
    public function testAdminBSBOverlineFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-overline">content</span>';

        $this->assertEquals($res, $obj->adminBSBOverlineFunction($arg));
    }

    /**
     * Tests adminBSBOverlineFunction()
     *
     * @return void
     */
    public function testAdminBSBOverlineFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-overline"></span>';

        $this->assertEquals($res, $obj->adminBSBOverlineFunction($arg));
    }

    /**
     * Tests adminBSBUnderlineFunction()
     *
     * @return void
     */
    public function testAdminBSBUnderlineFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="font-underline">content</span>';

        $this->assertEquals($res, $obj->adminBSBUnderlineFunction($arg));
    }

    /**
     * Tests adminBSBUnderlineFunction()
     *
     * @return void
     */
    public function testAdminBSBUnderlineFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="font-underline"></span>';

        $this->assertEquals($res, $obj->adminBSBUnderlineFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);
        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(15, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBBold", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBBoldFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBDeleted", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBHeading1", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBHeading2", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBHeading3", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("adminBSBHeading4", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("adminBSBHeading5", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("adminBSBHeading6", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("adminBSBInserted", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("adminBSBItalic", $res[9]->getName());
        $this->assertEquals([$obj, "adminBSBItalicFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("adminBSBLineThrough", $res[10]->getName());
        $this->assertEquals([$obj, "adminBSBLineThroughFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("adminBSBMarked", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("adminBSBOverline", $res[12]->getName());
        $this->assertEquals([$obj, "adminBSBOverlineFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("adminBSBSmall", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[14]);
        $this->assertEquals("adminBSBUnderline", $res[14]->getName());
        $this->assertEquals([$obj, "adminBSBUnderlineFunction"], $res[14]->getCallable());
        $this->assertEquals(["html"], $res[14]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.typography", TypographyTwigExtension::SERVICE_NAME);

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
