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
            <a href="#" class="btn btn-secondary contact-us-button">Contact us</a>
        </div>
    </section>
    
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