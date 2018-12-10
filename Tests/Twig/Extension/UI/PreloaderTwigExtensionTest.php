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
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderTwigExtension;

/**
 * Preloader UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class PreloaderTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new PreloaderTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignL", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignLFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignS", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignSFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignSM", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignSMFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignXL", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignXLFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignXS", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignXSFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBPreloaderMaterialDesignLFunction() {

        $obj = new PreloaderTwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-l"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBPreloaderMaterialDesignLFunction($arg0));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBPreloaderMaterialDesignSFunction() {

        $obj = new PreloaderTwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBPreloaderMaterialDesignSFunction($arg0));

        $arg9 = ["color" => "black"];
        $res9 = '<div class="preloader"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res9, $obj->adminBSBPreloaderMaterialDesignSFunction($arg9));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSMFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBPreloaderMaterialDesignSMFunction() {

        $obj = new PreloaderTwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBPreloaderMaterialDesignSMFunction($arg0));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBPreloaderMaterialDesignXLFunction() {

        $obj = new PreloaderTwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBPreloaderMaterialDesignXLFunction($arg0));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBPreloaderMaterialDesignXSFunction() {

        $obj = new PreloaderTwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->adminBSBPreloaderMaterialDesignXSFunction($arg0));
    }

}
