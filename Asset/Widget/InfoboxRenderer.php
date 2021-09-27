<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\Widget;

use WBW\Bundle\AdminBSBBundle\Asset\Color\ColorHelper;

/**
 * Infobox renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Widget
 */
class InfoboxRenderer {

    /**
     * Render a color.
     *
     * @param InfoboxInterface $infobox The infobox.
     * @return string|null Returns the color.
     */
    public static function renderColor(InfoboxInterface $infobox): ?string {
        return null !== $infobox->getColor() ? ColorHelper::materialDesignColor($infobox->getColor(), "bg-") : null;
    }

    /**
     * Render an icon color.
     *
     * @param InfoboxInterface $infobox The infobox.
     * @return string|null Returns the icon color.
     */
    public static function renderIconColor(InfoboxInterface $infobox): ?string {
        return null !== $infobox->getIconColor() ? ColorHelper::materialDesignColor($infobox->getIconColor(), "bg-") : null;
    }
}