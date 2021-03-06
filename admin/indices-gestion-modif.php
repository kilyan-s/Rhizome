<?php
	require_once("../datas/parametres.php");
  setlocale (LC_TIME, 'fr-FR', 'fra');
	if (!empty($_GET['indice']))
    	{
        	$id = $_GET['indice'];
    	}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>Incognito - Gestion des indices</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #map-canvas { height: 400px; width:100%; margin-bottom: 20px }
      #indice_long {margin-bottom: 20px;}
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
        <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="index.php">Incognito - Admin</a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a href="indices-gestion-ajout.php">Ajout d'un indice</a>
            </li>
            <li class="active">
              <a href="#">Gestion d'un indice</a>
            </li>
            <!-- <li>
              <a href="#">Gestion des commentaires</a>
            </li> -->
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
        <h1>Gestion de l'indice n°<?php echo $id;?></h1>
        <p></p>
        <!-- <button type="button" class="btn btn-primary">Créer une nouvelle étape</button> -->
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12">
          <h3>Modification d'un indice</h3>
           <?php
            $req = $PDO->prepare('SELECT *  FROM `indice` WHERE Id_I = :id');
            $req->execute(array(
                ":id"=> $id
            ));
            $resultat = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($resultat as $donnees) {

          ?>
          <form class="form-group" role="form" method="POST" action="script/indices-gestion-modif-traitement.php">
          	<input type="hidden" name="indice_id" id="indice_id" value="<?php echo $id; ?>">
            <label for="indice_etape">Etape de l'indice<small> (obligatoire)</small></label>
            <input required="required" type="text"  class="form-control" size="80" name="indice_etape" id="indice_etape" value="<?php echo $donnees["Id_E"];?>">

            <label for="indice_type">Type de l'indice<small> (obligatoire)</small></label>
            <select required="required" class="form-control" name="indice_type" id="indice_type">
              <?php
                //Affichage du type dans la BDD en selected
                if ($donnees["Type"] == "Photo"){
                  echo"<option selected>Photo</option>
                  <option>Plan</option>
                  <option>Article</option>
                  <option>Lien</option>";
                }
                else if($donnees["Type"] == "Plan"){
                  echo"<option>Photo</option>
                  <option selected>Plan</option>
                  <option>Article</option>
                  <option>Lien</option>";
                }
                else if($donnees["Type"] == "Article"){
                  echo"<option>Photo</option>
                  <option>Plan</option>
                  <option selected>Article</option>
                  <option>Lien</option>";
                }
                else if($donnees["Type"] == "Lien"){
                  echo"<option>Photo</option>
                  <option>Plan</option>
                  <option>Article</option>
                  <option selected>Lien</option>";
                }
              ?>
              
            </select>
            <label for="indice_titre">Titre de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_titre" id="indice_titre" value="<?php echo $donnees["Titre"];?>">

            <label for="indice_photo">Photo de l'indice</label>
            <input type="file" class="form-control" size="80" name="indice_photo" id="indice_photo" value="<?php echo $donnees["Photo"];?>">

            <label for="indice_date">Date de l'indice</label>
            <input type="date" class="form-control" size="80" name="indice_date" id="indice_date" value="<?php echo $donnees["Date"];?>">

            <label for="indice_url">Url de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_url" id="indice_url" value="<?php echo $donnees["Url"];?>">

            <label for="indice_description">Description de l'indice</label>
            <textarea class="form-control" rows="6" name="indice_description" id="indice_description"><?php echo $donnees["Description"];?></textarea>
            
            <label for="indice_lat">Lattitude de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_lat" id="indice_lat" value="<?php echo $donnees["Lat"];?>">

            <label for="indice_long">Longitude de l'indice</label>
            <input type="text" class="form-control" size="80" name="indice_long" id="indice_long" value="<?php echo $donnees["Long"];?>">

            <div id="map-canvas"></div>

            <button type="submit" class="btn btn-info">Valider</button>
          </form>
          <?php
            }
          ?>
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
     <!-- GOOGLE MAP API -->
    <script language="Javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/map.js"></script>
  </body>
</html>