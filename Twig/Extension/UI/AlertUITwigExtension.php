<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertComponentTwigExtension as BaseTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Alert UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class AlertUITwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.alert";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBBasicAlertDanger", [$this, "bootstrapBasicAlertDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBBasicAlertInfo", [$this, "bootstrapBasicAlertInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBBasicAlertSuccess", [$this, "bootstrapBasicAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBBasicAlertWarning", [$this, "bootstrapBasicAlertWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLinkAlert", [$this, "bootstrapLinkAlertFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignAlert", [$this, "adminBSBMaterialDesignAlertFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design alert.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design alert.
     */
    public function adminBSBMaterialDesignAlertFunction(array $args = []) {
        $template = $this->bootstrapAlertDangerFunction($args);
        $searches = ["alert-danger"];
        $replaces = [AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-")];
        return StringUtility::replace($template, $searches, $replaces);
    }

}
