<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

/**
 * Infobox Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 */
trait InfoboxTwigExtensionTrait {

    /**
     * Infobox Twig extension.
     *
     * @var InfoboxTwigExtension|null
     */
    private $infoboxTwigExtension;

    /**
     * Get the Infobox Twig extension.
     *
     * @return InfoboxTwigExtension|null Returns the Infobox Twig extension.
     */
    public function getInfoboxTwigExtension(): ?InfoboxTwigExtension {
        return $this->infoboxTwigExtension;
    }

    /**
     * Set the Infobox Twig extension.
     *
     * @param InfoboxTwigExtension|null $infoboxTwigExtension The Infobox Twig extension.
     * @return self Returns this instance.
     */
    protected function setInfoboxTwigExtension(?InfoboxTwigExtension $infoboxTwigExtension): self {
        $this->infoboxTwigExtension = $infoboxTwigExtension;
        return $this;
    }
}
