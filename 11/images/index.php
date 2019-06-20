<?php include '../header.php'; ?>
<script src="<?=BASE_URL?>assets/js/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="<?=BASE_URL?>assets/css/jquery.fancybox.min.css" />
<script src="<?=BASE_URL?>assets/js/jquery.fancybox.min.js"></script>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL?>" class="btn btn-primary btn-sm">صفحه نخست</a>
  </div>
</div>

<div class="row">
  <div class="col m-auto">
    <?php
gallery();
    ?>
  </div>
</div>
<?php include '../footer.php'; ?>