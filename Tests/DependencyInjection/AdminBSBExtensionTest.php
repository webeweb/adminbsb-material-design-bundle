<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection;

use WBW\Bundle\AdminBSBBundle\DependencyInjection\AdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin\DatetimePickerTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ColorTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtension;

/**
 * AdminBSB extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection
 * @final
 */
final class AdminBSBExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();
    }

    /**
     * Tests the load() method.
     *
     * @return void
     */
    public function testLoad() {

        $obj = new AdminBSBExtension();

        $obj->load([], $this->containerBuilder);

        // Form
        $this->assertInstanceOf(CheckboxTwigExtension::class, $this->containerBuilder->get(CheckboxTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RadioButtonTwigExtension::class, $this->containerBuilder->get(RadioButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SwitchButtonTwigExtension::class, $this->containerBuilder->get(SwitchButtonTwigExtension::SERVICE_NAME));

        // Menu
        $this->assertInstanceOf(MultiLevelMenuTwigExtension::class, $this->containerBuilder->get(MultiLevelMenuTwigExtension::SERVICE_NAME));

        // Plugin
        $this->assertInstanceOf(DatetimePickerTwigExtension::class, $this->containerBuilder->get(DatetimePickerTwigExtension::SERVICE_NAME));

        // Typography
        $this->assertInstanceOf(TypographyTwigExtension::class, $this->containerBuilder->get(TypographyTwigExtension::SERVICE_NAME));

        // UI
        $this->assertInstanceOf(BadgeTwigExtension::class, $this->containerBuilder->get(BadgeTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonTwigExtension::class, $this->containerBuilder->get(ButtonTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ColorTwigExtension::class, $this->containerBuilder->get(ColorTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(IconTwigExtension::class, $this->containerBuilder->get(IconTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ModalTwigExtension::class, $this->containerBuilder->get(ModalTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(PreloaderTwigExtension::class, $this->containerBuilder->get(PreloaderTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarTwigExtension::class, $this->containerBuilder->get(ProgressBarTwigExtension::SERVICE_NAME));

        // Widget
        $this->assertInstanceOf(CardTwigExtension::class, $this->containerBuilder->get(CardTwigExtension::SERVICE_NAME));
    }

}
