<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Button;

use WBW\Bundle\BootstrapBundle\Button\AbstractButton;

/**
 * Material Design button.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Button
 */
class MaterialDesignButton extends AbstractButton {

    /**
     * Constructor.
     *
     * @param string $color The color.
     */
    public function __construct($color) {
        parent::__construct($color);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix() {
        return "bg-";
    }
}
