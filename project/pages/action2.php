<?php
if(     (isset($_POST['name'])) ||  (isset($_POST['email'])) ||  (isset($_POST['phone'])) ||  (isset($_POST['message'])) ){
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    if(mb_strlen($name) == 0 ){
        echo 'Заполните поле с именем';
        exit();
    }else if(mb_strlen($email) == 0 ) {
        echo 'Заполните поле с почтой';
        exit();
    }else if(mb_strlen($phone) == 0 ) {
        echo 'Заполните поле с телефоном';
        exit();
    }else if(mb_strlen($message) == 0 ) {
        echo 'Введите сообщение';
        exit();
    }else{
        //header('Location: ../index.html');
        echo('<h3>Данные получены: '.$name.' '.$phone.' '.$email.' '.$message.'</h3>');
    }
} ?>