<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Inscription </title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style2.css">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  </head>

    
  <body class="accueil">
    <header>
      <a href="INDEX.HTML"><img src="../GBAF/images/logo gbaf.png" alt="GBAF"></a>
    </header>

    <main>
      <h1> Création d'un compte utilisateur</h1>
        <form class="generic-form champs" action="valid_creacompte.php" method="post">
        <div class="card border-primary mb-3">
        <div class="card-header">Créer un compte</div>
        <div class="card-body">
          <p class="card-text">
            <label for="login">UserName</label>
            <input class="form-input form-control" type="text" id="login" name="login" required>
          </p>
          <p class="card-text">
            <label for="password">Password</label>
            <input class="form-input form-control" type="password" name="password" id="password" required>
            <label for="checkbox">
            <input type="checkbox" id="checkbox">
              Afficher le mot de passe
            </label>
          </p>
        </div>
        </div>

        <div class="card border-primary mb-3">
        <div class="card-header">Détails</div>
        <div class="card-body">
          <p class="card-text">
            <label for="nom">Nom</label>
            <input class="form-input form-control" type="text" id="nom" name="nom" required>
          </p>
          <p class="card-text">
            <label for="prenom">Prénom</label>
            <input class="form-input form-control" type="text" id="prenom" name="prenom" required>
          </p>
        <div class="form-input form-group">
            <label for="question">Question secrète</label>
            <select class="form-input form-select form-control" id="question" name="question" required>
            <option value>-Choississez une question secrète-</option>
              <option value="">Quel est le modèle de votre première voiture?</option>
              <option value="">Quel est le nom du pays que vous aimeriez visiter?</option>
              <option value="">Quel est le nom de jeune fille de votre mère?</option>
              <option value="">Quelle est votre couleur préférée?</option>
            </select>

            <label for="reponse">Réponse</label> :
              <input type="text " class="form-control" name="reponse" id="reponse" required /><br>

        </div>
          <ul class="account center">
            <li><input id="submit" type="submit" class="btn btn-primary" value="Envoyer"></li>
            <li><a href="INDEX.HTML" class="btn btn-link">Annuler</a></li>
          </ul>
        </div>
        </div>
        </form>
        <div class="push"></div>
    </main>

      <footer>
        <ul class="bg-dark text-white">
          <li><a href="mentionslegales.php" class="text-white btn btn-outline-primary">Mentions légales</a></li>
          <li><a href="sitefictif.php" class="text-white btn btn-outline-primary">Site fictif</a></li>
        </ul>
      </footer>
      <script src="js/reveal_code.js"></script>
  </body>
 </html>



       
    
    