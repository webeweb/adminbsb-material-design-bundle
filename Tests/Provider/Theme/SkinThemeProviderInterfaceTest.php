<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Theme;

use WBW\Bundle\AdminBSBBundle\Provider\Theme\SkinThemeProviderInterface;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Skin theme provider interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Theme
 */
class SkinThemeProviderInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("red", SkinThemeProviderInterface::SKIN_RED);
        $this->assertEquals("pink", SkinThemeProviderInterface::SKIN_PINK);
        $this->assertEquals("purple", SkinThemeProviderInterface::SKIN_PURPLE);
        $this->assertEquals("deep-purple", SkinThemeProviderInterface::SKIN_DEEP_PURPLE);
        $this->assertEquals("indigo", SkinThemeProviderInterface::SKIN_INDIGO);
        $this->assertEquals("blue", SkinThemeProviderInterface::SKIN_BLUE);
        $this->assertEquals("light-blue", SkinThemeProviderInterface::SKIN_LIGHT_BLUE);
        $this->assertEquals("cyan", SkinThemeProviderInterface::SKIN_CYAN);
        $this->assertEquals("teal", SkinThemeProviderInterface::SKIN_TEAL);
        $this->assertEquals("green", SkinThemeProviderInterface::SKIN_GREEN);
        $this->assertEquals("light-green", SkinThemeProviderInterface::SKIN_LIGHT_GREEN);
        $this->assertEquals("lime", SkinThemeProviderInterface::SKIN_LIME);
        $this->assertEquals("yellow", SkinThemeProviderInterface::SKIN_YELLOW);
        $this->assertEquals("amber", SkinThemeProviderInterface::SKIN_AMBER);
        $this->assertEquals("orange", SkinThemeProviderInterface::SKIN_ORANGE);
        $this->assertEquals("deep-orange", SkinThemeProviderInterface::SKIN_DEEP_ORANGE);
        $this->assertEquals("brown", SkinThemeProviderInterface::SKIN_BROWN);
        $this->assertEquals("grey", SkinThemeProviderInterface::SKIN_GREY);
        $this->assertEquals("blue-grey", SkinThemeProviderInterface::SKIN_BLUE_GREY);
        $this->assertEquals("black", SkinThemeProviderInterface::SKIN_BLACK);
    }
}
