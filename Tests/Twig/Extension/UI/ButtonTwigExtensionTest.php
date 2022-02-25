<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use Twig\Node\Node;
use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;

/**
 * Button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests adminBSBButtonDangerFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-danger waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests adminBSBButtonDangerFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests adminBSBButtonDefaultFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-default waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests adminBSBButtonDefaultFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-default waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests adminBSBButtonInfoFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-info waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests adminBSBButtonInfoFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-info waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests adminBSBButtonMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person", "color" => "pink"];
        $res = '<button class="btn bg-pink waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests adminBSBButtonMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn bg-red waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests adminBSBButtonPrimaryFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-primary waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests adminBSBButtonPrimaryFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-primary waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests adminBSBButtonSuccessFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-success waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests adminBSBButtonSuccessFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-success waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests adminBSBButtonWarningFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunction(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disabled" => true, "icon" => "person"];
        $res = '<button class="btn btn-warning waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" data-placement="top" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';

        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests adminBSBButtonSuccessFunction()
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithoutArguments(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning waves-effect" type="button"></button>';

        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFilter::class, $res [0]);
        $this->assertEquals("adminBSBButtonLink", $res [0]->getName());
        $this->assertEquals([$obj, "bootstrapButtonLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFilter::class, $res [1]);
        $this->assertEquals("adminBSBButtonSubmit", $res [1]->getName());
        $this->assertEquals([$obj, "bootstrapButtonSubmitFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBButtonMaterialDesign", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBButtonMaterialDesignFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBButtonPrimary", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBButtonPrimaryFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("adminBSBButtonSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBButtonSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("adminBSBButtonWarning", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBButtonWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.button", ButtonTwigExtension::SERVICE_NAME);

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
