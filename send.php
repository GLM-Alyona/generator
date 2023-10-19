<?php
$to ='glmalyona@gmail.com';
$email = clear_data($_POST['email']);
$phone = clear_data($_POST['phone']);
$subject ='Заявка с сайта - Гюлумян Алёна';
$message = 'Email: ' .$email."\n" . 'Телефон: ' .$phone;

function clear_data($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;
}

mail($to, $subject, $message);
?>