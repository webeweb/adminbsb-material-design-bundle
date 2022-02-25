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

use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Infobox factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Widget
 */
class InfoboxFactory {

    /**
     * Creates a new infobox 1.
     *
     * @return InfoboxInterface Returns the infobox 1.
     */
    public static function newInfobox1(): InfoboxInterface {
        return new Infobox1();
    }

    /**
     * Creates a new infobox 2.
     *
     * @return InfoboxInterface Returns the infobox 2.
     */
    public static function newInfobox2(): InfoboxInterface {
        return new Infobox2();
    }

    /**
     * Creates a new infobox 3.
     *
     * @return InfoboxInterface Returns the infobox 3.
     */
    public static function newInfobox3(): InfoboxInterface {
        return new Infobox3();
    }

    /**
     * Creates a new infobox 4.
     *
     * @return InfoboxInterface Returns the infobox 4.
     */
    public static function newInfobox4(): InfoboxInterface {
        return new Infobox4();
    }

    /**
     * Creates a new infobox 5.
     *
     * @return InfoboxInterface Returns the infobox 5.
     */
    public static function newInfobox5(): InfoboxInterface {
        return new Infobox5();
    }

    /**
     * Parses an infobox.
     *
     * @param InfoboxInterface $infobox The infobox.
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox.
     */
    protected static function parseInfobox(InfoboxInterface $infobox, array $args, ?string $defaultColor, ?string $defaultIconColor): InfoboxInterface {

        $infobox->setColor(ArrayHelper::get($args, "color", $defaultColor));
        $infobox->setContentNumber(ArrayHelper::get($args, "contentNumber"));
        $infobox->setContentText(ArrayHelper::get($args, "contentText"));
        $infobox->setIconColor(ArrayHelper::get($args, "iconColor", $defaultIconColor));
        $infobox->setIconName(ArrayHelper::get($args, "iconName"));

        $infobox->setCountTo(ArrayHelper::get($args, "countTo", []));
        $infobox->setHoverExpandEffect(ArrayHelper::get($args, "hoverExpandEffect", false));
        $infobox->setHoverZoomEffect(ArrayHelper::get($args, "hoverZoomEffect", false));

        return $infobox;
    }

    /**
     * Parses an infobox 1.
     *
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox 1.
     */
    public static function parseInfobox1(array $args): InfoboxInterface {
        return static::parseInfobox(static::newInfobox1(), $args, null, "red");
    }

    /**
     * Parses an infobox 2.
     *
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox 2.
     */
    public static function parseInfobox2(array $args): InfoboxInterface {
        return static::parseInfobox(static::newInfobox2(), $args, "red", null);
    }

    /**
     * Parses an infobox 3.
     *
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox 3.
     */
    public static function parseInfobox3(array $args): InfoboxInterface {
        return static::parseInfobox(static::newInfobox3(), $args, "red", null);
    }

    /**
     * Parses an infobox 4.
     *
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox 4.
     */
    public static function parseInfobox4(array $args): InfoboxInterface {
        return static::parseInfobox(static::newInfobox4(), $args, "red", null);
    }

    /**
     * Parses an infobox 5.
     *
     * @param array $args The arguments.
     * @return InfoboxInterface Returns the infobox 5.
     */
    public static function parseInfobox5(array $args): InfoboxInterface {
        return static::parseInfobox(static::newInfobox5(), $args, null, "red");
    }
}
