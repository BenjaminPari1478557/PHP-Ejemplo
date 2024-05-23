<?php
include ("12-clase.php");

interface Figura{
    public function calcularArea();
}

class Triangulo implements Figura{
    public $base;
    public $altura;
    public function __construct($b,$h){
        $this->base=$b;
        $this->altura=$h;
    }

    public function calcularArea(){
        $calculadora=new Calculadora($this->base,$this->altura);
        $resultado=$calculadora->multiplicar();
        $calculadora=new Calculadora($resultado,2);
        $area=$calculadora->dividir();
        return $area;
    }
}
class Rectangulo implements Figura{
    public $base;
    public $altura;
    public function __construct($b,$h){
        $this->base=$b;
        $this->altura=$h;
    }
    public function calcularArea(){
        $calculadora=new Calculadora($this->base,$this->altura);
        $area=$calculadora->multiplicar();
        return $area;
    }
}
class Cuadrado implements Figura{
    public $base;
    public function __construct($b){
        $this->base=$b;
    }
    public function calcularArea(){
        $calculadora=new Calculadora($this->base,2);
        $area=$calculadora->potencia();
        return $area;
    }
}

class Circulo implements Figura{
    public $radio;
    public function __construct($r){
        $this->radio=$r;
    }
    public function calcularArea(){
        $pi=pi();
        $calculadora=new Calculadora($this->radio,2);
        $resultado=$calculadora->potencia();
        $calculadora=new Calculadora($resultado,$pi);
        $area=$calculadora->multiplicar();
        return $area;
    }
}
?>