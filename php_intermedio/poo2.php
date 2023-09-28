<?php 
class Persona {
    public $nombre;
    public $telefono;

    public function __construct($nom,$tel){
        $this->nombre = $nom;
        $this->telefono = $tel;
    }
    public function obtener_datos(){
        return "<br>Nombre: " .$this->nombre." Telefono: ".$this->telefono;
    }
}
class Alumno extends Persona{
    private $grado;
    private $turno;

    public function __construct($nomb, $tel, $grado, $turno){
        parent::__construct($nomb, $tel);
        $this->grado = $grado;
        $this->turno = $turno;
    } 

    public function obtener_datos(){
        return parent::obtener_datos(). "<br>Grado: " .$this->grado." Turno: ". $this->turno;
    }
}
?>
<h3> Crear un objeto array de la clase alumno</h3>
<?php
$alumnos= [new Alumno("camila", "0961123466", "Tercero - Nivel Medio","Tarde"),new Alumno("Rocio ", "0973890189", "segundo-nivel medio","Tarde")]; 

?>
<h3> Imprimir sus datos con foreach</h3> 
<?php
foreach($alumnos as $alumno){
   print( $alumno ->obtener_datos() );
}

?>