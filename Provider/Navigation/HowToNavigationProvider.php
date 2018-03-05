<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation;

use Symfony\Component\Routing\RouterInterface;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * How-to navigation provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation
 * @final
 */
final class HowToNavigationProvider {

    /**
     * Router.
     *
     * @var RouterInterface
     */
    private $router;

    /**
     * Constructor.
     *
     * @param RouterInterface $router The router service.
     */
    public function __construct(RouterInterface $router) {
        $this->router = $router;
    }

    /**
     * Get the breadcrumb.
     *
     * @return BreadcrumbNode Returns the breadcrumb.
     */
    public function getBreadcrumb() {

        // Get the table of contents.
        $tableContents = $this->getTableContents();

        // Create the breadcrumb node.
        $breadcrumbRoot = new BreadcrumbNode("navigation.how-to", "book");

        // Initialize the route.
        $route = "absbmd_howto_index";

        // Handle each page.
        foreach ($tableContents as $current) {
            $breadcrumb = new BreadcrumbNode($current["title"], "bookmark", $route);
            $breadcrumb->setUrl($this->router->generate($route, ["page" => $current["page"]]));
            $breadcrumbRoot->addNode($breadcrumb);
        }

        // Return the breadcrumb.
        return $breadcrumbRoot;
    }

    /**
     * Get the table of contents.
     *
     * @return array Returns the table of contents.
     */
    public function getTableContents() {

        // Initialize the table of contents.
        $tableContents   = [];
        $tableContents[] = ["title" => "Table of contents", "page" => "index"];
        $tableContents[] = ["title" => "Twig extension > Typography > Headings", "page" => "extension:typography:heading"];
        $tableContents[] = ["title" => "Twig extension > UI > Alerts", "page" => "extension:ui:alert"];
        $tableContents[] = ["title" => "Twig extension > UI > Badges", "page" => "extension:ui:badge"];
        $tableContents[] = ["title" => "Twig extension > UI > Buttons", "page" => "extension:ui:button"];
        $tableContents[] = ["title" => "Twig extension > UI > Icons", "page" => "extension:ui:icon"];
        $tableContents[] = ["title" => "Twig extension > UI > Labels", "page" => "extension:ui:label"];
        $tableContents[] = ["title" => "Twig extension > UI > Preloaders", "page" => "extension:ui:preloader"];
        $tableContents[] = ["title" => "Twig extension > UI > Progress Bars", "page" => "extension:ui:progress-bar"];
        $tableContents[] = ["title" => "Twig extension > Widgets > Cards", "page" => "extension:widget:card"];
        $tableContents[] = ["title" => "Twig extension > Form > Checkbox", "page" => "extension:form:checkbox"];
        $tableContents[] = ["title" => "Twig extension > Form > Datetime pickers", "page" => "extension:form:datetime-picker"];
        $tableContents[] = ["title" => "Twig extension > Form > Radio buttons", "page" => "extension:form:radio-button"];
        $tableContents[] = ["title" => "Twig extension > Form > Switch buttons", "page" => "extension:form:switch-button"];
        $tableContents[] = ["title" => "Providers", "page" => "providers:index"];
        $tableContents[] = ["title" => "Providers > ApplicationProviderInterface", "page" => "provider:application"];
        $tableContents[] = ["title" => "Providers > BreadcrumbsProviderInterface", "page" => "provider:breadcrumbs"];
        $tableContents[] = ["title" => "Providers > NavigationsProviderInterface", "page" => "provider:navigation"];

        // Return the table of contents.
        return $tableContents;
    }

}
