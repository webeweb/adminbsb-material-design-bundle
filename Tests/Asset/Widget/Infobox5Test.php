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

use WBW\Bundle\AdminBSBBundle\Asset\Widget\Infobox5;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox 5 test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Widget
 */
class Infobox5Test extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Infobox5();

        $this->assertEquals("info-box-4", $obj->getClass());
    }
}
