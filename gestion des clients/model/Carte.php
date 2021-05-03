<?php

class Carte{
    public $idCarte=null;
    public $IdClient=null;
    public $type=null;
    public $nbPoint=null;
    public $DateEm=null;
    public $DateExp=null;


function __construct($idCarte=null,$IdClient=null,$type=null,$nbPoints=null,$DateEm=null,$DateExp=null)
{
    $this->idCarte=$idCarte;
    $this->IdClient=$IdClient;
    $this->type=$type;
    $this->nbPoints=$nbPoints;
    $this->DateEm=$DateEm;
    $this->DateExp=$DateExp;
}


public function getIdCarte()
{
    return $this->idCarte;
}
public function setIdCarte(int $idCarte)
{
    $this->idCarte=$idCarte;
}
public function getIdClient()
{
    return $this->IdClient;
}
public function setIdClient(int $IdClient)
{
    $this->IdClient=$IdClient;
}
public function getType()
{
    return $this->type;
}
public function setType(string $type)
{
    $this->type=$type;
}
public function getNbPoint()
{
    return $this->nbPoints;
}
public function setNbPoint(int $nbPoints)
{
    $this->nbPoints=$nbPoints;
}
public function getDateEM()
{
    return $this->DateEm;
}
public function setDateEM(string $DateEm)
{
    $this->DateEm=$DateEm;
}
public function getDateEXP()
{
    return $this->DateExp;
}
public function setDateEXP(string $DateExp)
{
    $this->DateExp=$DateExp;
}

}
?>