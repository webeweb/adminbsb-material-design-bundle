<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\AbstractCardTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Abstract modal Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractModalTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Typography.
     *
     * @var TypographyTwigExtension
     */
    private $typography;

    /**
     * Constructor.
     *
     * @param TypographyTwigExtension $typography The typography.
     */
    protected function __construct(TypographyTwigExtension $typography) {
        parent::__construct();
        $this->setTypography($typography);
    }

    /**
     * Displays an AdminBSB modal header.
     *
     * @param string $content The content.
     * @param string $icon The icon.
     * @return string Returns the AdminBSB modal header.
     */
    protected function adminBSBModalHeader($content, $icon) {

        // Initialize the parameters.
        $innerHTML = $content;
        if (null !== $icon) {
            $innerHTML = AdminBSBRendererTwigExtension::renderIcon($icon, "margin: -4px 0; vertical-align: sub;") . $innerHTML;
        }

        // Return the HTML.
        return $this->getTypography()->bootstrapHeading3Function(["class" => "modal-title", "content" => $innerHTML]);
    }

    /**
     * Get the typography.
     *
     * @return TypographyTwigExtension Returns the typography.
     */
    public function getTypography() {
        return $this->typography;
    }

    /**
     * Set the typography.
     *
     * @param TypographyTwigExtension $typography The typography.
     * @return AbstractCardTwigExtension Returns this card Twig extension.
     */
    protected function setTypography(TypographyTwigExtension $typography) {
        $this->typography = $typography;
        return $this;
    }

}
