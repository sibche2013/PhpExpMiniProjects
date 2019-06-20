<?php
include_once "../header.php";
    $emails = getEmails();
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
          <th scope="col">نام و نام خانوادگی</th>
          <th scope="col">ایمیل</th>
          <th scope="col">موضوع پیام</th>
          <th scope="col">بخش</th>
          <th scope="col">متن پیام</th>
        </tr>
      </thead>
      <tbody>
        <?php 
  if(empty($emails)){?>
        <tr>
          <td colspan="4" class="text-center"><?= 'داده ای جهت نمایش وجود ندارد' ?> </td>
        </tr>
        <?php
  }else{
  foreach ($emails as $eid => $email) : ?>
        <tr>
          <td><?= $email->name ?></td>
          <td><?= $email->email ?></td>
          <td><?= $email->subject ?></td>
          <td><?= $email->department ?></td>
          <td><?= $email->text ?></td>
        </tr>
        <?php endforeach; }?>
      </tbody>
    </table>

  </div>
</div>

<?php include '../footer.php'; ?>