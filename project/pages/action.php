<?php
// if(     (isset($_POST['fullname'])) ||  (isset($_POST['email'])) ||  (isset($_POST['phone'])) ||  (isset($_POST['message']))       ){
//     $fullname = filter_var(trim($_POST['fullname']), FILTER_SANITIZE_STRING);
//     $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
//     $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
//     $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
//     if(mb_strlen($fullname) == 0 ){
//         echo 'Заполните поле с именем';
//         exit();
//     }else if(mb_strlen($email) == 0 ) {
//         echo 'Заполните поле с почтой';
//         exit();
//     }else if(mb_strlen($phone) == 0 ) {
//         echo 'Заполните поле с телефоном';
//         exit();
//     }else if(mb_strlen($message) == 0 ) {
//         echo 'Введите сообщение';
//         exit();
//     }else{
//         $conn = mysqli_connect('localhost', 'root', 'root','project');
//         if (!$conn) {
//             die("Connection failed: " . mysqli_connect_error());
//         }
        
//         $sql = "INSERT INTO  messages ( fullname, email, phone, message)  VALUES('$fullname', '$email', '$phone', '$message') ";
//         if (mysqli_query($conn, $sql)) {
//             echo "<script> alert('Успешно добавлен: ".$fullname." ')</script>";
//             return( require 'index4.html');
//             exit();
//         } else {
//             echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//         }
//         mysqli_close($conn);
//         exit();
//     }
   
// }
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
}
?>