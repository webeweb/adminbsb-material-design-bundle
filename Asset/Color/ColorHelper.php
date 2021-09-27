<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\Color;

use WBW\Bundle\CoreBundle\Helper\ColorHelper as BaseColorHelper;

/**
 * Color helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Color
 */
class ColorHelper {

    /**
     * Material Design color.
     *
     * @param string|null $name The name.
     * @param string $prefix The prefix.
     * @return string Returns the Material Design color.
     */
    public static function materialDesignColor(?string $name, string $prefix = ""): string {

        $colors = BaseColorHelper::getMaterialDesignColorPalette();

        $color = $colors[0];

        foreach ($colors as $current) {
            if ($name !== $current->getName()) {
                continue;
            }
            $color = $current;
        }

        return implode("", [$prefix, $color->getName()]);
    }
}