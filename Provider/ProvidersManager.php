<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider;

use Twig_Environment;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application\ApplicationProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application\DefaultApplicationProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Breadcrumbs\BreadcrumbsProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Breadcrumbs\DefaultBreadcrumbsProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownHookProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownNotificationsProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownTasksProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownHookProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownNotificationsProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownTasksProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\DefaultFooterProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\FooterProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\DefaultNavigationProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\NavigationProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\DefaultSearchProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\SearchProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\DefaultUserInfoProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\UserInfoProviderInterface;

/**
 * Providers manager.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider
 * @final
 */
final class ProvidersManager {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.manager";

	/**
	 * Application provider.
	 *
	 * @var ApplicationProviderInterface
	 */
	private $applicationProvider;

	/**
	 * Breadcrumbs provider.
	 *
	 * @var BreadcrumbsProviderInterface
	 */
	private $breadcrumbsProvider;

	/**
	 * Drop down hook provider.
	 *
	 * @var DropDownHookProviderInterface
	 */
	private $dropDownHookProvider;

	/**
	 * Drop down notifications provider.
	 *
	 * @var DropDownNotificationsProviderInterface
	 */
	private $dropDownNotificationsProvider;

	/**
	 * Drop down tasks provider.
	 *
	 * @var DropDownTasksProviderInterface
	 */
	private $dropDownTasksProvider;

	/**
	 * Footer provider.
	 *
	 * @var FooterProviderInterface
	 */
	private $footerProvider;

	/**
	 * Navigation provider.
	 *
	 * @var NavigationProviderInterface
	 */
	private $navigationProvider;

	/**
	 * Search provider.
	 *
	 * @var SearchProviderInterface
	 */
	private $searchProvider;

	/**
	 * Twig service.
	 *
	 * @var Twig_Environment
	 */
	private $twig;

	/**
	 * User info provider.
	 *
	 * @var UserInfoProviderInterface
	 */
	private $userInfoProvider;

	/**
	 * Constructor.
	 *
	 * @param Twig_Environment $twig The Twig service.
	 */
	public function __construct(Twig_Environment $twig) {
		$this->twig = $twig;
	}

	/**
	 * Get the application provider.
	 *
	 * @return ApplicationProviderInterface Returns the application provider.
	 */
	public function getApplicationProvider() {
		return !is_null($this->applicationProvider) ? $this->applicationProvider : new DefaultApplicationProvider();
	}

	/**
	 * Get the breadcrumbs provider.
	 *
	 * @return BreadcrumbsProviderInterface Returns the breadcrumbs provider.
	 */
	public function getBreadcrumbsProvider() {
		return !is_null($this->breadcrumbsProvider) ? $this->breadcrumbsProvider : new DefaultBreadcrumbsProvider();
	}

	/**
	 * Get the drop down hook provider.
	 *
	 * @return DropDownHookProviderInterface Returns the drop down hook provider.
	 */
	public function getDropDownHookProvider() {
		return !is_null($this->dropDownHookProvider) ? $this->dropDownHookProvider : new DefaultDropDownHookProvider();
	}

	/**
	 * Get the drop down notifications provider.
	 *
	 * @return DropDownNotificationsProviderInterface Returns the drop down notifications provider.
	 */
	public function getDropDownNotificationsProvider() {
		return !is_null($this->dropDownNotificationsProvider) ? $this->dropDownNotificationsProvider : new DefaultDropDownNotificationsProvider();
	}

	/**
	 * Get the drop down tasks provider.
	 *
	 * @return DropDownTasksProviderInterface Returns the drop down tasks provider.
	 */
	public function getDropDownTasksProvider() {
		return !is_null($this->dropDownTasksProvider) ? $this->dropDownTasksProvider : new DefaultDropDownTasksProvider();
	}

	/**
	 * Get the footer provider.
	 *
	 * @return FooterProviderInterface Returns the footer provider.
	 */
	public function getFooterProvider() {
		return !is_null($this->footerProvider) ? $this->footerProvider : new DefaultFooterProvider();
	}

	/**
	 * Get the navigation provider.
	 *
	 * @return NavigationProviderInterface Returns the navigation provider.
	 */
	public function getNavigationProvider() {
		return !is_null($this->navigationProvider) ? $this->navigationProvider : new DefaultNavigationProvider();
	}

