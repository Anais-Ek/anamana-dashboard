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

<div id="container">
            <!-- zone de connexion -->
            
            <form action="" method="post" class="formulaire">
                <h1>Connexion </h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input class="zonetext" type="text" placeholder="Entrer le nom d'utilisateur" name="txtlogin" required>

                <label><b>Mot de passe</b></label>
                <input class="zonetext" type="password" placeholder="Entrer le mot de passe" name="txtpw" required>

                <input type="submit" id='submit' class="submit" name="btlogin" value='LOGIN' >


<?php 

if(isset($_POST['btlogin'])){
$req="select * from utilisateurs where nom_utilisateur='".$_POST['txtlogin']."' and mot_de_passe='".$_POST['txtpw']."'";
if($resultat=mysqli_query($cnanamana,$req)){
$ligne=mysqli_fetch_assoc($resultat);
if($ligne!=0)
{
session_start();
$_SESSION['login']= $_POST['txtlogin'];
//echo "Bienvenue".$_SESSION['login'];
	header("location:products.php");
}
else {
echo "<font color='#F0001D'>Login ou mot des passe est invalide !!!!</font>";
} } }
?>
            </form>
        </div>
</body>
</html>