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
        <label for="name">نام و نام خانوادگی :</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="نام و نام خانوادگی شما">
      </div>
      <div class="form-group">
        <label for="email">ایمیل :</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="comment">نظر شما</label>
        <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">ارسال نظر</button>
    </form>

  </div>
</div>

<?php include 'footer.php'; ?>