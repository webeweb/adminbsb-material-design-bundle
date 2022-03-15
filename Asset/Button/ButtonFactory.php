<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\Button;

use WBW\Bundle\BootstrapBundle\Factory\ButtonFactory as BaseFactory;
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Button factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Button
 */
class ButtonFactory extends BaseFactory {

    /**
     * Creates a Material Design button.
     *
     * @param string $color The color.
     * @return ButtonInterface Returns the Material Design button.
     */
    public static function newMaterialDesignButton(string $color): ButtonInterface {
        return new MaterialDesignButton($color);
    }

    /**
     * Parses a Material Design button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the Material Design button.
     */
    public static function parseMaterialDesignButton(array $args): ButtonInterface {
        return static::parseButton(static::newMaterialDesignButton(ArrayHelper::get($args, "color", "red")), $args);
    }
}
