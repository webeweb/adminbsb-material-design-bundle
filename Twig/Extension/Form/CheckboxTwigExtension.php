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

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Checkbox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class CheckboxTwigExtension extends AbstractCheckboxTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.form.checkbox";

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
        return $this->adminBSBCheckbox(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "filledIn", false), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays an AdminBSB checkbox "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB checkbox "Material design".
     */
    public function adminBSBCheckboxMaterialDesignFunction(array $args = []) {
        return $this->adminBSBCheckbox(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "filledIn", false), ArrayHelper::get($args, "class", "") . AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), " chk-col-"));
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
