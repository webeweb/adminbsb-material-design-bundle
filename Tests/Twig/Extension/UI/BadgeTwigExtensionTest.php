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
    public function testAdminBSBButtonBadgeDangerFunction() {

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
    public function testAdminBSBButtonBadgeDangerFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-danger btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDangerFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-danger btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDangerFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-danger btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDangerFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeDefaultFunction() {

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
    public function testAdminBSBButtonBadgeDefaultFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-default btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDefaultFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-default btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDefaultFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-default btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeDefaultFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeInfoFunction() {

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
    public function testAdminBSBButtonBadgeInfoFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-info btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeInfoFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-info btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeInfoFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-info btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeInfoFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeListFunction() {

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
    public function testAdminBSBButtonBadgeListFunctionWithColor() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-pink"></span></a>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red">content</span></a>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red"></span>label</a>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunctionWithLink() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["link" => "http://domain.tld"];
        $res = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-red"></span></a>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeListFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeListFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeListFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeMaterialDesignFunction() {

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
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithColor() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<button class="btn bg-pink btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn bg-red btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn bg-red btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn bg-red btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgePrimaryFunction() {

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
    public function testAdminBSBButtonBadgePrimaryFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-primary btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgePrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgePrimaryFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-primary btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgePrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgePrimaryFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-primary btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgePrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgePrimaryFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeSuccessFunction() {

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
    public function testAdminBSBButtonBadgeSuccessFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-success btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeSuccessFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-success btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeSuccessFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-success btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeSuccessFunctionWithoutArguments() {

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
    public function testAdminBSBButtonBadgeWarningFunction() {

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
    public function testAdminBSBButtonBadgeWarningFunctionWithContent() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-warning btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeWarningFunctionWithLabel() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["label" => "label"];
        $res = '<button class="btn btn-warning btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeWarningFunctionWithLarge() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = ["large" => true];
        $res = '<button class="btn btn-warning btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonBadgeWarningFunctionWithoutArguments() {

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res, $obj->adminBSBButtonBadgeWarningFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.badge", BadgeTwigExtension::SERVICE_NAME);

        $obj = new BadgeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

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
}
