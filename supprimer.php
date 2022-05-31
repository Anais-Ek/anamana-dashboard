<?php $cnanamana=new mysqli("51.159.27.252:50992","anamana","Fenelon@2022","anamana");?>

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
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Paramètres</span>
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
        <span class="dashboard">Supprimer un produit</span>
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

</section>

</body>
</html>