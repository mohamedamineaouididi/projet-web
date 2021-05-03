<?PHP
	include_once "../config.php";
	require_once '../Model/produit.php';

	class produitC {
		
		function ajouterproduit($produit){
			$sql="INSERT INTO produit (idProduit, nomPrdt, type, prix, dateExpr,quantite) 
			VALUES (:id,:nom,:type, :prix, :dateExpr, :quantite)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'id' => $produit->getId(),
					'nom' => $produit->getNom(),
					'type' => $produit->gettype(),
					'prix' => $produit->getprix(),
					'dateExpr' => $produit->getdate(),
					'quantite' => $produit->getquantite()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherproduit(){
			
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerproduit($idProduit){
			$sql="DELETE FROM Utilisateur WHERE idProduit= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$idProduit);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierproduit($produit, $idproduit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						idProduit = :id, 
						nomPrdt = :nom,
						type = :type,
						prix = :prix,
						dateExpr = :date,
						quantite = :quantite
					WHERE idproduit = :id'
				);
				$query->execute([
					'nom' => $produit->getNom(),
					'type' => $produit->gettype(),
					'prix' => $produit->getprix(),
					'dateExpr' => $produit->getdate(),
					'quantite' => $produit->getquantite(),
					'id' => $idProduit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
			










		}
		function recupererUtilisateur($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererUtilisateur1($id){
			$sql="SELECT * from Utilisateur where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>