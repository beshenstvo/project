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
            <div class='message' style="align-self: center;"><a href="messages.php"><img src="../img/message.png" alt="" style="width: 45px;"></a></div>
            <ul class="container">
                    <li class="hover"><a href="../index.html">Главная</a></li>
                    <li class="hover"><a href="index2.html">О нас</a></li>
                    <li ><a href="#" class="logo"><img src="../img/logo.png" alt="logo" height="60px"></a></li>
                    <li class="hover"><a href="index3.html" >Товары</a></li>
                    <li class="hover"><a href="index4.html">Контакты</a></li>
                </li>
            </ul>
            <div class='korzina' style="align-self: center;"><a href="korzina.html"><img src="../img/korzina.png" alt="" style="width: 45px;"></a></div>
        </div>
    </div>
    <div class="main">
        <div class="main__middletext container">Отправленные сообщения</div>
        <div class="main__table container" style="padding-bottom: 2rem;">
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
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
                $endres .= '</table>';
                echo($endres);
               
            ?>
        </div>
        <div class="main__middletext container">Таблицы дополнительные для ИП</div>
        <div class="main__table container" style="padding-bottom: 2rem;">
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM first_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">   <tr>   <th style="color: white;padding: 1rem; ">id</th> <th style="color: white;padding: 1rem; ">Имя</th> <th style="color: white;padding: 1rem; ">Фамилие</th> <th style="color: white;padding: 1rem; ">Возраст</th> </tr>';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">'.$row['id'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['name'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['secondname'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['old'].'</td> </tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem;">
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM second_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">  <tr>   <th style="color: white;padding: 1rem; ">id</th> <th style="color: white;padding: 1rem; ">Email</th> <th style="color: white;padding: 1rem; ">Имя</th> <th style="color: white;padding: 1rem; ">Возраст</th> </tr>';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">'.$row['id'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['email'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['name'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['old'].'</td> </tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem;">
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM third_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;"><tr>   <th style="color: white;padding: 1rem; ">id</th> <th style="color: white;padding: 1rem; ">Имя</th> <th style="color: white;padding: 1rem; ">Возраст</th> <th style="color: white;padding: 1rem; ">Дистанция</th> </tr>';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">'.$row['id'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['name'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['old'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['distanse'].'</td> </tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem;">
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM fifth_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;"><tr>   <th style="color: white;padding: 1rem; ">id</th> <th style="color: white;padding: 1rem; ">Название продукта</th> <th style="color: white;padding: 1rem; ">Количество</th> <th style="color: white;padding: 1rem; ">Стоимость</th> </tr>';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">'.$row['id'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['name_product'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['count'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['price'].'</td> </tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem; text-align: center;">
        <h3 style="color: white;">Вывод агрегирующей информации DESC</h3>
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT * FROM fourth_table ORDER BY fourth_table.price DESC;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><td style="color: white;padding: 1rem; ">
                    '.$row['id'].'</td>  <td style="color: white;padding: 1rem; ">'.$row['name'].'
                    </td>  <td style="color: white;padding: 1rem; ">'.$row['phone'].'</td> 
                     <td style="color: white;padding: 1rem; ">'.$row['price'].'</td> </tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem; text-align: center;">
        <h3 style="color: white;">Вывод агрегирующей информации COUNT</h3>
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT COUNT(*) as kolichestvo FROM fourth_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><th style="color: white;padding: 1rem; ">Количество строк</th><td style="color: white;padding: 1rem; ">'.$row['kolichestvo'].'</td></tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
        <div class="main__table container" style="padding-bottom: 2rem; text-align: center;">
        <h3 style="color: white;">Вывод агрегирующей информации AVG</h3>
            <?php
                $conn = mysqli_connect('std-mysql', 'std_971', '123321rufina','std_971');
                if( mysqli_connect_error() ) // проверяем корректность подключения 
                    echo 'Ошибка подключения к БД: '.mysqli_connect_error();
                $sql = 'SELECT AVG(price) as middle_value FROM fourth_table;';
                $result = mysqli_query($conn, $sql); // запрос на выборку
                if(!$result)
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $endres = '<table border="1" style="margin-left: auto; margin-right: auto;">';
                while($row = mysqli_fetch_array($result))
                {
                    $endres .='<tr style="padding: 1rem;"><th style="color: white;padding: 1rem; ">Среднее значение цены</th><td style="color: white;padding: 1rem; ">'.$row['middle_value'].'</td></tr>';// выводим данные
                }
                $endres .= '</table>';
                echo($endres);
            ?>
        </div>
    </div>
    <div class="footer">
        <p class="footer__text"><strong>Проект выполнила:</strong> Гатауллина Руфина Ринатовна
        </br>Московский политех 2020</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
        var bodyWidth = $('body').width();
        if (bodyWidth < 1203) {
            console.log('new menu!!')
            $('.header__menu').empty();
            $('.header__menu').css({
                'padding-left' : '0%',
                'padding-right' : '0%',
            });
            $('.header__menu').append('<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%"><a class="navbar-brand" href="#"><img height="60" src="../img/logo.png" alt="logo"></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNavAltMarkup"><div class="navbar-nav"><a class="nav-item nav-link" href="../index.html">Главная</a><a class="nav-item nav-link " href="index2.html">О нас</a><a class="nav-item nav-link " href="index3.html">Товары</a><a class="nav-item nav-link" href="index4.html">Контакты</a><a class="nav-item nav-link active" href="messages.php">Сообщения</a><a class="nav-item nav-link" href="korzina.html">Корзина</a></div></div></nav>')
        } else {
            $('.header__menu').css({
                    'padding-left' : '40px',
                    'padding-right' : '40px',
                });
            $('.header__menu').empty();
            $('.header__menu').append('<div class="message" style="align-self: center;"><a href="messages.php"><img src="../img/message.png" alt="" style="width: 45px;"></a></div><ul class="container"><li class="hover"><a href="../index.html">Главная</a></li><li class="hover"><a href="index2.html" >О нас</a></li><li ><a href="#" class="logo"><img src="../img/logo.png" alt="logo" height="60"></a></li><li class="hover"><a href="index3.html" >Товары</a></li><li class="hover"><a  href="index4.html" >Контакты</a></li></ul><div class="korzina" style="align-self: center;"><a href="korzina.html"><img src="../img/korzina.png" alt="" style="width: 45px;"></a></div>');
        }
        $( window ).resize(function () {
            var bodyWidth = $('body').width();
            
            if (bodyWidth < 1203) {
                console.log('new menu!!')
                $('.header__menu').empty();
                $('.header__menu').css({
                    'padding-left' : '0%',
                    'padding-right' : '0%',
                });
                $('.header__menu').append('<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%"><a class="navbar-brand" href="#"><img height="60" src="../img/logo.png" alt="logo"></a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNavAltMarkup"><div class="navbar-nav"><a class="nav-item nav-link" href="../index.html">Главная</a><a class="nav-item nav-link" href="index2.html">О нас</a><a class="nav-item nav-link" href="index3.html">Товары</a><a class="nav-item nav-link" href="index4.html">Контакты</a><a class="nav-item nav-link active" href="messages.php">Сообщения</a><a class="nav-item nav-link" href="korzina.html">Корзина</a></div></div></nav>')
            } else {
                $('.header__menu').css({
                    'padding-left' : '40px',
                    'padding-right' : '40px',
                });
                $('.header__menu').empty();
                $('.header__menu').append('<div class="message" style="align-self: center;"><a href="messages.php"><img src="../img/message.png" alt="" style="width: 45px;"></a></div><ul class="container"><li class="hover"><a href="../index.html">Главная</a></li><li class="hover"><a href="index2.html" >О нас</a></li><li ><a href="#" class="logo"><img src="../img/logo.png" alt="logo" height="60"></a></li><li class="hover"><a href="index3.html" >Товары</a></li><li class="hover"><a href="index4.html" >Контакты</a></li></ul><div class="korzina" style="align-self: center;"><a href="korzina.html"><img src="../img/korzina.png" alt="" style="width: 45px;"></a></div>');
            }
        });
</script>
</body>
</html>
