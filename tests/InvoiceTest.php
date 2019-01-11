<?php

namespace Test;

use App\Invoice\Invoice;
use App\Invoice\InvoiceLine;
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    private $line1;
    private $line2;

    public function setUp()
    {
        parent::setUp();

        $this->line1 = new InvoiceLine();
        $this->line1->setVat(20);
        $this->line1->setAmount(100);

        $this->line2 = new InvoiceLine();
        $this->line2->setVat(20);
        $this->line2->setAmount(1000);
    }

    public function testItAddsInvoiceLines()
    {
        $invoice = new Invoice();
        $invoice->add($this->line1);
        $invoice->add($this->line2);

        $this->assertEquals($invoice->getNumberOfLines(), 2);
    }

    public function testItCalculateTotal()
    {
        $invoice = new Invoice();
        $invoice->add($this->line1);
        $invoice->add($this->line2);

        $this->assertEquals($invoice->calculateTotal(), 1320);
    }

}


