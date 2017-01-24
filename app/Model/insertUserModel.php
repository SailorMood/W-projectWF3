<?php
/**
 * Created by PhpStorm.
 * User: Babas
 * Date: 23/01/2017
 * Time: 22:32
 */

namespace Model;
use W\Model\Model;
use \W\Model\ConnectionModel;

class insertUserModel extends Model
{
    public function insertUser($newUser){
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect -> getDbh();
        // requête d'ajout d'un utilisateur
        $sql = "INSERT INTO users (name, firstname, numberphone, email, password)
    VALUES ('".$newUser['name']."', '".$newUser['firstname']."', '".$newUser['numberphone']."','".$newUser['email']."','".$newUser['password']."')";

        $insertSuccess = $instance->exec($sql);

    }
}