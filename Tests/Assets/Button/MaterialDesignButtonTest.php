<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Assets\Button;

use WBW\Bundle\AdminBSBBundle\Assets\Button\MaterialDesignButton;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Material Design button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets\Button
 */
class MaterialDesignButtonTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MaterialDesignButton("color");

        $this->assertEquals("bg-", $obj->getPrefix());
        $this->assertEquals("color", $obj->getType());
    }
}
