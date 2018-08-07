<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin;

use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Helper\Argument\StringHelper;

/**
 * Abstract Datetime picker Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractDatetimePickerTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Datetime picker.
     *
     * @var string
     */
    const DATETIMEPICKER = <<< 'EOTXT'
<script type="text/javascript">
	$("%selector%").bootstrapMaterialDatePicker({
		cancelText: "%cancelText%",
		clearButton: %clearButton%,
		clearText: "%clearText%",
		date: %date%,
		format: "%format%",
		lang: "%lang%",
		time: %time%,
		weekStart: %weekStart%
	});
</script>
EOTXT;

    /**
     * Default date format.
     *
     * @var string
     */
    const DEFAULT_DATE_FORMAT = "YYYY-MM-DD";

    /**
     * Default datetime format.
     *
     * @var string
     */
    const DEFAULT_DATETIME_FORMAT = self::DEFAULT_DATE_FORMAT . " - " . self::DEFAULT_TIME_FORMAT;

    /**
     * Default time format.
     *
     * @var string
     */
    const DEFAULT_TIME_FORMAT = "HH:mm";

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     */
    protected function __construct(TranslatorInterface $translator) {
        $this->setTranslator($translator);
    }

    /**
     * Display an AdminBSB datetime picker.
     *
     * @param string $selector The selector.
     * @param string $clearButton Clear button ?
     * @param boolean $date Date ?
     * @param string $format The format.
     * @param string $lang The lang.
     * @param boolean $time Time ?
     * @param string $weekStart The week start.
     * @return string Returns the AdminBSB datetime picker.
     */
    protected function adminBSBDatetimePicker($selector, $clearButton, $date, $format, $lang, $time, $weekStart) {

        // Initialize the values.
        $weekStarts = [0, 1, 2, 3, 4, 5, 6];

        // Initialize the parameters.
        $cancelText   = $this->getTranslator()->trans("label.cancel", [], "BootstrapBundle");
        $clearText    = $this->getTranslator()->trans("label.delete", [], "BootstrapBundle");
        $bClearButton = StringHelper::parseBoolean($clearButton);
        $bDate        = StringHelper::parseBoolean($date);
        $bTime        = StringHelper::parseBoolean($time);
        $iWeekStart   = true === in_array($weekStart, $weekStarts) ? $weekStart : 0;

        //
        $searches = ["%selector%", "%cancelText%", "%clearButton%", "%clearText%", "%date%", "%format%", "%lang%", "%time%", "%weekStart%"];
        $replaces = [$selector, $cancelText, $bClearButton, $clearText, $bDate, $format, $lang, $bTime, $iWeekStart];

        // Return the HTML.
        return StringHelper::replace(self::DATETIMEPICKER, $searches, $replaces);
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * Set the translator.
     *
     * @param TranslatorInterface $translator The translator.
     * @return AbstractDatetimePickerTwigExtension Returns this Datetime picker Twig extension.
     */
    protected function setTranslator(TranslatorInterface $translator) {
        $this->translator = $translator;
        return $this;
    }

}
