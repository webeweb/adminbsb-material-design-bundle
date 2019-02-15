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
 * Button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait ButtonTwigExtensionTrait {

    /**
     * Button Twig extension.
     *
     * @var ButtonTwigExtension
     */
    private $buttonTwigExtension;

    /**
     * Get the button Twig extension.
     *
     * @return ButtonTwigExtension Returns the button Twig extension.
     */
    public function getButtonTwigExtension() {
        return $this->buttonTwigExtension;
    }

    /**
     * Set the button Twig extension.
     *
     * @param ButtonTwigExtension $buttonTwigExtension The button Twig extension.
     */
    protected function setButtonTwigExtension(ButtonTwigExtension $buttonTwigExtension = null) {
        $this->buttonTwigExtension = $buttonTwigExtension;
        return $this;
    }
}
