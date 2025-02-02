<?php
require 'header.php';
?>

<main>
    <section class="first-section" id="home">
        <div class="first-first-section">
            <h1>“RKTM” – MORE THAN JUST LOGISTICS</h1>
            <p>“Sonora” is one of the most reliable and dynamic transport and logistics companies in the Baltic States with more than 25 years of experience in the freight transportation industry worldwide. Unfailing quality, efficient, fast, creative and professional logistics services and solutions of all kinds. Develop your business while we take care of the safe delivery of your cargo to the desired destination!</p>
        </div>
        <div class="first-second-section">
            <img src="Assets/RKTM-white1.svg" alt="Logo">
        </div>
    </section>

    <section class="second-section" id="about-us">
        <h2>ABOUT US</h2>
        <div class="second-section-grid-container">
            <div class="second-section-grid-item">
                <h3>Full service logistics</h3>
            </div>
            <div class="second-section-grid-item">
                <p>The company "Sonora" was founded in 2000, its main
                    activity was the export of cotton products from
                    Central Asia to Europe and the Baltic States. As the
                    demand for transport and logistics services increased,
                    the company began to develop on a much larger scale
                    and became a full-service freight transport and
                    logistics service provider.
                </p>
            </div>
            <div class="second-section-grid-item">
                <h3>International scale</h3>
            </div>
            <div class="second-section-grid-item">
                <p>"Sonora" is one of the most competitive transport and
                    logistics companies on the international scale. One of
                    our strengths is project logistics (Project Cargo), i.e.
                    non-standard and complex cargo transportation</p>
            </div>
        </div>
    </section>
    <section class="third-section" id="services">
        <div class="third-section-container">
            <div class="third-section-left">
                <img src="Assets/third-section.png" alt="Image">
            </div>
            <div class="third-section-right">
                <div class="third-section-right-container">
                    <h2>TRANSPORTATION SERVICES
                        WE OFFER</h2>
                    <div class="service-item">RAILWAY FREIGHT</div>
                    <div class="service-item">AIR FREIGHT </div>
                    <div class="service-item">ROAD FREIGHT</div>
                    <div class="service-item">SEA FREIGHT</div>
                    <div class="service-item">PROJECT CARGO</div>
                </div>
            </div>
        </div>
    </section>

    <section class="fourth-section" id="calculator">
        <div class="pattern-bg">
            <!-- Тёмный блок с формой "Freight Calculator" -->
            <div class="freight-calculator">
                <h2>FREIGHT CALCULATOR</h2>
                <form action="calculate.php" method="POST">
                    <label for="palesu-veids">Palesu veids</label>
                    <input type="text" id="palesu-veids" name="palesu_veids" placeholder="Тип паллеты" required>

                    <label for="palesu-skaits">Palesu skaits</label>
                    <input type="text" id="palesu-skaits" name="palesu_skaits" placeholder="Количество паллет" required>

                    <label for="max-svars">Maksimālais svars uz paletes (kg)</label>
                    <input type="text" id="max-svars" name="max_svars" placeholder="Напр. 1000" required>

                    <label for="kopejais-svars">Kopejais svars (kg)</label>
                    <input type="text" id="kopejais-svars" name="kopejais_svars" placeholder="Общий вес" required>

                    <label for="ldm">LDM</label>
                    <input type="text" id="ldm" name="ldm" placeholder="LDM..." required>

                    <input type="submit" value="Calculate">
                </form>
            </div>

            <!-- Зеленый блок "Reach us by e-mail!" -->
            <div class="email-box">
                <h3>Reach us by e-mail!</h3>
                <button type="button">Contact us</button>
            </div>
        </div>
    </section>

    <section class="vacancies-section" id="vacancies">
        <!-- Фоновый паттерн (узор/logo) -->
        <div class="pattern-bg"></div>

        <!-- Основной контейнер контента -->
        <div class="container">
            <!-- Верхний заголовок секции -->
            <h2>VACANCIES</h2>

            <!-- Пример 2-х колонок с текстом -->
            <div class="vacancies-content">
                <div class="vacancies-row vac-row-left">
                    <h3>We value employees highly</h3>
                    <p>We highly value our employees, and we give each of them the
                        opportunity to develop themselves and improve, growing along
                        with our company and its development, not only domestically,
                        but also internationally in the market.</p>
                </div>
                <div class="vacancies-row vac-row-right">
                    <h3>Industry professionals</h3>
                    <p>Our team consists of industry professionals with a positive
                        mindset who can find solutions in any situation to provide
                        excellent service to every one of our customers.</p>
                </div>
            </div>
        </div> <!-- /container -->
    </section>

    <section class="contacts-section" id="contacts">
        <div class="contacts-container">

            <!-- Заголовок и кнопка «Contact us» -->
            <div class="contacts-header">
                <h2>CONTACTS</h2>
                <button class="contact-button" data-bs-toggle="modal" data-bs-target="#contactModal">Contact us</button>
            </div>

            <!-- Две колонки -->
            <div class="contacts-content">
                <!-- Колонка 1: Central office -->
                <div class="contact-column">
                    <h3>Central office</h3>
                    <p><span class="contact-label">Address</span><br />
                        15 Cēsu street, Riga,<br />
                        LV-1012, Latvia
                    </p>
                    <p>
                    <span class="contact-label">Monday – Friday</span><br />
                        9:00 – 18:00
                    <br>
                    <span class="contact-label">Saturday – Sunday</span><br />
                        Closed
                    </p>
                    <p><span class="contact-label">Phone Number</span><br />
                        +371 66016006
                    </p>
                    <p><span class="contact-label">E-mail</span><br />
                        <a href="mailto:info@sonora.lv">info@sonora.lv</a>
                    </p>
                </div>

                <!-- Колонка 2: Customs warehouse -->
                <div class="contact-column">
                    <h3>Customs warehouse</h3>
                    <p><span class="contact-label">Address</span><br />
                        1 Chuibes Street, Riga,<br />
                        LV-1012, Latvia
                    </p>
                    <p><span class="contact-label">Monday – Friday</span><br />
                        8:30 – 17:30
                    </p>
                    <p><span class="contact-label">Saturday – Sunday</span><br />
                        Closed
                    </p>
                    <p><span class="contact-label">Phone Number</span><br />
                        +371 66016006
                    </p>
                    <p><span class="contact-label">E-mail</span><br />
                        <a href="mailto:info@sonora.lv">info@sonora.lv</a>
                    </p>
                </div>
            </div><!-- /contacts-content -->

        </div><!-- /contacts-container -->
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
                            <label for="firstName" class="form-label">Firstname</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required />
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Lastname</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required />
                        </div>
                        <div class="col-md-6">
                            <label for="company" class="form-label">Company (optional)</label>
                            <input type="text" class="form-control" id="company" name="company" />
                        </div>
                        <div class="col-md-6">
                            <label for="orderNumber" class="form-label">Order number (optional)</label>
                            <input type="text" class="form-control" id="orderNumber" name="orderNumber" />
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
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
                            <label for="message" class="form-label">Message</label>
                            <textarea
                                    class="form-control"
                                    id="message"
                                    name="message"
                                    rows="4"
                                    required
                                    placeholder="Your message here..."
                            ></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-secondary">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
<div id="notification" class="notification"></div>

<?php if (isset($_GET['status'])) {
    if ($_GET['status'] === 'success') {
        echo '<div class="alert alert-success" role="alert">Your message is sent. We will contact You soon.</div>';
    } elseif ($_GET['status'] === 'error') {
        echo '<div class="alert alert-danger" role="alert">Произошла ошибка при отправке сообщения.</div>';
    }
}
?>

<?php
require 'footer.php';
?>
