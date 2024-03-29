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

use Symfony\Contracts\Translation\TranslatorInterface;
use Twig\Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Translation\TranslatorTrait;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Abstract Datetime picker Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractDatetimePickerTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Default datetime format.
     *
     * @var string
     */
    const DEFAULT_DATETIME_FORMAT = self::DEFAULT_DATE_FORMAT . " - " . self::DEFAULT_TIME_FORMAT;

    /**
     * Default date format.
     *
     * @var string
     */
    const DEFAULT_DATE_FORMAT = "YYYY-MM-DD";

    /**
     * Default time format.
     *
     * @var string
     */
    const DEFAULT_TIME_FORMAT = "HH:mm";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment);

        $this->setTranslator($translator);
    }

    /**
     * Display an AdminBSB datetime picker.
     *
     * @param string $selector The selector.
     * @param bool $clearButton Clear button ?
     * @param bool $date Date ?
     * @param string $format The format.
     * @param string $lang The lang.
     * @param bool $time Time ?
     * @param string $weekStart The week start.
     * @return string Returns the AdminBSB datetime picker.
     */
    protected function adminBSBDatetimePicker(string $selector, bool $clearButton, bool $date, string $format, string $lang, bool $time, string $weekStart): string {

        $weekStarts = [0, 1, 2, 3, 4, 5, 6];

        $cancelText   = $this->getTranslator()->trans("label.cancel", [], "BootstrapBundle");
        $clearText    = $this->getTranslator()->trans("label.delete", [], "BootstrapBundle");
        $bClearButton = StringHelper::parseBoolean($clearButton);
        $bDate        = StringHelper::parseBoolean($date);
        $bTime        = StringHelper::parseBoolean($time);
        $iWeekStart   = true === in_array($weekStart, $weekStarts) ? $weekStart : 0;

        $searches = ["%selector%", "%cancelText%", "%clearButton%", "%clearText%", "%date%", "%format%", "%lang%", "%time%", "%weekStart%"];
        $replaces = [$selector, $cancelText, $bClearButton, $clearText, $bDate, $format, $lang, $bTime, $iWeekStart];

        $template = file_get_contents(__DIR__ . "/AbstractDatetimepicker.adminBSBDatetimepicker.html.txt");

        return str_replace($searches, $replaces, $template);
    }
}
