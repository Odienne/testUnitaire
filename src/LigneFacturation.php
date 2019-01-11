<?php
/**
 * Created by PhpStorm.
 * User: Odien
 * Date: 11/01/2019
 * Time: 10:35
 */

namespace LicenseDev;

class LigneFacturation
{

    private $description;
    private $valeur;


    public function __construct($description, $valeur)
    {
        $this->description = $description;
        $this->valeur = $valeur;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return mixed
     */
    public function setDescription($description)
    {
        return $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * @param $valeur
     * @return mixed
     */
    public function setValeur($valeur)
    {
        return $this->valeur = $valeur;
    }
}