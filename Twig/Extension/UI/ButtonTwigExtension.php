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

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Factory\ButtonFactory;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ButtonTwigExtension extends AbstractButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.ui.button";

    /**
     * Displays an AdminBSB button "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "danger".
     */
    public function adminBSBButtonDangerFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseDangerButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "default".
     */
    public function adminBSBButtonDefaultFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseDefaultButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "info".
     */
    public function adminBSBButtonInfoFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseInfoButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays a AdminBSB button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Material design".
     */
    public function adminBSBButtonMaterialDesignFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseMaterialDesignButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "primary".
     */
    public function adminBSBButtonPrimaryFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parsePrimaryButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "success".
     */
    public function adminBSBButtonSuccessFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseSuccessButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "warning".
     */
    public function adminBSBButtonWarningFunction(array $args = []): string {
        return $this->adminBSBButton(ButtonFactory::parseWarningButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Get the Twig filters.
     *
     * @return array Returns the Twig filters.
     */
    public function getFilters(): array {
        return [
            new TwigFilter("adminBSBButtonLink", [$this, "bootstrapButtonLinkFilter"], ["is_safe" => ["html"]]),
            new TwigFilter("adminBSBButtonSubmit", [$this, "bootstrapButtonSubmitFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBButtonDanger", [$this, "adminBSBButtonDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonDefault", [$this, "adminBSBButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonInfo", [$this, "adminBSBButtonInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonMaterialDesign", [$this, "adminBSBButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonPrimary", [$this, "adminBSBButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonSuccess", [$this, "adminBSBButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBButtonWarning", [$this, "adminBSBButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
