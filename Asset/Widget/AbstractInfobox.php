<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\Widget;

/**
 * Abstract infobox.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Widget
 */
abstract class AbstractInfobox implements InfoboxInterface {

    /**
     * Class.
     *
     * @var string|null
     */
    private $class;

    /**
     * Color.
     *
     * @var string|null
     */
    private $color;

    /**
     * Content number.
     *
     * @var string|null
     */
    private $contentNumber;

    /**
     * Content text.
     *
     * @var string|null
     */
    private $contentText;

    /**
     * Count to.
     *
     * @var array|null
     */
    private $countTo;

    /**
     * Hover expand effect.
     *
     * @var bool|null
     */
    private $hoverExpandEffect;

    /**
     * Hover zoom effect.
     *
     * @var bool|null
     */
    private $hoverZoomEffect;

    /**
     * Icon color.
     *
     * @var string|null
     */
    private $iconColor;

    /**
     * Icon name.
     *
     * @var string|null
     */
    private $iconName;

    /**
     * Constructor.
     *
     * @param string|null $class The class.
     */
    protected function __construct(?string $class) {
        $this->setClass($class);
    }

    /**
     * {@inheritDoc}
     */
    public function getClass(): ?string {
        return $this->class;
    }

    /**
     * {@inheritDoc}
     */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * {@inheritDoc}
     */
    public function getContentNumber(): ?string {
        return $this->contentNumber;
    }

    /**
     * {@inheritDoc}
     */
    public function getContentText(): ?string {
        return $this->contentText;
    }

    /**
     * {@inheritDoc}
     */
    public function getCountTo(): ?array {
        return $this->countTo;
    }

    /**
     * {@inheritDoc}
     */
    public function getHoverExpandEffect(): ?bool {
        return $this->hoverExpandEffect;
    }

    /**
     * {@inheritDoc}
     */
    public function getHoverZoomEffect(): ?bool {
        return $this->hoverZoomEffect;
    }

    /**
     * {@inheritDoc}
     */
    public function getIconColor(): ?string {
        return $this->iconColor;
    }

    /**
     * {@inheritDoc}
     */
    public function getIconName(): ?string {
        return $this->iconName;
    }

    /**
     * {@inheritDoc}
     */
    public function setClass(?string $class): InfoboxInterface {
        $this->class = $class;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setColor(?string $color): InfoboxInterface {
        $this->color = $color;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setContentNumber(?string $contentNumber): InfoboxInterface {
        $this->contentNumber = $contentNumber;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setContentText(?string $contentText): InfoboxInterface {
        $this->contentText = $contentText;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setCountTo(?array $countTo): InfoboxInterface {
        $this->countTo = $countTo;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setHoverExpandEffect(?bool $hoverExpandEffect): InfoboxInterface {
        $this->hoverExpandEffect = $hoverExpandEffect;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setHoverZoomEffect(?bool $hoverZoomEffect): InfoboxInterface {
        $this->hoverZoomEffect = $hoverZoomEffect;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setIconColor(?string $iconColor): InfoboxInterface {
        $this->iconColor = $iconColor;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function setIconName(?string $iconName): InfoboxInterface {
        $this->iconName = $iconName;
        return $this;
    }
}
