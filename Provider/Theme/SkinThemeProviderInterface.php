<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Theme;

use WBW\Library\Symfony\Provider\ThemeProviderInterface;

/**
 * Skin theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Theme
 */
interface SkinThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Skin "amber".
     *
     * @var string
     */
    const SKIN_AMBER = "amber";

    /**
     * Skin "black".
     *
     * @var string
     */
    const SKIN_BLACK = "black";

    /**
     * Skin "blue".
     *
     * @var string
     */
    const SKIN_BLUE = "blue";

    /**
     * Skin "blue grey".
     *
     * @var string
     */
    const SKIN_BLUE_GREY = "blue-grey";

    /**
     * Skin "brown".
     *
     * @var string
     */
    const SKIN_BROWN = "brown";

    /**
     * Skin "cyan".
     *
     * @var string
     */
    const SKIN_CYAN = "cyan";

    /**
     * Skin "deep orange".
     *
     * @var string
     */
    const SKIN_DEEP_ORANGE = "deep-orange";

    /**
     * Skin "deep purple".
     *
     * @var string
     */
    const SKIN_DEEP_PURPLE = "deep-purple";

    /**
     * Skin "green".
     *
     * @var string
     */
    const SKIN_GREEN = "green";

    /**
     * Skin "grey".
     *
     * @var string
     */
    const SKIN_GREY = "grey";

    /**
     * Skin "indigo".
     *
     * @var string
     */
    const SKIN_INDIGO = "indigo";

    /**
     * Skin "lightblue".
     *
     * @var string
     */
    const SKIN_LIGHT_BLUE = "light-blue";

    /**
     * Skin "light green".
     *
     * @var string
     */
    const SKIN_LIGHT_GREEN = "light-green";

    /**
     * Skin "lime".
     *
     * @var string
     */
    const SKIN_LIME = "lime";

    /**
     * Skin "orange".
     *
     * @var string
     */
    const SKIN_ORANGE = "orange";

    /**
     * Skin "pink".
     *
     * @var string
     */
    const SKIN_PINK = "pink";

    /**
     * Skin "purple".
     *
     * @var string
     */
    const SKIN_PURPLE = "purple";

    /**
     * Skin "red".
     *
     * @var string
     */
    const SKIN_RED = "red";

    /**
     * Skin "teal".
     *
     * @var string
     */
    const SKIN_TEAL = "teal";

    /**
     * Skin "yellow".
     *
     * @var string
     */
    const SKIN_YELLOW = "yellow";
}
