<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Color;

/**
 * Default color provider.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Color
 * @final
 */
final class DefaultColorProvider implements ColorProviderInterface {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO.
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorAmber() {
		return ["amber" => ["500" => "#FFC107"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorBlack() {
		return ["black" => ["500" => "#000000"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorBlue() {
		return ["blue" => ["500" => "#2196F3"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorBlueGrey() {
		return ["blue-grey" => ["500" => "#607D8B"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorBrown() {
		return ["brown" => ["500" => "#795548"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorCyan() {
		return ["cyan" => ["500" => "#00BCD4"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorDeepOrange() {
		return ["deep-orange" => ["500" => "#FF5722"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorDeepPurple() {
		return ["deep-purple" => ["500" => "#673AB7"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorGreen() {
		return ["green" => ["500" => "#4CAF50"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorGrey() {
		return ["grey" => ["500" => "#9E9E9E"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorIndigo() {
		return ["indigo" => ["500" => "#3F51B5"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorLightBlue() {
		return ["light-blue" => ["500" => "#03A9F4"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorLightGreen() {
		return ["light-green" => ["500" => "#8BC34A"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorLime() {
		return ["lime" => ["500" => "#CDDC39"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorOrange() {
		return ["orange" => ["500" => "#FF9800"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorPink() {
		return ["pink" => ["500" => "#E91E63"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorPurple() {
		return ["purple" => ["500" => "#9C27B0"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorRed() {
		return ["red" => ["500" => "#F44336"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorTeal() {
		return ["teal" => ["500" => "#009688"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorYellow() {
		return ["yellow" => ["500" => "#FFEB3B"]];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getColorWhite() {
		return ["white" => ["500" => "#FFFFFF"]];
	}

	/**
	 * Color choices.
	 *
	 * @return array Returns the color choices.
	 */
	public static function getColors() {
		$provider = new DefaultColorProvider();
		return [
			$provider->getColorRed(),
			$provider->getColorPink(),
			$provider->getColorPurple(),
			$provider->getColorDeepPurple(),
			$provider->getColorIndigo(),
			$provider->getColorBlue(),
			$provider->getColorLightBlue(),
			$provider->getColorCyan(),
			$provider->getColorTeal(),
			$provider->getColorGreen(),
			$provider->getColorLightGreen(),
			$provider->getColorLime(),
			$provider->getColorYellow(),
			$provider->getColorAmber(),
			$provider->getColorOrange(),
			$provider->getColorDeepOrange(),
			$provider->getColorBrown(),
			$provider->getColorGrey(),
			$provider->getColorBlueGrey(),
			$provider->getColorBlack(),
			$provider->getColorWhite(),
		];
	}

}
