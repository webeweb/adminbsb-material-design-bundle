<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

/**
 * Badge Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait BadgeTwigExtensionTrait {

    /**
     * Badge Twig extension.
     *
     * @var BadgeTwigExtension
     */
    private $badgeTwigExtension;

    /**
     * Get the badge Twig extension.
     *
     * @return BadgeTwigExtension Returns the badge Twig extension.
     */
    public function getBadgeTwigExtension() {
        return $this->badgeTwigExtension;
    }

    /**
     * Set the badge Twig extension.
     *
     * @param BadgeTwigExtension $badgeTwigExtension The badge Twig extension.
     */
    protected function setBadgeTwigExtension($badgeTwigExtension) {
        $this->badgeTwigExtension = $badgeTwigExtension;
        return $this;
    }
}
