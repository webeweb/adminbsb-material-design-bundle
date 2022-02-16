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

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new RendererTwigExtension($this->twigEnvironment);
        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithDefault(): void {

        $res = '<i class="material-icons">home</i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithMaterialIcon(): void {

        $res = '<i class="material-icons">home</i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "mi:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithOther(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "g:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithoutArguments(): void {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
