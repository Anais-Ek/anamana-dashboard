<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modifier un produit</title>
<link rel="stylesheet" href="style.css">

</head>

<body>


<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 align="center">Mettre a Jour un produit...</h2>
                
                <label><b>Catégorie</b></label>
                <input class="zonetext" type="text" name="txtCategorie" value="<?php echo $_GET['mod'] ?>" >

                <label><b>Couleur</b></label>
                <input class="zonetext" type="text" placeholder="Entrer la couleur" name="txtCouleur" required>

               <label><b>Prix</b></label>
                <input class="zonetext" type="text" placeholder="Entrer le prix" name="txtP" required>
                
                <label><b>Photo</b></label>
				<input class="zonetext" type="file" placeholder="Choisir une photo" name="txtphoto" required>
				
				<label><b>Plan</b></label>
                <input class="zonetext" type="file" placeholder="Choisir une photo" name="txtplan" required>
                
                <input type="submit" id='submit' class="submit" name="btmod" value='Mettre a Jour' >
                
		<p><a href="products.php" class="submit" >Retour à la liste des produits</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btmod']))
	{
		$cat=$_POST['txtCategorie'];
		$couleur=$_POST['txtCouleur'];
		$prix=$_POST['txtP'];
		
		$modifier=(int) ($_GET["mod"]);
		
  	$image = $_FILES['txtphoto']['tmp_name'];
  	
		
  	$target = "images/".$_FILES['txtphoto']['name'];

		if (move_uploaded_file($image,$target)) {
  		$msg = "Image téléchargée avec succès";
  	}else{
  		$msg = "Impossible de télécharger l'image";
	  }
	  

	$imagep = $_FILES['txtplan']['tmp_name'];
		//$image_text = mysqli_real_escape_string($cnloccar, $_POST['txtphoto']);
		$targetp = "images/".$_FILES['txtplan']['name'];
		//$target = "images/".basename($image);
		if (move_uploaded_file($imagep,$targetp)) {
			$msg = "Image téléchargée avec succès";
		}else{
			$msg = "Impossible de télécharger l'image";
		}

  	$sql = "UPDATE produits SET COULEUR = '$couleur', PRIX = '$prix' , PHOTO ='$target', PLAN='$targetp' WHERE CATEGORIE ='".$_GET["mod"]."'";
		$resultat=mysqli_query($cnanamana,$sql);

if($resultat)
{
	echo "Mise a jour des données validés";
}else{
	echo "Echec de modification des données !";
}
  	
  }
  
		
		
	?>
                	
                	
                	
                </label>
	</form>
	
	
	
</div>



   
 
</body>
</html>