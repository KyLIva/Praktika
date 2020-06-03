<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Вход</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
</head>

<body id="page-top">
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>Вход</h2>
                    </div>
                </div>
            </div>
            <div class="container mt-4">

            <?php

        if ($_COOKIE['user'] == ''):

            ?>


                </div>
            <form action="Auth.php" method="Post">
            
            <label style="color:white;font-size:17px;width: 200px">Введите ваш Логин:</label>
            <input style="color:black;font-size:17px;width: 200px" type="text" name="login" id="login" placeholder="Введите ваш логин" required>
            <p class="intro-text"></p>  

            <label style="color:white;font-size:17px;width: 200px">Введите ваш Email:</label>
            <input style="color:black;font-size:17px;width: 200px" type="email" name="email" id="email" placeholder="Введите ваш email" required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 200px">Введите ваш Пароль:</label>
            <input style="color:black;font-size:17px;width: 200px" type="password" name="password" id="password" placeholder="Введите ваш пароль" required>
            <p class="intro-text"></p>

            <h6><label for="email">Кто вы ? </label></h6>
            <p class="intro-text"></p>
            <a href="#"><button class="btn btn-primary btn-lg btn-default" type="submit"class="nav-item nav-link js-scroll-trigger" role="presentation"> Ребёнок</button></a><a href="#"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation">Родитель</button></a>
            <p class="intro-text"></p>

            <p class="intro-text">Проверим вас на признаки живого существа: <br>Как правльно ?</p>

            <a href="#"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation"> Регистрация</button></a><a href="#"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation">Регестрация</button></a>
            <p class="intro-text"></p>
            <a href="Auth.php"><button class="btn btn-primary btn-lg btn-default" type="submit"class="nav-item nav-link js-scroll-trigger" role="presentation"> Войти в дневник</button></a>
        </div>

        <?php else:?>           
     <a href="http://sait/2%20%d0%be%d1%81%d0%bd%d0%be%d0%b2%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0/2stranica.php"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation"> Если уже зашли, то нажмите сюда</button></a>
    <?php endif; ?>

        <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="http://sait/Glavnai%20stranica.php">Главная</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                    aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/Vxof/Vxod1.php">Вход</a></li>
                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%a0%d0%b5%d0%b3%d0%b8%d1%81%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%8f/Registr.html">Регистрация</a></li>
                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%9e%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7%d0%b0%d1%86%d0%b8%d0%b8/Organizacii.html">Организации</a></li>
                        <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/Glavnai%20stranica.php">Назад</a></li>
                    </ul>
                </div>
    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>