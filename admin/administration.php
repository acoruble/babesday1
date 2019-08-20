<!-- //*********CONNEXION A LA BDD************************************************************************************************************* -->

<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
if (empty($_SESSION['id']) OR empty($_SESSION['pseudo'])) {
  header('Location: connexion.php');
  exit();
}
// elseif ($_SESSION['info'] = 1) {
//   echo "<div class='alert alert-danger text-center' role='info'>Ce pop-up store a bien été ajouté !</div>";
//   $_SESSION['info'] = 0;
// }
else {
  try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=babesday;charset=utf8', 'root', '');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Espace administration</title>
</head>

<body>
  <div class="p-2" style="">
    <div class="container">
      <div class="row">
        <div class="">
          <ul class="">
            <li class="" > <a href="../index.php" class="nav-link">Votre site</a> </li>
            <li class="0"> <a class="nav-link" href="deconnexion">Déconnexion</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Bienvenue !</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="p-2" style="">
    <div class="container">
      <div class="row bg-primary text-light text-center border-0 shadow-lg rounded-top" style="">
        <div class="col-md-12 shadow-lg rounded-top" style="">
          <h1 class="shadow-lg" style="">Ajouter un Pop-up Store<br></h1>
          <div class="row">
            <!-- **********************Créer un nouveau pop-up store ********************** -->
            <form method="post" action="new_pop_up_store_post.php" class="text-left" enctype="multipart/form-data">

              <div>
                <label for="surname">Nom</label> <input name ="surname" type="text" placeholder="Son nom ..." required="required">
              </div>
              <div>
                <label for="name">Prénom</label> <input name ="name" type="text" placeholder="Son prénom ...">
              </div>
              <div>
                <label for="description">Description</label> <input name ="description" type="text" placeholder="Sa description ..." required="required">
              </div>
              <div>
                <label for="facebook">Facebook</label> <input name ="facebook" type="text" placeholder="Son facebook ...">
              </div>
              <div>
                <label for="instagram">Instagram</label> <input name ="instagram" type="text" placeholder="Son instagram ...">
              </div>
              <div>
                <label for="etsy">Etsy</label> <input name ="etsy" type="text" placeholder="Son etsy ...">
              </div>
              <div>
                <label for="otherAccount">Autre compte ou site web</label> <input name ="otherAccount" type="text" placeholder="Son autre compte ou site web ...">
              </div>
              <div>
                <label for="image">Image</label> <input name ="image" type="file" placeholder="Son image ..." required="required">
              </div>
              <div>
                <button type="submit" class="btn btn-secondary w-100">Ajouter ce pop-up store</button>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="p-2" style="">
    <div class="container">
      <div class="row bg-primary text-light text-center border-0 shadow-lg rounded-top" style="">
        <div class="col-md-12 shadow-lg rounded-top" style="">
          <h1 class="shadow-lg" style="">Modifier un Pop-up Store<br></h1>
          <div class="row">
            <!-- **********************modifier un pop-up store ********************** -->
            <?php
            foreach ($bdd->query("SELECT * FROM popupstore") as $data){
              ?>
              <form method="post" action="change_pop_up_store_post.php" class="text-left" enctype="multipart/form-data">

                <div>
                  <input name ="id" type="hidden" value="<?= $data['ID'];?>" required="required">
                </div>
                <div>
                  <label for="surname">Nom</label> <input name ="surname" type="text" value="<?= $data['surname'];?>" required="required">
                </div>
                <div>
                  <label for="name">Prénom</label> <input name ="name" type="text" value="<?= $data['name'];?>">
                </div>
                <div>
                  <label for="description">Description</label> <input name ="description" type="text" value="<?= $data['description'];?>" required="required">
                </div>
                <div>
                  <label for="facebook">Facebook</label> <input name ="facebook" type="text" value="<?= $data['facebook'];?>">
                </div>
                <div>
                  <label for="instagram">Instagram</label> <input name ="instagram" type="text" value="<?= $data['instagram'];?>">
                </div>
                <div>
                  <label for="etsy">Etsy</label> <input name ="etsy" type="text" value="<?= $data['etsy'];?>">
                </div>
                <div>
                  <label for="otherAccount">Autre compte ou site web</label> <input name ="otherAccount" type="text" value="<?= $data['otherAccount'];?>">
                </div>
                <div>
                  <label for="image">Image</label> <input name ="image" type="file" required="required">
                </div>
                <div>
                  <button type="submit" class="btn btn-secondary w-100">Modifier ce pop-up store</button>
                </form>
                <?php
              }
              ?>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="p-2" style="">
    <div class="container">
      <div class="row bg-primary text-light text-center border-0 shadow-lg rounded-top" style="">
        <div class="col-md-12 shadow-lg rounded-top" style="">
          <h1 class="shadow-lg" style="">Supprimer un Pop-up Store<br></h1>
          <div class="row">
            <!-- **********************supprimer un pop-up store ********************** -->

            <form method="post" action="delete_pop_up_store_post.php" class="text-left" enctype="multipart/form-data">
              <select name="id">
                <?php
                foreach ($bdd->query("SELECT surname, ID FROM popupstore") as $data){
                  ?>

                  <option value="<?=$data[1]?>"><?=$data[0]?></option>
                  <?php
                }
                ?>
              </select>
                  <button type="submit" class="btn btn-secondary w-100">Supprimer ce pop-up store</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>


  </body>

  </html>
