<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DataTables\Provider;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\DataTables\Provider\TestDataTablesProvider;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\CoreBundle\Tests\TestCaseHelper;
use WBW\Bundle\JQuery\DataTablesBundle\Api\DataTablesOptionsInterface;

/**
 * Abstract DataTables provider test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DataTables\Provider
 */
class AbstractDataTablesProviderTest extends AbstractTestCase {

    /**
     * DataTables provider.
     *
     * @var TestDataTablesProvider
     */
    private $dataTablesProvider;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a generate() callback.
        $generate = TestCaseHelper::getRouterGenerateFunction();

        // Set the Router mock.
        $this->router->expects($this->any())->method("generate")->willReturnCallback($generate);

        // Set a Button Twig extension mock.
        $buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);

        // Set a DataTables provider mock.
        $this->dataTablesProvider = new TestDataTablesProvider($this->router, $this->translator, $buttonTwigExtension);
    }

    /**
     * Test getOptions()
     *
     * @return void
     */
    public function testGetOptions(): void {

        $obj = $this->dataTablesProvider;

        $res = $obj->getOptions();
        $this->assertInstanceOf(DataTablesOptionsInterface::class, $res);

        $this->assertEquals(2500, $res->getOption("searchDelay"));
    }
}
