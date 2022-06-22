<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Oubli mot de passe</title>
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body class="accueil">
    <header>
      <a href="INDEX.HTML"><img src="images/logo gbaf.png" alt="GBAF"></a>
    </header>
   
    <main>
      <form class="" action="valid_forgot_password.php" method="post">
      <section class="card border-primary mb-3">
        <div class="card-body">
        <div class="form-group">
          <label for="username">Username (adresse mail)</label> :
          <input type="text" class="form-control" name="username" id="username" required/> <br>
          <label for="question" name="question" id="question">Question</label> : <br>
        <select class="form-control" name="question" value="">
          <option>-Choississez-</option>
          <option value>-Choississez une question secrète-</option>
            <option value="">Quel est le modèle de votre première voiture?</option>
            <option value="">Quel est le nom du pays que vous aimeriez visiter?</option>
            <option value="">Quel est le nom de jeune fille de votre mère?</option>
            <option value="">Quelle est votre couleur préférée?</option>
        </select>
            <ul class="account center">
              <li><input type="submit" class="btn btn-primary" name="valid-connexion" value="Valider"></li>
              <li><a href="../" class="btn btn-link">Annuler</a></li>
            </ul>
        </div>
        </div>
      </section>
      </form>
    </main>

    <footer>
      <ul class="bg-dark text-white">
        <li><a href="../mentions_legales.php" class="text-white btn btn-outline-primary">Mentions légales</a></li>
        <li><a href="../site fictif.php" class="text-white btn btn-outline-primary">Site fictif</a></li>
      </ul>
    </footer>
  </body>
</html>