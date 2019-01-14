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

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtensionTrait;

/**
 * Abstract modal Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractModalTwigExtension extends AbstractTwigExtension {

    use TypographyTwigExtensionTrait;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     * @param TypographyTwigExtension $typographyTwigExtension The typography.
     */
    protected function __construct(Twig_Environment $twigEnvironment, TypographyTwigExtension $typographyTwigExtension) {
        parent::__construct($twigEnvironment);
        $this->setTypographyTwigExtension($typographyTwigExtension);
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
            $innerHTML = RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $icon, "margin: -4px 0; vertical-align: sub;") . $innerHTML;
        }

        // Return the HTML.
        return $this->getTypographyTwigExtension()->bootstrapHeading3Function(["class" => "modal-title", "content" => $innerHTML]);
    }
}
