<?php
/**
 * Created by PhpStorm.
 * User: Odien
 * Date: 11/01/2019
 * Time: 11:32
 */

use PHPUnit\Framework\TestCase;
use LicenseDev\LigneFacturation;


class LigneFactureTest extends TestCase
{
    public function testSetDescription()
    {
        $ligneFacture  = new LigneFacturation("achat courses", 300);

        $this->assertEquals("Loyer de mars", $ligneFacture->setDescription("Loyer de mars"));
    }
    public function testSetValeur()
    {
        $ligneFacture  = new LigneFacturation("achat courses", 300);

        $this->assertEquals(60, $ligneFacture->setValeur(60));
    }

}