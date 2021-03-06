<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Accueil</title>
    <link rel="stylesheet" href="../GBAF/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>

 
  <body class="connecter">
    <header>
      <a href="INDEX.HTML"><img src="../GBAF/images/logo gbaf.png" alt="GBAF"></a>
      <ul class="head_ul alert bg-dark">
        <li class="text-white">Nom/Prénom</li>
        <li><a href="parametres.php?" class="text-white">Paramètres du compte</a></li>
        <li class="text-white"><a href="deconnexion.php" class="text-white">Deconnexion</a></li>
      </ul>
    </header>

    <main>
      <section class="mobile_text jumbotron">
        <h1>Présentation de la GBAF</h1>
        <p>Le Groupement Banque Assurance Français (GBAF) est une fédération représentant les 6 grands groupes français :</p>
        <ul>
          <li>La BNP Paribas</li>
          <li>BPCE</li>
          <li>Crédt Agricole</li>
          <li>Crédit Mutuel-CIC</li>
          <li>Société Générale</li>
          <li>La Banque Postale</li>
        </ul>
        <p>Même s’il existe une forte concurrence entre ces entités, elles vont toutes travailler de la même façon pour gérer près de 80 millions de comptes sur le territoire national.<br>Le GBAF est le représentant de la profession bancaire et des assureurs sur tous les axes de la réglementation financière française. Sa mission est de promouvoir l'activité bancaire à l’échelle nationale. C’est aussi un interlocuteur privilégié des pouvoirs publics.</p>
      </section>

      <section>
        <h2>Textes acteurs et partenaires</h2>

        <?php foreach 
          $acteur, <gbaf class="sql">acteur</gbaf> 
          if(!empty($title))
            
        ?>
          
      </section>

      <section class="card mb-3 border-primary">
        <div class="flex_acteurs">
        <div class="center">
          <a href="acteurs.php2.html"><img src="../GBAF/images/logo protectpeople.png"alt="protectpeople"></a>
        </div>
        </div>
      </section>

      <section class="card-body-text">
        <h3 class="card-title">Protectpeople</h3>
        <p class="card-text">Protectpeople finance la solidarité nationale.<br></p>
      </section>
      <div class="link">
        <a href="acteurs.php2.html" class="btn btn-link">lire la suite</a>
      </div>
     

      <section class="card mb-3 border-primary">
        <div class="flex_acteurs">
        <div class="center">
          <a href="acteurs.php3.html"><img src="../GBAF/images/logo Dsa_france.png "alt="Dsa_france"></a>
        </div>
        <div class="card-body-text">
          <h3 class="card-title">Dsa France</h3>
          <p class="card-text">Dsa France accélère la croissance du territoire et ...</p>
        </div>
      </section>
        
      <section class="link">
        <a href="acteurs.php3.html" class="btn btn-link">lire la suite</a>
      <div class="card mb-3 border-primary">
      <div class="flex_acteurs">
      <div class="center">
        <a href="acteurs.php4.html"><img src="../GBAF/images/logo cde.png" alt="CDE"></a>
      </div>
      </div>
      </div>
      </section>
      <section class="card-body-text">
        <h3 class="card-title">CDE</h3>
        <p class="card-text">La CDE (Chambre Des Entrepreneurs) accompagne les ent...</p>
      </section>
        </div>
        <div class="link">
          <a href="acteurs.php4.html" class="btn btn-link">lire la suite</a>
        </div>
        <div class="push"></div>
      </section>
    </main>

      <footer>
        <ul class="bg-dark text-white">
          <li><a href="mentionslegales.php" class="text-white btn btn-outline-primary">Mentions légales</a></li>
          <li><a href="sitefictif.php" class="text-white btn btn-outline-primary">Site fictif</a></li>
        </ul>
      </footer>
    </body>
  </html>
  
  <?php
  require_once('include/footer.php');
  ?>