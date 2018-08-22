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
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Radio button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
class RadioButtonTwigExtension extends AbstractRadioButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.form.radiobutton";

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
        return $this->adminBSBRadioButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "withGap", false), ArrayHelper::get($args, "class"));
    }

    /**
     * Displays an AdminBSB radio button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB radio button "Material design".
     */
    public function adminBSBRadioButtonMaterialDesignFunction(array $args = []) {
        return $this->adminBSBRadioButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "name"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "checked", false), ArrayHelper::get($args, "disabled", false), ArrayHelper::get($args, "withGap", false), ArrayHelper::get($args, "class", "") . AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), " radio-col-"));
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
