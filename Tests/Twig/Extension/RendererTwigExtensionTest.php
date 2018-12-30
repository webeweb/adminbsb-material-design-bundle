<?php

/*
 * This file is part of the adminbsb-material-design-bundle ackage.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSB\Tests\Twig\Extension;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithDefault() {

        $res = '<i class="material-icons">home</i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithMaterialIcon() {

        $res = '<i class="material-icons">home</i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "mi:home"));
    }

}
