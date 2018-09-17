<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeTwigExtension;

/**
 * Badge UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class BadgeTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new BadgeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(8, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBButtonBadgeDanger", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBButtonBadgeDefault", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBButtonBadgeInfo", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBButtonBadgeMaterialDesign", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeMaterialDesignFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBButtonBadgePrimary", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgePrimaryFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("adminBSBButtonBadgeSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("adminBSBButtonBadgeWarning", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBButtonBadgeWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[7]);
        $this->assertEquals("adminBSBListBadge", $res[7]->getName());
        $this->assertEquals([$obj, "adminBSBListBadgeFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBButtonBadgeDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeDangerFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-danger btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeDangerFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonBadgeDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeDefaultFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-default btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeDefaultFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonBadgeInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeInfoFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-info btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeInfoFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonBadgeMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeMaterialDesignFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn bg-red btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<button class="btn bg-red btn-block waves-effect" type="button">content<span class="badge"></span></button>';
        $this->assertEquals($res1, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg1));

        $arg2 = ["label" => "label"];
        $res2 = '<button class="btn bg-red btn-block waves-effect" type="button"><span class="badge">label</span></button>';
        $this->assertEquals($res2, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg2));

        $arg3 = ["large" => true];
        $res3 = '<button class="btn bg-red btn-block waves-effect btn-lg" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res3, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg3));

        $arg4 = ["color" => "black"];
        $res4 = '<button class="btn bg-black btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res4, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg4));

        $arg9 = ["content" => "content", "label" => "label", "large" => true, "color" => "black"];
        $res9 = '<button class="btn bg-black btn-block waves-effect btn-lg" type="button">content<span class="badge">label</span></button>';
        $this->assertEquals($res9, $obj->adminBSBButtonBadgeMaterialDesignFunction($arg9));
    }

    /**
     * Tests the adminBSBButtonBadgePrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgePrimaryFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-primary btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgePrimaryFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonBadgeSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeSuccessFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-success btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeSuccessFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonBadgeWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonBadgeWarningFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-warning btn-block waves-effect" type="button"><span class="badge"></span></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonBadgeWarningFunction($arg0));
    }

    /**
     * Tests the adminBSBListBadgeFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBListBadgeFunction() {

        $obj = new BadgeTwigExtension();

        $arg0 = [];
        $res0 = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red"></span></a>';
        $this->assertEquals($res0, $obj->adminBSBListBadgeFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red">content</span></a>';
        $this->assertEquals($res1, $obj->adminBSBListBadgeFunction($arg1));

        $arg2 = ["label" => "label"];
        $res2 = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-red"></span>label</a>';
        $this->assertEquals($res2, $obj->adminBSBListBadgeFunction($arg2));

        $arg3 = ["color" => "black"];
        $res3 = '<a class="list-group-item" href="javascript:void(0);"><span class="badge bg-black"></span></a>';
        $this->assertEquals($res3, $obj->adminBSBListBadgeFunction($arg3));

        $arg4 = ["link" => "http://domain.tld"];
        $res4 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-red"></span></a>';
        $this->assertEquals($res4, $obj->adminBSBListBadgeFunction($arg4));

        $arg9 = ["content" => "content", "label" => "label", "color" => "black", "link" => "http://domain.tld"];
        $res9 = '<a class="list-group-item" href="http://domain.tld"><span class="badge bg-black">content</span>label</a>';
        $this->assertEquals($res9, $obj->adminBSBListBadgeFunction($arg9));
    }

}
