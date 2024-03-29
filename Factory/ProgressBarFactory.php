<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Factory;

use WBW\Bundle\AdminBSBBundle\Assets\ProgressBar\MaterialDesignProgressBar;
use WBW\Bundle\BootstrapBundle\Assets\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Factory\ProgressBarFactory as BaseFactory;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Progress bar factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Factory
 */
class ProgressBarFactory extends BaseFactory {

    /**
     * Create a new Material Design progress bar.
     *
     * @param string $color The color.
     * @return ProgressBarInterface Returns the Material Design progress bar.
     */
    public static function newMaterialDesignProgressBar(string $color): ProgressBarInterface {
        return new MaterialDesignProgressBar($color);
    }

    /**
     * Parse a Material Design progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the Material Design progress bar.
     */
    public static function parseMaterialDesignProgressBar(array $args): ProgressBarInterface {
        return static::parseProgressBar(static::newMaterialDesignProgressBar(ArrayHelper::get($args, "color", "red")), $args);
    }
}
