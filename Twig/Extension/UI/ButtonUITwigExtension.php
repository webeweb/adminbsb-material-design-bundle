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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
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
     * Displays an AdminBSB material design button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Danger".
     */
    public function absbmdButtonDangerFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-danger", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Default".
     */
    public function absbmdButtonDefaultFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-default", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Info".
     */
    public function absbmdButtonInfoFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-info", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Primary".
     */
    public function absbmdButtonPrimaryFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-primary", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Success".
     */
    public function absbmdButtonSuccessFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-success", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button "Warning".
     */
    public function absbmdButtonWarningFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-warning", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB material design link button.
     *
     * @param string $button The button.
     * @param string $link The link.
     * @return string Returns the AdminBSB material design link button.
     */
    public function absbmdLinkButtonFilter($button, $link = self::DEFAULT_HREF) {
        return StringUtility::replace($button, ["<button", "type=\"button\"", "</button>"], ["<a", "href=\"" . $link . "\"", "</a>"]);
    }

    /**
     * Displays a AdminBSB material design material design button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design material design button.
     */
    public function absbmdMaterialDesignButtonFunction(array $args = []) {
        return $this->absbmdButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-"), ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Get the Twig filters.
     *
     * @return array Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("absbmdLinkButton", [$this, "absbmdLinkButtonFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("absbmdButtonDanger", [$this, "absbmdButtonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdButtonDefault", [$this, "absbmdButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdButtonInfo", [$this, "absbmdButtonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdButtonPrimary", [$this, "absbmdButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdButtonSuccess", [$this, "absbmdButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdButtonWarning", [$this, "absbmdButtonWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("absbmdMaterialDesignButton", [$this, "absbmdMaterialDesignButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
