<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Bootstrap\Theme;

use WBW\Bundle\AdminBSBBundle\Provider\Bootstrap\Theme\DefaultApplicationThemeProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractFrameworkTestCase;

/**
 * Default application theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Bootstrap\Theme
 */
class DefaultApplicationThemeProviderTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultApplicationThemeProvider();

        $this->assertEquals("AdminBSB Material Design", $obj->getDescription());
        $this->assertEquals("/", $obj->getHome());
        $this->assertEquals("AdminBSB<b>MaterialDesign</b>", $obj->getName());
        $this->assertEquals("/", $obj->getRoute());
        $this->assertEquals("AdminBSB Material Design", $obj->getTitle());
        $this->assertEquals("~1.0@dev", $obj->getVersion());
        $this->assertEquals(null, $obj->getView());
        $this->assertEquals("2017", $obj->getYear());
    }

}
