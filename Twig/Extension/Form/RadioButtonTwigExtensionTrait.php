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
 * Radio button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
trait RadioButtonTwigExtensionTrait {

    /**
     * Radio button Twig extension.
     *
     * @var RadioButtonTwigExtension|null
     */
    private $radioButtonTwigExtension;

    /**
     * Get the Radio button Twig extension.
     *
     * @return RadioButtonTwigExtension|null Returns the radio button Twig extension.
     */
    public function getRadioButtonTwigExtension(): ?RadioButtonTwigExtension {
        return $this->radioButtonTwigExtension;
    }

    /**
     * Set the radio button Twig extension.
     *
     * @param RadioButtonTwigExtension|null $radioButtonTwigExtension The Radio button Twig extension.
     * @return self Returns this instance.
     */
    protected function setRadioButtonTwigExtension(?RadioButtonTwigExtension $radioButtonTwigExtension): self {
        $this->radioButtonTwigExtension = $radioButtonTwigExtension;
        return $this;
    }
}
