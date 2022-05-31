<?php 
	error_reporting(E_ALL);

	if(isset($_POST['btadd']))
	{
		$cat = $_POST['txtCategorie'];
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
		  
		$cnanamana=new mysqli("51.159.27.252:50992","anamana","Fenelon@2022","anamana");
		if(!$cnanamana->connect_error)
		{
			$query = "INSERT INTO produits (CATEGORIE,COULEUR,PRIX,PHOTO,PLAN) VALUES ('$cat','$couleur','$prix', '$target', '$targetp')";
			$resultat=$cnanamana->query($query);
			if($resultat)
			{
				echo "Insertion des données validés";
			}else{
				echo "Echec d'insertion des données !<BR/>";
				echo ($cnanamana->error);
			}
		}
		else die('erreur connexion base de données..');
  	
  	}

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/images/test.jpeg" >

</head>

<body>


<div class="sidebar">
    <div class="logo-details">
      <img class="iconvda" src="images/ANALOGO.PNG" alt="" />
      <span class="logo_name">Anamana</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="index.php" >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Tableau de bord</span>
          </a>
        </li>
        <li>
          <a href="products.php" class="active">
            <i class='bx bx-box' ></i>
            <span class="links_name">Produits</span>
          </a>
        </li>
        <li>
          <a href="statistics.php">
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Statistiques</span>
          </a>
        </li>
        <li class="log_out">
          <a href="login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Déconnexion</span>
          </a>
        </li>
      </ul>
</div>


<section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Ajouter un produit</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Rechercher...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <img class="iconadmin" src="images/test.jpeg" alt="">
        <span class="admin_name">Administrateur</span>
      </div>
    </nav>


	<div class="home-content">
	<div class="sales-boxes">
  <div class="recent-sales box">


	<form name="formadd" action="" method="post" enctype="multipart/form-data">
		<h2 align="center">Ajouter un nouveau produit</h2>
                
                <p><label><b>Catégorie</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer la catégorie" name="txtCategorie" required>
                </p>

                <p><label><b>Couleur</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer la couleur" name="txtCouleur" required>
				</p>

				<p><label><b>Prix</b></label>
                <input class="zonetext" type="text" 
				placeholder="Entrer le prix" name="txtP" required>
				</p>
                
                <p><label><b>Photo</b></label>
                <input class="zonetext" type="file" 
				placeholder="choisir une photo" name="txtphoto" required>
				</p>

				<p><label><b>Plan</b></label>
                <input class="zonetext" type="file" 
				placeholder="choisir une photo du plan" name="txtplan" required>
				</p>
                
                <p><input type="submit" id='submit' 
				class="submit" name="btadd" value='Ajouter' >
				</p>
                
		<p><a href="products.php" class="submit" >Retour à la liste des produits</a></p>
                
		<label style="text-align: center;color: #360001;"></label>
				
	</form>

	</div>
	</div>
  </div>

	</section>

</body>
</html>