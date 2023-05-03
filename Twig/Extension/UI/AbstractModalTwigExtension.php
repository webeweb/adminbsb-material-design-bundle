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

use Twig\Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtensionTrait;

/**
 * Abstract modal Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractModalTwigExtension extends AbstractTwigExtension {

    use TypographyTwigExtensionTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param TypographyTwigExtension $typographyTwigExtension The Typography Twig extension.
     */
    public function __construct(Environment $twigEnvironment, TypographyTwigExtension $typographyTwigExtension) {
        parent::__construct($twigEnvironment);

        $this->setTypographyTwigExtension($typographyTwigExtension);
    }

    /**
     * Display an AdminBSB modal header.
     *
     * @param string $content The content.
     * @param string|null $icon The icon.
     * @return string Returns the AdminBSB modal header.
     */
    protected function adminBSBModalHeader(string $content, ?string $icon): string {

        $innerHTML = $content;
        if (null !== $icon) {
            $innerHTML = AssetsTwigExtension::renderIcon($this->getTwigEnvironment(), $icon, "margin: -4px 0; vertical-align: sub;") . $innerHTML;
        }

        return $this->getTypographyTwigExtension()->bootstrapHeading3Function([
            "class"   => "modal-title",
            "content" => $innerHTML,
        ]);
    }
}
