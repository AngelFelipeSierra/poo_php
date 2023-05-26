    <!-- MVC: MODEL VIEW CONTROLLER (PATRON DE DISEÑO) 

-MODEL: Representacion logica de los datos
-VIEW: Representacion grafica (Frotend)
-CONTROLLER: Negocio (elementos que nos va permitir interacturar con lainformacion)-->

<?php 
    class Persona {
        private $nombre;
        protected $edad;

        public function __construct ($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        public function getNombre () {
            return $this->nombre;
        }
        public function setNombre ($nombre) {
            $this->nombre = $nombre;
        }
        public function getEdad () {
            return $this -> edad;
        }
        public function setEdad ($edad){
            $this->edad = $edad;
        }
        public function saludar (){
            echo "Hola, mi nombre es: " . $this->nombre;
        }
    }
?>