<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Card Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 */
class CardTwigExtension extends AbstractCardTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.widget.card";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB card header.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB card header.
     */
    public function adminBSBCardHeaderFunction(array $args = []) {

        // Initialize the paramters.
        $content     = ArrayUtility::get($args, "content", "");
        $description = ArrayUtility::get($args, "description");
        $icon        = ArrayUtility::get($args, "icon");

        if (null !== $description) {
            $content .= self::bootstrapHTMLElement("small", $description);
        }
        if (null !== $icon) {
            $content = AdminBSBRendererTwigExtension::renderIcon($icon, "margin: -4px 4px 0 0; vertical-align: sub;") . $content;
        }

        // Return the HTML.
        return (new TypographyTwigExtension())->bootstrapHeading2Function(["class" => "card-header", "content" => $content]);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBCardHeader", [$this, "adminBSBCardHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
