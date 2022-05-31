<?php require_once('connexion.php');?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">

</head>

<body>



<div id="container">
	
	<form name="formadd" action="" method="post" class="formulaire" enctype="multipart/form-data">
		<h2 align="center">Ajouter un nouveau produit</h2>
                
                <label><b>Catégorie</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer la catégorie" name="txtCategorie" required>

                <label><b>Couleur</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer la couleur" name="txtCouleur" required>

               <label><b>Prix</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer le prix" name="txtP" required>
                
                <label><b>Photo</b></label>
                <input class="zonetext" type="file" 
				placeholder="choisir une photo" name="txtphoto" required>

				<label><b>Plan</b></label>
                <input class="zonetext" type="file" 
				placeholder="choisir une photo du plan" name="txtplan" required>
                
                <input type="submit" id='submit' 
				class="submit" name="btadd" value='Ajouter' >
                
		<p><a href="products.php" class="submit" >Retour dans la liste des produits</a></p>
                
                <label style="text-align: center;color: #360001;">
                	
                	<?php
	if(isset($_POST['btadd']))
	{
		$cat=$_POST['txtCategorie'];
		$couleur=$_POST['txtCouleur'];
		$prix=$_POST['txtP'];
				
  		$image = $_FILES['txtphoto']['tmp_name'];
		//$image_text = mysqli_real_escape_string($cnloccar, $_POST['txtphoto']);
	  	$target = "images/".$_FILES['txtphoto']['name'];
		//$target = "images/".basename($image);
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
		  
  	$sql = "INSERT INTO produits (CATEGORIE,COULEUR,PRIX,PHOTO,PLAN) VALUES ('$cat','$couleur','$prix', '$target', '$targetp')";
		$resultat=mysqli_query($cnanamana,$sql);

if($resultat)
{
	echo "Insertion des données validés";
}else{
	echo "Echec d'insertion des données !";
}
  	
  }
  
	?>
                       	
</label>
	</form>

</div>
</body>
</html>