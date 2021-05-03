<?php
include "C:/xampp/htdocs/client/config.php";
require_once "C:/xampp/htdocs/client/model/Carte.php";
class CarteC{

function ajouterCarte($Carte){
    $sql="insert into carte (idCarte,IdClient,type,nbPoints,DateEm,DateExp)
    values (:idCarte,:IdClient,:type,:nbPoints,:DateEm,:DateExp)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $idCarte=$Carte->getIdCarte();
        $IdClient=$Carte->getIdClient();
        $type=$Carte->getType();
        $nbPoints=$Carte->getNbPoint();
        $DateEm=$Carte->getDateEM();
        $DateExp=$Carte->getDateEXP();



    $query->bindValue(':idCarte',$idCarte);
    $query->bindValue(':IdClient',$IdClient);
    $query->bindValue(':type',$type);
    $query->bindValue(':nbPoints',$nbPoints);
    $query->bindValue(':DateEm',$DateEm);
    $query->bindValue(':DateExp',$DateExp);
    
    $query->execute();
        
    }
    catch(Exception $e){
        echo 'Erreur: ajouter CARTE' .$e->getMessage();

    }
}

function modifierCarte($idCarte){
    $Carte=new Carte;         
$sql='UPDATE carte SET
IdClient = :IdClient,   type = :type,    nbPoints = :nbPoints,     DateEm = :DateEm,
DateExp = :DateExp
WHERE idCarte = :idCarte';
$db = config::getConnexion();
try{
$query = $db->prepare($sql);
$idCarte=$_POST['idCarte'];
$IdClient=$_POST['IdClient'];
$type=$_POST['type'];
$nbPoints=$_POST['nbPoints'];
$DateEm=$_POST['DateEm'];
$DateExp=$_POST['DateExp'];

$query->bindValue(':idCarte',$idCarte);
$query->bindValue(':IdClient',$IdClient);
$query->bindValue(':type',$type);
$query->bindValue(':nbPoints',$nbPoints);
$query->bindValue(':DateEm',$DateEm);
$query->bindValue(':DateExp',$DateExp);

$query->execute();
} catch (PDOException $e) {
$e->getMessage();
}
}



function recupererCarte($idCarte){
$sql="SELECT * from carte where idCarte='$idCarte'";
$db = config::getConnexion();
try{
$query=$db->prepare($sql);
$query->execute();

$Carte=$query->fetch();
return $Carte;
}
catch (Exception $e){
die('Erreur: '.$e->getMessage());
}
}





function afficherCartes(){

    $sql="SELECT * FROM carte";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }



    function supprimerCarte($idCarte){
        $sql="DELETE FROM carte WHERE idCarte= :idCarte";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idCarte',$idCarte);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }




}
?>