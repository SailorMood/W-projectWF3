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
        $sql = "INSERT INTO avis (name, firstname, numberphone, email, message)
    VALUES ('".$newAvis['name']."','".$newAvis['firstname']."','".$newAvis['numberphone']."', '".$newAvis['email']."', '".$newAvis['message']."')";

        $insertSuccess = $instance->exec($sql);

    }
}