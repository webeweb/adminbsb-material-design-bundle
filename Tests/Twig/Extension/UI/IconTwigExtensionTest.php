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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;

/**
 * Icon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class IconTwigExtensionTest extends AbstractTestCase {

    /**
     * Test adminBSBBasicFunction()
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunction(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person", "style" => "margin: 4px;"];
        $res = '<i class="material-icons" style="margin: 4px;">person</i>';

        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));
    }

    /**
     * Test adminBSBBasicFunction()
     *
     * @return void
     */
    public function testAdminBSBIconBasicFunctionWithoutArguments(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="material-icons">home</i>';

        $this->assertEquals($res, $obj->adminBSBIconBasicFunction($arg));
    }

    /**
     * Test adminBSBIconMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunction(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "person", "color" => "pink", "style" => "margin: 4px;"];
        $res = '<i class="material-icons col-pink" style="margin: 4px;">person</i>';

        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Test adminBSBIconMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBIconMaterialDesignFunctionWithoutArguments(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<i class="material-icons col-red">home</i>';

        $this->assertEquals($res, $obj->adminBSBIconMaterialDesignFunction($arg));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new IconTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBIconBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBIconBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBIconMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBIconMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.icon", IconTwigExtension::SERVICE_NAME);

        $obj = new IconTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
