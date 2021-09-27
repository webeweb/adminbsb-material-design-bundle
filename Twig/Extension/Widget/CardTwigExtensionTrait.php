<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

/**
 * Card Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 */
trait CardTwigExtensionTrait {

    /**
     * Card Twig extension.
     *
     * @var CardTwigExtension|null
     */
    private $cardTwigExtension;

    /**
     * Get the Card Twig extension.
     *
     * @return CardTwigExtension|null Returns the Card Twig extension.
     */
    public function getCardTwigExtension(): ?CardTwigExtension {
        return $this->cardTwigExtension;
    }

    /**
     * Set the Card Twig extension.
     *
     * @param CardTwigExtension|null $cardTwigExtension The Card Twig extension.
     * @return self Returns this instance.
     */
    protected function setCardTwigExtension(?CardTwigExtension $cardTwigExtension): self {
        $this->cardTwigExtension = $cardTwigExtension;
        return $this;
    }
}
