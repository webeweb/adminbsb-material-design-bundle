<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use WBW\Bundle\AdminBSBBundle\DependencyInjection\WBWAdminBSBExtension;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Bundle\CoreBundle\Provider\SkeletonProviderInterface;

/**
 * AdminBSB bundle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle
 */
class WBWAdminBSBBundle extends Bundle implements AssetsProviderInterface, SkeletonProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getAssetsRelativeDirectory(): string {
        return self::ASSETS_RELATIVE_DIRECTORY;
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerExtension(): Extension {
        return new WBWAdminBSBExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function getSkeletonRelativeDirectory(): string {
        return self::SKELETON_RELATIVE_DIRECTORY;
    }
}
