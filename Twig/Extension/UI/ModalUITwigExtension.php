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

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Modal UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ModalUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.ui.modal";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB modal header.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB modal header.
     */
    public function adminBSBModalHeaderFunction(array $args = []) {

        // Initialize the paramters.
        $content = ArrayUtility::get($args, "content", "");
        $icon    = ArrayUtility::get($args, "icon");

        if (null !== $icon) {
            $content = AdminBSBRendererTwigExtension::renderIcon($icon, "margin: -4px 0; vertical-align: sub;") . $content;
        }

        // Return the HTML.
        return (new HeadingTypographyTwigExtension())->bootstrapHeading3Function(["class" => "modal-title", "content" => $content]);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBModalHeader", [$this, "adminBSBModalHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
