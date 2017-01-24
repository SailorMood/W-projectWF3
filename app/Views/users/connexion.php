<?php ?>
<!-- formulaire de connexion -->
			<div id="formLogin" class="hide">
			  <h2>Connexion</h2>
			  <form class="" action="http://localhost/W-projectWF3-Sailor/public/users/connexion/" method="post">
			    <label for="">Votre identifiant</label><br>
			      <input required="required" type="text" name="numberphone" placeholder="Votre numéro de portable">
			    <label for="">Votre mot de passe</label><br>
			      <input required="required" type="password" name="password" placeholder="Votre mot de passe">
			    <input type="hidden" name="userId" value="">
			      <input type="submit" name="connexion" value="connexion">
			  </form>
			</div>