<?php 
require "car.php";
//require

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $wincode = $_POST['wincode'];
    $model = $_POST['model'];
    $power = $_POST['power'];
    $color = $_POST['color'];

    $car = new Car($wincode, $model, $power, $color);

    $car->saveToDatabase($pdo);

}

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
    <from mothod="post" actioon="">
        <label>ВинКод:</label>
        <input type="text" name="wincode" required><br>

        <label>Модель:</label>
        <input type="text" name="model" required><br>

        <label>Мощность:</label>
        <input type="text" name="power" required><br>

        <label>Цвет:</label>
        <input type="text" name="color" required><br>

        <input type="submit" value="Сохранить">
    </from>
</body>
</html>
