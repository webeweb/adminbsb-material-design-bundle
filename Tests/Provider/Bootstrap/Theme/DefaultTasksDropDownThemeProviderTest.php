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

use WBW\Bundle\AdminBSBBundle\Provider\Bootstrap\Theme\DefaultTasksDropDownThemeProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractFrameworkTestCase;

/**
 * Default tasks drop down theme provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Bootstrap\Theme
 * @final
 */
final class DefaultTasksDropDownThemeProviderTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultTasksDropDownThemeProvider();

        $this->assertEquals([], $obj->getTasks());
        $this->assertEquals(null, $obj->getView());
    }

}
