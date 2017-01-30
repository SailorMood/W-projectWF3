<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script
	src="http://code.jquery.com/jquery-3.1.1.min.js"
	integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	crossorigin="anonymous"></script>
	<script src="<?= $this->assetUrl('js/master.js') ?>"></script>
</head>
<body>
	<div class="container">
		<header>
			<div class="title">Taxi-Dieppe</div>
			<?php
		if (isset($_POST['userName']) /* && is_log()*/) { ?>
        <div class="minititle">
        <span class="session">Bonjour, <?php echo $_SESSION['user']['userName']; ?></span><br>
        <a class="logout" href="#">Déconnexion</a>
      </div>
      <?php } else { ?>
        <div class="minititle">
          <a id="signup" href="#">Inscription</a> |
          <a id="login" href="#">Connexion</a>
        </div>
      <?php  }?>
		</header>
		<div id="wrap"></div>
		<main>

        <?php include('users/inscription.php'); ?>

		<?php include('users/connexion.php'); ?>


			<!-- formulaire de commamnde de trajet -->
			<div id="formItinerary" class="hide">
        <form action="#" method="post">
            <select>
                <option><< Selectionner >></option>
                <option value="Commander">Commander</option>
                <option value="Reserver">Réserver</option>
            </select>
          <h3>Lieu de départ</h3>
            <label for="street">Rue :</label>
            <input type="text" name="street" id="street" value=""><br>
            <label for="town">Ville/Code Postal :</label>
            <input type="text" name="town" id="town" value="">
            <input type="text" name="zip" id="zip" value="">
          <h3>Lieu d'arrivée</h3>
            <label for="street">Rue :</label>
            <input type="text" name="street" id="street" value=""><br>
            <label for="town">Ville/Code Postal :</label>
            <input type="text" name="town" id="town" value="">
            <input type="text" name="zip" id="zip" value="">
          <h3>Date et heure</h3>
            <input type="datetime-local" name="date" value="">
            <input type="submit" name="validItinerary"  value="Valider">
        </form>
			</div>

				<nav>
					<a href="../">Accueil</a>
					<a id="itinerary" href="#">Commander/Réserver</a>
					<!-- <a id="itinerary" href="#">Réserver</a> -->
				</nav>
            <div class="back"></div>

			<section>
				<?= $this->section('main_content') ?>
			</section>
        </main>
            <aside>
            <div class="likefb">
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FRadio-Taxi-Dieppe-630418987085765%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden;" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                <a href="https://twitter.com/intent/tweet?screen_name=DieppeTaxi" class="twitter-mention-button" data-show-count="false">Tweet @DieppeTaxi</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            </aside>
		<footer>
			<ul>
				<div class="tweet"><li><a href="https://www.twitter.com"title="Notre Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.facebook.com"title="Notre Facebook"> <i class="fa fa-facebook-official" aria-hidden="true"></i></a></li></div>
				<li><a href="./avis/"title="Les avis clients">Les avis clients</a></li>
				<li><a href="./contact/"title="Nous contacter">Contactez nous </a></li>
			</ul>
        </footer>
	</div>
</body>
</html>
