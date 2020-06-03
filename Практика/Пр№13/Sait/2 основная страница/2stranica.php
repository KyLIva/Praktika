<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Дневник</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="http://sait/Glavnai%20stranica.php">Главная</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation" value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%94%d0%be%d0%bc%d0%b0%d1%88%d0%bd%d0%b5%d0%b5%20%d0%b7%d0%b0%d0%b4%d0%b0%d0%bd%d0%b8%d0%b5/Domashnee%20zadanie.php">Домашнее задание</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%a3%d1%80%d0%be%d0%ba%d0%b8/Yroki.php">Уроки</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%9e%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7%d0%b0%d1%86%d0%b8%d0%b8/Organizacii.html">Организации</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/2%20%d0%be%d1%81%d0%bd%d0%be%d0%b2%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0/2stranica.php">Личный кабинет</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="exit.php">Выйти из аккаунта</a></li>


                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <br><br><br><br><br><br><br>
                        <h1>Личный кабинет</h1>
                        <p class="intro-text">Обучающиеся: 1.  <?=$_COOKIE['user']?></p>
                        <p class="intro-text"></p>
                        <p class="intro-text"> Всего последних оценок: 34</p>
                        <p class="intro-text"> Русский: 5,5,3,4,3</p>
                        <p class="intro-text">Алгебра: 5,3,2,5,4,4</p>
                        <p class="intro-text">Геометрия: 4,3,3,4,2,</p>
                        <p class="intro-text">География: 4,5,5,4,5</p>
                        <p class="intro-text">Литература: 5,4,3,3,5</p>
                        <p class="intro-text">Обществозание: 4,4,4,4</p>
                        <p class="intro-text">Физкультура: 5,5,5,5</p> 
                        <a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a>


                </div>
            </div>
        </div>

    <section id="about" class="content-section text-center">
    <h2>Здесь вы можеет изменить личные данные</h2>

            <label style="color:white;font-size:17px;width: 200px">Введите ваш Email:</label>
            <input style="color:black;font-size:17px;width: 200px" type="email" name="email" id="email" placeholder="Введите ваш email" required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 200px">Введите ваш Логин:</label>
            <input style="color:black;font-size:17px;width: 200px" type="text" name="login" id="login" placeholder="Введите ваш логин" required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 200px">Введите ваш Пароль:</label>
            <input style="color:black;font-size:17px;width: 200px" type="password" name="password" id="password" placeholder="Введите ваш пароль" required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 200px">Введите ваше Имя:</label>
            <input style="color:blacke;font-size:17px;width: 200px" type="text" name="name" id="name" placeholder="Ваше Имя" required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 202px">Введите вашу Фамилию:</label>
            <input style="color:black;font-size:17px;width: 200px" type="text" name="Fname" id="Fname" placeholder="Ваша Фамилия"required>
            <p class="intro-text"></p>

            <label style="color:white;font-size:17px;width: 200px">Введите ваше Отчество:</label>
            <input style="color:black;font-size:17px;width: 200px" type="text" name="Oname" id="Oname" placeholder="Ваше Отчество" required>
            <p class="intro-text"></p>

            <a href="Izmenit.php"><button class="btn btn-primary btn-lg btn-default" type="submit"class="nav-item nav-link js-scroll-trigger" role="presentation"> Изменить данные</button></a>
                    

    </header>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>