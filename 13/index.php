<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL.'panel'?>" class="btn btn-primary btn-sm">پنل مدیریت</a>
  </div>
</div>
<div class="row">
  <div class="col col-6 m-auto">
    <?php 
$data = array(
  array('id'=>1, 'parent_id'=>0, 'link'=>'صفحه نخست'),
  array('id'=>2, 'parent_id'=>0, 'link'=>'خدمات'),
  array('id'=>3, 'parent_id'=>0, 'link'=>'تماس با ما'),
  array('id'=>4, 'parent_id'=>1, 'link'=>'لینک 1'),
  array('id'=>5, 'parent_id'=>1, 'link'=>'لینک 2'),
  array('id'=>6, 'parent_id'=>4, 'link'=>'لینک 1.1'),
  array('id'=>7, 'parent_id'=>6, 'link'=>'لینک 1.1.1'),
  array('id'=>8, 'parent_id'=>6, 'link'=>'لینک 1.1.2'),
  array('id'=>9, 'parent_id'=>6, 'link'=>'لینک 1.1.3'),
  array('id'=>10, 'parent_id'=>9, 'link'=>'لینک 1.1.3.1'),
  array('id'=>11, 'parent_id'=>9, 'link'=>'لینک 1.1.3.2'),
  array('id'=>12, 'parent_id'=>11, 'link'=>'لینک 1.1.3.2.1'),
  );
?>
    <nav>
      <ul>
        <?=menu($data)?>
      </ul>
    </nav>

  </div>
</div>
<?php include 'footer.php'; ?>