<?php

namespace SerhiiKa\TestModule\Block;

use Magento\Framework\View\Element\Template;

class CustomBlock extends Template
{
    /**
     * @return string
     */
    public function generateURL()
    {
        return $this->getUrl('test_task/jsonresponse');
    }
}
