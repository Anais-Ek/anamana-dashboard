<?php require_once('connexion.php');?>

<!DOCTYPE html>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="main.js">

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/images/testicon.png" >

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
          <a href="statistics.php"  >
            <i class='bx bx-pie-chart-alt-2' ></i>
            <span class="links_name">Statistiques</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class='bx bx-cog' ></i>
            <span class="links_name">Paramètres ?</span>
          </a>
        </li>
        <li class="log_out">
          <a href="deconnecter.php">
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
        <span class="dashboard">Produits</span>
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
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Nombre de produits</div>
            <?php
	            $reqselect="select * from produits";
	            $resultat=mysqli_query($cnanamana,$reqselect);
	            $nbr=mysqli_num_rows($resultat);
	            echo "<p> <b> ".$nbr."</b> Produits </p>";
	        ?>
          </div>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Liste des produits</div>
          <p></p>
          <div class="button">
            <a href="Ajouter.php">Ajouter un nouveau produit</a>
            <p></p>
          </div>
        
      <table width="100%" border="1">
        <tbody>
          <tr>
          <th>Catégorie</th>
          <th>Couleur</th>
          <th>Prix</th>
          <th>Photo</th>
          <th>Plan</th>
          <th>Supprimer/Modifier</th>
          </tr>
    
	      <?php
	      while($ligne=mysqli_fetch_assoc($resultat))
	      {
	      ?>
	   
          <tr>
            <td><?php echo $ligne['CATEGORIE']; ?></td>
            <td><?php echo $ligne['COULEUR']; ?></td>
            <td><?php echo $ligne['PRIX']; ?></td>
            <td><img width="50px" height="50px" src="<?php echo $ligne['PHOTO']; ?>"></td>
            <td><img width="50px" height="50px" src="<?php echo $ligne['PLAN']; ?>"></td>
            <td><a href="supprimer.php?supCar=<?php echo $ligne['CATEGORIE']; ?>"><img src="images/supprimer.png" width="50px" height="50px"></a>
            <a href="modifier.php?mod=<?php echo $ligne['CATEGORIE']; ?>"><img src="images/modifier.png" width="50px" height="50px"></a></td>
          </tr>
        <?php } ?>

          </tbody>
        </table>
      </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

