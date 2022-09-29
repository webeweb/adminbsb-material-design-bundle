<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Factory\InfoboxFactory;

/**
 * Infobox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 */
class InfoboxTwigExtension extends AbstractInfoboxTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.widget.infobox";

    /**
     * Displays an AdminBSB infobox 1.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB infobox 1.
     */
    public function adminBSBInfobox1Function(array $args = []): string {
        return $this->adminBSBInfobox(InfoboxFactory::parseInfobox1($args));
    }

    /**
     * Displays an AdminBSB infobox 2.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB infobox 2.
     */
    public function adminBSBInfobox2Function(array $args = []): string {
        return $this->adminBSBInfobox(InfoboxFactory::parseInfobox2($args));
    }

    /**
     * Displays an AdminBSB infobox 3.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB infobox 3.
     */
    public function adminBSBInfobox3Function(array $args = []): string {
        return $this->adminBSBInfobox(InfoboxFactory::parseInfobox3($args));
    }

    /**
     * Displays an AdminBSB infobox 4.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB infobox 4.
     */
    public function adminBSBInfobox4Function(array $args = []): string {
        return $this->adminBSBInfobox(InfoboxFactory::parseInfobox4($args));
    }

    /**
     * Displays an AdminBSB infobox 5.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB infobox 5.
     */
    public function adminBSBInfobox5Function(array $args = []): string {
        return $this->adminBSBInfobox(InfoboxFactory::parseInfobox5($args));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("adminBSBInfobox1", [$this, "adminBSBInfobox1Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBInfobox2", [$this, "adminBSBInfobox2Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBInfobox3", [$this, "adminBSBInfobox3Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBInfobox4", [$this, "adminBSBInfobox4Function"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBInfobox5", [$this, "adminBSBInfobox5Function"], ["is_safe" => ["html"]]),
        ];
    }
}
