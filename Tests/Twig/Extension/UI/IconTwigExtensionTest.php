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
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;

/**
 * Icon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class IconTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunction() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person", "style" => "margin: 4px;"];
        $res = '<i class="material-icons" style="margin: 4px;">person</i>';
        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));
    }

    /**
     * Tests the adminBSBBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunctionWithName() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person"];
        $res = '<i class="material-icons">person</i>';
        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));

    }

    /**
     * Tests the adminBSBBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunctionWithStyle() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["style" => "margin: 4px;"];
        $res = '<i class="material-icons" style="margin: 4px;">home</i>';
        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));

    }

    /**
     * Tests the adminBSBBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunctionWithoutArguments() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="material-icons">home</i>';
        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));

    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunction() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person", "color" => "black", "style" => "margin: 4px;"];
        $res = '<i class="material-icons col-black" style="margin: 4px;">person</i>';
        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunctionWithColor() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<i class="material-icons col-black">home</i>';
        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunctionWithName() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person"];
        $res = '<i class="material-icons col-red">person</i>';
        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunctionWithStyle() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["style" => "margin: 4px;"];
        $res = '<i class="material-icons col-red" style="margin: 4px;">home</i>';
        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBIconMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunctionWithoutArguments() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg0 = [];
        $res0 = '<i class="material-icons col-red">home</i>';
        $this->assertEquals($res0, $obj->adminBSBIconMaterialDesignFunction($arg0));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.ui.icon", IconTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new IconTwigExtension($this->twigEnvironment);

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

}
