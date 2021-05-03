<?php 

include 'C:/xampp/htdocs/client/controller/ClientC.php';
require_once 'C:/xampp/htdocs/client/model/Client.php';

if(isset($_GET['id'])){
	
	$ClientC= new clientC();
	$ClientC->supprimerClient($_GET['id']);
    header("location: afficher client.php"); 

}
?>