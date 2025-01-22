<?php
// contacts.php
// Подключаем шапку (header.php)
require_once 'header.php';
?>

<main class="contacts-background">
    <!-- Первая секция (шапка страницы с заголовком и кнопкой) -->
    <section class="contacts-hero">
        <div class="contacts-hero-overlay"></div>
        <div class="contacts-hero-content">
            <h1>CONTACTS</h1>
            <button type="button" class="btn btn-secondary contact-us-button" data-bs-toggle="modal" data-bs-target="#contactModal">Contact us</button>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contact Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="contactForm" method="POST" action="./send_email.php" class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">Имя</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required />
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Фамилия</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required />
                        </div>
                        <div class="col-md-6">
                            <label for="company" class="form-label">Компания (необязательно)</label>
                            <input type="text" class="form-control" id="company" name="company" />
                        </div>
                        <div class="col-md-6">
                            <label for="orderNumber" class="form-label">Номер заказа (необязательно)</label>
                            <input type="text" class="form-control" id="orderNumber" name="orderNumber" />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Электронная почта</label>
                            <input
                                    type="email"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    placeholder="your.email@example.com"
                                    required
                            />
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Сообщение</label>
                            <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="4"
                                    required
                                    placeholder="Ваше сообщение..."
                            ></textarea>
                        </div>
                        <?php if (isset($_GET['status'])) {
                        if ($_GET['status'] === 'success') {
                        echo '<div class="alert alert-success" role="alert">Сообщение успешно отправлено!</div>';
                        } elseif ($_GET['status'] === 'error') {
                        echo '<div class="alert alert-danger" role="alert">Произошла ошибка при отправке сообщения.</div>';
                        }
                        }
                        ?>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Вторая секция (верх и низ: 65% / 35%) -->
    <section class="contacts-main-section">
        <div class="container-fluid">
            <!-- Две колонки с заголовком и текстом -->
            <div class="row-contacts">
                <div class="col-md-6">
                    <h2>Central office</h2>
                    <p>Address<br>
                        15 Cēsu street, Riga,<br>
                        LV-1012, Latvia<br><br>

                        Monday - Friday<br>
                        9:00 - 18:00<br>
                        Saturday - Sunday<br>
                        Closed<br><br>

                        Phone Number<br>
                        +371 66016006<br><br>

                        E-mail<br>
                        info@sonora.lv</p>
                </div>
                <div class="col-md-6">
                    <h2>Customs warehouse</h2>
                    <p>Address<br>
                        1 Chuibes Street, Riga,<br>
                        LV-1012, Latvia<br><br>

                        Monday - Friday<br>
                        8:30 - 17:30<br>
                        Saturday Sunday<br>
                        Closed<br><br>

                        Phone Number<br>
                        +371 66016006<br><br>

                        E-mail<br>
                        info@sonora.lv</p>
                </div>
            </div>

            <!-- Блок с фотографией -->
            <div class="contacts-main-bottom">
                <img src="Assets/contacts-second.png" alt="Placeholder" class="contacts-bottom-img">
            </div>
        </div>

    </section>
</main>

<?php
// Подключаем футер (footer.php)
require_once 'footer.php';
?>