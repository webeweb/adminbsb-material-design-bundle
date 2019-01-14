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

use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

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
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.plugin.datetime_picker";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(Twig_Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment, $translator);
    }

    /**
     * Displays an AdminBSB date picker.
     *
     * @param $args The arguments.
     * @return string Returns the AdminBSB date picker.
     */
    public function adminBSBDatePickerFunction(array $args = []) {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), true, ArrayHelper::get($args, "format", self::DEFAULT_DATE_FORMAT), ArrayHelper::get($args, "lang", "en"), false, ArrayHelper::get($args, "weekStart", 0));
    }

    /**
     * Displays a AdminBSB datetime picker.
     *
     * @param $args The arguments.
     * @return string Returns the AdminBSB datetime picker.
     */
    public function adminBSBDatetimePickerFunction(array $args = []) {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), ArrayHelper::get($args, "date", true), ArrayHelper::get($args, "format", self::DEFAULT_DATETIME_FORMAT), ArrayHelper::get($args, "lang", "en"), ArrayHelper::get($args, "time", true), ArrayHelper::get($args, "weekStart", 0));
    }

    /**
     * Displays a time picker.
     *
     * @param $args The arguments.
     * @return string Returns the AdminBSB time picker.
     */
    public function adminBSBTimePickerFunction(array $args = []) {
        return $this->adminBSBDatetimePicker(ArrayHelper::get($args, "selector"), ArrayHelper::get($args, "clearButton", false), false, ArrayHelper::get($args, "format", self::DEFAULT_TIME_FORMAT), ArrayHelper::get($args, "lang", "en"), true, 0);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBDatePicker", [$this, "adminBSBDatePickerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBDatetimePicker", [$this, "adminBSBDatetimePickerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBTimePicker", [$this, "adminBSBTimePickerFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
