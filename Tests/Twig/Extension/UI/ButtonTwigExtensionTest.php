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

use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;

/**
 * Button UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonTwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res [0]);
        $this->assertEquals("adminBSBButtonLink", $res [0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public
        function testGetFunctions() {

        $obj = new ButtonTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);
        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBButtonMaterialDesign", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBButtonMaterialDesignFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBButtonPrimary", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBButtonPrimaryFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("adminBSBButtonSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBButtonSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("adminBSBButtonWarning", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBButtonWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public
        function testAdminBSBButtonDangerFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-danger waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonDangerFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonDefaultFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn btn-default waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonDefaultFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonInfoFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn btn-info waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonInfoFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonLinkFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testAdminBSBButtonLinkFilter() {

        $obj = new ButtonTwigExtension();

        $btn = $obj->adminBSBButtonMaterialDesignFunction();

        $res0 = '<a class="btn bg-red waves-effect" href="javascript:void(0);"></a>';
        $this->assertEquals($res0, $obj->adminBSBButtonLinkFilter($btn));

        $res1 = '<a class="btn bg-red waves-effect" href="https://github.com"></a>';
        $this->assertEquals($res1, $obj->adminBSBButtonLinkFilter($btn, "https://github.com"));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonMaterialDesignFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn bg-red waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonMaterialDesignFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<button class="btn bg-red waves-effect" type="button">content</button>';
        $this->assertEquals($res1, $obj->adminBSBButtonMaterialDesignFunction($arg1));

        $arg2 = ["title" => "title"];
        $res2 = '<button class="btn bg-red waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res2, $obj->adminBSBButtonMaterialDesignFunction($arg2));

        $arg3 = ["size" => "lg"];
        $res3 = '<button class="btn bg-red waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res3, $obj->adminBSBButtonMaterialDesignFunction($arg3));

        $arg4 = ["block" => true];
        $res4 = '<button class="btn bg-red waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res4, $obj->adminBSBButtonMaterialDesignFunction($arg4));

        $arg5 = ["disable" => true];
        $res5 = '<button class="btn bg-red waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res5, $obj->adminBSBButtonMaterialDesignFunction($arg5));

        $arg6 = ["icon" => "person"];
        $res6 = '<button class="btn bg-red waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res6, $obj->adminBSBButtonMaterialDesignFunction($arg6));

        $arg7 = ["circle" => true];
        $res7 = '<button class="btn bg-red waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res7, $obj->adminBSBButtonMaterialDesignFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<button class="btn bg-black waves-effect" type="button"></button>';
        $this->assertEquals($res8, $obj->adminBSBButtonMaterialDesignFunction($arg8));

        $arg9 = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person", "color" => "black"];
        $res9 = '<button class="btn bg-black waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res9, $obj->adminBSBButtonMaterialDesignFunction($arg9));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonPrimaryFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn btn-primary waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->
                adminBSBButtonPrimaryFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonSuccessFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn btn-success waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonSuccessFunction($arg0));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBButtonWarningFunction() {

        $obj = new ButtonTwigExtension();

        $arg0 = [];

        $res0 = '<button class="btn btn-warning waves-effect" type="button"></button>';
        $this->assertEquals($res0, $obj->adminBSBButtonWarningFunction($arg0));
    }

}
