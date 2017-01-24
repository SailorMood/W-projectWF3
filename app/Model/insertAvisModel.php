<?php

namespace Model;
use W\Model\Model;

use \W\Model\ConnectionModel;

class insertAvisModel extends Model
{
    /**
     * @param $newAvis
     */
    public function insertAvis($newAvis){
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect -> getDbh();
        // requête d'ajout d'un avis
        $sql = $instance->prepare("INSERT INTO avis (name, firstname, numberphone, email, message) VALUES (:name, :firstname, :numberphone, :email, :message)");

        $insertSuccess = $sql->execute(array(
            "name" => $newAvis['name'],
            "firstname" => $newAvis['firstname'],
            "numberphone" => $newAvis['numberphone'],
            "email" => $newAvis['email'],
            "message" => $newAvis['message']
        ));

    }
}