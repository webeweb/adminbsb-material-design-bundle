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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderUITwigExtension;

/**
 * Preloader UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class PreloaderUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new PreloaderUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBMaterialDesignPreloaderL", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignPreloaderLFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBMaterialDesignPreloaderS", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignPreloaderSFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBMaterialDesignPreloaderSM", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignPreloaderSMFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBMaterialDesignPreloaderXL", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignPreloaderXLFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBMaterialDesignPreloaderXS", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignPreloaderXSFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBMaterialDesignPreloaderLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignPreloaderLFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-l"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignPreloaderLFunction($arg0));
    }

    /**
     * Tests the adminBSBMaterialDesignPreloaderSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignPreloaderSFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignPreloaderSFunction($arg0));

        $arg9 = ["color" => "black"];
        $res9 = '<div class="preloader"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res9, $obj->adminBSBMaterialDesignPreloaderSFunction($arg9));
    }

    /**
     * Tests the adminBSBMaterialDesignPreloaderSMFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignPreloaderSMFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignPreloaderSMFunction($arg0));
    }

    /**
     * Tests the adminBSBMaterialDesignPreloaderXLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignPreloaderXLFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignPreloaderXLFunction($arg0));
    }

    /**
     * Tests the adminBSBMaterialDesignPreloaderXSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignPreloaderXSFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignPreloaderXSFunction($arg0));
    }

}
