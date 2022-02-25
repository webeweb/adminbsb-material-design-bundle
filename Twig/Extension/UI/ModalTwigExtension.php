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

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Modal Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ModalTwigExtension extends AbstractModalTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.ui.modal";

    /**
     * Displays an AdminBSB modal header.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB modal header.
     */
    public function adminBSBModalHeaderFunction(array $args = []): string {
        return $this->adminBSBModalHeader(ArrayHelper::get($args, "content", ""), ArrayHelper::get($args, "icon"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBModalHeader", [$this, "adminBSBModalHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
