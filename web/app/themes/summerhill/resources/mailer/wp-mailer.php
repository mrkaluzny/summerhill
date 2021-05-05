<?php
require '../../vendor/autoload.php';

use Mailgun\Mailgun;

$mg = Mailgun::create('key-e777fbc4a00ed3b6ccb667a83659a194');
$domain = "mg.waterdownmontessori.com";

if ($_POST['content']) {
  global $message_body;
  $message_content = json_decode($_POST['content']);
  $form_name = $message_content[0];
  $message_subject = "Waterdown Montessori School " . $form_name;
  $attachment = is_uploaded_file($_FILES['cv']) ? $_FILES['cv'] : false;
  $boundary = md5("waterdown");

  foreach ($message_content as $input) {
    if ($input->value) {
      $message_body .= "<tr><td style='font-family:sans-serif;font-size:14px;vertical-align:top'>" . strip_tags($input->name) . "</td><td style='font-family:sans-serif;font-size:14px;vertical-align:top'>" . strip_tags($input->value) . "</td></tr>";
    }
  }

  require 'BasicEmailTemplate.php';

  if (!$attachement) {
    $result = $mg->messages()->send($domain, array(
      'from'    => 'Waterdown Montessori School <info@mg.waterdownmontessori.com>',
      'to'      => 'Office <wk@mrkaluzny.com>',
      'subject' => $message_subject,
      'html'    => $html,
    ));
  } else {
    $result = $mg->messages()->send($domain, array(
      'from'    => 'Waterdown Montessori School <info@mg.waterdownmontessori.com>',
      'to'      => 'Office <principal@waterdownmontessori.com>',
      'subject' => $message_subject,
      'html'    => $html,
    ), array(
      'attachement' => array($attachment['tmp_name'])
    ));
  }

  if ($result) {
    echo json_encode(array('message' => $message_content, 'body' => $message_body));
  } else {
    echo json_encode(array('message' => 'Message wasnt sent!', 'message_subject' => $message_body));
  }
}
