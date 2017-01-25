<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 25/01/2017
 * Time: 16:03
 */

namespace Controller;
use \W\Controller\Controller;
use \Model\insertMessageModel;

class MessageController extends Controller
{
    public function envoiMessage() {
        if (isset($_POST['sendMess'])){
            $newMessage = array(
                "motif" => $_POST['motif'],
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "numberphone" => $_POST['numberphone'],
                "email" => $_POST['email'],
                "message" => $_POST['message']
            );
            $insertMessage = new insertMessageModel();
            $insertion = $insertMessage -> insertMessage($newMessage);

            $this->show('contact/contact');
        }

    }
}