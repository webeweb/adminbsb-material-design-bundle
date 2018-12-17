<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Theme;

use WBW\Bundle\AdminBSBBundle\Theme\DefaultApplicationThemeProvider;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Default application theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Theme
 */
class DefaultApplicationThemeProviderTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("AdminBSB bundle", $obj->getDescription());
        $this->assertEquals("AdminBSB<b>bundle</b>", $obj->getName());
        $this->assertEquals("AdminBSB bundle", $obj->getTitle());
    }

}
