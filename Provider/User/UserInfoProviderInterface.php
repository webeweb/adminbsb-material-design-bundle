<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User;

/**
 * User info provider interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User
 */
interface UserInfoProviderInterface {

	/**
	 * Default template.
	 */
	const DEFAULT_TEMPLATE = "@ABSBMD/html/body/section/aside/div.user-info.html.twig";

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.user_info";

	/**
	 * Get the template.
	 *
	 * @return string Returns the template name.
	 */
	public function getTemplate();

	/**
	 * Provides a register link.
	 *
	 * @return boolean Returns true in case of success, false otherwise.
	 */
	public function provideRegisterLink();

	/**
	 * Provides a resseting link.
	 *
	 * @return boolean Returns true in case of success, false otherwise.
	 */
	public function provideResettingLink();
}
