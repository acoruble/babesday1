<?php
//*********CONNEXION A LA BDD************************************************************************************************************* -->
try
{
  // $bdd = new PDO('mysql:host=db754453329.db.1and1.com;dbname=db754453329;charset=utf8', 'dbo754453329', 'Lisaume14*');
  $bdd = new PDO('mysql:host=localhost;dbname=babesday;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
}
// $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pseudo, password FROM admin WHERE pseudo = :pseudo');
$req->execute(array(
  'pseudo' => $_POST['pseudo']));
  var_dump($_POST);
  $resultat = $req->fetch();
  var_dump($resultat['password']);
  if ($resultat['password']!=$_POST['password'])
  {
    echo 'Mauvais identifiant ou mot de passe !';
    header('Location: connexion.php');
  }
  else
  {
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $resultat['pseudo'];
    $_SESSION['info'] = 0;
    header('Location: administration.php');
  }
  ?>
