<?php
    require_once "./Empleado.php";

    abstract class LenguajesProgramacion {
        const PHP = "PHP";
        const NET = "NET";
        const PYTHON = "Python";
    }

    class Programador extends Empleado {
        private $lenguajeProgramacion;

        function __construct(){
        }

        public function getLenguajeProgramacion() {
            return $this->lenguajeProgramacion;
        }

        public function setLenguajeProgramacion($lenguajeProgramacion) {
            $this->lenguajeProgramacion = $lenguajeProgramacion;
        }

        public function getTipo() {
            return $this->lenguajeProgramacion;
        }
        
    }