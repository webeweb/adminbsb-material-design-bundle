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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertComponentTwigExtension as BaseUITwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Alert UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 */
class AlertUITwigExtension extends BaseUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.alert";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdBasicAlertDanger", [$this, "bootstrapBasicAlertDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertInfo", [$this, "bootstrapBasicAlertInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertSuccess", [$this, "bootstrapBasicAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdBasicAlertWarning", [$this, "bootstrapBasicAlertWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdLinkAlert", [$this, "bootstrapLinkAlertFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignAlert", [$this, "absbmdMaterialDesignAlertFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design alert.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design alert.
     */
    public function absbmdMaterialDesignAlertFunction(array $args = []) {
        $template = $this->bootstrapAlertDangerFunction($args);
        $searches = ["alert-danger"];
        $replaces = [AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-")];
        return StringUtility::replace($template, $searches, $replaces);
    }

}
