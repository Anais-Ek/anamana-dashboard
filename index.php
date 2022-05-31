<?php $cnanamana=new mysqli("51.159.27.252:50992","anamana","Fenelon@2022","anamana");?>

<!DOCTYPE html>

<html lang="fr" dir="ltr">
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
          <a href="index.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Tableau de bord</span>
          </a>
        </li>
        <li>
          <a href="products.php">
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
        <span class="dashboard">Tableau de bord</span>
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
            <div class="box-topic">Ajouter un produit</div>
          </div>
          <i class='bx bx-plus cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">TEST</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">TEST</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
      </div>
      </div>
    </div>

    <div class="e46_593">

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

