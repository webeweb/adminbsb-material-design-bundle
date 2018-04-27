<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Widget;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Card widget Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Widget
 */
class CardWidgetTwigExtension extends AbstractWidgetTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.widget.card";

    /**
     * Displays a card header.
     *
     * @param array $args The arguments.
     * @return string Returns the card header.
     */
    public function cardHeaderFunction(array $args = []) {

        // Initialize the paramters.
        $content     = ArrayUtility::get($args, "content", self::DEFAULT_CONTENT);
        $description = ArrayUtility::get($args, "description");
        $icon        = ArrayUtility::get($args, "icon");

        if (null !== $description) {
            $content .= "<small>" . $description . "</small>";
        }
        if (null !== $icon) {
            $content = (new IconUITwigExtension())->basicIconFunction(["name" => $icon, "style" => "margin: -4px 0; vertical-align: sub;"]) . $content;
        }

        // Return the HTML.
        return (new HeadingTypographyTwigExtension())->bootstrapHeading2Function(["class" => "card-header", "content" => $content]);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("cardHeader", [$this, "cardHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
