<?php
/**
 * Created by PhpStorm.
 * User: KuroNoKenshi
 * Date: 30/11/2017
 * Time: 15:07
 */

class SQLInteractions{


    function showColumsTable($table){
        $requetebase = Connexion::bdd()->query('SHOW COLUMNS FROM ' .$table);
        $request = $requetebase->fetchAll();
        return $request;
    }

    function overrideSELECT($query,$from,$where = 1,$typeFetch = 'fetch'){
        $requetebase = Connexion::bdd()->query('SELECT '.$query.' FROM '.$from. ' WHERE ' .$where );
        if($typeFetch == 'fetch') {
            $tableRequest = $requetebase->fetch();
        }else{
            $tableRequest = $requetebase->fetchAll();
        }
        return $tableRequest;
    }

    function overrideINSERT($intoQuery,$tableCol,$tableVal){
        $requetebase = Connexion::bdd()->exec('INSERT INTO `'.$intoQuery.'` ('.implode($tableCol,', ').') VALUES ('.implode($tableVal,', ').')');
//        $requetebase = Connexion::bdd()->prepare('INSERT INTO :INTOQUERY (:TABLECOL) VALUES (:TABLEVAL)');
//        $requetebase->bindValue(':INTOQUERY',$intoQuery,PDO::PARAM_STR);
//        $requetebase->bindValue(':TABLECOL',implode($tableCol,','));
//        $requetebase->bindValue(':TABLEVAL',implode($tableVal,','),PDO::PARAM_STR);
//        $requetebase->execute();
        return $requetebase;
    }

    function overrideUPDATE($table,$newSet,$whereCrit){
        Connexion::bdd()->exec('UPDATE '.$table.' SET '.$newSet.'  WHERE ' .$whereCrit );
    }

    function overrideDELETE($delCol,$delFrom,$delWhere){
        Connexion::bdd()->exec('DELETE '.$delCol.' FROM `'.$delFrom.'` WHERE '. $delWhere );
    }

    function imbriquedRequest(){

    }

}

?>