<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract badge Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractBadgeTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB badge.
     *
     * @param string $content The content.
     * @param string $label The label.
     * @param bool $large Large ?
     * @param string $class The class.
     * @param bool $list List ?
     * @param string $link The link.
     * @return string Returns the AdminBSB badge.
     */
    protected function adminBSBBadge($content, $label, $large, $class, $list = false, $link = null) {

        // Initialize the template.
        $template = '<button %attributes%>%innerHTML%<span class="badge">%label%</span></button>';
        if (true === $list) {
            $template = '<a class="list-group-item" href="%href%"><span %attributes%>%innerHTML%</span>%label%</a>';
        }

        // Initialize the attributes.
        $attributes = [];

        if (true === $list) {
            $attributes["class"] = ["badge", $class];
        } else {
            $attributes["class"]   = ["btn", $class, "btn-block", "waves-effect"];
            $attributes["class"][] = true === $large ? "btn-lg" : null;
            $attributes["type"]    = "button";
        }

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";
        $spanLabel = null !== $label ? $label : "";
        $href      = null !== $link ? $link : self::DEFAULT_HREF;

        // Return the HTML.
        return StringHelper::replace($template, ["%attributes%", "%innerHTML%", "%label%", "%href%"], [StringHelper::parseArray($attributes), $innerHTML, $spanLabel, $href]);
    }
}
