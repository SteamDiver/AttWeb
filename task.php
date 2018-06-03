<?php require_once "script.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Task Donskikh D</title>
    <link rel="stylesheet" href="css/bootstrap-material-design.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
            integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
            integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9"
            crossorigin="anonymous"></script>
    <script>$(document).ready(function () {
            $('body').bootstrapMaterialDesign();
        });</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">SteamDiver</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#aim">Цель</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#task">Требования</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#work">Реализация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#author">Об авторе</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron-fluid box-blue full-height text-center" id="top">
    <h1 class="display-1">Web проект</h1>
    <h2 class="display-3">"Выполнение SQL запроса"</h2>
    <br>

    <div class="btn-group">
        <a class="btn btn-light btn-outline-light" href="#aim">Цель</a>
        <a class="btn btn-light btn-outline-light" href="#task">Требования</a>
        <a class="btn btn-light btn-outline-light" href="#work">Реализация</a>
    </div>

</div>

<div class="jumbotron-fluid full-height box-darker">
    <div class="container">
        <div class="block" id="aim">
            <h2 class="display-3">Цель проекта</h2>
            <hr>
            <p>Целью данного проекта является создание одностраничного WEB приложения, позволяющее
                выполнять
                SQL запросы к
                заданной базе данных.</p>
            <blockquote class="blockquote">
                SQL (ˈɛsˈkjuˈɛl; англ. structured query language — «язык структурированных запросов») —
                декларативный язык
                программирования, применяемый для создания, модификации и управления данными в реляционной базе
                данных,
                управляемой соответствующей системой управления базами данных.
                <div class="blockquote-footer">Wikipedia</div>
            </blockquote>
        </div>
        <div class="block" id="task">
            <h2 class="display-3">Требования, предъявляемые к проекту</h2>
            <hr>
            <h3 class="display-4">Оформление</h3>
            <p> Проект должен быть выполнен в виде одностраничного Web-приложения, содержащего форму для указания
                входных
                данных и кнопку, при нажатии по которой выполняется SQL запрос. После нажатия на кнопку
                пользователь должен видеть результаты работы приложения в удобной и наглядной для него форме. </p>
            <p>В качестве выводимой информации будем считать количество затронутых строк таблицы. Сама таблица, БД и
                параметры доступа к ней задаются поргрммно в скрипте.</p>
            <p>Для визуального оформления решено попытаться использовать Material design как одно из последних веяний
                WEB
                дизайна </p>

            <h3 class="display-4">Практическая реализация</h3>
            <p>Задачу предлагается решить средствами PHP и MySql. Необходимо предварительно создать базу данных и
                таблицу в ней. Заполнить какой-либо информацией. Поле ввода не должно позволять удалять и создавать
                новые таблицы</p>
        </div>

        <div class="block">
            <h2 class="display-3">Технологии</h2>
            <hr>
            <p>В качестве стека технологий предполагается использование следующих компонентов:</p>
            <ul>
                <li>Apache / NGINX</li>
                <li>PHP >=5.4</li>
                <li>HTML+CSS</li>
                <li>JS</li>
            </ul>

        </div>
    </div>
</div>

<div class="jumbotron" id="work">
    <div class="container">
        <form action="#work" method="post">
            <div class="form-group">
                <label for="SQLQuery" class="bmd-label-floating">Введите Ваш запрос</label>
                <input type="text" class="form-control" name="query" id="SQLQuery">
            </div>
            <button class="btn btn-primary active" type="submit">Выполнить запрос</button>
        </form>
        <div id="result">
            <?= $alert; ?>
        </div>
    </div>
</div>
<footer class="text-muted" id="author">
    <div class="container">
        <p class="float-right"><a href="mailto:steamdiver@yandex.ru">SteamDiver</a></p>
        <p>Автор: Донских Дмитрий 4гр. 1 курс</p>
        <p>Использование материалов в коммерческих целях допускается только с согласия автора</p>
    </div>
</footer>
</body>
</html>