<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Уроки</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="http://sait/Glavnai%20stranica.php">Главная</a><button data-toggle="collapse" class="navbar-toggler navbar-toggler-right" data-target="#navbarResponsive" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
                value="Menu"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link active js-scroll-trigger" href="http://sait/%d0%a3%d1%80%d0%be%d0%ba%d0%b8/Yroki.php">Уроки</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="#download">Оценки</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%94%d0%be%d0%bc%d0%b0%d1%88%d0%bd%d0%b5%d0%b5%20%d0%b7%d0%b0%d0%b4%d0%b0%d0%bd%d0%b8%d0%b5/Domashnee%20zadanie.php">Домашнее задание</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/%d0%9e%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7%d0%b0%d1%86%d0%b8%d0%b8/Organizacii.html">Организации</a></li>
                    <li class="nav-item nav-link js-scroll-trigger" role="presentation"><a class="nav-link js-scroll-trigger" href="http://sait/2%20%d0%be%d1%81%d0%bd%d0%be%d0%b2%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0/2stranica.php">Личный кабинет</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead" style="background-image:url('assets/img/intro-bg.jpg');">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1><br>Обучающиеся<br><br></h1>
                        <p class="intro-text">1. <?=$_COOKIE['user']?></p><a class="btn btn-link btn-circle" role="button" href="#about"><i class="fa fa-angle-double-down animated"></i></a></div>
        
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>Расписание</h2>

                    <table border="4"  width = "900px" height = "400px">
                            <tr>
                        <td>Понедельник: </td>
                        <td>Вторник:</td>
                        <td>Среда:</td>
                        <td>Четверг:</td>
                        <td>Пятница:</td>
                            </tr>

                            <td>Музыка</td>
                            <td>Русский язык</td>
                            <td>Физкультура</td>
                            <td>Физкультура</td>
                            <td>Физкультура</td>

                           <tr>
                            <td>Музыка</td>
                            <td>Русский язык</td>
                            <td>Физкультура</td>
                            <td>Физкультура</td>
                            <td>Физкультура</td>
                            </tr>

                            <tr>
                            <td>Музыка</td>
                            <td>Математика</td>
                            <td>Литература</td>
                            <td>Литература</td>
                            </tr>

                            <tr>
                            <td>Русский язык</td>
                            <td>Физкультура</td>
                            <td>Музыка</td>
                            <td>Литература</td>
                            </tr>

                            <tr>
                            <td>Музыка</td>
                            <td>Математика</td>
                            <td>Литература</td>
                            <td>Литература</td>
                            <td>Литература</td>
                            
                            </tr>

                            <tr>
                            <td>Музыка</td>
                            <td>Математика</td>
                            <td>Литература</td>
                            <td>Литература</td>
                            </tr>

                            <tr>
                            <td>Музыка</td>
                            <td>Русский язык</td>
                            <td>Физкультура</td>
                            </tr>

                            <tr>
                            <td>Музыка</td>
                            <td>Математика</td>
                            <td>Литература</td>
                            </tr>

                            <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            </tr>
    
                        </table>
                </div>
            </div>
        </div>
    </section>
    <section id="download" class="download-section content-section text-center" style="background-image:url('assets/img/downloads-bg.jpg');">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <h1 class="brand-heading">Оценки</h1>
                <p class="intro-text">Последние оценки: 34</p>
                <p class="intro-text"> Русский: 5,5,3,4,3</p>
                <p class="intro-text">Алгебра: 5,3,2,5,4,4</p>
                <p class="intro-text">Геометрия: 4,3,3,4,2,</p>
                <p class="intro-text">География: 4,5,5,4,5</p>
                <p class="intro-text">Литература: 5,4,3,3,5</p>
                <p class="intro-text">Обществозание: 4,4,4,4</p>
                <p class="intro-text">Физкультура: 5,5,5,5</p> 
    </section>
    <div class="map-clean"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/grayscale.js"></script>
</body>

</html>