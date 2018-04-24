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
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Radio button form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 */
class RadioButtonFormTwigExtension extends AbstractFormTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.radiobutton";

    /**
     * Displays an AdminBSB basic radio button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic radio button.
     */
    public function absbmdBasicRadioButtonFunction(array $args = []) {
        return $this->absbmdRadioButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "withGap", false), ArrayUtility::get($args, "class"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdBasicRadioButton", [$this, "absbmdBasicRadioButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignRadioButton", [$this, "absbmdMaterialDesignRadioButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design radio button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design radio button.
     */
    public function absbmdMaterialDesignRadioButtonFunction(array $args = []) {
        return $this->absbmdRadioButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "name"), ArrayUtility::get($args, "id"), ArrayUtility::get($args, "checked", false), ArrayUtility::get($args, "disabled", false), ArrayUtility::get($args, "withGap", false), ArrayUtility::get($args, "class", "") . $this->getColor(ArrayUtility::get($args, "color", "red"), " radio-col-"));
    }

}
