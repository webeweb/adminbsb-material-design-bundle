<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Widget\TestCardTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtension;

/**
 * Card Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 */
class CardTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Typography Twig extension.
     *
     * @var TypographyTwigExtension
     */
    private $typographyTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Typography Twig extension mock.
        $this->typographyTwigExtension = new TypographyTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the setCardTwigExtension() method.
     *
     * @return void
     */
    public function testSetCardTwigExtension() {

        // Set a Card Twig extension mock.
        $CardTwigExtension = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $obj = new TestCardTwigExtensionTrait();

        $obj->setCardTwigExtension($CardTwigExtension);
        $this->assertSame($CardTwigExtension, $obj->getCardTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestCardTwigExtensionTrait();

        $this->assertNull($obj->getCardTwigExtension());
    }
}
