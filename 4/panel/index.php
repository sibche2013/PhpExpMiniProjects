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
          <th scope="col">نام فایل</th>
          <th scope="col">پسوند فایل</th>
          <th scope="col">آدرس فایل</th>
          <th scope="col">حجم فایل فایل</th>
          <th scope="col">عملیات</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        //Get Current Directory
  $currDir = FILES_PATH;
  //Get All Files
  $globDir=glob($currDir . '*');
  if(count($globDir) === 0){
    echo "<tr><td colspan='5' class='text-center'>فایلی جهت نمایش وجود ندارد</td></tr>";
    echo "<tr><td colspan='5' class='text-center'><a class='btn btn-success btn-sm' href='".BASE_URL."'> آپلود فایل </a></td></tr>";
  }else{
    //Print File Details
  foreach ($globDir as $filename) {
        echo "<tr>";
        echo $FullfileName="<td>".(str_replace($currDir, '', $filename))."</td>";
        $dot=strrpos($filename, '.');
        echo $FileType="<td>".substr($filename, $dot+1)."</td>";
        echo $FileAddress="<td>".$filename."</td>";
        echo $fileSize ="<td>".round(filesize($filename)/1024)." KB</td>";
        echo "<td><a class='btn btn-danger btn-sm' href='?removeFile=".$filename."'> حذف فایل </a></td>";
        echo "</tr>";
    }
}
  ?>
      </tbody>
    </table>

  </div>
</div>

<?php include '../footer.php'; ?>