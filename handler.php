<?php

$user_name = htmlspecialchars($_POST['username']);
$user_phone = htmlspecialchars($_POST['userphone']);

$token = "6014777932:AAFidmIdAUX2GarByYviLV5qReGQ85Hw0pQ";
$chat_id = "-919390717";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone,
);

foreach($formData as $key => $value) {
  $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
};

