<?php
include_once "../header.php";
?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL ?>" class="btn btn-primary btn-sm">صفحه نخست</a>
  </div>
</div>
<div class="col col-6 m-auto">
</div>
<div class="col col-6 m-auto">

  <form method="post" action="../init.php" enctype="multipart/form-data">
    <div class="form-group">
      <label for="title">عنوان تصویر</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="عنوان یا توضیحاتی در مورد تصویر">
    </div>
    <div class="form-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" name="image" id="image">
        <label class="custom-file-label" for="image">عکس را انتخاب کنید</label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">آپلود عکس</button>
  </form>

</div>

<?php include '../footer.php'; ?>