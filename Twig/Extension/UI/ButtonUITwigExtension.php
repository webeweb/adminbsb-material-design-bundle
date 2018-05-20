<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Button UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ButtonUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.button";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Danger".
     */
    public function adminBSBButtonDangerFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-danger", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Default".
     */
    public function adminBSBButtonDefaultFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-default", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Info".
     */
    public function adminBSBButtonInfoFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-info", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Link".
     *
     * @param string $button The button.
     * @param string $link The link.
     * @return string Returns the AdminBSB button "Link".
     */
    public function adminBSBButtonLinkFilter($button, $link = self::DEFAULT_HREF) {
        return StringUtility::replace($button, ["<button", "type=\"button\"", "</button>"], ["<a", "href=\"" . $link . "\"", "</a>"]);
    }

    /**
     * Displays an AdminBSB button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Primary".
     */
    public function adminBSBButtonPrimaryFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-primary", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Success".
     */
    public function adminBSBButtonSuccessFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-success", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Warning".
     */
    public function adminBSBButtonWarningFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), "btn-warning", ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Displays a AdminBSB material design button.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design button.
     */
    public function adminBSBMaterialDesignButtonFunction(array $args = []) {
        return $this->adminBSBButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "disable", false), AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "bg-"), ArrayUtility::get($args, "icon"), ArrayUtility::get($args, "circle", false));
    }

    /**
     * Get the Twig filters.
     *
     * @return array Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new Twig_SimpleFilter("adminBSBButtonLink", [$this, "adminBSBButtonLinkFilter"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBButtonDanger", [$this, "adminBSBButtonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonDefault", [$this, "adminBSBButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonInfo", [$this, "adminBSBButtonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonPrimary", [$this, "adminBSBButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonSuccess", [$this, "adminBSBButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonWarning", [$this, "adminBSBButtonWarningFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignButton", [$this, "adminBSBMaterialDesignButtonFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
