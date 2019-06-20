<?php include 'header.php'; ?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
</div>

<div class="row">
  <div class="col col-6 m-auto">

    <form action="init.php" method="post" id="usersSearch">
      <div class="form-group">
        <label for="search">نام یا نام خانوادگی یا تلفن یا ایمیل کاربر :</label>
        <input type="search" autocomplete="off" class="form-control" id="search" name="search"
          placeholder="جستجوی کاربر مورد نظر">
      </div>
    </form>
    <div class="alert alert-success" id="result"></div>

  </div>
</div>

<?php include 'footer.php'; ?>