<?php 

class car {
    private $id;
    private $wincode;
    private $model;
    private $power;
    private $color;

    public function __construct($wincode, $model, $power, $color) 
    {
        $this->wincode = $wincode;
        $this->model = $model;
        $this->power = $power;
        $this->color = $color;
    }


    public function getId() {
        return $this->id;
    }

    public function getWincode() {
        return $this->wincode;
    }

    public function getModel() {
        return $this->model;
    }

    public function getPower() {
        return $this->power;
    }

    public function getColor() {
        return $this->color;
    }

    public function saveToDatabase(PDO $pdo) {
        $query = "INSERT INTO car (wicode, model, power, color) VALUES (:wincode, :model, :power, :color)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([
            ':wincode' => $this->wincode,
            ':model' => $this->model,
            ':power' => $this->power,
            ':color' => $this->color,
        ]);
        $this->id = $pdo->lastInsertId();
    }
}








?>