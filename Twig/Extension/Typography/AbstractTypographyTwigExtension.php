<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography;

use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension as BaseTwigExtension;

/**
 * Abstract typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography
 * @abstract
 */
abstract class AbstractTypographyTwigExtension extends BaseTwigExtension {

    /**
     * Displays an AdminBSB bold text.
     *
     * @param string|null $content The content.
     * @return string Returns the AdminBSB bold text.
     */
    protected function adminBSBBold(?string $content): string {
        return static::coreHTMLElement("span", $content, ["class" => "font-bold"]);
    }

    /**
     * Displays an AdminBSB italic text.
     *
     * @param string|null $content The content.
     * @return string Returns the AdminBSB italic text.
     */
    protected function adminBSBItalic(?string $content): string {
        return static::coreHTMLElement("span", $content, ["class" => "font-italic"]);
    }

    /**
     * Displays an AdminBSB line through text.
     *
     * @param string|null $content The content.
     * @return string Returns the AdminBSB line through text.
     */
    protected function adminBSBLineThrough(?string $content): string {
        return static::coreHTMLElement("span", $content, ["class" => "font-line-through"]);
    }

    /**
     * Displays an AdminBSB overlined text.
     *
     * @param string|null $content The content.
     * @return string Returns the AdminBSB overlined text.
     */
    protected function adminBSBOverline(?string $content): string {
        return static::coreHTMLElement("span", $content, ["class" => "font-overline"]);
    }

    /**
     * Displays an AdminBSB underlined text.
     *
     * @param string|null $content The content.
     * @return string Returns the AdminBSB underlined text.
     */
    protected function adminBSBUnderline(?string $content): string {
        return static::coreHTMLElement("span", $content, ["class" => "font-underline"]);
    }
}
