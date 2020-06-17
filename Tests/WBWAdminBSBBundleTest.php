<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests;

use WBW\Bundle\AdminBSBBundle\DependencyInjection\WBWAdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\WBWAdminBSBBundle;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * AdminBSB bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests
 */
class WBWAdminBSBBundleTest extends AbstractTestCase {

    /**
     * Tests the getAssetsRelativeDirectory() method.
     *
     * @retrun void
     */
    public function testGetAssetsRelativeDirectory() {

        $obj = new WBWAdminBSBBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Tests the getContainerExtension() method.
     *
     * @return void
     */
    public function testGetContainerExtension() {

        $obj = new WBWAdminBSBBundle();

        $this->assertInstanceOf(WBWAdminBSBExtension::class, $obj->getContainerExtension());
    }

    /**
     * Tests the getSkeletonRelativeDirectory() method.
     *
     * @return void
     */
    public function testGetSkeletonRelativeDirectory() {

        $obj = new WBWAdminBSBBundle();
        $obj->setContainer($this->containerBuilder);

        $this->assertEquals("/Resources/skeleton", $obj->getSkeletonRelativeDirectory());
    }
}
