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
     * @var ProgressBarTwigExtension|null
     */
    private $progressBarTwigExtension;

    /**
     * Get the progress bar Twig extension.
     *
     * @return ProgressBarTwigExtension|null Returns the progress bar Twig extension.
     */
    public function getProgressBarTwigExtension(): ?ProgressBarTwigExtension {
        return $this->progressBarTwigExtension;
    }

    /**
     * Set the progress bar Twig extension.
     *
     * @param ProgressBarTwigExtension|null $progressBarTwigExtension The progress bar Twig extension.
     * @return self Returns this instance.
     */
    protected function setProgressBarTwigExtension(?ProgressBarTwigExtension $progressBarTwigExtension): self {
        $this->progressBarTwigExtension = $progressBarTwigExtension;
        return $this;
    }
}
