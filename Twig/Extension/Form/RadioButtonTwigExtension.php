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
 * Radio button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class RadioButtonTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.form.radiobutton";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB radio button "Basic".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB radio button "Basic".
     */
    public function adminBSBRadioButtonBasicFunction(array $args = []) {
        return $this->adminBSBRadioButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "withGap", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays an AdminBSB radio button "Material Design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB radio button "Material Design".
     */
    public function adminBSBRadioButtonMaterialDesignFunction(array $args = []) {
        return $this->adminBSBRadioButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "withGap", false), ArrayUtility::get($args, "class", "") . AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " radio-col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBRadioButtonBasic", [$this, "adminBSBRadioButtonBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBRadioButtonMaterialDesign", [$this, "adminBSBRadioButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

}