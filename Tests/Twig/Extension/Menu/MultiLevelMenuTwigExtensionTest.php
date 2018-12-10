<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Menu;

use Symfony\Component\HttpFoundation\Request;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu\MultiLevelMenuTwigExtension;
use WBW\Bundle\BootstrapBundle\Navigation\BreadcrumbNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;

/**
 * Multi level menu Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
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
    protected function setUp() {
        parent::setUp();

        // Set a Translator mock.
        $this->translator->expects($this->any())->method("trans")->willReturnCallback(function($id, array $parameters = array(), $domain = null, $locale = null) {
            return $id;
        });

        // Set a Navigation tree mock.
        $this->navigationTree = new NavigationTree("Main navigation");

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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MultiLevelMenuTwigExtension($this->translator);

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBMultiLevelMenu", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBMultiLevelMenuFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBMultiLevelMenuFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMultiLevelMenuFunction() {

        $obj = new MultiLevelMenuTwigExtension($this->translator);

        $res = <<<'EOT'
<li class="header">Main navigation</li>
<li class="active">
<a class="menu-toggle"><i class="material-icons">person</i><span>Users</span></a>
<ul class="ml-menu">
<li>
<a href="/app/users/new"><i class="material-icons">add_circle_outline</i><span>New</span></a>
</li>
<li class="active">
<a href="/app/users/index"><i class="material-icons">view_list</i><span>List</span></a>
</li>
</ul>
</li>
EOT;

        $this->assertEquals($res, $obj->adminBSBMultiLevelMenuFunction($this->navigationTree, Request::create("/app/users/index")));
    }

}
