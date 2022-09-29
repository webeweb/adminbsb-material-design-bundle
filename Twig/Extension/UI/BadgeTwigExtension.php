<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Badge Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class BadgeTwigExtension extends AbstractBadgeTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.ui.badge";

    /**
     * Displays an AdminBSB button badge "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "danger".
     */
    public function adminBSBButtonBadgeDangerFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-danger");
    }

    /**
     * Displays an AdminBSB button badge "default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "default".
     */
    public function adminBSBButtonBadgeDefaultFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-default");
    }

    /**
     * Displays an AdminBSB button badge "info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "info".
     */
    public function adminBSBButtonBadgeInfoFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-info");
    }

    /**
     * Displays an AdminBSB list badge.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB list badge.
     */
    public function adminBSBButtonBadgeListFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), false, static::materialDesignColor(ArrayHelper::get($args, "color", "red"), "bg-"), true, ArrayHelper::get($args, "link"));
    }

    /**
     * Displays an AdminBSB button badge "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "Material design".
     */
    public function adminBSBButtonBadgeMaterialDesignFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), static::materialDesignColor(ArrayHelper::get($args, "color", "red"), "bg-"));
    }

    /**
     * Displays an AdminBSB button badge "primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "primary".
     */
    public function adminBSBButtonBadgePrimaryFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-primary");
    }

    /**
     * Displays an AdminBSB button badge "success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "success".
     */
    public function adminBSBButtonBadgeSuccessFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-success");
    }

    /**
     * Displays an AdminBSB button badge "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button badge "warning".
     */
    public function adminBSBButtonBadgeWarningFunction(array $args = []): string {
        return $this->adminBSBBadge(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "label"), ArrayHelper::get($args, "large", false), "btn-warning");
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("adminBSBButtonBadgeDanger", [$this, "adminBSBButtonBadgeDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeDefault", [$this, "adminBSBButtonBadgeDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeInfo", [$this, "adminBSBButtonBadgeInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeList", [$this, "adminBSBButtonBadgeListFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeMaterialDesign", [$this, "adminBSBButtonBadgeMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgePrimary", [$this, "adminBSBButtonBadgePrimaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeSuccess", [$this, "adminBSBButtonBadgeSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonBadgeWarning", [$this, "adminBSBButtonBadgeWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
