<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Button UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 */
class ButtonUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.button";

    /**
     * Displays a button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Danger".
     */
    public function buttonDangerFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-danger", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Default".
     */
    public function buttonDefaultFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-default", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Info".
     */
    public function buttonInfoFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-info", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Primary".
     */
    public function buttonPrimaryFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-primary", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Success".
     */
    public function buttonSuccessFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-success", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Warning".
     */
    public function buttonWarningFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-warning", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Get the Twig filters.
     *
     * @return array Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("linkButton", [$this, "linkButtonFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("buttonDanger", [$this, "buttonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("buttonDefault", [$this, "buttonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("buttonInfo", [$this, "buttonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("buttonPrimary", [$this, "buttonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("buttonSuccess", [$this, "buttonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("buttonWarning", [$this, "buttonWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignButton", [$this, "materialDesignButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a link button.
     *
     * @param string $button The button.
     * @param string $link The link.
     * @return string Returns the link button.
     */
    public function linkButtonFilter($button, $link = self::DEFAULT_HREF) {
        return StringUtility::replace($button, ["<button", "type=\"button\"", "</button>"], ["<a", "href=\"" . $link . "\"", "</a>"]);
    }

    /**
     * Displays a material design button.
     *
     * @param array $args The arguments.
     * @return string Returns the material design button.
     */
    public function materialDesignButtonFunction(array $args = []) {
        return $this->button(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), $this->getColor(ArrayUtility::get($args, "color", "red"), "bg-"), ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

}
