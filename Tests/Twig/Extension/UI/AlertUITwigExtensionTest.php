<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\AlertUITwigExtension;

/**
 * Alert UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
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
        $this->assertEquals("absbmdBasicAlertDanger", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdBasicAlertDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("absbmdBasicAlertInfo", $res[1]->getName());
        $this->assertEquals([$obj, "absbmdBasicAlertInfoFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("absbmdBasicAlertSuccess", $res[2]->getName());
        $this->assertEquals([$obj, "absbmdBasicAlertSuccessFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("absbmdBasicAlertWarning", $res[3]->getName());
        $this->assertEquals([$obj, "absbmdBasicAlertWarningFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("absbmdLinkAlert", $res[4]->getName());
        $this->assertEquals([$obj, "absbmdLinkAlertFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("absbmdMaterialDesignAlert", $res[5]->getName());
        $this->assertEquals([$obj, "absbmdMaterialDesignAlertFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the absbmdBasicAlertDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdBasicAlertDangerFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert alert-danger" role="alert"></div>';
        $this->assertEquals($res0, $obj->absbmdBasicAlertDangerFunction($arg0));
    }

    /**
     * Tests the absbmdBasicAlertInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdBasicAlertInfoFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert alert-info" role="alert"></div>';
        $this->assertEquals($res0, $obj->absbmdBasicAlertInfoFunction($arg0));
    }

    /**
     * Tests the absbmdBasicAlertSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdBasicAlertSuccessFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert alert-success" role="alert"></div>';
        $this->assertEquals($res0, $obj->absbmdBasicAlertSuccessFunction($arg0));
    }

    /**
     * Tests the absbmdBasicAlertWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdBasicAlertWarningFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert alert-warning" role="alert"></div>';
        $this->assertEquals($res0, $obj->absbmdBasicAlertWarningFunction($arg0));
    }

    /**
     * Tests the linkAlertFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLinkAlertFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<a href="javascript:void(0);"></a>';
        $this->assertEquals($res0, $obj->absbmdLinkAlertFunction($arg0));

        $arg1 = ["href" => "https://github.com/"];
        $res1 = '<a href="https://github.com/"></a>';
        $this->assertEquals($res1, $obj->absbmdLinkAlertFunction($arg1));

        $arg2 = ["content" => "content"];
        $res2 = '<a href="javascript:void(0);">content</a>';
        $this->assertEquals($res2, $obj->absbmdLinkAlertFunction($arg2));

        $arg9 = ["href" => "https://github.com/", "content" => "content"];
        $res9 = '<a href="https://github.com/">content</a>';
        $this->assertEquals($res9, $obj->absbmdLinkAlertFunction($arg9));
    }

    /**
     * Tests the materialDesignAlertFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignAlertFunction() {

        $obj = new AlertUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert bg-red" role="alert"></div>';
        $this->assertEquals($res0, $obj->absbmdMaterialDesignAlertFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<div class="alert bg-red" role="alert">content</div>';
        $this->assertEquals($res1, $obj->absbmdMaterialDesignAlertFunction($arg1));

        $arg2 = ["dismissible" => true];
        $res2 = '<div class="alert bg-red alert-dismissible" role="alert"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
        $this->assertEquals($res2, $obj->absbmdMaterialDesignAlertFunction($arg2));

        $arg3 = ["color" => "exception"];
        $res3 = '<div class="alert bg-red" role="alert"></div>';
        $this->assertEquals($res3, $obj->absbmdMaterialDesignAlertFunction($arg3));

        $arg4 = ["color" => "black"];
        $res4 = '<div class="alert bg-black" role="alert"></div>';
        $this->assertEquals($res4, $obj->absbmdMaterialDesignAlertFunction($arg4));

        $arg5 = ["content" => "content", "dismissible" => true, "color" => "black"];
        $res5 = '<div class="alert bg-black alert-dismissible" role="alert"><button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>content</div>';
        $this->assertEquals($res5, $obj->absbmdMaterialDesignAlertFunction($arg5));
    }

}
