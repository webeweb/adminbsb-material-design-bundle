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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait ButtonTwigExtensionTrait {

    /**
     * Button Twig extension.
     *
     * @var ButtonTwigExtension|null
     */
    private $buttonTwigExtension;

    /**
     * Get the button Twig extension.
     *
     * @return ButtonTwigExtension|null Returns the button Twig extension.
     */
    public function getButtonTwigExtension(): ?ButtonTwigExtension {
        return $this->buttonTwigExtension;
    }

    /**
     * Set the button Twig extension.
     *
     * @param ButtonTwigExtension|null $buttonTwigExtension The button Twig extension.
     * @return self Returns this instance.
     */
    protected function setButtonTwigExtension(?ButtonTwigExtension $buttonTwigExtension): self {
        $this->buttonTwigExtension = $buttonTwigExtension;
        return $this;
    }
}
