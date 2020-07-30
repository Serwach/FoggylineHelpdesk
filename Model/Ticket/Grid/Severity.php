<?php

namespace Foggyline\Helpdesk\Model\Ticket\Grid;

use Foggyline\Helpdesk\Model\Ticket;
use Magento\Framework\Option\ArrayInterface;

class Severity implements ArrayInterface
{
    public function toOptionArray()
    {
        return Ticket::getSeveritiesOptionArray();
    }
}
