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
     * {@inheritdoc}
     */
    public function alignRight(?string $content): string {
        return parent::alignRight($content);
    }

    /**
     * {@inheritdoc}
     */
    public function getColumns(): array {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity() {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string {
        return "test";
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix(): string {
        return "t";
    }

    /**
     * {@inheritdoc}
     */
    public function getView(): ?string {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function putItalic(?string $content): string {
        return parent::putItalic($content);
    }

    /**
     * {@inheritdoc}
     */
    public function renderColumn(DataTablesColumnInterface $dtColumn, $entity): ?string {
        return null;
    }
}
