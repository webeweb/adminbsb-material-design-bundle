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
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Alert UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class AlertUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.alert";

    /**
     * Displays a basic alert "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the basic alert "Danger".
     */
    public function basicAlertDangerFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-danger");
    }

    /**
     * Displays a basic alert "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the basic alert "Info".
     */
    public function basicAlertInfoFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-info");
    }

    /**
     * Displays a basic alert "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the basic alert "Success".
     */
    public function basicAlertSuccessFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-success");
    }

    /**
     * Displays a basic alert "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the basic alert "Warning".
     */
    public function basicAlertWarningFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-warning");
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("basicAlertDanger", [$this, "basicAlertDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("basicAlertInfo", [$this, "basicAlertInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("basicAlertSuccess", [$this, "basicAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("basicAlertWarning", [$this, "basicAlertWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("linkAlert", [$this, "linkAlertFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignAlert", [$this, "materialDesignAlertFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a link alert.
     *
     * @param array $args The arguments.
     * @return string Returns the link alert.
     */
    public function linkAlertFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), $this->getColor(ArrayUtility::get($args, "color", "red"), "bg-"));
    }

    /**
     * Displays a material design alert.
     *
     * @param array $args The arguments.
     * @return string Returns the material design alert.
     */
    public function materialDesignAlertFunction(array $args = []) {
        return $this->alert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), $this->getColor(ArrayUtility::get($args, "color", "red"), "bg-"));
    }

}
