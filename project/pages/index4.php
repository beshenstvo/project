<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/main4.css">
    <link rel="stylesheet" media="print" href="../styles/print.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../img/logotitle.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Интернет-магазин SOHO</title>
</head>
<body>
    <div class="header">
        <div class="header__menu">
            <div class='message' style="align-self: center;"><a href="../pages/messages.html"><img src="../img/message.png" alt="" style="width: 45px;"></a></div>
            <ul class="container">
                    <li class="hover"><a href="../index.html">Главная</a></li>
                    <li class="hover"><a href="index2.html">О нас</a></li>
                    <li ><a href="#" class="logo"><img src="../img/logo.png" alt="logo" height="60px"></a></li>
                    <li class="hover"><a href="index3.html" >Товары</a></li>
                    <li class="hover"><a href="index4.html" class="active">Контакты</a></li>
                </li>
            </ul>
            <div class='korzina' style="align-self: center;"><a href="../pages/korzina.html"><img src="../img/korzina.png" alt="" style="width: 45px;"></a></div>
        </div>
    </div>
    <div class="main">
            <div class="main__middletext container">Наши контакты</div>
            <div class="main__contacts container">
                <div class="contacts__inner"><img src="../img/gmail.png" alt="почта"><span>mufwoo@gmail.com</span></div>
                <div class="contacts__inner"><img src="../img/phone.png" alt="телефон"><span>+7(916)339-81-14</span></div>
            </div>
            <div class="main__form container">
                <h2>Оставьте нам сообщение:</h2>
                <form action="action.php" method="POST" ><!--Работа с БД-->
                    <div><label for="fullname">Имя:</label>
                    <input name="fullname" type="text" id='fullname'/></br>
                    <label for="email">Email:</label>
                    <input name="email" type="text" id='email'/></br>
                    <label for="phone">Телефон:</label>
                    <input name="phone" type="text" id='phone'/></br></div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Введите ваше сообщение"></textarea>
                    <div><input type="submit" value="Отправить"/></div>
                </form>
            </div>
    </div>
    <div class="footer">
        <p class="footer__text"><strong>Проект выполнила:</strong> Гатауллина Руфина Ринатовна
        </br>Московский политех 2020</p>
    </div>
</body>
<script src="../scripts.js"></script>
</html>
<!-- Vue -->
<!-- Sass -->
<!-- БЭМ -->
<!-- Bootstrap -->
<!-- Адаптив -->