<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Renderer\Assets;

use WBW\Bundle\AdminBSBBundle\Renderer\Assets\ButtonRenderer;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Assets\Button\DefaultButton;

/**
 * Button renderer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Renderer\Assets
 */
class ButtonRendererTest extends AbstractTestCase {

    /**
     * Test renderCircle()
     *
     * @return void
     */
    public function testRenderCircle(): void {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_SM);

        $res = ButtonRenderer::renderCircle($button, false);
        $this->assertEquals("btn-sm", $res);
    }

    /**
     * Test renderCircle()
     *
     * @return void
     */
    public function testRenderCircleWithCircle(): void {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_SM);

        $res = ButtonRenderer::renderCircle($button, true);
        $this->assertEquals("btn-circle waves-circle waves-float", $res);
    }

    /**
     * Test renderCircle()
     *
     * @return void
     */
    public function testRenderCircleWithCircleLG(): void {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_LG);

        $res = ButtonRenderer::renderCircle($button, true);
        $this->assertEquals("btn-circle-lg waves-circle waves-float", $res);
    }
}
