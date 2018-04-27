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
 * Checkbox form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 */
class CheckboxFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.checkbox";

    /**
     * Displays an AdminBSB basic checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the basic checkbox.
     */
    public function absbmdBasicCheckboxFunction(array $args = []) {
        return $this->absbmdCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdBasicCheckbox", [$this, "absbmdBasicCheckboxFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignCheckbox", [$this, "absbmdMaterialDesignCheckboxFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design checkbox.
     *
     * @param array $args The arguments.
     * @return string Returns the material design checkbox.
     */
    public function absbmdMaterialDesignCheckboxFunction(array $args = []) {
        return $this->absbmdCheckbox(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "filledIn", false), ArrayUtility::get($args, "class", "") . AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), " chk-col-"));
    }

}
