<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use WBW\Bundle\AdminBSBBundle\Provider\Theme\SkinThemeProviderInterface;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * Enumerate the skins.
     *
     * @return string[] Returns the skins enumeration.
     */
    public static function enumSkins(): array {

        return [
            SkinThemeProviderInterface::SKIN_RED,
            SkinThemeProviderInterface::SKIN_PINK,
            SkinThemeProviderInterface::SKIN_PURPLE,
            SkinThemeProviderInterface::SKIN_DEEP_PURPLE,
            SkinThemeProviderInterface::SKIN_INDIGO,
            SkinThemeProviderInterface::SKIN_BLUE,
            SkinThemeProviderInterface::SKIN_LIGHT_BLUE,
            SkinThemeProviderInterface::SKIN_CYAN,
            SkinThemeProviderInterface::SKIN_TEAL,
            SkinThemeProviderInterface::SKIN_GREEN,
            SkinThemeProviderInterface::SKIN_LIGHT_GREEN,
            SkinThemeProviderInterface::SKIN_LIME,
            SkinThemeProviderInterface::SKIN_YELLOW,
            SkinThemeProviderInterface::SKIN_AMBER,
            SkinThemeProviderInterface::SKIN_ORANGE,
            SkinThemeProviderInterface::SKIN_DEEP_ORANGE,
            SkinThemeProviderInterface::SKIN_BROWN,
            SkinThemeProviderInterface::SKIN_GREY,
            SkinThemeProviderInterface::SKIN_BLUE_GREY,
            SkinThemeProviderInterface::SKIN_BLACK,
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $plugins = $assets["assets"]["wbw.adminbsb.asset.adminbsb"]["plugins"];
        $skins   = static::enumSkins();

        $treeBuilder = new TreeBuilder(WBWAdminBSBExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWAdminBSBExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->booleanNode("providers")->defaultTrue()->info("Load providers")->end()
                ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
                ->arrayNode("plugins")->info("AdminBSB plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The AdminBSB plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                    ->end()
                ->end()
                ->scalarNode("skin")->defaultValue("red")->info("AdminBSB skin")
                    ->validate()
                        ->ifNotInArray($skins)
                        ->thenInvalid("The AdminBSB skin %s is not supported. Please choose one of " . json_encode($skins))
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
