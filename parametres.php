<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Paramètres</title>
    <link rel="stylesheet" href="../fontawesome5/web-fonts-with-css/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
  </head>
  <body class="connecter">
    <header>
      <a href="INDEX.HTML"><img src="../GBAF/images/logo gbaf.png" alt="GBAF"></a>
      <ul class="head_ul alert bg-dark">
        <li class="text-white">Nom/Prénom</li>
        <li><a href="parametres.php?account=44" class="text-white">Paramètres du compte</a></li>
        <li class="text-white"><a href="deconnexion.php" class="text-white">Deconnexion</a></li>
      </ul>
    </header>
    <main>
      <form class="" action="valid_modif_parametres.php" method="post">
                <div class="card border-primary mb-3">
          <div class="card-header">Paramètres du compte</div>
          <div class="card-body">
            <p class="card-text">
              <label for="nom">Nom</label>
              <input class="form-input form-control" type="text" id="nom" name="nom" value="" required>
            </p>
            <p class="card-text">
              <label for="prenom">Prénom</label>
              <input class="form-input form-control" type="text" id="prenom" name="prenom" value="" required>
            </p>
            <p class="card-text">
              <label for="username">Username</label>
              <input class="form-input form-control" type="text" id="username" name="username (adresse mail)" value="" required>
            </p>
            <p class="card-text">
              <label for="password">Password</label>
              <input class="form-input form-control" type="password" name="password" id="password" required>
              <label for="checkbox">
              <input type="checkbox" id="checkbox">
              Afficher le mot de passe
              </label>
            </p>
            <div class="form-input form-group">
              <label for="question">Question secrète</label>
              <select class="form-input form-select form-control" id="question" name="question" required>
                <option value="">--- Selectionner une question ---</option>
                <option value="Quel est le modèle de votre première voiture? ?">Quel est le modèle de votre première voiture?</option>
                <option value="Quel est le nom du pays que vous aimeriez visiter?">Quel est le nom du pays que vous aimeriez visiter?</option>
                <option value="Quel est le nom de jeune fille de votre mère?">Quel est le nom de jeune fille de votre mère?</option>
                <option value ="Quelle est votre couleur préférée ?">Quelle est votre couleur préférée ?</option>
               </select>
            </div>
            <p class="card-text">
              <label for="reponse">Réponse</label>
              <input class="form-input form-control" type="text" id="reponse" name="reponse" value="" required>
            </p>
            <input type="hidden" name="account" value="44">
            <ul class="account center">
              <li><input id="submit" type="submit" class="btn btn-primary" value="Modifier"></li>
              <li><a href="index.php" class="btn btn-link">Annuler</a></li>
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
    <script src="../js/reveal_code.js"></script>
  </body>
</html>
