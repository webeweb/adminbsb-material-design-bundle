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
 * Modal Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
trait ModalTwigExtensionTrait {

    /**
     * Modal Twig extension.
     *
     * @var ModalTwigExtension|null
     */
    private $modalTwigExtension;

    /**
     * Get the modal Twig extension.
     *
     * @return ModalTwigExtension|null Returns the modal Twig extension.
     */
    public function getModalTwigExtension(): ?ModalTwigExtension {
        return $this->modalTwigExtension;
    }

    /**
     * Set the modal Twig extension.
     *
     * @param ModalTwigExtension|null $modalTwigExtension The modal Twig extension.
     * @return self Returns this instance.
     */
    protected function setModalTwigExtension(?ModalTwigExtension $modalTwigExtension): self {
        $this->modalTwigExtension = $modalTwigExtension;
        return $this;
    }
}
