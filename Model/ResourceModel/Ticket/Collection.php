<?php

namespace Foggyline\Helpdesk\Model\ResourceModel\Ticket;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Constructor
     * Configures collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Foggyline\Helpdesk\Model\Ticket', 'Foggyline\Helpdesk\Model\ResourceModel\Ticket');
    }
}
