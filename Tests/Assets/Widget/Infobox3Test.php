<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Assets\Widget;

use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox3;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox 3 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets\Widget
 */
class Infobox3Test extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Infobox3();

        $this->assertEquals("info-box-2", $obj->getClass());
    }
}
