<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

if (!empty($_POST)) {
  $name =htmlspecialchars ($_POST['name']);
  $email =filter_var ($_POST['email'],FILTER_SANITIZE_EMAIL);
  $subject =htmlspecialchars ($_POST['subject']);
  $message =htmlspecialchars ($_POST['message']);

  if (empty($name)) {
      $errors[] = 'Name is empty';
  }

  if (empty($email)) {
      $errors[] = 'Email is empty';
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = 'Email is invalid';
  }
  if (empty($subject)) {
      $errors[] = 'subject is empty';
  }
  if (empty($message)) {
      $errors[] = 'Message is empty';
  }
}
$header="From: $email" . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if (empty($errors)){
  mail("b.zeina357@gmail.com",$subject,$message,$header);
}
