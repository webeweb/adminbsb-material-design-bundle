<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Switch button form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 */
class SwitchButtonFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.switchbutton";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB basic switch button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic switch button.
     */
    public function absbmdBasicSwitchButtonFunction(array $args = []) {
        return $this->absbmdSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdBasicSwitchButton", [$this, "absbmdBasicSwitchButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignSwitchButton", [$this, "absbmdMaterialDesignSwitchButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design switch button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design switch button.
     */
    public function absbmdMaterialDesignSwitchButtonFunction(array $args = []) {
        return $this->absbmdSwitchButton(ArrayUtility::get($args, "offLabel"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "onLabel"), ArrayUtility::get($args, "attr", []), AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " switch-col-"));
    }

}
