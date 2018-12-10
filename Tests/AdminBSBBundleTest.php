<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests;

use WBW\Bundle\AdminBSBBundle\AdminBSBBundle;

/**
 * AdminBSB bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests
 */
class AdminBSBBundleTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getAssetsRelativeDirectory() method.
     *
     * @retrun void
     */
    public function testGetAssetsRelativeDirectory() {

        $obj = new AdminBSBBundle();

        $res = "/Resources/assets";
        $this->assertEquals($res, $obj->getAssetsRelativeDirectory());
    }

}
