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
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Badge Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class BadgeTwigExtension extends AbstractBadgeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.badge";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB button badge "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Danger".
     */
    public function adminBSBButtonBadgeDangerFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-danger");
    }

    /**
     * Displays an AdminBSB button badge "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Default".
     */
    public function adminBSBButtonBadgeDefaultFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-default");
    }

    /**
     * Displays an AdminBSB button badge "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Info".
     */
    public function adminBSBButtonBadgeInfoFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-info");
    }

    /**
     * Displays an AdminBSB button badge "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Material design".
     */
    public function adminBSBButtonBadgeMaterialDesignFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), "bg-"));
    }

    /**
     * Displays an AdminBSB button badge "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Primary".
     */
    public function adminBSBButtonBadgePrimaryFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-primary");
    }

    /**
     * Displays an AdminBSB button badge "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Success".
     */
    public function adminBSBButtonBadgeSuccessFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-success");
    }

    /**
     * Displays an AdminBSB button badge "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Warning".
     */
    public function adminBSBButtonBadgeWarningFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-warning");
    }

    /**
     * Displays an AdminBSB list badge.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB list badge.
     */
    public function adminBSBListBadgeFunction(array $args = []) {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), false, AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), "bg-"), true, ArrayHelper::get($args, "link"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBButtonBadgeDanger", [$this, "adminBSBButtonBadgeDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgeDefault", [$this, "adminBSBButtonBadgeDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgeInfo", [$this, "adminBSBButtonBadgeInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgeMaterialDesign", [$this, "adminBSBButtonBadgeMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgePrimary", [$this, "adminBSBButtonBadgePrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgeSuccess", [$this, "adminBSBButtonBadgeSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonBadgeWarning", [$this, "adminBSBButtonBadgeWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBListBadge", [$this, "adminBSBListBadgeFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
