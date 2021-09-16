<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\DataTables\Provider;

use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\JQuery\DataTablesBundle\Api\DataTablesOptionsInterface;
use WBW\Bundle\JQuery\DataTablesBundle\Provider\AbstractDataTablesProvider as BaseDataTablesProvider;

/**
 * Abstract DataTables provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\DataTables\Provider
 * @abstract
 */
abstract class AbstractDataTablesProvider extends BaseDataTablesProvider {

    /**
     * Column width "actions".
     *
     * @var string
     */
    const COLUMN_WIDTH_ACTIONS = self::COLUMN_WIDTH_L;

    /**
     * Column width "date"
     *
     * @var string
     */
    const COLUMN_WIDTH_DATE = self::COLUMN_WIDTH_M;

    /**
     * Column width "icon".
     *
     * @var string
     */
    const COLUMN_WIDTH_ICON = self::COLUMN_WIDTH_XXS;

    /**
     * Column width "l".
     *
     * @var string
     */
    const COLUMN_WIDTH_L = "160px";

    /**
     * Column width "label".
     *
     * @var string
     */
    const COLUMN_WIDTH_LABEL = self::COLUMN_WIDTH_L;

    /**
     * Column width "m".
     *
     * @var string
     */
    const COLUMN_WIDTH_M = "120px";

    /**
     * Column width "s".
     *
     * @var string
     */
    const COLUMN_WIDTH_S = "80px";

    /**
     * Column width "thumbnail".
     *
     * @var string
     */
    const COLUMN_WIDTH_THUMBNAIL = self::COLUMN_WIDTH_S;

    /**
     * Column width "unit".
     *
     * @var string
     */
    const COLUMN_WIDTH_UNIT = self::COLUMN_WIDTH_XS;

    /**
     * Column width "xl".
     *
     * @var string
     */
    const COLUMN_WIDTH_XL = "200px";

    /**
     * Column width "xs".
     *
     * @var string
     */
    const COLUMN_WIDTH_XS = "40px";

    /**
     * Column width "xxl".
     *
     * @var string
     */
    const COLUMN_WIDTH_XXL = "240px";

    /**
     * Column width "xxs".
     *
     * @var string
     */
    const COLUMN_WIDTH_XXS = "20px";

    /**
     * Column width "xxxl".
     *
     * @var string
     */
    const COLUMN_WIDTH_XXXL = "280px";

    /**
     * Align right.
     *
     * @param string|null $content The content.
     * @return string Returns the right-aligned content.
     */
    protected function alignRight(?string $content): string {
        if (null === $content || "" === $content) {
            return "";
        }
        return AbstractTwigExtension::coreHTMLElement("span", $content, ["class" => "pull-right"]);
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions(): DataTablesOptionsInterface {

        $dtOptions = parent::getOptions();
        $dtOptions->setOption("searchDelay", 2500);

        return $dtOptions;
    }

    /**
     * Put italic.
     *
     * @param string|null $content The content.
     * @return string Returns the italic.
     */
    protected function putItalic(?string $content): string {
        if (null === $content || "" === $content) {
            return "";
        }
        return AbstractTwigExtension::coreHTMLElement("em", $content);
    }

    /**
     * {@inheritDoc}
     */
    protected function renderRowButtons($entity, string $editRoute = null, string $deleteRoute = null, string $showRoute = null): string {
        $buttons = parent::renderRowButtons($entity, $editRoute, $deleteRoute, $showRoute);
        return $buttons; //str_replace(" btn-xs", "", $buttons);
    }
}