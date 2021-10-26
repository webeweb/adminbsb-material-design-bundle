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
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeTwigExtension;

/**
 * Badge Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class BadgeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDangerFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-danger btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDangerFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDefaultFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-default btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDefaultFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-default btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeInfoFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-info btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeInfoFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-info btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "color" => "pink", "link" => "http://domain.tld"];
        $res = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-pink">content</span>label</a>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red"></span></a>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true, "color" => "pink"];
        $res = '<button class="btn bg-pink btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn bg-red btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgePrimaryFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-primary btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgePrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgePrimaryFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-primary btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgePrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeSuccessFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-success btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeSuccessFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-success btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeWarningFunction(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "label" => "label", "large" => true];
        $res = '<button class="btn btn-warning btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeWarningFunctionWithoutArguments(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning btn-block waves-effect" type="button"><span class="badge"></span></button>';

        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(8, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBButtonBadgeDanger", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBButtonBadgeDefault", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBButtonBadgeInfo", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBButtonBadgeList", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeListFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBButtonBadgeMaterialDesign", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeMaterialDesignFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("adminBSBButtonBadgePrimary", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgePrimaryFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("adminBSBButtonBadgeSuccess", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeSuccessFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("adminBSBButtonBadgeWarning", $res[7]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeWarningFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.badge", BadgeTwigExtension::SERVICE_NAME);

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
