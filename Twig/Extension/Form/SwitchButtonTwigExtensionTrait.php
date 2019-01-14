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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
trait SwitchButtonTwigExtensionTrait {

    /**
     * Switch button Twig extension.
     *
     * @var SwitchButtonTwigExtension
     */
    private $switchButtonTwigExtension;

    /**
     * Get the Switch button Twig extension.
     *
     * @return SwitchButtonTwigExtension Returns the switch button Twig extension.
     */
    public function getSwitchButtonTwigExtension() {
        return $this->switchButtonTwigExtension;
    }

    /**
     * Set the switch button Twig extension.
     *
     * @param SwitchButtonTwigExtension $switchButtonTwigExtension The Switch button Twig extension.
     */
    protected function setSwitchButtonTwigExtension(SwitchButtonTwigExtension $switchButtonTwigExtension = null) {
        $this->switchButtonTwigExtension = $switchButtonTwigExtension;
        return $this;
    }
}
