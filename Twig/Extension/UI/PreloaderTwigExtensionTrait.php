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
 * Preloader Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait PreloaderTwigExtensionTrait {

    /**
     * Preloader Twig extension.
     *
     * @var PreloaderTwigExtension
     */
    private $preloaderTwigExtension;

    /**
     * Get the preloader Twig extension.
     *
     * @return PreloaderTwigExtension Returns the preloader Twig extension.
     */
    public function getPreloaderTwigExtension() {
        return $this->preloaderTwigExtension;
    }

    /**
     * Set the preloader Twig extension.
     *
     * @param PreloaderTwigExtension $preloaderTwigExtension The preloader Twig extension.
     */
    protected function setPreloaderTwigExtension(PreloaderTwigExtension $preloaderTwigExtension = null) {
        $this->preloaderTwigExtension = $preloaderTwigExtension;
        return $this;
    }
}
