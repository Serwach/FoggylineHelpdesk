<?php

namespace Foggyline\Helpdesk\Controller\Adminhtml\Ticket;

use Foggyline\Helpdesk\Controller\Adminhtml\Ticket;

class Grid extends Ticket
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
