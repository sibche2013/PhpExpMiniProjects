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
        <label for="number">شماره موبایل :</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="شماره موبایل فرد گیرنده پیامک">
      </div>
      <div class="form-group">
        <label for="text">متن پیامک</label>
        <textarea class="form-control" id="text" name="text" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">ارسال پیام</button>
    </form>

  </div>
</div>

<?php include 'footer.php'; ?>