<?php

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка PHP и JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--    <link href="styles.css" rel="stylesheet">-->
<!--    <link href="about-us-styles.css" rel="stylesheet">-->
    <link href="contacts-styles.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300..900&display=swap" rel="stylesheet">
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
            <a class="navbar-brand me-auto" href="#" onclick="scrollToSection(event, 'contacts')">
                <img src="Assets/logo-green.png" alt="Лого" height="50" class="header-logo">
            </a>

            <!-- Блок с кнопками -->
            <div class="d-flex">
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'home')">HOME</a>
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'about-us')">ABOUT</a>
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'services')">SERVICES</a>
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'calculator')">FREIGHT CALCULATOR</a>
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'vacancies')">VACANCIES</a>
                <a class="btn btn-primary me-2 button-to-hide" onclick="scrollToSection(event, 'contacts')">CONTACTS</a>
                <button type="button" class="btn btn-secondary get-quote-button" data-bs-toggle="modal" data-bs-target="#getAQuoteModal">GET A QUOTE</button>
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

<!-- Modal -->
<div class="modal fade" id="getAQuoteModal" tabindex="-1" aria-labelledby="getAQuoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getAQuoteModalLabel">GET A QUOTE!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Форма калькулятора фрахта -->
                <h1 class="mb-4">Калькулятор фрахта</h1>
                <form method="POST" action="#" class="row g-3" id="get-a-quote-form">
                    <div class="col-md-4">
                        <label for="cargoWeight" class="form-label">Вес груза (кг)</label>
                        <input type="number" class="form-control" id="cargoWeight" name="cargoWeight" min="0" step="any" required>
                    </div>
                    <div class="col-md-4">
                        <label for="cargoDistance" class="form-label">Расстояние (км)</label>
                        <input type="number" class="form-control" id="cargoDistance" name="cargoDistance" min="0" step="any" required>
                    </div>
                    <div class="col-md-4">
                        <label for="transportType" class="form-label">Вид транспорта</label>
                        <select class="form-select" id="transportType" name="transportType">
                            <option value="air">Воздушный</option>
                            <option value="sea">Морской</option>
                            <option value="road">Автомобильный</option>
                            <option value="rail">Железнодорожный</option>
                        </select>
                    </div>
                </form>
            </div>
            <?php if (!empty($resultMessage)): ?>
                <div class="alert alert-info mt-4" role="alert">
                    <?php echo $resultMessage; ?>
                </div>
            <?php endif; ?>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-secondary" onclick="document.getElementById('get-a-quote-form').submit();">Caluculate</button>
            </div>



            <!-- JS-часть (вставляйте внизу перед </body> или в отдельном файле) -->
            <script type="text/javascript">
                document.getElementById('calculateBtn').addEventListener('click', function(event) {
                    // Отменяем стандартное поведение сабмита
                    event.preventDefault();

                    const form = document.getElementById('get-a-quote-form');
                    const formData = new FormData(form);

                    fetch(window.location.href, {
                        method: 'POST',
                        body: formData
                    })
                        .then(response => response.text())
                        .then(html => {
                            const parser = new DOMParser();
                            const doc = parser.parseFromString(html, 'text/html');
                            const newResultContent = doc.querySelector('#resultMessage')?.innerHTML || '';
                            document.getElementById('resultMessage').innerHTML = newResultContent;
                        })
                        .catch(error => console.error('Ошибка:', error));
                });
            </script>


        </div>
    </div>
</div>