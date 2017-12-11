<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation;

use Symfony\Component\Routing\Router;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * How-to navigation provider.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation
 * @final
 */
final class HowToNavigationProvider {

	/**
	 * Router.
	 *
	 * @var Router
	 */
	private $router;

	/**
	 * Constructor.
	 *
	 * @param Router $router The router service.
	 */
	public function __construct(Router $router) {
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
		$breadcrumbRoot = new BreadcrumbNode("How-to", "book");

		// Initialize the route.
		$route = "absbmd_howto_index";

		// Handle each page.
		foreach ($tableContents as $page) {
			$breadcrumbRoot->addNode(new BreadcrumbNode($page["title"], "bookmark", $route));
			$breadcrumbRoot->getLastNode()->setUrl($this->router->generate($route, ["page" => $page["page"]]));
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
		$tableContents	 = [];
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