	/**
	 * Get the search provider.
	 *
	 * @return SearchProviderInterface Returns the search provider.
	 */
	public function getSearchProvider() {
		return !is_null($this->searchProvider) ? $this->searchProvider : new DefaultSearchProvider();
	}

	/**
	 * Get the user info provider.
	 *
	 * @return UserInfoProviderInterface Returns the user info provider.
	 */
	public function getUserInfoProvider() {
		return !is_null($this->userInfoProvider) ? $this->userInfoProvider : new DefaultUserInfoProvider();
	}

	/**
	 * Register the providers.
	 *
	 * @return void
	 */
	public function register() {
		$this->twig->addGlobal("ApplicationProvider", $this->getApplicationProvider());
		$this->twig->addGlobal("BreadcrumbsProvider", $this->getBreadcrumbsProvider());
		$this->twig->addGlobal("DropDownHookProvider", $this->getDropDownHookProvider());
		$this->twig->addGlobal("DropDownNotificationsProvider", $this->getDropDownNotificationsProvider());
		$this->twig->addGlobal("DropDownTasksProvider", $this->getDropDownTasksProvider());
		$this->twig->addGlobal("FooterProvider", $this->getFooterProvider());
		$this->twig->addGlobal("NavigationProvider", $this->getNavigationProvider());
		$this->twig->addGlobal("SearchProvider", $this->getSearchProvider());
		$this->twig->addGlobal("UserInfoProvider", $this->getUserInfoProvider());
	}

	/**
	 * Set the application provider.
	 *
	 * @param ApplicationProviderInterface $applicationProvider The application provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setApplicationProvider(ApplicationProviderInterface $applicationProvider) {
		$this->applicationProvider = $applicationProvider;
		return $this;
	}

	/**
	 * Set the breadcrumbs provider.
	 *
	 * @param BreadcrumbsProviderInterface $breadcrumbsProvider The breadcrumbs provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setBreadcrumbsProvider(BreadcrumbsProviderInterface $breadcrumbsProvider) {
		$this->breadcrumbsProvider = $breadcrumbsProvider;
		return $this;
	}

	/**
	 * Set the drop down hook provider.
	 *
	 * @param DropDownHookProviderInterface $dropDownHookProvider The drop down hook provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setDropDownHookProvider(DropDownHookProviderInterface $dropDownHookProvider) {
		$this->dropDownHookProvider = $dropDownHookProvider;
		return $this;
	}

	/**
	 * Set the drop down notifications provider.
	 *
	 * @param DropDownNotificationsProviderInterface $dropDownNotificationsProvider The drop down notifications provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setDropDownNotificationsProvider(DropDownNotificationsProviderInterface $dropDownNotificationsProvider) {
		$this->dropDownNotificationsProvider = $dropDownNotificationsProvider;
		return $this;
	}

	/**
	 * Set the drop down tasks provider.
	 *
	 * @param DropDownTasksProviderInterface $dropDownTasksProvider The drop down task provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setDropDownTasksProvider(DropDownTasksProviderInterface $dropDownTasksProvider) {
		$this->dropDownTasksProvider = $dropDownTasksProvider;
		return $this;
	}

	/**
	 * Set the footer provider.
	 *
	 * @param FooterProviderInterface $footerProvider The footer priovider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setFooterProvider(FooterProviderInterface $footerProvider) {
		$this->footerProvider = $footerProvider;
		return $this;
	}

	/**
	 * Set the navigation provider.
	 *
	 * @param NavigationProviderInterface $navigationProvider The navigation provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setNavigationProvider(NavigationProviderInterface $navigationProvider) {
		$this->navigationProvider = $navigationProvider;
		return $this;
	}

	/**
	 * Set the search provider.
	 *
	 * @param SearchProviderInterface $searchProvider The search provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setSearchProvider(SearchProviderInterface $searchProvider) {
		$this->searchProvider = $searchProvider;
		return $this;
	}

	/**
	 * Set the user info provider.
	 *
	 * @param UserInfoProviderInterface $userInfoProvider The user info provider.
	 * @return ProvidersSetter Returns the providers setter.
	 */
	public function setUserInfoProvider(UserInfoProviderInterface $userInfoProvider) {
		$this->userInfoProvider = $userInfoProvider;
		return $this;
	}

}
