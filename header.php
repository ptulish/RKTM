<!-- header.php -->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка PHP и JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="styles.css" rel="stylesheet">
    <link href="about-us-styles.css" rel="stylesheet">
    <link href="contacts-styles.css" rel="stylesheet">
</head>
<body>

<!-- Верхняя часть сайта (логотип, меню) -->
<header>
    <nav class="navbar navbar-light bg-light custom-navbar">
        <div class="container-fluid">
            <!-- Кнопка-гамбургер (offcanvas trigger) -->
            <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
                <span class="navbar-toggler-icon"></span>
            </button>


            <!-- Логотип / Название компании -->
            <a class="navbar-brand me-auto" href="#">
                <img src="Assets/logo.png" alt="Лого" height="50" class="header-logo">
            </a>

            <!-- Блок с кнопками -->
            <div class="d-flex">
                <a href="index.php" class="btn btn-primary me-2 button-to-hide">HOME</a>
                <a href="about-us.php" class="btn btn-primary me-2 button-to-hide">ABOUT</a>
                <a href="contacts.php" class="btn btn-primary me-2 button-to-hide">CONTACTS</a>
                <a href="calculator.php" class="btn btn-secondary get-quote-button">GET A QUOTE</a>
            </div>

        </div>
    </nav>
</header>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
        <img src="Assets/logo.png" alt="Лого" height="50">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- Содержимое бокового меню -->
        <ul class="list-unstyled">
            <li><button class="btn btn-primary w-100 mb-2">HOME</button></li>
            <li><button class="btn btn-primary w-100 mb-2">ABOUT</button></li>
            <li><button class="btn btn-primary w-100 mb-2">CONTACTS</button></li>
            <li><button class="btn btn-secondary w-100">GET A QUOTE</button></li>
        </ul>
    </div>
</div>

