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
     * @var CardTwigExtension
     */
    private $CardTwigExtension;

    /**
     * Get the Card Twig extension.
     *
     * @return CardTwigExtension Returns the Card Twig extension.
     */
    public function getCardTwigExtension() {
        return $this->CardTwigExtension;
    }

    /**
     * Set the Card Twig extension.
     *
     * @param CardTwigExtension $CardTwigExtension The Card Twig extension.
     */
    protected function setCardTwigExtension(CardTwigExtension $CardTwigExtension = null) {
        $this->CardTwigExtension = $CardTwigExtension;
        return $this;
    }
}
