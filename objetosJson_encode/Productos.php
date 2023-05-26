<?php 
class Productos {
    private $nombre;
    private $precio;
    private $estado;    //Encapsulamiento
    private $cantidad;

    public function __construct($nombre, $precio, $estado, $cantidad){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->estado = $estado;
        $this->cantidad = $cantidad;
    }
    public function getNombre (){
        return $this->nombre;
    }
    public function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    public function getPrecio (){
        return $this->precio;
    }
    public function setPrecio ($precio){
        $this->precio = $precio;
    }
    public function getEstado (){
        return $this->estado;
    }
    public function setEstado ($estado){
        $this->estado = $estado;
    }
    public function getCantidad (){
        return $this->cantidad;
    }
    public function setCantidad ($cantidad){
        $this->cantidad = $cantidad;
    }
}
?>