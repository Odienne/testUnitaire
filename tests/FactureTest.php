<?php
/**
 * Created by PhpStorm.
 * User: Odien
 * Date: 11/01/2019
 * Time: 11:32
 */

use PHPUnit\Framework\TestCase;
use LicenseDev\Facture;
use LicenseDev\LigneFacturation;


class FactureTest extends TestCase
{
    public function testGetTotalValue()
    {
        $lignesFactures = [new LigneFacturation("achat courses", 10), new LigneFacturation("achat brownie", 1)];
        $facture = new Facture($lignesFactures);

        $this->assertEquals("8.8", $facture->getTotalValue());
    }

    public function testGetLignesFacturations()
    {
        $lignesFactures = [new LigneFacturation("achat courses", 10), new LigneFacturation("achat brownie", 1)];
        $facture = new Facture($lignesFactures);

        $this->assertEquals($lignesFactures, $facture->getLignesFacturations());
    }

    public function testSetLignesFacturations()
    {
        $lignesFactures = [new LigneFacturation("achat courses", 10), new LigneFacturation("achat brownie", 1)];
        $facture = new Facture($lignesFactures);

        array_push($lignesFactures, new LigneFacturation("chaussures", 50));
        $this->assertEquals($lignesFactures, $facture->setLignesFacturations($lignesFactures));
    }


}