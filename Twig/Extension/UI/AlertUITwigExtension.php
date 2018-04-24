<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertComponentTwigExtension as BaseUITwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Alert UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 */
class AlertUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.alert";

    /**
     * Displays an basic alert "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the basic alert "Danger".
     */
    public function absbmdBasicAlertDangerFunction(array $args = []) {
        return (new BaseUITwigExtension())->bootstrapAlertDangerFunction($args);
    }

    /**
     * Displays an AdminBSB basic alert "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic alert "Info".
     */
    public function absbmdBasicAlertInfoFunction(array $args = []) {
        return (new BaseUITwigExtension())->bootstrapAlertInfoFunction($args);
    }

    /**
     * Displays an AdminBSB basic alert "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic alert "Success".
     */
    public function absbmdBasicAlertSuccessFunction(array $args = []) {
        return (new BaseUITwigExtension())->bootstrapAlertSuccessFunction($args);
    }

    /**
     * Displays an AdminBSB basic alert "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic alert "Warning".
     */
    public function absbmdBasicAlertWarningFunction(array $args = []) {
        return (new BaseUITwigExtension())->bootstrapAlertWarningFunction($args);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdBasicAlertDanger", [$this, "absbmdBasicAlertDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertInfo", [$this, "absbmdBasicAlertInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertSuccess", [$this, "absbmdBasicAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertWarning", [$this, "absbmdBasicAlertWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdLinkAlert", [$this, "absbmdLinkAlertFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignAlert", [$this, "absbmdMaterialDesignAlertFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB link alert.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB link alert.
     */
    public function absbmdLinkAlertFunction(array $args = []) {
        return (new BaseUITwigExtension())->bootstrapLinkAlertFunction($args);
    }

    /**
     * Displays an AdminBSB material design alert.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design alert.
     */
    public function absbmdMaterialDesignAlertFunction(array $args = []) {
        $template = (new BaseUITwigExtension())->bootstrapAlertDangerFunction($args);
        $searches = ["alert-danger"];
        $replaces = [$this->getColor(ArrayUtility::get($args, "color", "red"), "bg-")];
        return StringUtility::replace($template, $searches, $replaces);
    }

}
