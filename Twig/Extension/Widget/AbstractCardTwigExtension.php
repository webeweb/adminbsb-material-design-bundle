<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Abstract card twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 * @abstract
 */
abstract class AbstractCardTwigExtension extends AbstractAdminBSBTwigExtension {

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
            $innerHTML .= self::bootstrapHTMLElement("small", $description);
        }
        if (null !== $icon) {
            $innerHTML = AdminBSBRendererTwigExtension::renderIcon($icon, "margin: -4px 4px 0 0; vertical-align: sub;") . $innerHTML;
        }

        // Return the HTML.
        return $this->getTypography()->bootstrapHeading2Function(["class" => "card-header", "content" => $innerHTML]);
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
