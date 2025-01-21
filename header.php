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
                <a href="calculator.php" class="btn btn-primary me-2 button-to-hide">HOME</a>
                <button class="btn btn-primary me-2 button-to-hide">ABOUT</button>
                <button class="btn btn-primary me-2 button-to-hide">CONTACTS</button>
                <button class="btn btn-secondary get-quote-button">GET A QUOTE</button>
            </div>

        </div>
    </nav>
</header>
