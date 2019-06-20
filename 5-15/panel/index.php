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
  <a href="" class="btn btn-success btn-lg btn-block">رفرش صفحه</a>
  <br>
</div>
<div class="col col-12 m-auto">
  <div class="numbers col col-12 m-auto">
    <?php
        //Get Page Number
        $page=(!empty($_GET['page'])) ? $_GET['page'] : '1';
        //Get File Lines In An Array
    $lines = file(LOG_DB);
    //Get Per Page Number
    $perPage=PER_PAGE;
    //Max Page Number
    $maxPNumber=floor(count($lines)/$perPage);
        echo "<div>صفحه ی $page از ".($maxPNumber+1)."</div>";
        if ($page>1) {
            ?>
    <a class="pageNumber" href="?page=<?= (empty($page)) ? '1' : $page-1?>">صفحه قبلی</a>
    <?php
        }
        //Print Page Numbers
    for ($i=0;$i<=$maxPNumber;$i++) {
        echo "<a class='pageNumber' href='?page=".($i+1)."'>".($i+1)."</a>";
    }
        if ($page<$maxPNumber+1) {
            ?>
    <a class="pageNumber" href="?page=<?=(empty($page)) ? '2' : $page+1?>">صفحه بعدی</a>
    <?php
        }?>
  </div>
  <div class="bg-white table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col" class='text-center'>زمان بازدید</th>
          <th scope="col">آی پی</th>
          <th scope="col">مرورگر</th>
          <th scope="col">ویندوز</th>
        </tr>
      </thead>
      <tbody>
        <?php
     if (count($lines)=='0') {
         echo "<tr><td colspan='4' class='text-center'>داده ای جهت نمایش وجود ندارد</td></tr>";
     } else {
         $lines = array_reverse(file(LOG_DB));
          //Page Number For Print Data
         $pageNum = (empty($page)) ? '0' :$page-1;
         //Split lines Into arrays
         $pages = array_chunk($lines, $perPage);
         //If User Write Wrong Page Number Send User TO first page
         if (count($pages)<$page) {
             header('Location: '.BASE_URL.'panel');
         }
         //Print Data -->https://jdf.scr.ir/rahnama/?t=jdate
         foreach ($pages[$pageNum] as $line) {
           //String To Array
             $line=explode("-", $line);
             echo "<tr>";
             echo "<td><pre>".jstrftime('%A %n %Y/%m/%d %n %H:%M:%S %p', $line[0])."</td></pre>";
             echo "<td>$line[1]</td>";
             echo "<td>$line[2] نسخه ".(int)($line[3])."</td>";
             echo "<td>$line[4]</td>";
             echo "</tr>";
         }
     }
     ?>
      </tbody>
    </table>
  </div>
</div>


<?php include '../footer.php'; ?>