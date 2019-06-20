<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL.'panel'?>" class="btn btn-primary btn-sm">پنل مدیریت</a>
  </div>
</div>
<div class="row">
  <div class="col col-6 m-auto">
    <form method="post" action="init.php">
      <div class="form-group">
        <label for="name">نام کوکی :</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="نام کوکی بدون فاصله و نقطه">
      </div>
      <div class="form-group">
        <label for="text">متن کوکی</label>
        <textarea class="form-control" id="text" name="text" rows="3"
          placeholder="متن کوکی را بنویسید می تواند به فارسی باشد."></textarea>
      </div>
      <div class="form-group">
        <label for="time">زمان کوکی (ثانیه)</label>
        <input type="text" class="form-control" id="time" name="time" placeholder="زمان به ثانیه">
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">افزودن کوکی</button>
    </form>

  </div>
</div>

<?php include 'footer.php'; ?>