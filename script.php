<?php

require "vendor/autoload.php";

use LicenseDev\LigneFacturation;
use LicenseDev\Facture;

$lignesFactures = [new LigneFacturation("achat courses", 10), new LigneFacturation("achat brownie", 1)];

$listeFacture = [new Facture($lignesFactures)];

foreach ($listeFacture as $facture) {
    echo $facture->getTotalValue();
}