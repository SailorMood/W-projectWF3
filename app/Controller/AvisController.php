<?php

namespace Controller;

use \W\Controller\Controller;
use PDO;

class AvisController extends Controller {

	public function afficheAvis() {
		$this->show('avis/avis');
	}

    public static function avisUtilisateurs(){
        $instance = new PDO("mysql:host=localhost;dbname=projet_soutenance", "root", "");
        $sql = "SELECT * FROM `avis` WHERE id IN (1,2,3)";
        $listeAvis = $instance->query($sql)->fetchAll();

        for ($i=0; $i<count($listeAvis); $i++){
            $id = $listeAvis[$i]['id'];
            $name = $listeAvis[$i]['name'];
            $firstname = $listeAvis[$i]['firstname'];
            $message = $listeAvis[$i]['message'];
            echo '<h2>'.$name.'</h2>', '<h3>'.$firstname.'</h3>'.'<br>', $message;
        }

    }

    public static function envoiAvis() {
        $instance = new PDO("mysql:host=localhost;dbname=blog", "root", "");

        $query = $instance->prepare("INSERT INTO avis ( id, name, firstname, numberphone, email, message)
VALUES (:id, :name, :firstname, :numberphone, :email, :message)");

        $insertSuccess = $query->execute(array(
            "id" => NULL,
            "name" => $_POST['name'],
            "firstname" => $_POST['firstname'],
            "numberphone" => $_POST['numberphone'],
            "email" => $_POST['email'],
            "message" => $_POST['message']

        ));

    }
}
