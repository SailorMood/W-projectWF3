<?php
namespace Model;
use W\Model\Model;

use \W\Model\ConnectionModel;

class insertMessageModel extends Model
{

    public function insertMessage($newMessage)
    {
        $dbhConnect = new ConnectionModel();
        $instance = $dbhConnect->getDbh();
        // requête d'ajout d'un message
        $sql = "INSERT INTO renseignements (motif, name, firstname, numberphone, email, message)
    VALUES ('" . $newMessage['motif'] . "','" . $newMessage['name'] . "', '" . $newMessage['firstname'] . "', '" . $newMessage['numberphone'] . "','" . $newMessage['email'] . "','" . $newMessage['message'] . "')";

        $insertSuccess = $instance->exec($sql);

    }
}