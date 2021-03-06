<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\Fields\Generic;

/**
 * Temando API Package Field
 *
 * @package Temando\Shipping\Rest
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
class Package
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Value
     */
    private $grossWeight;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Dimensions
     */
    private $dimensions;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\RemainingSpace
     */
    private $remainingSpace;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Item[]
     */
    private $items = [];

    /**
     * @var string
     */
    private $trackingReference;

    /**
     * @var string
     */
    private $trackingUrl;

    /**
     * @var \Temando\Shipping\Rest\Response\Fields\Generic\Documentation[]
     */
    private $documentation = [];

    /**
     * @var string
     */
    private $containerReference;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Value
     */
    public function getGrossWeight()
    {
        return $this->grossWeight;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Value $grossWeight
     * @return void
     */
    public function setGrossWeight(\Temando\Shipping\Rest\Response\Fields\Generic\Value $grossWeight)
    {
        $this->grossWeight = $grossWeight;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Dimensions
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Dimensions $dimensions
     * @return void
     */
    public function setDimensions(\Temando\Shipping\Rest\Response\Fields\Generic\Dimensions $dimensions)
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\RemainingSpace
     */
    public function getRemainingSpace()
    {
        return $this->remainingSpace;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\RemainingSpace $remainingSpace
     * @return void
     */
    public function setRemainingSpace(\Temando\Shipping\Rest\Response\Fields\Generic\RemainingSpace $remainingSpace)
    {
        $this->remainingSpace = $remainingSpace;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Item[] $items
     * @return void
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    /**
     * @return string
     */
    public function getTrackingReference()
    {
        return $this->trackingReference;
    }

    /**
     * @param string $trackingReference
     * @return void
     */
    public function setTrackingReference($trackingReference)
    {
        $this->trackingReference = $trackingReference;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * @param string $trackingUrl
     * @return void
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
    }

    /**
     * @return \Temando\Shipping\Rest\Response\Fields\Generic\Documentation[]
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param \Temando\Shipping\Rest\Response\Fields\Generic\Documentation[] $documentation
     * @return void
     */
    public function setDocumentation(array $documentation)
    {
        $this->documentation = $documentation;
    }

    /**
     * @return string
     */
    public function getContainerReference()
    {
        return $this->containerReference;
    }

    /**
     * @param string $containerReference
     * @return void
     */
    public function setContainerReference($containerReference)
    {
        $this->containerReference = $containerReference;
    }
}
