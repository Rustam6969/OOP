<?php 

namespace Car;

class Car extends DB {
    protected $id;
    protected $wincode;
    protected $model;
    protected $power;
    protected $color;
    protected $db;

    public function setInfo($wincode, $model, $power, $color)
    {
        $this->wincode = $wincode;
        $this->model = $model;
        $this->power = $power;
        $this->color = $color;

        $data = [
            'wincode' => $wincode,
            'model' => $model,
            'power' => $power,
            'color' => $color
        ];
        
        $this->db->table('car')->insert($data);
    }
    
    public function getAllCars()
    {
        return $this->db->table('car')->getAll();
    }
}
