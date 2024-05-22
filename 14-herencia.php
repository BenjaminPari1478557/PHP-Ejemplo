<?php
class Animal{
    public $nombre;
    public $color;
    public $estaExtincion;
    public $archivoSonido;

    public function __construct($nombre1,$color1,$estaExtincion1,$archivoSonido1){
        $this->nombre=$nombre1;
        $this->color=$color1;
        $this->estaExtincion=$estaExtincion1;
        $this->archivoSonido=$archivoSonido1;
    }
    public function obtenerInformacion(){
        if ($this->color =="Verde"){
            $colortext="\033[32m";
        }elseif($this->color =="Rojo"){
            $colortext="\033[31m";
        }elseif($this->color =="Amarillo"){
            $colortext="\033[33m";
        }
        
        $mensaje="Nombre: ".$this->nombre."\n".
        "Color: ".$colortext.$this->color."\33[0m"."\n".
        "En Extencion?: ".($this->estaExtincion ? "Si":"No")."\n";
        return $mensaje;
    }
    public function hacerSonido(){
        $audiofile="C:\\xampp\\htdocs\\PHP-Ejemplo\\".$this->archivoSonido;
        shell_exec("start wmplayer ".escapeshellarg($audiofile));
    }
}
class Perro extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}
class Gato extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}
class Pollo extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}