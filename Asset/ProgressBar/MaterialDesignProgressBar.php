<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\ProgressBar;

use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\AbstractProgressBar;

/**
 * Material Design progress bar.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Asset\ProgressBar
 */
class MaterialDesignProgressBar extends AbstractProgressBar {

    /**
     * Constructor.
     *
     * @param string $color The color.
     */
    public function __construct(string $color) {
        parent::__construct($color);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix(): string {
        return "bg-";
    }
}
