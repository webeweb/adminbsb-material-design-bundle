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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarComponentTwigExtension as BaseTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Progress bar UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ProgressBarUITwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.progressbar";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB material design progress bar.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design progress bar.
     */
    public function adminBSBMaterialDesignProgressBarFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBBasicProgressBar", [$this, "bootstrapBasicProgressBarFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignProgressBar", [$this, "adminBSBMaterialDesignProgressBarFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
