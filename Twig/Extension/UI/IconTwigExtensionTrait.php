<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

/**
 * Icon Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait IconTwigExtensionTrait {

    /**
     * Icon Twig extension.
     *
     * @var IconTwigExtension
     */
    private $iconTwigExtension;

    /**
     * Get the icon Twig extension.
     *
     * @return IconTwigExtension Returns the icon Twig extension.
     */
    public function getIconTwigExtension() {
        return $this->iconTwigExtension;
    }

    /**
     * Set the icon Twig extension.
     *
     * @param IconTwigExtension $iconTwigExtension The icon Twig extension.
     */
    protected function setIconTwigExtension(IconTwigExtension $iconTwigExtension = null) {
        $this->iconTwigExtension = $iconTwigExtension;
        return $this;
    }
}
