<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Button;

use WBW\Bundle\AdminBSBBundle\Button\ButtonRenderer;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Button\DefaultButton;

/**
 * Button renderer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Button
 */
class ButtonRendererTest extends AbstractTestCase {

    /**
     * Tests the renderCircle() method.
     *
     * @return void
     */
    public function testRenderCircle() {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_SM);

        $res = ButtonRenderer::renderCircle($button, false);
        $this->assertEquals("btn-sm", $res);
    }

    /**
     * Tests the renderCircle() method.
     *
     * @return void
     */
    public function testRenderCircleWithCircle() {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_SM);

        $res = ButtonRenderer::renderCircle($button, true);
        $this->assertEquals("btn-circle waves-circle waves-float", $res);
    }

    /**
     * Tests the renderCircle() method.
     *
     * @return void
     */
    public function testRenderCircleWithCircleLG() {

        // Set a Button mock.
        $button = new DefaultButton();
        $button->setSize(DefaultButton::BUTTON_SIZE_LG);

        $res = ButtonRenderer::renderCircle($button, true);
        $this->assertEquals("btn-circle-lg waves-circle waves-float", $res);
    }
}
