<?php
require 'header.php';

?>

<main>
    <section class="hero">
        <h1>International Scale Full Service Logistics</h1>
        <p>More than 25 years of experience in freight transportation worldwide</p>
        <a href="quote.php" class="cta-button">Get a Quote</a>
    </section>

    <section class="services">
        <h2>Transportation Services We Offer</h2>
        <div class="services-grid">
            <?php
            $services = [
                'Air Freight',
                'Road Freight',
                'Sea Freight',
                'Project Cargo',
                'Railway Freight'
            ];

            foreach ($services as $service) {
                echo "<div class='service-card'>
                    <h3>{$service}</h3>
                    <a href='services.php#{$service}'>Learn More</a>
                </div>";
            }
            ?>
        </div>
    </section>
</main>

<?php
// calculator.php
class FreightCalculator {
    public function calculateFreight($params) {
        $weight = $params['weight'];
        $pallets = $params['pallets'];
        $distance = $params['distance'];
        $type = $params['type'];

        // Basic calculation logic
        $baseRate = $this->getBaseRate($type);
        $weightFactor = $weight * 0.1;
        $palletFactor = $pallets * 5;
        $distanceFactor = $distance * 0.05;

        return $baseRate + $weightFactor + $palletFactor + $distanceFactor;
    }

    private function getBaseRate($type) {
        $rates = [
            'air' => 100,
            'road' => 50,
            'sea' => 75,
            'rail' => 60
        ];
        return $rates[$type] ?? 50;
    }
}

// quote.php
class QuoteRequest {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function submitQuote($data) {
        $sql = "INSERT INTO quotes (name, email, freight_type, weight, origin, destination, details) 
                VALUES (:name, :email, :freight_type, :weight, :origin, :destination, :details)";

        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                ':name' => $data['name'],
                ':email' => $data['email'],
                ':freight_type' => $data['freight_type'],
                ':weight' => $data['weight'],
                ':origin' => $data['origin'],
                ':destination' => $data['destination'],
                ':details' => $data['details']
            ]);
            return true;
        } catch(PDOException $e) {
            return false;
        }
    }
}

// footer.php
?>
<footer>
    <div class="footer-content">
        <div class="contact-info">
            <h4>Head Office</h4>
            <address>
                Cēsu Street 15<br>
                Riga, LV-1012, Latvia<br>
                Phone: +371 66016006<br>
                E-mail: info@sonora.lv
            </address>
        </div>
        <div class="working-hours">
            <h4>Working Hours</h4>
            <p>Monday - Friday: 9:00 - 18:00</p>
            <p>Saturday - Sunday: Closed</p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="terms.php">General Terms</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; <?php echo date('Y'); ?> Sonora. All rights reserved.</p>
    </div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>