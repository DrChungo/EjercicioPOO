<?php
class Coche
{

    public $brand;
    public $model;
    public $year;
    public $actualSpeed;

    public function __construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year; 
        $this->actualSpeed = 0;
    }

    //Getters y setters

    function set_brand($brand)
    {
        $this->brand = $brand;
    }
    function get_brand()
    {
        return $this->brand;
    }
    function set_model($model)
    {
        $this->model = $model;
    }
    function get_model()
    {
        return $this->model;
    }
    //Year
    function set_year($year)
    {
        $this->year = $year;
    }
    function get_year()
    {
        return $this->year;
    }
    function set_actualSpeed($actualSpeed)
    {
        $this->actualSpeed = $actualSpeed;
    }
    function get_actualSpeed()
    {
        return $this->actualSpeed;
    }

      public function accelerate($increment) {
        if ($increment > 0) {
            $this->actualSpeed += $increment;
            echo " El coche ha acelerado $increment km/h \n";
        } else {
            echo " El incremento debe ser positivo.\n";
        }
    }
    public function curb($decrement) {
        if ($decrement > 0) {
            $this->actualSpeed -= $decrement;
            if ($this->actualSpeed < 0) {
                $this->actualSpeed = 0;
            }
            echo " El coche ha frenado $decrement km/h \n";
        } else {
            echo " El decremento debe ser positivo.\n";
        }
    }

        public function details() {
        echo " Detalles del coche:". "\n";
        echo "Marca: $this->brand ". "\n";
        echo "Modelo: $this->model . " . "\n";
        echo "Año: $this->year ";
        echo "Velocidad actual: $this->actualSpeed km/h". "\n";
    }
}


$coche1 = new Coche("Nissan", "Skyline GTR", 1999);

$coche1->details();
$coche1->accelerate(60);
$coche1->curb(20);
$coche1->details();

