<!DOCTYPE html>
<html style="color: 0000;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Главная страница</title>
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
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="#about">Помощь</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/Vxof/Vxod1.php">Вход</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%a0%d0%b5%d0%b3%d0%b8%d1%81%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%8f/Registr.html">Регистрация</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%9e%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7%d0%b0%d1%86%d0%b8%d0%b8/Organizacii.html">Организации</a></li>
                </ul>
            </div>
        </div>  
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <p class="intro-text"></p>
            <div class="col-lg-8 mx-auto">
                <h1>Перейти в электронный дневник</h1>
                <p >Войдите в аккаунт, чтобы увидеть оценки своего ребёнка, если уже вошли нажмите на кнопку ниже.</p>
<div clas ="container mt-4">
            <?php
            if ($_COOKIE['user']== ''):
            ?>
                <a href="http://sait/Vxof/Vxod1.php"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation"> Электронный дневник</button></a>
           
            <?php else: ?>
                <a href="Vxof/Auth.php"><button class="btn btn-primary btn-lg btn-default" type="button"class="nav-item nav-link js-scroll-trigger" role="presentation"> Электронный дневник</button></a>
                <?php endif;?>

                </div>
                </div>
    </header>
    <section class="text-monospace content-section text-center" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Информация для вас</h2><p><br><strong>Уважаемые пользователи сервиса «Электронный дневник»!</strong></br>
                        Ведение Электронного дневника и электронного журнала является услугой обеспечивающей оперативное, надёжное и безопасное информирование родителей и обучающихся о ходе обучения.
    .Приглашаем родителей, которые до сих пор не пользовались Электронным дневником, зарегистрироваться на портале и получить доступ к сервису.В разделе «Помощь» вы
    найдёте инструкции, презентации и ответы на часто встречающиеся вопросы по использованию сервиса.(В разработке)<br /><br /></p></div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="http://sait/Glavnai%20stranica.php">Copyright ©&nbsp;Sait 2020</a>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>