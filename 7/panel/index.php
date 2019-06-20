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
          <th scope="col">نام</th>
          <th scope="col">ایمیل</th>
          <th scope="col">نظر</th>
          <th scope="col">تاریخ ثبت</th>

        </tr>
      </thead>
      <tbody>
        <?php
  //Get File Lines In An Array
     $lines = file(COMMENT_DB);
     $lines = array_reverse(file(COMMENT_DB));
     if (empty($lines)) {
      echo "<tr><td colspan='4' class='text-center'><?= 'داده ای جهت نمایش وجود ندارد' ?> </td>
        </tr>";
        }else{
        foreach ($lines as $line) {
        $line=explode("-", $line);
        echo "<tr>";
          echo "<td>$line[0]</td>";
          echo "<td>$line[1]</td>";
          echo "<td>".str_replace('\n','',nl2br($line[2]))."</td>";
          echo "<td>
            <pre>".jstrftime('%A %n %Y/%m/%d %n %H:%M:%S %p', (int)$line[3])."</td></pre>";
            echo "</tr>";
        }
        }
        ?>
      </tbody>
    </table>

  </div>
</div>

<?php include '../footer.php'; ?>