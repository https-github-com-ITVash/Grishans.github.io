<?php 
  if ($_POST) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['mail__text'];
    $mess = "Сообщение от " . $name . " телефонный номер: " . $phone . ". Почта: " . $email . ". \r\n Сообщение: \r\n " . $text;
    mail('donbassmetal@gmail.com', 'Сообщение с сайта', $mess);
  }
?>