<?php

/*
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
use WBW\Library\Core\Argument\ArrayHelper;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ButtonTwigExtension extends AbstractButtonTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.button";

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
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-danger", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Default".
     */
    public function adminBSBButtonDefaultFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-default", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Info".
     */
    public function adminBSBButtonInfoFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-info", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Link".
     *
     * @param string $button The button.
     * @param string $link The link.
     * @return string Returns the AdminBSB button "Link".
     */
    public function adminBSBButtonLinkFilter($button, $link = self::DEFAULT_HREF) {
        $searches = ["<button", "type=\"button\"", "</button>"];
        $replaces = ["<a", "href=\"" . $link . "\"", "</a>"];
        return StringHelper::replace($button, $searches, $replaces);
    }

    /**
     * Displays a AdminBSB button "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Material design".
     */
    public function adminBSBButtonMaterialDesignFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), "bg-"), ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Primary".
     */
    public function adminBSBButtonPrimaryFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-primary", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Success".
     */
    public function adminBSBButtonSuccessFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-success", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
    }

    /**
     * Displays an AdminBSB button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB button "Warning".
     */
    public function adminBSBButtonWarningFunction(array $args = []) {
        return $this->adminBSBButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "title"), ArrayHelper::get($args, "size", false), ArrayHelper::get($args, "block", false), ArrayHelper::get($args, "disable", false), "btn-warning", ArrayHelper::get($args, "icon"), ArrayHelper::get($args, "circle", false));
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
            new Twig_SimpleFunction("adminBSBButtonMaterialDesign", [$this, "adminBSBButtonMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonPrimary", [$this, "adminBSBButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonSuccess", [$this, "adminBSBButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBButtonWarning", [$this, "adminBSBButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
