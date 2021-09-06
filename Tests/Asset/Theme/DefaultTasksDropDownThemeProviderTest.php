<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Theme;

use WBW\Bundle\AdminBSBBundle\Asset\Theme\DefaultTasksDropDownThemeProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default tasks drop down theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Theme
 */
class DefaultTasksDropDownThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DefaultTasksDropDownThemeProvider();

        $this->assertNotNull($obj);
    }
}