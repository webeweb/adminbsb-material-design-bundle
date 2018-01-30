<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application;

/**
 * Default application provider.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application
 * @final
 */
final class DefaultApplicationProvider implements ApplicationProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return "AdminBSB Material Design";
    }

    /**
     * {@inheritdoc}
     */
    public function getHome() {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return "AdminBSB<b>MaterialDesign</b>";
    }

    /**
     * {@inheritdoc}
     */
    public function getRoute() {
        return "/";
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return "AdminBSB Material Design";
    }

    /**
     * {@inheritdoc}
     */
    public function getVersion() {
        return "~1.0@dev";
    }

    /**
     * {@inheritdoc}
     */
    public function getYear() {
        return "2017";
    }

}
