<?php

namespace SerhiiKa\TestModule\Controller\ShowPerson;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action
{
    /**
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $name     = 'Serhii';
        $lastName = 'Ka';
        $this->_view->loadLayout()
                    ->getLayout()
                    ->getBlock('custom.block.name')
                    ->setName($name)->setLastName($lastName);
        $this->_view->renderLayout();
    }
}
