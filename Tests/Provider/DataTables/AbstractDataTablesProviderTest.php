<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\DataTables;

use WBW\Bundle\AdminBSBBundle\Provider\DataTables\AbstractDataTablesProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Provider\DataTables\TestDataTablesProvider;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\JQuery\DataTablesBundle\API\DataTablesOptionsInterface;

/**
 * Abstract DataTables provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\DataTables
 */
class AbstractDataTablesProviderTest extends AbstractTestCase {

    /**
     * Button Twig extension.
     *
     * @var ButtonTwigExtension
     */
    private $buttonTwigExtension;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Button Twig extension mock.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the getOptions() method.
     *
     * @return void
     */
    public function testGetOptions(): void {

        $obj = new TestDataTablesProvider($this->router, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getOptions();
        $this->assertInstanceOf(DataTablesOptionsInterface::class, $res);

        $this->assertEquals(2500, $res->getOption("searchDelay"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("160px", AbstractDataTablesProvider::COLUMN_WIDTH_ACTIONS);
        $this->assertEquals("120px", AbstractDataTablesProvider::COLUMN_WIDTH_DATE);
        $this->assertEquals("160px", AbstractDataTablesProvider::COLUMN_WIDTH_LABEL);
        $this->assertEquals("80px", AbstractDataTablesProvider::COLUMN_WIDTH_THUMBNAIL);
        $this->assertEquals("40px", AbstractDataTablesProvider::COLUMN_WIDTH_UNIT);
    }
}