<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBAF - Nouveau commenaire</title>
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
        <li><a href="parametres.php?account=44" class="text-white">Paramètres du compte</a></li>
        <li class="text-white"><a href="deconnexion.php" class="text-white">Deconnexion</a></li>
      </ul>
    </header>
    <main>
      <h2>Protectpeople</h2>
            <form class="" action="valid_new_comment.php" method="post">
        <div class="card border-primary mb-3">
          <div class="card-header">Nouveau commentaire</div>
          <div class="card-body">
            <p>Merci de donner un avis professionnel et constructif sur ce partenaire.</p>
          </div>
          <div class="form-group form-input text_area">
            <label for="new_comment"></label>
            <textarea class="form-control exampleTextarea" id="new_comment" rows="3" name="new_comment" required></textarea>
            <input type="hidden" name="acteurs" value="1">
          </div>
          <ul class="account center area">
            <li><input type="submit" class="btn btn-primary" name="publier" value="Publier"></li>
            <li><a href="acteurs.php2.html" class="btn btn-link">Retour</a></li>
          </ul>
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
  </body>
</html>
