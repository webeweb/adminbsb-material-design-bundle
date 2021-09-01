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

use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Button\ButtonRenderer as BaseRenderer;

/**
 * Button renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Button
 */
class ButtonRenderer extends BaseRenderer {

    /**
     * Render a circle.
     *
     * @param ButtonInterface $button The button.
     * @param bool $circle Circle ?
     * @return string|null Returns the rendered circle.
     */
    public static function renderCircle(ButtonInterface $button, bool $circle): ?string {

        if (true !== $circle) {
            return static::renderSize($button);
        }

        $output = ["btn-circle"];
        if (ButtonInterface::BUTTON_SIZE_LG === $button->getSize()) {
            $output[] = "-";
            $output[] = ButtonInterface::BUTTON_SIZE_LG;
        }
        $output[] = " waves-circle waves-float";

        return implode("", $output);
    }
}
