<?php 

include 'C:/xampp/htdocs/client/controller/CarteC.php';
require_once 'C:/xampp/htdocs/client/model/Carte.php';

if(isset($_GET['idCarte'])){
	
	$CarteC= new CarteC();
	$CarteC->supprimerCarte($_GET['idCarte']);
    header("location: afficher carte.php"); 

}
?>