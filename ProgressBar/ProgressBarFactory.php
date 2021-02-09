<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\ProgressBar;

use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarFactory as BaseFactory;
use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarInterface;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Progress bar factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\ProgressBar
 */
class ProgressBarFactory extends BaseFactory {

    /**
     * Creates a new Material Design progress bar.
     *
     * @param string $color The color.
     * @return ProgressBarInterface Returns the Material Design progress bar.
     */
    public static function newMaterialDesignProgressBar(string $color): ProgressBarInterface {
        return new MaterialDesignProgressBar($color);
    }

    /**
     * Parses a Material Design progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the Material Design progress bar.
     */
    public static function parseMaterialDesignProgressBar(array $args): ProgressBarInterface {
        return static::parseProgressBar(static::newMaterialDesignProgressBar(ArrayHelper::get($args, "color", "red")), $args);
    }
}
