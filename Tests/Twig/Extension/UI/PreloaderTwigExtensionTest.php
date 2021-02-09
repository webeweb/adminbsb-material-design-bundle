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
    public function testAdminBSBPreloaderMaterialDesignLFunction(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="preloader pl-size-l"><div class="spinner-layer pl-pink"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignLFunctionWithoutArguments(): void {

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
    public function testAdminBSBPreloaderMaterialDesignSFunction(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="preloader"><div class="spinner-layer pl-pink"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSFunctionWithoutArguments(): void {

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
    public function testAdminBSBPreloaderMaterialDesignSMFunction(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-pink"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignSMFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignSMFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignSMFunctionWithoutArguments(): void {

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
    public function testAdminBSBPreloaderMaterialDesignXLFunction(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-pink"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXLFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXLFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXLFunctionWithoutArguments(): void {

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
    public function testAdminBSBPreloaderMaterialDesignXSFunction(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-pink"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXSFunction($arg));
    }

    /**
     * Tests the adminBSBPreloaderMaterialDesignXSFunction() method.
     *
     * @return void
     */
    public function testAdminBSBPreloaderMaterialDesignXSFunctionWithoutArguments(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res, $obj->adminBSBPreloaderMaterialDesignXSFunction($arg));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignL", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignLFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignS", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignSFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignSM", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignSMFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignXL", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignXLFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBPreloaderMaterialDesignXS", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBPreloaderMaterialDesignXSFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.preloader", PreloaderTwigExtension::SERVICE_NAME);

        $obj = new PreloaderTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
