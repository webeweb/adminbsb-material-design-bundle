<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\ProgressBar;

use WBW\Bundle\AdminBSBBundle\ProgressBar\MaterialDesignProgressBar;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Material Design progress bar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\ProgressBar
 */
class MaterialDesignProgressBarTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new MaterialDesignProgressBar("color");

        $this->assertEquals("bg-", $obj->getPrefix());
        $this->assertEquals("color", $obj->getType());
    }
}
