<?php require('connexion.php');?>
<!doctype html>

<meta charset="utf-8">



<div class="container">


<form name="formulaire" class="formulaire">
<p><a href="products.php" class="submit" >Retour dans la liste des produits</a></p>
                
<label style="text-align: center;color: #360001;">

<?php
 
if (isset($_GET['supCar'])) {

	  $sup=$_GET['supCar'];
	
    $reqDelete="DELETE FROM produits WHERE CATEGORIE ='$sup'";
	  $resultat=mysqli_query($cnanamana,$reqDelete);
	
    }
 
  if($resultat)
  {
    echo "La suppression a été correctement effectuée <a href='products.php'>Retour à la liste des produits</a>" ;
  }
  else
  {
    echo"La suppression à échouée <a href='products.php'>Retour à la liste des produits</a>" ;
  }
?>

</form>


</div>