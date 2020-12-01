<?php
namespace MageMastery\Todo\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    public function execute ()
{
    return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
}
}