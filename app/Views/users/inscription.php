<?php ?>
<!-- formulaire d'inscrition -->
			<div id="formSignup" class="hide">
			  <h2>Inscription</h2>
			  <form method="post" action="http://localhost/W-projectWF3-Sailor/public/users/inscription/">
			    <label for="">Nom</label><br>
			    <input required="required" type="text" name="name" value="">
			    <label for="">Prénom</label><br>
			    <input required="required" type="text" name="firstname" value="">
			    <label for="">N° de portable</label><br>
			    <input required="required" step="10" type="text" name="numberphone" value="">
			    <label for="">Email</label><br>
			    <input required="required" type="text" name="email" value="">
			    <label for="">Mot de passe</label>
			    <input required="required" type="password" name="password" value="">
			    <input type="submit" name="send" value="Valider">
			  </form>
			</div>