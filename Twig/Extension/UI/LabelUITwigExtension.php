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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelComponentTwigExtension as BaseUITwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Label UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class LabelUITwigExtension extends BaseUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.label";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBLabelDanger", [$this, "bootstrapLabelDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLabelDefault", [$this, "bootstrapLabelDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLabelInfo", [$this, "bootstrapLabelInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLabelPrimary", [$this, "bootstrapLabelPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLabelSuccess", [$this, "bootstrapLabelSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBLabelWarning", [$this, "bootstrapLabelWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignLabel", [$this, "adminBSBMaterialDesignLabelFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design label.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design label.
     */
    public function adminBSBMaterialDesignLabelFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-"));
    }

}
