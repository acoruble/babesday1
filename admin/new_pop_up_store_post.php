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

// ********************ENVOI DES INFORMATIONS*****************************
if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
  $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
  $filename = $_FILES["image"]["name"];
  $filetype = $_FILES["image"]["type"];
  $filesize = $_FILES["image"]["size"];

  // Vérifie l'extension du fichier
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

  // Vérifie la taille du fichier - 5Mo maximum
  $maxsize = 5 * 1024 * 1024;
  if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");
      move_uploaded_file($_FILES["image"]["tmp_name"], "img/" . $_FILES["image"]["name"]);
      echo "Votre fichier a été téléchargé avec succès.";
}

var_dump($_POST);

$surname = htmlspecialchars($_POST['surname']);
$name = htmlspecialchars($_POST['name']);
$description = htmlspecialchars($_POST['description']);
$facebook = htmlspecialchars($_POST['facebook']);
$instagram= htmlspecialchars($_POST['instagram']);
$etsy = htmlspecialchars($_POST['etsy']);
$otherAccount = htmlspecialchars($_POST['otherAccount']);

$image=$_FILES["image"]["name"];
var_dump($image);
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


var_dump($_POST);



// header('Location: administration.php');
?>
