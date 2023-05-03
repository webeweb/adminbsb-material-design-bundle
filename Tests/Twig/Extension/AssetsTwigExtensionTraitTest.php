<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\TestAssetsTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;

/**
 * Assets Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension
 */
class AssetsTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setAssetsTwigExtension()
     *
     * @return void
     */
    public function testSetAssetsTwigExtension(): void {

        // Set a Assets Twig extension mock.
        $assetsTwigExtension = new AssetsTwigExtension($this->twigEnvironment);

        $obj = new TestAssetsTwigExtensionTrait();

        $obj->setAssetsTwigExtension($assetsTwigExtension);
        $this->assertSame($assetsTwigExtension, $obj->getAssetsTwigExtension());
    }
}
