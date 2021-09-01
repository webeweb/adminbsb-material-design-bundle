<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Theme;

use WBW\Bundle\AdminBSBBundle\Asset\Theme\SkinsThemeProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Skins theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Theme
 */
class SkinsThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the enumSkins() method.
     *
     * @return void
     */
    public function testEnumSkins(): void {

        $res = [
            SkinsThemeProvider::SKIN_RED,
            SkinsThemeProvider::SKIN_PINK,
            SkinsThemeProvider::SKIN_PURPLE,
            SkinsThemeProvider::SKIN_DEEP_PURPLE,
            SkinsThemeProvider::SKIN_INDIGO,
            SkinsThemeProvider::SKIN_BLUE,
            SkinsThemeProvider::SKIN_LIGHT_BLUE,
            SkinsThemeProvider::SKIN_CYAN,
            SkinsThemeProvider::SKIN_TEAL,
            SkinsThemeProvider::SKIN_GREEN,
            SkinsThemeProvider::SKIN_LIGHT_GREEN,
            SkinsThemeProvider::SKIN_LIME,
            SkinsThemeProvider::SKIN_YELLOW,
            SkinsThemeProvider::SKIN_AMBER,
            SkinsThemeProvider::SKIN_ORANGE,
            SkinsThemeProvider::SKIN_DEEP_ORANGE,
            SkinsThemeProvider::SKIN_BROWN,
            SkinsThemeProvider::SKIN_GREY,
            SkinsThemeProvider::SKIN_BLUE_GREY,
            SkinsThemeProvider::SKIN_BLACK,
        ];
        $this->assertEquals($res, SkinsThemeProvider::enumSkins());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("red", SkinsThemeProvider::SKIN_RED);
        $this->assertEquals("pink", SkinsThemeProvider::SKIN_PINK);
        $this->assertEquals("purple", SkinsThemeProvider::SKIN_PURPLE);
        $this->assertEquals("deep-purple", SkinsThemeProvider::SKIN_DEEP_PURPLE);
        $this->assertEquals("indigo", SkinsThemeProvider::SKIN_INDIGO);
        $this->assertEquals("blue", SkinsThemeProvider::SKIN_BLUE);
        $this->assertEquals("light-blue", SkinsThemeProvider::SKIN_LIGHT_BLUE);
        $this->assertEquals("cyan", SkinsThemeProvider::SKIN_CYAN);
        $this->assertEquals("teal", SkinsThemeProvider::SKIN_TEAL);
        $this->assertEquals("green", SkinsThemeProvider::SKIN_GREEN);
        $this->assertEquals("light-green", SkinsThemeProvider::SKIN_LIGHT_GREEN);
        $this->assertEquals("lime", SkinsThemeProvider::SKIN_LIME);
        $this->assertEquals("yellow", SkinsThemeProvider::SKIN_YELLOW);
        $this->assertEquals("amber", SkinsThemeProvider::SKIN_AMBER);
        $this->assertEquals("orange", SkinsThemeProvider::SKIN_ORANGE);
        $this->assertEquals("deep-orange", SkinsThemeProvider::SKIN_DEEP_ORANGE);
        $this->assertEquals("brown", SkinsThemeProvider::SKIN_BROWN);
        $this->assertEquals("grey", SkinsThemeProvider::SKIN_GREY);
        $this->assertEquals("blue-grey", SkinsThemeProvider::SKIN_BLUE_GREY);
        $this->assertEquals("black", SkinsThemeProvider::SKIN_BLACK);
    }
}