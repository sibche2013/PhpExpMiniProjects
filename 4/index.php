<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
<?= SITE_TITLE ?>
<div class="gotobtn">
<a href="<?= BASE_URL.'panel'?>" class="btn btn-primary btn-sm">پنل مدیریت</a>
</div>
</div>
  <div class="row">
    <div class="col col-6 m-auto">
<form method="post" action="init.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <div class="custom-file">
  <input type="file" class="custom-file-input" name="file" id="customFile">
  <label class="custom-file-label" for="customFile">فایلی را انتخاب کنید</label>
</div>
  </div>
  <button type="submit" class="btn btn-primary btn-lg btn-block">آپلود فایل</button>
</form>

</div>
</div>

<?php include 'footer.php'; ?>