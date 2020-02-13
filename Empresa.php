<?php
    require_once "./Programador.php";
    require_once "./Disenador.php";


    class Empresa {
        private $id;
        private $nombre;
        private $empleados = [];

        function __constuct(){
        }

        public function getId() {
                return $this->id;
        }

        public function setId($id) {
                $this->id = $id;
        }

        public function getNombre() {
                return $this->nombre;
        }

        public function setNombre($nombre) {
                $this->nombre = $nombre;
        }

        public function getEmpleados() {
                return $this->empleados;
        }

        public function setEmpleados($empleados) {
                $this->empleados = $empleados;
        }

        public function addEmpleado($empleado){
            $this->empleados[] = $empleado;
        }

        public function listAllEmpleados(){
            return $this->empleados;
        }

        public function getEmpleadoById($id) {
            foreach($this->empleados as $empleado){
                if($empleado->getId() == $id){
                    return $empleado;
                }
            }
            return null;
        }

        public function getPromedioEdades(){
            $numeroEmpleados = count($this->empleados) == 0 ? 1 : count($this->empleados);
            $totalEdades = 0;
            foreach($this->empleados as $empleado){
                $totalEdades+=$empleado->getEdad();
            }

            return $totalEdades / $numeroEmpleados;
        }


    }
