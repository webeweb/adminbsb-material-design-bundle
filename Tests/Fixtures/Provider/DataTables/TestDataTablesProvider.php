<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Provider\DataTables;

use WBW\Bundle\AdminBSBBundle\Provider\DataTables\AbstractDataTablesProvider;
use WBW\Bundle\JQuery\DataTablesBundle\API\DataTablesColumnInterface;

/**
 * Test DataTables provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Provider\DataTables
 */
class TestDataTablesProvider extends AbstractDataTablesProvider {

    /**
     * {@inheritDoc}
     */
    public function getColumns(): array {
        return [];
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity() {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): string {
        return "test";
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefix(): string {
        return "t";
    }

    /**
     * {@inheritDoc}
     */
    public function getView(): ?string {
        return null;
    }

    /**
     * {@inheritDoc}
     */
    public function renderColumn(DataTablesColumnInterface $dtColumn, $entity): ?string {
        return null;
    }
}