<?php

namespace Foggyline\Helpdesk\Test\Unit\Model;

use Foggyline\Helpdesk\Model\Ticket;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use PHPUnit_Framework_TestCase;

class TicketTest extends PHPUnit_Framework_TestCase
{
    protected $objectManager;
    protected $ticket;

    public function setUp()
    {
        $this->objectManager = new ObjectManager($this);
        $this->ticket = $this->objectManager->getObject('Foggyline\Helpdesk\Model\Ticket');
    }

    public function testGetSeveritiesOptionArray()
    {
        $this->assertNotEmpty(Ticket::getSeveritiesOptionArray());
    }

    public function testGetStatusesOptionArray()
    {
        $this->assertNotEmpty(Ticket::getStatusesOptionArray());
    }

    public function testGetStatusAsLabel()
    {
        $this->ticket->setStatus(Ticket::STATUS_CLOSED);

        $this->assertEquals(
            Ticket::$statusesOptions[Ticket::STATUS_CLOSED],
            $this->ticket->getStatusAsLabel()
        );
    }

    public function testGetSeverityAsLabel()
    {
        $this->ticket->setSeverity(Ticket::SEVERITY_MEDIUM);

        $this->assertEquals(
            Ticket::$severitiesOptions[Ticket::SEVERITY_MEDIUM],
            $this->ticket->getSeverityAsLabel()
        );
    }
}
