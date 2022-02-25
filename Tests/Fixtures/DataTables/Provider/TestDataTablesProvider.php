<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\DataTables\Provider;

use WBW\Bundle\AdminBSBBundle\DataTables\Provider\AbstractDataTablesProvider;
use WBW\Bundle\JQuery\DataTablesBundle\Api\DataTablesColumnInterface;

/**
 * Test DataTables provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\DataTables\Provider
 */
class TestDataTablesProvider extends AbstractDataTablesProvider {

    /**
     * {@inheritDoc}
     */
    public function alignRight(?string $content): string {
        return parent::alignRight($content);
    }

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
    public function putItalic(?string $content): string {
        return parent::putItalic($content);
    }

    /**
     * {@inheritDoc}
     */
    public function renderColumn(DataTablesColumnInterface $dtColumn, $entity): ?string {
        return null;
    }
}
