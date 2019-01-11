<?php
/**
 * Created by PhpStorm.
 * User: Odien
 * Date: 11/01/2019
 * Time: 10:35
 */

namespace LicenseDev;

class Facture
{

    private $lignesFacturations = [];

    public function __construct($lignesFacturations)
    {
        $this->lignesFacturations = $lignesFacturations;
    }

    /**
     * @return mixed
     */
    public function getLignesFacturations()
    {
        return $this->lignesFacturations;
    }

    /**
     * @param $lignesFacturations
     * @return mixed
     */
    public function setLignesFacturations($lignesFacturations)
    {
        return $this->lignesFacturations = $lignesFacturations;
    }

    /**
     * @param \LicenseDev\LigneFacturation $ligneFacturation
     * @return int
     */
    public function addLignesFacturations(LigneFacturation $ligneFacturation)
    {
        return array_push($this->lignesFacturations, $ligneFacturation);
    }

    /**
     * @param float $tva
     * @return float|int
     */
    public function getTotalValue($tva = 0.2)
    {
        $totalValue = 0;

        foreach ($this->lignesFacturations as $ligneFacturation) {
            $totalValue += ($ligneFacturation->getValeur() - $ligneFacturation->getValeur() * $tva);
        }

        return $totalValue;
    }
}