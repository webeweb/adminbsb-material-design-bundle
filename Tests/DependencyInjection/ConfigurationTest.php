<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection;

use WBW\Bundle\AdminBSBBundle\DependencyInjection\Configuration;
use WBW\Bundle\AdminBSBBundle\Provider\Theme\SkinThemeProviderInterface;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Configuration test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection
 */
class ConfigurationTest extends AbstractTestCase {

    /**
     * Tests enumSkins()
     *
     * @return void
     */
    public function testEnumSkins(): void {

        $res = [
            SkinThemeProviderInterface::SKIN_RED,
            SkinThemeProviderInterface::SKIN_PINK,
            SkinThemeProviderInterface::SKIN_PURPLE,
            SkinThemeProviderInterface::SKIN_DEEP_PURPLE,
            SkinThemeProviderInterface::SKIN_INDIGO,
            SkinThemeProviderInterface::SKIN_BLUE,
            SkinThemeProviderInterface::SKIN_LIGHT_BLUE,
            SkinThemeProviderInterface::SKIN_CYAN,
            SkinThemeProviderInterface::SKIN_TEAL,
            SkinThemeProviderInterface::SKIN_GREEN,
            SkinThemeProviderInterface::SKIN_LIGHT_GREEN,
            SkinThemeProviderInterface::SKIN_LIME,
            SkinThemeProviderInterface::SKIN_YELLOW,
            SkinThemeProviderInterface::SKIN_AMBER,
            SkinThemeProviderInterface::SKIN_ORANGE,
            SkinThemeProviderInterface::SKIN_DEEP_ORANGE,
            SkinThemeProviderInterface::SKIN_BROWN,
            SkinThemeProviderInterface::SKIN_GREY,
            SkinThemeProviderInterface::SKIN_BLUE_GREY,
            SkinThemeProviderInterface::SKIN_BLACK,
        ];
        $this->assertEquals($res, Configuration::enumSkins());
    }
}
