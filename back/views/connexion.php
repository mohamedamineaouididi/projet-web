<?php
    include_once '../Model/produit.php';
    include_once '../Controller/produitC.php';

    $error = "";

    // create user
    $user = null;

    // create an instance of the controller
    $userC = new produitC();
    if (
        isset($_POST["idProduit"]) &&
        isset($_POST["nomPrdt"]) && 
        isset($_POST["type"]) &&
        isset($_POST["prix"]) &&
        isset($_POST["dateExpr"])&&
        isset($_POST["quantite"])

    ) {
        if (
            !empty($_POST["idProduit"]) && 
            !empty($_POST["nomPrdt"]) && 
            !empty($_POST["type"])&&
            !empty($_POST['prix']) &&
            !empty($_POST['dateExpr']) &&
            !empty($_POST['quantite']) 
        ) {
            $user = new produit(
                $_POST['idProduit'],
                $_POST['nomPrdt'], 
                $_POST['type'],
                $_POST['prix'],
                $_POST['dateExpr'],
                $_POST['quantite']
            );
            $userC->ajouterproduit($user);
            header('Location:afficherproduit.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='3' colspan='1'>Fiche Personnelle</td>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="prenom">Prénom:
                        </label>
                    </td>
                    <td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
                    </td>
                </tr>
                <tr>
                    <td rowspan='2' colspan='1'>Information de Connexion</td>
                    <td>
                        <label for="login">Login:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="login" id="login" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="pass">Mot de passe:
                        </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>