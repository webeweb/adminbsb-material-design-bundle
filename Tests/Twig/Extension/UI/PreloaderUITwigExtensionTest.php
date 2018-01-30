<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\PreloaderUITwigExtension;

/**
 * Preloader UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
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
        $this->assertEquals("materialDesignPreloaderL", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignPreloaderLFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("materialDesignPreloaderS", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignPreloaderSFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("materialDesignPreloaderSM", $res[2]->getName());
        $this->assertEquals([$obj, "materialDesignPreloaderSMFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("materialDesignPreloaderXL", $res[3]->getName());
        $this->assertEquals([$obj, "materialDesignPreloaderXLFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("materialDesignPreloaderXS", $res[4]->getName());
        $this->assertEquals([$obj, "materialDesignPreloaderXSFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the materialDesignPreloaderLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignPreloaderLFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-l"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->materialDesignPreloaderLFunction($arg0));
    }

    /**
     * Tests the materialDesignPreloaderSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignPreloaderSFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->materialDesignPreloaderSFunction($arg0));

        $arg9 = ["color" => "black"];
        $res9 = '<div class="preloader"><div class="spinner-layer pl-black"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res9, $obj->materialDesignPreloaderSFunction($arg9));
    }

    /**
     * Tests the materialDesignPreloaderSMFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignPreloaderSMFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-sm"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->materialDesignPreloaderSMFunction($arg0));
    }

    /**
     * Tests the materialDesignPreloaderXLFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignPreloaderXLFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xl"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->materialDesignPreloaderXLFunction($arg0));
    }

    /**
     * Tests the materialDesignPreloaderXSFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignPreloaderXSFunction() {

        $obj = new PreloaderUITwigExtension();

        $arg0 = [];
        $res0 = '<div class="preloader pl-size-xs"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
        $this->assertEquals($res0, $obj->materialDesignPreloaderXSFunction($arg0));
    }

}
