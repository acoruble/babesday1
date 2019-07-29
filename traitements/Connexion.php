<?php
/**
 * Created by PhpStorm.
 * User: KuroNoKenshi
 * Date: 17/12/2017
 * Time: 13:56
 */

class Connexion {

    public static function bdd() {
        $serveur = 'localhost';
        $port = '3306';
        $utilisateur = 'root';
        $motdepasse = '';
        $base = 'babesday';

        try {
            $bdd = new PDO('mysql:host='.$serveur.';port='.$port.';dbname='.$base,$utilisateur,$motdepasse);
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die('Erreur : '. $e->getMessage());
        }
        return $bdd;
    }

    public function verifConnexion(){

    }
}

?>