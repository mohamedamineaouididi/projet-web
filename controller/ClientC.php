<?php
include "C:/xampp/htdocs/client/config.php";
require_once 'C:/xampp/htdocs/client/model/Client.php';

class ClientC{

    function ajouterClient($clients){
       
        $sql="insert into Clients (id,cin,nom,prenom,email,adresse,dateNaiss)
        values (:id,:cin,:nom,:prenom,:email,:adresse,:dateNaiss)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $id=$clients->getId();
		    $cin=$clients->getCin();
		    $nom=$clients->getNom();
            $prenom=$clients->getPrenom();
            $email=$clients->getEmail();
            $adresse=$clients->getAdresse();
            $dateNaiss=$clients->getDateNaiss();



		$query->bindValue(':id',$id);
		$query->bindValue(':cin',$cin);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':email',$email);
		$query->bindValue(':adresse',$adresse);
		$query->bindValue(':dateNaiss',$dateNaiss);
		
        $query->execute();
            
        }
        catch(Exception $e){
            echo 'Erreur: ajouter client' .$e->getMessage();

        }



    }
 





    function modifierClient($id){
                  $clients=new Client;         
            $sql='UPDATE Clients SET
            cin = :cin,  nom = :nom,   prenom = :prenom,    email = :email,     adresse = :adresse,
            dateNaiss = :dateNaiss
            WHERE id = :id';
		$db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
            $id=$_POST['id'];
		    $cin=$_POST['cin'];
		    $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $email=$_POST['email'];
            $adresse=$_POST['adresse'];
            $dateNaiss=$_POST['dateNaiss'];
		$query->bindValue(':id',$id);
		$query->bindValue(':cin',$cin);
		$query->bindValue(':nom',$nom);
		$query->bindValue(':prenom',$prenom);
		$query->bindValue(':email',$email);
		$query->bindValue(':adresse',$adresse);
		$query->bindValue(':dateNaiss',$dateNaiss);
		
        $query->execute();
        } catch (PDOException $e) {
        $e->getMessage();
        }
        }



        function recupererClient($id){
            $sql="SELECT * from Clients where id='$id'";
            $db = config::getConnexion();
            try{
            $query=$db->prepare($sql);
            $query->execute();
            
            $Clients=$query->fetch();
            return $Clients;
            }
            catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
            }
            
function afficherClients(){

    $sql="SELECT * FROM Clients";
    $db = config::getConnexion();
    try{
    $liste = $db->query($sql);
    return $liste;
    }
    catch (Exception $e){
    die('Erreur: '.$e->getMessage());
    }
    }





    function supprimerClient($id){
        $sql="DELETE FROM Clients WHERE id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
        $req->execute();
        }
        catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        }

        function chercherClient($chercher,$champs) {
            $db=config::getConnexion();
            $sql="select * from Clients where $champs like '%$chercher%'  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherclient: '.$e->getMessage());
    
            }
        }






        function TrierClient($champs,$order) {
            $db=config::getConnexion();
            $sql="select * from Clients order By $champs $order  ";
            try
            {
                $liste=$db->query($sql);
                return $liste;
    
            }
            catch(Exception $e){
                die ('erreur chercherclient: '.$e->getMessage());
    
            }
        }





}
?>