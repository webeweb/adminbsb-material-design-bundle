<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Form;

/**
 * Switch button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
trait SwitchButtonTwigExtensionTrait {

    /**
     * Switch button Twig extension.
     *
     * @var SwitchButtonTwigExtension|null
     */
    private $switchButtonTwigExtension;

    /**
     * Get the Switch button Twig extension.
     *
     * @return SwitchButtonTwigExtension|null Returns the switch button Twig extension.
     */
    public function getSwitchButtonTwigExtension(): ?SwitchButtonTwigExtension {
        return $this->switchButtonTwigExtension;
    }

    /**
     * Set the switch button Twig extension.
     *
     * @param SwitchButtonTwigExtension|null $switchButtonTwigExtension The Switch button Twig extension.
     * @return self Returns this instance.
     */
    protected function setSwitchButtonTwigExtension(?SwitchButtonTwigExtension $switchButtonTwigExtension): self {
        $this->switchButtonTwigExtension = $switchButtonTwigExtension;
        return $this;
    }
}
