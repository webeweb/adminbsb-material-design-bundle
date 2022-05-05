<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection;

use Exception;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;
use WBW\Bundle\AdminBSBBundle\DependencyInjection\Configuration;
use WBW\Bundle\AdminBSBBundle\DependencyInjection\WBWAdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin\DatetimePickerTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\InfoboxTwigExtension;

/**
 * AdminBSB extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection
 */
class WBWAdminBSBExtensionTest extends AbstractTestCase {

    /**
     * Configs.
     *
     * @var array
     */
    private $configs;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a configs array mock.
        $this->configs = [
            WBWAdminBSBExtension::EXTENSION_ALIAS => [
                "twig" => true,
            ],
        ];
    }

    /**
     * Tests getAlias()
     *
     * @return void
     */
    public function testGetAlias(): void {

        $obj = new WBWAdminBSBExtension();

        $this->assertEquals(WBWAdminBSBExtension::EXTENSION_ALIAS, $obj->getAlias());
    }

    /**
     * Tests getConfiguration()
     *
     * @return void
     */
    public function testGetConfiguration(): void {

        $obj = new WBWAdminBSBExtension();

        $this->assertInstanceOf(Configuration::class, $obj->getConfiguration([], $this->containerBuilder));
    }

    /**
     * Tests load()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testLoad(): void {

        // Set the Container builder.
        $this->containerBuilder->getParameterBag()->set("wbw_bootstrap.version", 3);

        $obj = new WBWAdminBSBExtension();

        $obj->load($this->configs, $this->containerBuilder);

        // Twig extensions
        $this->assertInstanceOf(AssetsTwigExtension::class, $this->containerBuilder->get(AssetsTwigExtension::SERVICE_NAME));

        // Form Twig extensions
        $this->assertInstanceOf(CheckboxTwigExtension::class, $this->containerBuilder->get(CheckboxTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RadioButtonTwigExtension::class, $this->containerBuilder->get(RadioButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SwitchButtonTwigExtension::class, $this->containerBuilder->get(SwitchButtonTwigExtension::SERVICE_NAME));

        // Menu Twig extensions
        $this->assertInstanceOf(MultiLevelMenuTwigExtension::class, $this->containerBuilder->get(MultiLevelMenuTwigExtension::SERVICE_NAME));

        // Plugin Twig extensions
        $this->assertInstanceOf(DatetimePickerTwigExtension::class, $this->containerBuilder->get(DatetimePickerTwigExtension::SERVICE_NAME));

        // Typography Twig extensions
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // UI Twig extensions
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        //$this->assertInstanceOf(ColorTwigExtension::class, $this->containerBuilder->get(ColorTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(IconTwigExtension::class, $this->containerBuilder->get(IconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ModalTwigExtension::class, $this->containerBuilder->get(ModalTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(PreloaderTwigExtension::class, $this->containerBuilder->get(PreloaderTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // Widget Twig extensions
        $this->assertInstanceOf(CardTwigExtension::class, $this->containerBuilder->get(CardTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InfoboxTwigExtension::class, $this->containerBuilder->get(InfoboxTwigExtension::SERVICE_NAME));
    }

    /**
     * Tests load()
     *
     * @return void
     */
    public function testLoadWithoutTwig(): void {

        // Set the configs mock.
        $this->configs[WBWAdminBSBExtension::EXTENSION_ALIAS]["twig"] = false;

        $obj = new WBWAdminBSBExtension();

        $this->assertNull($obj->load($this->configs, $this->containerBuilder));

        try {

            $this->containerBuilder->get(CheckboxTwigExtension::SERVICE_NAME);
        } catch (Exception $ex) {

            $this->assertInstanceOf(ServiceNotFoundException::class, $ex);
            $this->assertStringContainsString(CheckboxTwigExtension::SERVICE_NAME, $ex->getMessage());
        }
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw_adminbsb", WBWAdminBSBExtension::EXTENSION_ALIAS);
    }
}
