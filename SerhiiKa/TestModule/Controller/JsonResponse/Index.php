<?php

namespace SerhiiKa\TestModule\Controller\JsonResponse;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

class Index extends Action
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        $controllerResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $data             = [
            'Default Router Is' => 'Magento 2 test
1. Create your custom module.
2. In your custom module:
	2.1. Create custom Route; (test-task)
	2.2. Create custom Controller, ShowPerson with response type: loadLayout, renderLayout
	2.3. Create custom Controller, JsonResponse with response type: JSON
	2.4. Create custom block, CustomBlock
	2.5. Create custom layout (handle), In the layout use your own custom block for output
	2.6. Create custom template; mytesttask
3. Set params \"Name\" і \"Lastname\" in the controller ShowPerson and output them in the template.
4. Set param \"Default Router Is\" in the JsonResponse controller (the text of this test task)
5. In CustomBlock create function, which generate URL for our JsonResponse controller
6. In the template create a link (<a href=\"<?= $block->............ ?>\">Link to JSON controller</a>) using function from CustomBlock (previous step)
7. Click on “Link to JSON controller” button acts JsonResponse controller and output text of this test task.
8. Push everything to Git'
        ];

        return $controllerResult->setData($data);
    }
}
