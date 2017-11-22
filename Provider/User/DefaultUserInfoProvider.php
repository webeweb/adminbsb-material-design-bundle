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
 * Default user info provider.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User
 * @final
 */
final class DefaultUserInfoProvider implements UserInfoProviderInterface {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO.
	}

	/**
	 * {@inheritdoc}
	 */
	public function getTemplate() {
		return self::DEFAULT_TEMPLATE;
	}

	/**
	 * {@inheritdoc}
	 */
	public function provideRegisterLink() {
		return false;
	}

	/**
	 * {@inheritdoc}
	 */
	public function provideResettingLink() {
		return false;
	}

}
