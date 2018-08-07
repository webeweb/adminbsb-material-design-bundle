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
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;

/**
 * Icon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class IconTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new IconTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBIconBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBIconBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBIconMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBIconMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBBasicFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBIconBasicFunction() {

        $service = new IconTwigExtension();

        $arg0 = [];
        $res0 = '<i class="material-icons">home</i>';
        $this->assertEquals($res0, $service->adminBSBIconBasicFunction($arg0));

        $arg1 = ["name" => "person"];
        $res1 = '<i class="material-icons">person</i>';
        $this->assertEquals($res1, $service->adminBSBIconBasicFunction($arg1));

        $arg2 = ["style" => "margin: 4px;"];
        $res2 = '<i class="material-icons" style="margin: 4px;">home</i>';
        $this->assertEquals($res2, $service->adminBSBIconBasicFunction($arg2));

        $arg9 = ["name" => "person", "style" => "margin: 4px;"];
        $res9 = '<i class="material-icons" style="margin: 4px;">person</i>';
        $this->assertEquals($res9, $service->adminBSBIconBasicFunction($arg9));
    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBIconMaterialDesignFunction() {

        $service = new IconTwigExtension();

        $arg0 = [];
        $res0 = '<i class="material-icons col-red">home</i>';
        $this->assertEquals($res0, $service->adminBSBIconMaterialDesignFunction($arg0));

        $arg1 = ["name" => "person"];
        $res1 = '<i class="material-icons col-red">person</i>';
        $this->assertEquals($res1, $service->adminBSBIconMaterialDesignFunction($arg1));

        $arg2 = ["style" => "margin: 4px;"];
        $res2 = '<i class="material-icons col-red" style="margin: 4px;">home</i>';
        $this->assertEquals($res2, $service->adminBSBIconMaterialDesignFunction($arg2));

        $arg3 = ["color" => "black"];
        $res3 = '<i class="material-icons col-black">home</i>';
        $this->assertEquals($res3, $service->adminBSBIconMaterialDesignFunction($arg3));

        $arg9 = ["name" => "person", "color" => "black", "style" => "margin: 4px;"];
        $res9 = '<i class="material-icons col-black" style="margin: 4px;">person</i>';
        $this->assertEquals($res9, $service->adminBSBIconMaterialDesignFunction($arg9));
    }

}
