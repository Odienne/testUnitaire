<?php

namespace Tests;

use App\Invoice\InvoiceLine;
use PHPUnit\Framework\TestCase;

class InvoiceLineTest extends TestCase
{
    /**
     * @dataProvider getAmounts
     */
    public function testItSetAmount($amount)
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setAmount($amount);
        $this->assertEquals($amount, $invoiceLine->getAmount());
    }

    public function testItSetDescription()
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setDescription("yolo");
        $this->assertEquals("yolo", $invoiceLine->getDescription());
    }

    public function testItCalculateTotalWithVat()
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setVat(20);
        $invoiceLine->setAmount(100);

        $this->assertEquals(120, $invoiceLine->calculateTotal());
    }

    public function getAmounts()
    {
        return [
            [10],
            [40]
        ];
    }
}
