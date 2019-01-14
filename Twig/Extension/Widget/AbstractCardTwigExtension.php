<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtensionTrait;

/**
 * Abstract card twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 * @abstract
 */
abstract class AbstractCardTwigExtension extends AbstractTwigExtension {

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
     * Displays an AdminBSB card header.
     *
     * @param string $content The content.
     * @param string $description The description.
     * @param string $icon The icon.
     * @return string Returns the AdminBSB card header.
     */
    protected function adminBSBCardHeader($content, $description, $icon) {

        // Initialize the parameters.
        $innerHTML = $content;
        if (null !== $description) {
            $innerHTML .= static::coreHTMLElement("small", $description);
        }
        if (null !== $icon) {
            $innerHTML = AdminBSBRendererTwigExtension::renderIcon($icon, "margin: -4px 4px 0 0; vertical-align: sub;") . $innerHTML;
        }

        // Return the HTML.
        return $this->getTypography()->bootstrapHeading2Function(["class" => "card-header", "content" => $innerHTML]);
    }
}
