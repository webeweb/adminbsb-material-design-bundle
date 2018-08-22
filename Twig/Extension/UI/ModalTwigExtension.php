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
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Modal Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ModalTwigExtension extends AbstractModalTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.modal";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(new TypographyTwigExtension());
    }

    /**
     * Displays an AdminBSB modal header.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB modal header.
     */
    public function adminBSBModalHeaderFunction(array $args = []) {
        return $this->adminBSBModalHeader(ArrayHelper::get($args, "content", ""), ArrayHelper::get($args, "icon"));
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
