<?php
// Подключаем заголовок
include 'header.php';
?>

    <div class="first-section" id="home">
        <img src="Assets/first-section.png" alt="Hero Image" class="first-section-image">
    </div>
    <div class="second-section" id="contacts">
        <h1 class="second-section-tзорitle">“SONORA” - MORE THAN JUST LOGISTICS</h1>
        <p class="second-section-description">"Sonora" is one of the most reliable and dynamic transport and logistics companies in the Baltic States
            with more than 25 years of experience in the freight transportation industry worldwide. Unfailing quality,
            efficient, fast, creative and professional logistics services and solutions of all kinds. Develop your business
            while we take care of the safe delivery of your cargo to the desired destination!</p>
    </div>

    <div class="third-section" id="services">
        <div class="third-section-content-overlay">
            <h1 class="third-section-title">TRANSPORTATION SERVICES WE OFFER</h1>
            <div class="third-section-subheadings">
                <h3 class="third-section-subheading">RAILWAY FREIGHT</h3>
                <h3 class="third-section-subheading">AIR FREIGHT</h3>
                <h3 class="third-section-subheading">ROAD FREIGHT</h3>
                <h3 class="third-section-subheading">SEA FREIGHT</h3>
                <h3 class="third-section-subheading">PROJECT CARGO</h3>
            </div>
        </div>
    </div>

    <!-- Четвёртая секция с зелёным фоном -->
    <div class="fourth-section" id="about">
        <!-- Контейнер шириной 80% для двух подсекций -->
        <div class="fourth-section-container">

            <!-- Первая подсекция -->
            <div class="fourth-section-subsection">
                <h2 class="fourth-section-title">
                    WE ARE MEMBERS OF INTERNATIONAL<br>
                    ORGANIZATIONS IN THE LOGISTICS INDUSTRY
                </h2>

                <!-- Картинка высотой ~60px на всю ширину -->
                <img
                    class="fourth-section-image"
                    src="Assets/fourth-section-first.png"
                    alt="Membership Image"
                >

                <!-- Кнопка во всю ширину -->
                <button class="fourth-section-button">
                    GET A QUOTE
                </button>
            </div>

            <!-- Вторая подсекция -->
            <div class="fourth-section-subsection">
                <h2 class="fourth-section-title">OUR TEAM</h2>

                <!-- Фотография высотой ~100px на всю ширину -->
                <img
                    class="fourth-section-image"
                    src="Assets/fourth-section-second.png"
                    alt="Team Image"
                >

                <!-- Текст под фотографией -->
                <p class="fourth-section-text">
                    We highly value our employees, and we give each of them the opportunity
                    to develop themselves and improve, growing along with our company and
                    its development, not only domestically, but also internationally in the
                    market.
                </p>
            </div>

        </div>
    </div>

<?php
// Подключаем футер
include 'footer.php';
?>