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

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography
 */
class TypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.typography";

    /**
     * Displays an AdminBSB bold text.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB bold text.
     */
    public function adminBSBBoldFunction(array $args = []): string {
        return $this->adminBSBBold(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays an AdminBSB italic text.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB italic text.
     */
    public function adminBSBItalicFunction(array $args = []): string {
        return $this->adminBSBItalic(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays an AdminBSB line through text.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB line through text.
     */
    public function adminBSBLineThroughFunction(array $args = []): string {
        return $this->adminBSBLineThrough(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays an AdminBSB overlined text.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB overlined text.
     */
    public function adminBSBOverlineFunction(array $args = []): string {
        return $this->adminBSBOverline(ArrayHelper::get($args, "content"));
    }

    /**
     * Displays an AdminBSB underline text.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB underline text.
     */
    public function adminBSBUnderlineFunction(array $args = []): string {
        return $this->adminBSBUnderline(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBBold", [$this, "adminBSBBoldFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBDeleted", [$this, "bootstrapDeletedFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading1", [$this, "bootstrapHeading1Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading2", [$this, "bootstrapHeading2Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading3", [$this, "bootstrapHeading3Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading4", [$this, "bootstrapHeading4Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading5", [$this, "bootstrapHeading5Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBHeading6", [$this, "bootstrapHeading6Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBInserted", [$this, "bootstrapInsertedFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBItalic", [$this, "adminBSBItalicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBLineThrough", [$this, "adminBSBLineThroughFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBMarked", [$this, "bootstrapMarkedFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBOverline", [$this, "adminBSBOverlineFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBSmall", [$this, "bootstrapSmallFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBUnderline", [$this, "adminBSBUnderlineFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
