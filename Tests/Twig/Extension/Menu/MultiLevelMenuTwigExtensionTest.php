<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Menu;

use Symfony\Component\HttpFoundation\Request;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Library\Symfony\Assets\Navigation\HeaderNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Multi level menu Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Menu
 */
class MultiLevelMenuTwigExtensionTest extends AbstractTestCase {

    /**
     * Navigation tree.
     *
     * @var NavigationTree
     */
    private $navigationTree;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Navigation tree mock.
        $this->navigationTree = new NavigationTree("Navigation tree");

        $this->navigationTree->addNode(new HeaderNode("Main navigation"));

        $this->navigationTree->addNode(new NavigationNode("Users", "person"));
        $this->navigationTree->getLastNode()->setEnable(true);

        $this->navigationTree->getLastNode()->addNode(new NavigationNode("New", "add_circle_outline", "/app/users/new"));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);

        $this->navigationTree->getLastNode()->addNode(new NavigationNode("List", "view_list", "/app/users/index"));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);

        $this->navigationTree->getLastNode()->addNode(new BreadcrumbNode("Edit", "pencil", "/app/users/edit"));
        $this->navigationTree->getLastNode()->getLastNode()->setEnable(true);
    }

    /**
     * Tests adminBSBMultiLevelMenuFunction()
     *
     * @return void
     */
    public function testAdminBSBMultiLevelMenuFunction(): void {

        $obj = new MultiLevelMenuTwigExtension($this->twigEnvironment, $this->translator);

        $res = file_get_contents(__DIR__ . "/MultiLevelMenuTwigExtensionTest.testAdminBSBMultiLevelMenuFunction.html.txt");

        $this->assertEquals($res, $obj->adminBSBMultiLevelMenuFunction($this->navigationTree, Request::create("/app/users/index")));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new MultiLevelMenuTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBMultiLevelMenu", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBMultiLevelMenuFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.menu.multi_level_menu", MultiLevelMenuTwigExtension::SERVICE_NAME);

        $obj = new MultiLevelMenuTwigExtension($this->twigEnvironment, $this->translator);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
    }
}
