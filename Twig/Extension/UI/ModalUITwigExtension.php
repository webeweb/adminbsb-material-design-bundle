<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;

/**
 * Modal UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class ModalUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.modal";

    /**
     * Displays a modal header.
     *
     * @param array $args The arguments.
     * @return string Returns the modal header.
     */
    public function modalHeaderFunction(array $args = []) {

        // Initialize the paramters.
        $content = $this->getArg($args, "content", self::DEFAULT_CONTENT);
        $icon    = $this->getArg($args, "icon");

        if (!is_null($icon)) {
            $content = (new IconUITwigExtension())->basicIconFunction(["name" => $icon, "style" => "margin: -4px 0; vertical-align: sub;"]) . $content;
        }

        // Return the HTML.
        return (new HeadingTypographyTwigExtension())->h3Function(["class" => "modal-title", "content" => $content]);
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("modalHeader", [$this, "modalHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
