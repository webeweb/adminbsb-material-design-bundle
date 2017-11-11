<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown;

/**
 * Drop down "Tasks" provider interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown
 */
interface DropDownTasksProviderInterface {

	/**
	 * Default template.
	 */
	const DEFAULT_TEMPLATE = "@ABSBMD/html/body/nav/div/div/ul/li.dropdown_tasks.html.twig";

	/**
	 * Drop down tasks provider service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.drop_down_tasks";

	/**
	 * Get the tasks.
	 *
	 * @return array Returns the tasks.
	 */
	public function getTasks();

	/**
	 * Get the template.
	 *
	 * @return string Returns the template name.
	 */
	public function getTemplate();
}
