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
     * @var RadioButtonTwigExtension
     */
    private $radioButtonTwigExtension;

    /**
     * Get the Radio button Twig extension.
     *
     * @return RadioButtonTwigExtension Returns the radio button Twig extension.
     */
    public function getRadioButtonTwigExtension() {
        return $this->radioButtonTwigExtension;
    }

    /**
     * Set the radio button Twig extension.
     *
     * @param RadioButtonTwigExtension $radioButtonTwigExtension The Radio button Twig extension.
     */
    protected function setRadioButtonTwigExtension(RadioButtonTwigExtension $radioButtonTwigExtension = null) {
        $this->radioButtonTwigExtension = $radioButtonTwigExtension;
        return $this;
    }
}
