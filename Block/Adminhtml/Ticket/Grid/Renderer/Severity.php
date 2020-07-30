<?php

namespace Foggyline\Helpdesk\Block\Adminhtml\Ticket\Grid\Renderer;

use Foggyline\Helpdesk\Model\TicketFactory;
use Magento\Backend\Block\Context;
use Magento\Backend\Block\Widget\Grid\Column\Renderer\AbstractRenderer;
use Magento\Framework\DataObject;

class Severity extends AbstractRenderer
{
    protected $ticketFactory;

    public function __construct(
        Context $context,
        TicketFactory $ticketFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->ticketFactory = $ticketFactory;
    }

    public function render(DataObject $row)
    {
        $ticket = $this->ticketFactory->create()->load($row->getId());

        if ($ticket && $ticket->getId()) {
            return $ticket->getSeverityAsLabel();
        }

        return '';
    }
}
