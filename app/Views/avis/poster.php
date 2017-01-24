<?php ?>
<div id="formAvis" class="hide">
    <h2>Votre avis nous intéresse</h2>
    <form method="post" action="http://localhost/W-projectWF3-Sailor/public/avis/poster/" >
      <label class="inf">&#9998;Informations :</label><br>
      <input type="text" required="required" name="name" value="" placeholder="Nom*"><br>
      <input type="text" required="required" name="firstname" value="" placeholder="Prénom*"><br>
      <input type="text" required="required" name="numberphone" value="" placeholder="Téléphone*"><br>
      <input type="email" required="required" name="email" value="" placeholder="Email*"><br>
      <textarea required="required" name="message" placeholder="Message*"></textarea><br>
      <input class="" type="submit" name="addMessage" value="Envoyer">
    </form>
    <p>*Champs devant obligatoirement être renseignés</p>
  </div>