<?php

namespace Foggyline\Helpdesk\Controller\Ticket;

use Foggyline\Helpdesk\Controller\Ticket;
use Magento\Framework\Controller\ResultFactory;

class Index extends Ticket
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}
