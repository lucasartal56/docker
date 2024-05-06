<?php

class Producto{
    //DEFINICION DE LOS ATRIBUTOS
    public string $nombre;
    public int $precio;
    public bool $dispobible; 

    #METODO CONSTRUCTOR, SE EJECUTA AL EFECTUAR LA INSTANCIA
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        #SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL METODO CONSTRUCTOR 
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->dispobible = $disponible;
    }

    #DEFINICION DE MÉTODOS 
    public function mostrarProducto(){
        echo "El Producto es: " . $this->nombre . " y su precio es de: " . $this->precio;
    }

    #MÉTODO GETTER PARRA LA PROPUEDAD PROTEGIDA DE NOMBRE
    public function getNombre() : String {
        return $this->nombre;
    }
    #MÉTODO SETTER PARA PROPIEDAD PROTEGIDA DE NOMBRE
    public function setNombre(string $nombre){
        $this->nombre = $nombre; 
    }

}

$producto = new Producto('Tablet', 200, true);
// $producto -> mostrarProducto();
echo $producto->nombre; //PRODUCE UN ERROR
echo '<br>';
echo $producto->getNombre(); //OBTIENE EL NOMBRE;
echo '<br>';
$producto->setNombre('Nuevo Nombre'); //SETEA EL NOMBRE
echo '<br>';
echo $producto->getNombre(); //OBTIENE EL NOMBRE


?>
