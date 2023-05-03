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

use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox2;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox 2 test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets\Widget
 */
class Infobox2Test extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Infobox2();

        $this->assertEquals("info-box", $obj->getClass());
    }
}
