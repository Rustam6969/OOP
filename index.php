<?php

require "PdoxInterface.php";
require "Cache.php";
require "Pdox.php";
require "DB.php";
require "Car.php";

use Car\Car;

$car = new Car();

if ($_SERVER['REQUEST_METHOD'] === 'POST' and !empty('POST')) {
    $wincode = $_POST['wincode'];
    $model = $_POST['model'];
    $power = $_POST['power'];
    $color = $_POST['color'];
    
//    [
//        'host'        => 'localhost',
//        'driver'    => 'mysql',
//        'database'    => 'car',
//        'username'    => 'root',
//        'password'    => 'Mamapapa1809',
//        'charset'    => 'utf8',
//        'collation'    => 'utf8_general_ci',
//        'prefix'     => ''
//    ]
    
	
    $car->setInfo($wincode, $model, $power, $color);
}

$carList = $car->getAllCars();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить авто</title>
</head>
<body>
    <h1>Добавить авто</h1>
    <form action="" method="post">
        <label>ВинКод:</label>
        <input type="text" name="wincode" required><br>

        <label>Модель:</label>
        <input type="text" name="model" required><br>

        <label>Мощность:</label>
        <input type="text" name="power" required><br>

        <label>Цвет:</label>
        <input type="text" name="color" required><br>

        <input type="submit" value="Сохранить">
    </form>

<div class="car-list">
	<?php foreach ($carList as $item): ?>
	<div class="item">
        <h2><?= $item->wincode; ?></h2>
        <p><?= $item->model; ?></p>
	</div>
	<?php endforeach; ?>
</div>
</body>
</html>
