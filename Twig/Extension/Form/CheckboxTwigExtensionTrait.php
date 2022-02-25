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
 * Checkbox Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Form
 */
trait CheckboxTwigExtensionTrait {

    /**
     * Checkbox Twig extension.
     *
     * @var CheckboxTwigExtension|null
     */
    private $checkboxTwigExtension;

    /**
     * Get the checkbox Twig extension.
     *
     * @return CheckboxTwigExtension|null Returns the checkbox Twig extension.
     */
    public function getCheckboxTwigExtension(): ?CheckboxTwigExtension {
        return $this->checkboxTwigExtension;
    }

    /**
     * Set the checkbox Twig extension.
     *
     * @param CheckboxTwigExtension|null $checkboxTwigExtension The checkbox Twig extension.
     * @return self Returns this instance.
     */
    protected function setCheckboxTwigExtension(?CheckboxTwigExtension $checkboxTwigExtension): self {
        $this->checkboxTwigExtension = $checkboxTwigExtension;
        return $this;
    }
}
