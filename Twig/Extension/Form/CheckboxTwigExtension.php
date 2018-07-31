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
 * Checkbox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class CheckboxTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.form.checkbox";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB checkbox "Basic".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB checkbox "Basic".
     */
    public function adminBSBCheckboxBasicFunction(array $args = []) {
        return $this->adminBSBCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Displays an AdminBSB checkbox "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB checkbox "Material Design".
     */
    public function adminBSBCheckboxMaterialDesignFunction(array $args = []) {
        return $this->adminBSBCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class", "") . AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " chk-col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBCheckboxBasic", [$this, "adminBSBCheckboxBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBCheckboxMaterialDesign", [$this, "adminBSBCheckboxMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
