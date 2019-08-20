<?php
// ***************ON DEMARRE LA SESSIONS**********************
session_start();

// ****************VERIFICATION SESSION***********************
if (empty($_SESSION['id']) OR empty($_SESSION['pseudo'])) {
  header('Location: connexion.php');
  exit();
}

// **************CONNEXION BDD*************************
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=babesday;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
};
$id = $_POST['id'];
$req = $bdd->exec("DELETE FROM popupstore WHERE ID = ".$id);
