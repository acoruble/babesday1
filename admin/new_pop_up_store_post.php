<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if (empty($_SESSION['id']) OR empty($_SESSION['pseudo'])) {
  header('Location: connexion.php');
  exit();
}
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=babesday;charset=utf8', 'root', '');
}
catch (Exception $e)
{
  die('Erreur : ' . $e->getMessage());
};

var_dump($_POST);

$surname = htmlspecialchars($_POST['surname']);
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);
$facebook = htmlspecialchars($_POST['facebook']);
$instagram= htmlspecialchars($_POST['instagram']);
$etsy = htmlspecialchars($_POST['etsy']);
$otherAccount = htmlspecialchars($_POST['otherAccount']);

if (isset($_POST['image']) AND $_POST['image'] == 0)
{
  $image=$_POST['image'];
  $req = $bdd->prepare('INSERT INTO popupstore(surname, name, description, facebook, instagram, etsy, otherAccount, image)
  VALUES(:surname, :name, :description, :facebook, :instagram, :etsy, :otherAccount, :image)');
  $req->execute(array(
  'surname' => $surname,
  'name' => $name,
  'description' => $description,
  'facebook' => $facebook,
  'instagram' => $instagram,
  'etsy' => $etsy,
  'otherAccount' => $otherAccount,
  'image' => $image,
  ));
  // $_SESSION['info'] = 1;
}
header('Location: administration.php');
?>
