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

/**
 * Button UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class ButtonUITwigExtension extends AbstractUITwigExtension {

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
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-danger", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

    /**
     * Displays a button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Default".
     */
    public function buttonDefaultFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-default", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

    /**
     * Displays a button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Info".
     */
    public function buttonInfoFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-info", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

    /**
     * Displays a button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Primary".
     */
    public function buttonPrimaryFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-primary", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

    /**
     * Displays a button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Success".
     */
    public function buttonSuccessFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-success", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

    /**
     * Displays a button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the button "Warning".
     */
    public function buttonWarningFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), "btn-warning", $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
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
        return $this->replace($button, ["<button", "type=\"button\"", "</button>"], ["<a", "href=\"" . $link . "\"", "</a>"]);
    }

    /**
     * Displays a material design button.
     *
     * @param array $args The arguments.
     * @return string Returns the material design button.
     */
    public function materialDesignButtonFunction(array $args = []) {
        return $this->button($this->getArg($args, "content"), $this->getArg($args, "title"), $this->getArg($args, "size", false), $this->getArg($args, "block", false), $this->getArg($args, "disable", false), $this->getColor($this->getArg($args, "color", "red"), "bg-"), $this->getArg($args, "icon"), $this->getArg($args, "circle", false));
    }

}
