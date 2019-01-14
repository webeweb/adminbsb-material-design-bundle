<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin;

/**
 * Datetime picker Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin
 */
trait DatetimePickerTwigExtensionTrait {

    /**
     * Datetime picker Twig extension.
     *
     * @var DatetimePickerTwigExtension
     */
    private $datetimePickerTwigExtension;

    /**
     * Get the datetime picker Twig extension.
     *
     * @return DatetimePickerTwigExtension Returns the datetime picker Twig extension.
     */
    public function getDatetimePickerTwigExtension() {
        return $this->datetimePickerTwigExtension;
    }

    /**
     * Set the datetime picker Twig extension.
     *
     * @param DatetimePickerTwigExtension $datetimePickerTwigExtension The datetime picker Twig extension.
     */
    protected function setDatetimePickerTwigExtension(DatetimePickerTwigExtension $datetimePickerTwigExtension = null) {
        $this->datetimePickerTwigExtension = $datetimePickerTwigExtension;
        return $this;
    }
}
