<?php $this->layout('layout', ['title' => 'Avis']) ?>

<?php $this->start('main_content') ?>


<div id="formAvis" class="hide">
    <h2>Votre avis nous intéresse</h2>
    <form class="" action="avis.php" method="post">
      <label class="inf">&#9998;Informations :</label><br>
      <input type="text" required="required" name="name" value="" placeholder="Nom*"><br>
      <input type="text" required="required" name="firstname" value="" placeholder="Prénom*"><br>
      <input type="text" required="required" name="numberphone" value="" placeholder="Téléphone*"><br>
      <input type="email" required="required" name="email" value="" placeholder="Email*"><br>
      <textarea required="required" name="message" placeholder="Message*"></textarea><br>
      <input type="hidden" name="users_id" value="">
      <input class="" type="submit" name="addMessage" value="Envoyer">
        <?php
        if (isset($_POST['addMessage'])){
            AvisController::envoiAvis();
        } else{
            $e = "Ahah vous n'avez pas dit le mot magique !";
            echo($e);
        }
        ?>
    </form>
    <p>*Champs devant obligatoirement être renseignés</p>
  </div>
  <div class="customReview">
      <?php \Controller\AvisController::avisUtilisateurs(); ?>
  </div>
  <nav>
    <a id="avis" class="avis" href="#">Laissez votre avis</a>
  </nav>
<?php $this->stop('main_content') ?>
