<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestModalTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalTwigExtension;

/**
 * Modal Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ModalTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Typography Twig extension.
     *
     * @var TypographyTwigExtension
     */
    private $typographyTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Typography Twig extension mock.
        $this->typographyTwigExtension = new TypographyTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests setModalTwigExtension()
     *
     * @return void
     */
    public function testSetModalTwigExtension(): void {

        // Set a Modal Twig extension mock.
        $modalTwigExtension = new ModalTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $obj = new TestModalTwigExtensionTrait();

        $obj->setModalTwigExtension($modalTwigExtension);
        $this->assertSame($modalTwigExtension, $obj->getModalTwigExtension());
    }
}
