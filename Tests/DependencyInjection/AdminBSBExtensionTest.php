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

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\KernelInterface;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\AdminBSBBundle\DependencyInjection\AdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxFormTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonFormTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonFormTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\DeletedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\InsertedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\ItalicTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\MarkedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\SmallTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\StrikeThroughTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\StrongTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\UnderlinedTypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\AlertUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ColorUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\LabelUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarUITwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardWidgetTwigExtension;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * AdminBSB extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DependencyInjection
 * @final
 */
final class AdminBSBExtensionTest extends AbstractFrameworkTestCase {

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
        $this->assertInstanceOf(CheckboxFormTwigExtension::class, $this->containerBuilder->get(CheckboxFormTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(RadioButtonFormTwigExtension::class, $this->containerBuilder->get(RadioButtonFormTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SwitchButtonFormTwigExtension::class, $this->containerBuilder->get(SwitchButtonFormTwigExtension::SERVICE_NAME));

        // Typography
        $this->assertInstanceOf(DeletedTypographyTwigExtension::class, $this->containerBuilder->get(DeletedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(HeadingTypographyTwigExtension::class, $this->containerBuilder->get(HeadingTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(InsertedTypographyTwigExtension::class, $this->containerBuilder->get(InsertedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ItalicTypographyTwigExtension::class, $this->containerBuilder->get(ItalicTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(MarkedTypographyTwigExtension::class, $this->containerBuilder->get(MarkedTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(SmallTypographyTwigExtension::class, $this->containerBuilder->get(SmallTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrikeThroughTypographyTwigExtension::class, $this->containerBuilder->get(StrikeThroughTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(StrongTypographyTwigExtension::class, $this->containerBuilder->get(StrongTypographyTwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(UnderlinedTypographyTwigExtension::class, $this->containerBuilder->get(UnderlinedTypographyTwigExtension::SERVICE_NAME));

        // UI
        $this->assertInstanceOf(AlertUITwigExtension::class, $this->containerBuilder->get(AlertUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(BadgeUITwigExtension::class, $this->containerBuilder->get(BadgeUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ButtonUITwigExtension::class, $this->containerBuilder->get(ButtonUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ColorUITwigExtension::class, $this->containerBuilder->get(ColorUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(IconUITwigExtension::class, $this->containerBuilder->get(IconUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(LabelUITwigExtension::class, $this->containerBuilder->get(LabelUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ModalUITwigExtension::class, $this->containerBuilder->get(ModalUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(PreloaderUITwigExtension::class, $this->containerBuilder->get(PreloaderUITwigExtension::SERVICE_NAME));
        $this->assertInstanceOf(ProgressBarUITwigExtension::class, $this->containerBuilder->get(ProgressBarUITwigExtension::SERVICE_NAME));

        // Widget
        $this->assertInstanceOf(CardWidgetTwigExtension::class, $this->containerBuilder->get(CardWidgetTwigExtension::SERVICE_NAME));
    }

}
