<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL.'panel'?>" class="btn btn-primary btn-sm">پنل مدیریت</a>
  </div>
</div>
<script src="<?=BASE_URL?>assets/js/jquery.min.js"></script>
<script src="<?=BASE_URL?>lib/slippry/assets/js/slippry.min.js"></script>
<link rel="stylesheet" href="<?=BASE_URL?>lib/slippry/assets/css/slippry.css" />
<div class="row">
  <div class="col col-6 m-auto">

    <?php 
$sliderDB=getImages();
if(empty($sliderDB)){
  echo '<a href="'.BASE_URL."panel".'" class="btn btn-success btn-lg btn-block">افزودن تصویر به اسلایدر</a>';

}else{
  echo '<ul id="slippry-slider">';
    foreach ($sliderDB as $slideKey=>$slides) {
        ?>
    <li>
      <a href="#slide1"><img src="<?=BASE_URL?>/images/<?=$slides->img->loc?>" alt="<?=$slides->img->title?>"></a>
    </li>
    <?php
    }
}
?>
    </ul>
    <script>
    jQuery(document).ready(function() {
      jQuery('#slippry-slider').slippry()
    });
    </script>
  </div>
</div>
<?php include 'footer.php'; ?>