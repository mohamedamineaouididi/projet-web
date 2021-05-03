<?php

class Client{

    public $id=null;
    public $cin=null;
    public $nom=null;
    public $prenom=null;
    public $email=null;
    public $adresse=null;
    public $dateNaiss=null;

 function __construct( $id=null,  $cin=null,  $nom=null,  $prenom=null,  $email=null,  $adresse=null,  $dateNaiss=null){
        $this->id=$id;
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->adresse=$adresse;
        $this->dateNaiss=$dateNaiss;
        }
        


public function getId() 
{
    return $this->id;
}
public function setId(int $id)
{
     $this->id=$id;
}
public function getCin(){
    return $this->cin;
}
public function setCin(int $cin){
     $this->cin=$cin;
}
public function getNom(){
    return $this->nom;
}
public function setNom(string $nom){
     $this->nom=$nom;
}
public function getPrenom(){
    return $this->prenom;
}
public function setPrenom(string $prenom){
     $this->prenom=$prenom;
}
public function getEmail(){
    return $this->email;
}
public function setEmail(string $email){
     $this->email=$email;
}
public function getAdresse(){
    return $this->nom;
}
public function setAdresse(string $adresse){
     $this->adresse=$adresse;
}
public function getDateNaiss(){
    return $this->dateNaiss;
}
public function setDateNaiss(string $dateNaiss){
     $this->dateNaiss=$dateNaiss;
}


}
?>