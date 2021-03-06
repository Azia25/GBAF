
<?php
require_once("include/headerinclude.php");
?>


<!DOCTYPE html>
<HTML lang="Fr">

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
   
    <meta charset="utf8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>

        <!--Faire le lien entre les pages-->
       
    <title>
        GBAF
    </title>
</head>

<?php 
        if(!empty($title))
        {

    <title><?= $title; }?></title>

?>
    
<body class="accueil">
    <header>
      <p>
        <a href="GBAF/images"><img src="images/logo gbaf.png" alt="gbaf"></a>
      </p>
    </header>    

    <main>
       <p>
        <form class="" action="valid-connexion.php" method="post">
          <div class="card border-primary mb-3">
            <div class="card-header">Connexion</div>
            <div class="card-body"> </div>
            <p class="card-title">Pour vous connecter, veuillez renseigner votre Nom (email) et votre Mot de passe</p>
            <p class="card-text">
              <label for="login">UserName</label>
              <input class="form-input form-control" type="text" id="login" name="login" required>
            </p>
          
        
           

            <div class="card-text">
                <label for="password">Password</label>
                <input class="form-input form-control" type="password" name="Mot de passe" id="password" required>
                <label for="checkbox"><input type="checkbox" id="checkbox">Afficher le mot de passe
                </label>
            </div>
              

            <div class="center">
                <input class="btn btn-primary" type="submit" name="connexion" value="Connexion">
              </div>
              <a class="btn btn-link" href="login/forgot_password.php">Vous avez oubli?? votre mot de passe ?</a>
            </div>
        </form>
          <div class="card border-primary mb-3">
            <div class="card-header">Premi??re visite sur ce site ?</div>
            <div class="card-body">
              <p class="card-title"> Veuillez cr??er un compte utilisateur.</p>
            </div>
            <div class="center">
              <a class="btn btn-primary" href="crea_compte.php">Cr??er un compte</a>
            </div>
          </div>
          <div class="push"></div>
      </main>

        <footer>
            <ul class="center">
                <li><a href="Mentionslegales.php" class ="text-black btn btn-outline-primary">Mentions l??gales</a></li>
                <li><a href="sitefictif.php" class="text-black btn btn-outline-primary">Site fictif</a></li>
            </ul>
        </footer>
        
    </body>
    </HTML>

<?php 
require_once('include/footer.php');
?> 
