<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Color;

/**
 * Color provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Color
 */
interface ColorProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.provider.color";

    /**
     * Get the color "Amber".
     *
     * @return array Returns the color "Amber".
     */
    public function getColorAmber();

    /**
     * Get the color "Black".
     *
     * @return array Returns the color "Black".
     */
    public function getColorBlack();

    /**
     * Get the color "Blue".
     *
     * @return array Returns the color "Blue".
     */
    public function getColorBlue();

    /**
     * Get the color "Blue grey".
     *
     * @return array Returns the color "Blue grey".
     */
    public function getColorBlueGrey();

    /**
     * Get the color "Brown".
     *
     * @return array Returns the color "Brown".
     */
    public function getColorBrown();

    /**
     * Get the color "Cyan".
     *
     * @return array Returns the color "Cyan".
     */
    public function getColorCyan();

    /**
     * Get the color "Deep orange".
     *
     * @return array Returns the color "Deep orange".
     */
    public function getColorDeepOrange();

    /**
     * Get the color "Deep purple".
     *
     * @return array Returns the color "Deep purple".
     */
    public function getColorDeepPurple();

    /**
     * Get the color "Green".
     *
     * @return array Returns the color "Green".
     */
    public function getColorGreen();

    /**
     * Get the color "Grey".
     *
     * @return array Returns the color "Grey".
     */
    public function getColorGrey();

    /**
     * Get the color "Indigo".
     *
     * @return array Returns the color "Indigo".
     */
    public function getColorIndigo();

    /**
     * Get the color "Light blue".
     *
     * @return array Returns the color "Light blue".
     */
    public function getColorLightBlue();

    /**
     * Get the color "Light green".
     *
     * @return array Returns the color "Light green".
     */
    public function getColorLightGreen();

    /**
     * Get the color "Lime".
     *
     * @return array Returns the color "Lime".
     */
    public function getColorLime();

    /**
     * Get the color "Orange".
     *
     * @return array Returns the color "Orange".
     */
    public function getColorOrange();

    /**
     * Get the color "Pink".
     *
     * @return array Returns the color "Pink".
     */
    public function getColorPink();

    /**
     * Get the color "Purple".
     *
     * @return array Returns the color "Purple".
     */
    public function getColorPurple();

    /**
     * Get the color "Red".
     *
     * @return array Returns the color "Red".
     */
    public function getColorRed();

    /**
     * Get the color "Teal".
     *
     * @return array Returns the color Teal
     */
    public function getColorTeal();

    /**
     * Get the color "Yellow".
     *
     * @return array Returns the color "Yellow".
     */
    public function getColorYellow();

    /**
     * Get the color "White".
     *
     * @return array Returns the color "White".
     */
    public function getColorWhite();
}
