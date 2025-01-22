<?php
// new-page.php
// Пример новой страницы с подключением шапки и футера.

// Подключаем шапку (header.php).
require_once 'header.php';
?>
    <main class="container-fluid px-0">
        <!-- Первая секция с фоновым изображением и наложением -->
        <section class="about-us-section">
            <div class="about-us-section-overlay"></div>
            <div class="about-us-section-content">
                <h1>ABOUT US</h1>
            </div>
        </section>
        <section class="about-us-second-section container">
            <div class="row">
                <!-- Левая колонка: картинка -->
                <div class="col-md-6 about-us-second-section-left">
                    <img src="Assets/about-us-second-section.png" alt="Пример изображения" class="img-fluid" />
                </div>
                <!-- Правая колонка: заголовки и тексты -->
                <div class="col-md-6 about-us-second-section-right">
                    <h2>Full service logistics</h2>
                    <p>
                        The company "Sonora" was founded in 2000, its main
                        activity was the export of cotton products from
                        Central Asia to Europe and the Baltic States. As the
                        demand for transport and logistics services increased,
                        the company began to develop on a much larger scale
                        and became a full-service freight transport and
                        logistics service provider.
                    </p>

                    <h2>International scale</h2>
                    <p>
                        "Sonora" is one of the most competitive transport and
                        logistics companies on the international scale. One of
                        our strengths is project logistics (Project Cargo), i.e.
                        non-standard and complex cargo transportation
                    </p>
                </div>
            </div>
        </section>

        <!-- Третья секция -->
        <section class="about-us-third-section container-fluid">
            <!-- Большой заголовок -->
            <h2>
                "Our company's greatest asset and key to success
                are our employees, whom we call our dream team!"
            </h2>
            <div class="section-spacer"></div>

            <!-- Заголовок и текст (без дополнительного отступа между ними) -->
            <h3>We value employees highly</h3>
            <p>
                We highly value our employees, and we give each of them the opportunity
                to develop themselves and improve, growing along with our company
                and its development, not only domestically, but also internationally
                in the market.
            </p>
            <div class="section-spacer"></div>

            <h3>Industry professionals</h3>
            <p>
                Our team consists of industry professionals with a positive mindset
                who can find solutions in any situation to provide excellent service
                to every one of our customers
            </p>
            <div class="section-spacer"></div>

            <h3>Certified employees</h3>
            <p>
                We are proud that our employees have received certificates,
                recognitions and international awards in the logistics industry
            </p>
        </section>

    </main>

<?php
// Подключаем футер (footer.php).
require_once 'footer.php';
?>