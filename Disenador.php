<?php 
    require_once "./Empleado.php";
    
    abstract class TipoDisenador {
        const GRAFICO = "Grafico";
        const WEB = "Web";
    }
    
    class Disenador extends Empleado{
        private $tipoDisenador;

        function __construct(){
        }

        public function getTipoDisenador() {
                return $this->tipoDisenador;
        }

        public function setTipoDisenador($tipoDisenador) {
                $this->tipoDisenador = $tipoDisenador;

                return $this;
        }

        public function getTipo() {
            return $this->tipoDisenador;
        }
        
    }