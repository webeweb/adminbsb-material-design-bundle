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

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\AlertUITwigExtension;

/**
 * Alert UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class AlertUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new AlertUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(6, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBBasicAlertDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBasicAlertDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBBasicAlertInfo", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBasicAlertInfoFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBBasicAlertSuccess", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapBasicAlertSuccessFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBBasicAlertWarning", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapBasicAlertWarningFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBLinkAlert", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapLinkAlertFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("adminBSBMaterialDesignAlert", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignAlertFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the AdminBSBaterialDesignAlertFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignAlertFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert bg-red" role="alert"></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignAlertFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<div class="alert bg-red" role="alert">content</div>';
        $this->assertEquals($res1, $obj->adminBSBMaterialDesignAlertFunction($arg1));

        $arg2 = ["dismissible" => true];
        $res2 = '<div class="alert bg-red alert-dismissible" role="alert"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->assertEquals($res2, $obj->adminBSBMaterialDesignAlertFunction($arg2));

        $arg3 = ["color" => "exception"];
        $res3 = '<div class="alert bg-red" role="alert"></div>';
        $this->assertEquals($res3, $obj->adminBSBMaterialDesignAlertFunction($arg3));

        $arg4 = ["color" => "black"];
        $res4 = '<div class="alert bg-black" role="alert"></div>';
        $this->assertEquals($res4, $obj->adminBSBMaterialDesignAlertFunction($arg4));

        $arg5 = ["content" => "content", "dismissible" => true, "color" => "black"];
        $res5 = '<div class="alert bg-black alert-dismissible" role="alert"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
        $this->assertEquals($res5, $obj->adminBSBMaterialDesignAlertFunction($arg5));
    }

}
