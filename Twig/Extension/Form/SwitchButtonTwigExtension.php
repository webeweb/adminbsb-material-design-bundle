<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Switch button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class SwitchButtonTwigExtension extends AbstractSwitchButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.form.switch_button";

    /**
     * Displays an AdminBSB switch button "basic".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB switch button "basic".
     */
    public function adminBSBSwitchButtonBasicFunction(array $args = []): string {
        return $this->adminBSBSwitchButton(ArrayHelper::get($args, "offLabel"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "onLabel"), ArrayHelper::get($args, "attr", []), null);
    }

    /**
     * Displays an AdminBSB switch button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB switch button "Material design".
     */
    public function adminBSBSwitchButtonMaterialDesignFunction(array $args = []): string {
        return $this->adminBSBSwitchButton(ArrayHelper::get($args, "offLabel"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "onLabel"), ArrayHelper::get($args, "attr", []), static::materialDesignColor(ArrayHelper::get($args, "color", "red"), " switch-col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBSwitchButtonBasic", [$this, "adminBSBSwitchButtonBasicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBSwitchButtonMaterialDesign", [$this, "adminBSBSwitchButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
