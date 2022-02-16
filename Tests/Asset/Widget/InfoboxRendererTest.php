<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Widget;

use WBW\Bundle\AdminBSBBundle\Asset\Widget\Infobox1;
use WBW\Bundle\AdminBSBBundle\Asset\Widget\InfoboxRenderer;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Widget
 */
class InfoboxRendererTest extends AbstractTestCase {

    /**
     * Tests renderColor()
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
     * Tests renderHoverExpandEffect()
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
     * Tests renderHoverZoomEffect()
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
     * Tests renderIconColor()
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
