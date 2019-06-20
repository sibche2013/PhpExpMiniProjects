<?php
include_once "../header.php";
    $smss = getSMSs();
?>
<div class="alert alert-primary" role="alert">
<?= SITE_TITLE ?>
<div class="gotobtn">
<a href="<?= BASE_URL ?>" class="btn btn-primary btn-sm">صفحه نخست</a>
</div>
</div>
<div class="alert alert-warning text-center" role="alert">
موجودی پیامک شما : <strong><?=getCredit()?></strong> ریال
</div>
    <div class="col col-12 m-auto">
    <div class="bg-white table-responsive">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">شماره موبایل</th>
      <th scope="col">متن پیامک</th>
      <th scope="col">کد پیامک</th>
      <th scope="col">وضعیت پیامک</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(empty($smss)){?>
    <tr>
    <td colspan="4" class="text-center"><?= 'داده ای جهت نمایش وجود ندارد' ?> </td>
    </tr>
    <?php
  }else{
  foreach ($smss as $sid => $sms) : ?>
  <tr>
  <td><?= $sms->number ?></td>
  <td><?= $sms->text ?></td>
  <td><?= $sms->codeSMS ?></td>
  <td><?php getStatus($sms->codeSMS) ?></td>
  </tr>
  <?php endforeach; }?>
  </tbody>
</table>

</div>
</div>

<?php include '../footer.php'; ?>