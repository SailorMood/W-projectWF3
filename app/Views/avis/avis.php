<?php $this->layout('layout', ['title' => 'Avis']) ?>

<?php $this->start('main_content') ?>

<?php include('poster.php'); ?>
  <div class="customReview">
      <?php \Controller\AvisController::avisUtilisateurs(); ?>
  </div>
  <nav>
    <a id="avis" class="avis" href="#">Laissez votre avis</a>
  </nav>
<?php $this->stop('main_content') ?>
