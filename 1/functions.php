<?php
//for load PHPMailer Class
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  //Load Init.php
  require_once 'init.php';
  //For get Emails From json file
function getEmails($return_assoc = 0)
{
    $emails  = json_decode(file_get_contents(EMAIL_DB), $return_assoc);
    return array_reverse((array)$emails);
}
//Write Posts To json file
function saveEmail(stdClass $post): bool
{
    $emails  = getEmails(1);
    $emails[] = (array)$post;
    $emails_json = json_encode($emails);
    file_put_contents(EMAIL_DB, $emails_json);
    return true;
}
//Send mail with PHPMailer Class ->https://github.com/PHPMailer/PHPMailer
function sendContactMail($name, $email, $subject, $text)
{
    require_once BASE_PATH.'lib/PHPMailer/src/Exception.php';
    require_once BASE_PATH.'lib/PHPMailer/src/PHPMailer.php';
    require_once BASE_PATH.'lib/PHPMailer/src/SMTP.php';
    $mail =new PHPMailer(true);
    try {
        //Server settings
        //https://myaccount.google.com/u/1/lesssecureapps?pageId=none Less secure app access
        //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->CharSet = "UTF-8";
        $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = 'YourEmail';                     // SMTP username
      $mail->Password   = 'YourPassword';                               // SMTP password
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to
  
      //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('aminarj2000@gmail.com', 'ایمیل تماس با ما');     // Add a recipient
      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = $subject;
        $mail->Body    = '
      <div style="direction: rtl; font-family: tahoma; border: 1px dotted #0619ff; padding: 8px; border-radius: 5px;">
      سلام<br>
      ایمیلی از طرف
      <strong>
      '.$name.'
      </strong>
      با ایمیل
      <strong>
      '.$email.'
      </strong>
      و محتوای زیر ارسال شده است :<br><br>
      <strong>
      '.$text.'
      </strong>
      </div>
      ';
        $mail->send();
        setcookie('SendMsg', 'پیام شما با موفقیت ارسال شد.', time() + (1), "/"); // 1 Second
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } catch (Exception $e) {
        echo "پیام شما نمی تواند ارسال شود : خطا: {$mail->ErrorInfo}";
    }
}