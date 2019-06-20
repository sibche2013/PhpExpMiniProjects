<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>

</div>
<div class="row">
  <div class="col col-6 m-auto">
    <a href="<?= BASE_URL.'images'?>" class="btn btn-success btn-lg btn-block">مشاهده گالری تصاویر</a>
    <hr>

    <form method="post" action="init.php" enctype="multipart/form-data">
      <div class="form-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="image" id="image">
          <label class="custom-file-label" for="image">عکس را انتخاب کنید</label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">آپلود عکس</button>
    </form>
  </div>
</div>
<?php include 'footer.php'; ?>