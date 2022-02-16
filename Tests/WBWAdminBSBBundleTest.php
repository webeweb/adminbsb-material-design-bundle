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
     * Tests getAssetsRelativeDirectory()
     *
     * @retrun void
     */
    public function testGetAssetsRelativeDirectory(): void {

        $obj = new WBWAdminBSBBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Tests getContainerExtension()
     *
     * @return void
     */
    public function testGetContainerExtension(): void {

        $obj = new WBWAdminBSBBundle();

        $this->assertInstanceOf(WBWAdminBSBExtension::class, $obj->getContainerExtension());
    }

    /**
     * Tests getSkeletonRelativeDirectory()
     *
     * @return void
     */
    public function testGetSkeletonRelativeDirectory(): void {

        $obj = new WBWAdminBSBBundle();
        $obj->setContainer($this->containerBuilder);

        $this->assertEquals("/Resources/skeleton", $obj->getSkeletonRelativeDirectory());
    }
}
