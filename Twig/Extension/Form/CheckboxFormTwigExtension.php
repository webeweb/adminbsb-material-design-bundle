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
 * Checkbox form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class CheckboxFormTwigExtension extends AbstractFormTwigExtension {

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
     * Displays an AdminBSB basic checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic checkbox.
     */
    public function adminBSBBasicCheckboxFunction(array $args = []) {
        return $this->adminBSBCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBBasicCheckbox", [$this, "adminBSBBasicCheckboxFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignCheckbox", [$this, "adminBSBMaterialDesignCheckboxFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design checkbox.
     */
    public function adminBSBMaterialDesignCheckboxFunction(array $args = []) {
        return $this->adminBSBCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class", "") . AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " chk-col-"));
    }

}
