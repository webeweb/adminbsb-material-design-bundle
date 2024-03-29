<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension;

use Twig\Environment;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AssetsTwigExtension as BaseAssetsTwigExtension;

/**
 * Assets Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class AssetsTwigExtension extends BaseAssetsTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.assets";

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Display an icon.
     *
     * @param string|null $name The name.
     * @param string|null $style The style.
     * @return string|null Returns the icon.
     */
    public function adminBSBRenderIconFunction(?string $name, string $style = null): ?string {
        return static::renderIcon($this->getTwigEnvironment(), $name, $style);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters(): array {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("adminBSBRenderIcon", [$this, "adminBSBRenderIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritDoc}
     */
    public static function renderIcon(Environment $twigEnvironment, ?string $name, string $style = null): ?string {

        $handler = explode(":", $name);
        if (1 === count($handler)) {
            array_unshift($handler, "mi");
        }
        if (2 !== count($handler)) {
            return null;
        }

        switch ($handler[0]) {

            case "mi": // Material design
                $output = (new IconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            default:
                $output = parent::renderIcon($twigEnvironment, $name, $style);
                break;
        }

        return $output;
    }
}
