<?php 
  if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['mail__text'];
    $mess = "Сообщение от " . $name . " телефонный номер: " . $phone . ". Почта: " . $email . ". \r\n Сообщение: \r\n " . $text;
    mail('vash_dn@mail.ru', 'Сообщение с сайта', $mess);
  }
?>