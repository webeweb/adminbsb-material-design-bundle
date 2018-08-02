<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Switch button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class SwitchButtonTwigExtension extends AbstractSwitchButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.form.switchbutton";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB switch button "Basic".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB switch button "Basic".
     */
    public function adminBSBSwitchButtonBasicFunction(array $args = []) {
        return $this->adminBSBSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []), null);
    }

    /**
     * Displays an AdminBSB switch button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB switch button "Material design".
     */
    public function adminBSBSwitchButtonMaterialDesignFunction(array $args = []) {
        return $this->adminBSBSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []), AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " switch-col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBSwitchButtonBasic", [$this, "adminBSBSwitchButtonBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBSwitchButtonMaterialDesign", [$this, "adminBSBSwitchButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
