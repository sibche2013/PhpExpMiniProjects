<?php
include_once "../header.php";
?>
<div class="alert alert-primary" role="alert">
  <?= SITE_TITLE ?>
  <div class="gotobtn">
    <a href="<?= BASE_URL ?>" class="btn btn-primary btn-sm">صفحه نخست</a>
  </div>
</div>
<div class="col col-12 m-auto">
  <div class="bg-white table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">نام کوکی</th>
          <th scope="col">متن کوکی</th>
          <th scope="col">علمیات</th>
        </tr>
      </thead>
      <tbody>
        <?php
if(count($_COOKIE)>0){
  //Print Cookies Data
  foreach ($_COOKIE as $key=>$val)
  {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$val</td>";
    echo "<td><a href='".BASE_URL.'panel/?removeCookie='.$key."' class='btn btn-danger btn-sm'>حذف کوکی</a></td>";
    echo "</tr>";
  }
}else{
  echo"<tr><td colspan='3' class='text-center'>داده ای جهت نمایش وجود ندارد</td>";
}


?>



        </tr>

      </tbody>
    </table>

  </div>
</div>

<?php include '../footer.php'; ?>