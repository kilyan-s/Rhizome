
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Incognito - Gestion de la home</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Incognito - Admin</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active">
              <a href="#">Gestion de la home</a>
            </li>
            <li>
              <a href="etapes-gestion.php">Gestion des étapes</a>
            </li>
            <li>
              <a href="#">Gestion des commentaires</a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="utils/deconnexion.php">Déconnexion</a>
            </li>
          </ul>
        </div>
        
      </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Gestion de la home</h1>
        <p>Vidéo, résumé, indice principal</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h3>Gestion de la home</h3>
          <form class="form-group" role="form" method="post" action="">
            <!-- <div class="form-group">
              <label class="sr-only" for="exampleInputEmail2">Email address</label>
              <input type="email" "class="form-control id="exampleInputEmail2" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label class="sr-only" for="exampleInputPassword2">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-default">Sign in</button> -->
            <label for="indice_titre">Titre de l'indice</label>
            <input type="text" class="form-control" size="80" name="titre_indice" id="titre_indice">

            <label for="indice_video">Video de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_video" id="indice_video" placeholder="attention ce doit être le lien D'INTÉGRATION">

            <label for="indice_resume">Résumé de l'indice</label>
            <textarea class="form-control" rows="6" name="indice_resume" id="indice_resume"></textarea>

            <button type="submit" class="btn btn-info">Valider</button>
          </form>
        </div>
      </div>

      

      <footer>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
