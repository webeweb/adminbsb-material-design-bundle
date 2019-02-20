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

use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Button\ButtonFactory;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ButtonTwigExtension extends AbstractButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.button";

    /**
     * Displays an AdminBSB button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Danger".
     */
    public function adminBSBButtonDangerFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseDangerButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Default".
     */
    public function adminBSBButtonDefaultFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseDefaultButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Info".
     */
    public function adminBSBButtonInfoFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseInfoButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays a AdminBSB button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Material design".
     */
    public function adminBSBButtonMaterialDesignFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseMaterialDesignButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Primary".
     */
    public function adminBSBButtonPrimaryFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parsePrimaryButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Success".
     */
    public function adminBSBButtonSuccessFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseSuccessButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Warning".
     */
    public function adminBSBButtonWarningFunction(array $args = []) {
        return $this->adminBSBButton(ButtonFactory::parseWarningButton($args), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Get the Twig filters.
     *
     * @return array Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("adminBSBButtonLink", [$this, "bootstrapButtonLinkFilter"], ["is_safe" => ["html"]]),
            new Twig_SimpleFilter("adminBSBButtonSubmit", [$this, "bootstrapButtonSubmitFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBButtonDanger", [$this, "adminBSBButtonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonDefault", [$this, "adminBSBButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonInfo", [$this, "adminBSBButtonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonMaterialDesign", [$this, "adminBSBButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonPrimary", [$this, "adminBSBButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonSuccess", [$this, "adminBSBButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonWarning", [$this, "adminBSBButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
