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
        $sql = $instance->prepare("INSERT INTO users (name, firstname, numberphone, email, password) VALUES (:name, :firstname, :numberphone, :email, :password)");

        $insertSuccess = $sql->execute(array(
            "name" => $newUser['name'],
            "firstname" => $newUser['firstname'],
            "numberphone" => $newUser['numberphone'],
            "email" => $newUser['email'],
            "password" => $newUser['password']
        ));
    }
}