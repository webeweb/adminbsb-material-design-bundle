<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider;

use WBW\Bundle\AdminBSBBundle\Provider\JavascriptProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Provider\JavascriptProviderInterface;
use WBW\Library\Symfony\Provider\ProviderInterface;

/**
 * Javascript provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider
 */
class JavascriptProviderTest extends AbstractTestCase {

    /**
     * Test getJavascripts()
     *
     * @return void
     */
    public function testGetJavascript(): void {

        $exp = [
            "WBWAdminBSBJQueryCountTo" => "@WBWAdminBSB/assets/WBWAdminBSBJQueryCountTo.js.twig",
        ];

        $obj = new JavascriptProvider();

        $this->assertEquals($exp, $obj->getJavascripts());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.provider.javascript", JavascriptProvider::SERVICE_NAME);

        $obj = new JavascriptProvider();

        $this->assertInstanceOf(ProviderInterface::class, $obj);
        $this->assertInstanceOf(JavascriptProviderInterface::class, $obj);
    }
}
