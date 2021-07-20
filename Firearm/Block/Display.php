<?php

namespace Dhruvi\Firearm\Block;

use Dhruvi\Firearm\Model\ResourceModel\Firearm\Collection;
use Magento\Framework\View\Element\Template;

class Display extends Template
{
    /**
     * @var Collection
     */
    private $collection;
    /**
     * Display constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    ) {
        $this->collection = $collection;
        parent::__construct($context, $data);
    }

    /**
     * @return Collection
     */
    public function getAllFirearms()
    {
        return $this->collection;
    }

    /**
     * @return string
     */
    public function getPostUrl()
    {
        return $this->getUrl('firearm/firearm/save');
    }
    /**
     * @return string
     */
    public function getDeleteUrl()
    {
        return $this->getUrl('firearm/firearm/delete');
    }
}
