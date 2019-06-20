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
      1- رنگ مورد علاقه شما چیست؟
      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="colors[]" id="blue" value="آبی">
          <label class="form-check-label" for="blue">آبی</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="colors[]" id="red" value="قرمز">
          <label class="form-check-label" for="red">قرمز</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="colors[]" id="green" value="سبز">
          <label class="form-check-label" for="green">سبز</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" name="colors[]" id="black" value="مشکی">
          <label class="form-check-label" for="black">مشکی</label>
        </div>
      </div>
      2- دوست دارین اولین سفرتان به کدام قاره باشد؟
      <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="continent" id="africa" value="آفریقا">
          <label class="form-check-label" for="africa">آفریقا</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="continent" id="europe" value="اروپا">
          <label class="form-check-label" for="europe">اروپا</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="continent" id="america" value="آمریکا">
          <label class="form-check-label" for="america">آمریکا</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="continent" id="australia" value="استرالیا">
          <label class="form-check-label" for="australia">استرالیا</label>
        </div>
      </div>


      <button type="submit" class="btn btn-primary btn-lg btn-block">ثبت نظر</button>
    </form>

  </div>
</div>

<?php include 'footer.php'; ?>