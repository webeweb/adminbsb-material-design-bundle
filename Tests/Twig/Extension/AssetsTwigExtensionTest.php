<?php

/*
 * This file is part of the adminbsb-material-design-bundle ackage.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;

/**
 * Assets Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension
 */
class AssetsTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests adminBSBRenderIconFunction()
     *
     * @return void
     */
    public function testAdminBSBRenderIconRender(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->adminBSBRenderIconFunction("::"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("adminBSBRenderIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "adminBSBRenderIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $this->assertNull(AssetsTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithDefault(): void {

        $res = '<i class="material-icons">home</i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMaterialIcon(): void {

        $res = '<i class="material-icons">home</i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "mi:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithOther(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "g:home"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.assets", AssetsTwigExtension::SERVICE_NAME);

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
