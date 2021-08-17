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

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Datetime picker Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin
 */
class DatetimePickerTwigExtension extends AbstractDatetimePickerTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.plugin.datetime_picker";

    /**
     * Displays an AdminBSB date picker.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB date picker.
     */
    public function adminBSBDatePickerFunction(array $args = []): string {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), true, ArrayHelper::get($args, "format", self::DEFAULT_DATE_FORMAT), ArrayHelper::get($args, "lang", "en"), false, ArrayHelper::get($args, "weekStart", 0));
    }

    /**
     * Displays a AdminBSB datetime picker.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB datetime picker.
     */
    public function adminBSBDatetimePickerFunction(array $args = []): string {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), ArrayHelper::get($args, "date", true), ArrayHelper::get($args, "format", self::DEFAULT_DATETIME_FORMAT), ArrayHelper::get($args, "lang", "en"), ArrayHelper::get($args, "time", true), ArrayHelper::get($args, "weekStart", 0));
    }

    /**
     * Displays a time picker.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB time picker.
     */
    public function adminBSBTimePickerFunction(array $args = []): string {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), false, ArrayHelper::get($args, "format", self::DEFAULT_TIME_FORMAT), ArrayHelper::get($args, "lang", "en"), true, 0);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBDatePicker", [$this, "adminBSBDatePickerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBDatetimePicker", [$this, "adminBSBDatetimePickerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBTimePicker", [$this, "adminBSBTimePickerFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
