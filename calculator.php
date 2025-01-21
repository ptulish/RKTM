<?php
// calculator.php
//
// Небольшой пример страницы с формой "Калькулятор фрахта"
// и обработкой введённых данных.

// Если пользователь отправил форму методом POST, выполняем расчёт.
$resultMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные формы (с проверкой и приведением к числу).
    $cargoWeight = isset($_POST['cargoWeight']) ? floatval($_POST['cargoWeight']) : 0;
    $cargoDistance = isset($_POST['cargoDistance']) ? floatval($_POST['cargoDistance']) : 0;
    $transportType = isset($_POST['transportType']) ? $_POST['transportType'] : 'air';

    // Задаём условные коэффициенты для разных видов транспорта (для примера).
    switch ($transportType) {
        case 'sea':
            $typeFactor = 0.02; // Меньшая стоимость за кг*км
            break;
        case 'road':
            $typeFactor = 0.05;
            break;
        case 'rail':
            $typeFactor = 0.04;
            break;
        default:
            $typeFactor = 0.06; // Воздушный
    }

    // Простейшая формула: стоимость = вес * расстояние * коэффициент
    $estimatedCost = $cargoWeight * $cargoDistance * $typeFactor;

    // Формируем сообщение о результате.
    $resultMessage = "Ориентировочная стоимость: " . number_format($estimatedCost, 2, '.', ' ') . " у.е.";
}
?>

<?php
include "header.php";
?>
<main class="container py-5">
    <!-- Форма калькулятора фрахта -->
    <h1 class="mb-4">Калькулятор фрахта</h1>
    <form method="POST" action="calculator.php" class="row g-3">
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
        <div class="col-12">
            <button type="submit" class="btn btn-success">Рассчитать</button>
        </div>
    </form>

    <!-- Вывод результата если он есть -->
    <?php if (!empty($resultMessage)): ?>
        <div class="alert alert-info mt-4" role="alert">
            <?php echo $resultMessage; ?>
        </div>
    <?php endif; ?>
</main>


<!-- Футер -->
<?php
include "footer.php";
?>