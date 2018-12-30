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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderTwigExtension;

/**
 * Preloader Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class PreloaderTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBPreloaderMaterialDesignLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignLFunction() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="preloader pl-size-l"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignLFunctionWithoutArguments() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader pl-size-l"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSFunction() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="preloader"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSFunctionWithoutArguments() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSMFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSMFunction() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSMFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSMFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSMFunctionWithoutArguments() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSMFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXLFunction() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXLFunctionWithoutArguments() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXSFunction() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXSFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXSFunctionWithoutArguments() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXSFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.ui.preloader", PreloaderTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

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

}
