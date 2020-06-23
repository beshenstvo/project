<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/main5.css">
    <link rel="stylesheet" media="print" href="../styles/print.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/logotitle.ico" type="image/x-icon">
    <script src="../scripts.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Интернет-магазин SOHO</title>
</head>
<body>
    <div class="header">
        <div class="header__menu">
            <div class='message' style="align-self: center;"><a href="../pages/messages.php"><img src="../img/message.png" alt="" style="width: 45px;"></a></div>
            <ul class="container">
                    <li class="hover"><a href="../index.html">Главная</a></li>
                    <li class="hover"><a href="index2.html">О нас</a></li>
                    <li ><a href="#" class="logo"><img src="../img/logo.png" alt="logo" height="60px"></a></li>
                    <li class="hover"><a href="index3.html" >Товары</a></li>
                    <li class="hover"><a href="index4.html">Контакты</a></li>
                </li>
            </ul>
            <div class='korzina' style="align-self: center;"><a href="../pages/korzina.html"><img src="../img/korzina.png" alt="" style="width: 45px;"></a></div>
        </div>
    </div>
    <div class="main">
        <div class="main__middletext container">Отправленные сообщения</div>
        <div class="main__table container">
            <?php
                $conn = mysqli_connect('localhost', 'root', 'root','project');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM messages;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">'.$row['fullname'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['email'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['phone'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['message'].'</td> </tr>';// выводим данные
                }
                $endres .= '<table>';
                echo($endres);
                mysql_close();
            ?>
        </div>
    </div>
    <div class="footer">
        <p class="footer__text"><strong>Проект выполнила:</strong> Гатауллина Руфина Ринатовна
        </br>Московский политех 2020</p>
    </div>
</body>
</html>
<!-- Vue -->
<!-- Sass -->
<!-- БЭМ -->
<!-- Bootstrap -->
<!-- Адаптив -->