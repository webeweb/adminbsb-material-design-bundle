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
use WBW\Bundle\AdminBSBBundle\Theme\SkinsThemeProvider;
use WBW\Bundle\CoreBundle\DependencyInjection\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $plugins = $assets["assets"]["wbw.adminbsb.asset.adminbsb"]["plugins"];
        $skins   = SkinsThemeProvider::enumSkins();

        $treeBuilder = new TreeBuilder(WBWAdminBSBExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWAdminBSBExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
                ->scalarNode("skin")->defaultValue("red")->info("AdminBSB skin")
                    ->validate()
                        ->ifNotInArray($skins)
                        ->thenInvalid("The AdminBSB skin %s is not supported. Please choose one of " . json_encode($skins))
                    ->end()
                ->end()
                ->arrayNode("plugins")->info("AdminBSB plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The AdminBSB plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
