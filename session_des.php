<?php
session_start();
?>
<!DOCTYPE HTML> 
<html lang="fr"> 
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet">
<script
	src="https://code.jquery.com/jquery-3.1.0.min.js"
	integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
	crossorigin="anonymous">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head> 
<body>
<div class="container">
<div class="row row-centered">
<div class="col-lg-12 text-center">
<br>
<?php session_destroy(); ?>
<h1><strong>VOTRE SESSION EST FINIE<strong></h1>
<br>
<h1>Formulaires</h1>
<form action="" method="post"></form>
<div class="form-group">
    <label for='nom'>Nom : </label>
    <input type="text" class="form-control" name="nomInput" id="nom" placeholder="Nom ici"></input>
</div>
<div class="form-group">
    <label for='prenom'>Ville : </label>
    <input type="text" class="form-control" name="villeInput" id="prenom"></input>
</div>
<div class="envoyer">
<button type="submit" class="btn_btn-default">ENVOYER!</button>
</div>
<?php $_POST['nomInput'] = $_SESSION["nomInput"];
      $_POST['villeInput'] = $_SESSION["villeInput"]; ?>
<br>
<a href="session_p1.php">Page 1</a>
<a href="session_p2.php">Page 2</a>
<a href="session_des.php">Déconnéxion</a>
<a href="session.php">Index</a>
</div>
</div>
</div>
</body>
</html> 