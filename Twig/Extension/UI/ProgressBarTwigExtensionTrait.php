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
 * Progress bar Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait ProgressBarTwigExtensionTrait {

    /**
     * Progress bar Twig extension.
     *
     * @var ProgressBarTwigExtension
     */
    private $progressBarTwigExtension;

    /**
     * Get the progress bar Twig extension.
     *
     * @return ProgressBarTwigExtension Returns the progress bar Twig extension.
     */
    public function getProgressBarTwigExtension() {
        return $this->progressBarTwigExtension;
    }

    /**
     * Set the progress bar Twig extension.
     *
     * @param ProgressBarTwigExtension $progressBarTwigExtension The progress bar Twig extension.
     */
    protected function setProgressBarTwigExtension(ProgressBarTwigExtension $progressBarTwigExtension = null) {
        $this->progressBarTwigExtension = $progressBarTwigExtension;
        return $this;
    }
}
