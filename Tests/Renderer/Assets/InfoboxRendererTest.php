<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Renderer\Assets;

use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox1;
use WBW\Bundle\AdminBSBBundle\Renderer\Assets\InfoboxRenderer;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Renderer\Assets
 */
class InfoboxRendererTest extends AbstractTestCase {

    /**
     * Test renderColor()
     *
     * @return void
     */
    public function testRenderColor(): void {

        // Set an Infobox mock.
        $infobox = new Infobox1();
        $infobox->setColor("red");

        $res = InfoboxRenderer::renderColor($infobox);
        $this->assertEquals("bg-red", $res);
    }

    /**
     * Test renderHoverExpandEffect()
     *
     * @return void
     */
    public function testRenderHoverExpandEffect(): void {

        // Set an Infobox mock.
        $infobox = new Infobox1();
        $infobox->setHoverExpandEffect(true);

        $res = InfoboxRenderer::renderHoverExpandEffect($infobox);
        $this->assertEquals("hover-expand-effect", $res);
    }

    /**
     * Test renderHoverZoomEffect()
     *
     * @return void
     */
    public function testRenderHoverZoomEffect(): void {

        // Set an Infobox mock.
        $infobox = new Infobox1();
        $infobox->setHoverZoomEffect(true);

        $res = InfoboxRenderer::renderHoverZoomEffect($infobox);
        $this->assertEquals("hover-zoom-effect", $res);
    }

    /**
     * Test renderIconColor()
     *
     * @return void
     */
    public function testRenderIconColor(): void {

        // Set an Infobox mock.
        $infobox = new Infobox1();
        $infobox->setIconColor("red");

        $res = InfoboxRenderer::renderIconColor($infobox);
        $this->assertEquals("bg-red", $res);
    }
}
