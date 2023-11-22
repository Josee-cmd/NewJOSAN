<?php
include_once("../Class/Medico.php");
class controllerMedico
{
    //Atributo
    private $medico;
    public function __construct()
    {
        $this->medico = new medico();
    }
    public function index(){
      
    }
    public function create($cedula,$id,$nombre,$apellido,$email){
        $this->medico->__setCedula($cedula);
        $this->medico->__setID($id);
        $this->medico->__setNombre($nombre);
        $this->medico->__setApellido($apellido);
        $this->medico->__setEmail($email);
        // $this->medico->__setEdad($edad);
        // $this->medico->__setEspecialidad($especialidad);
        // $this->medico->__setTelefono($telefono);
        
        if (method_exists($this->medico, 'Insert')) {
            $this->medico->Insert(); // Llamada a la función sin asignar a $resultado
            return "Inserción exitosa."; // o cualquier mensaje apropiado
        } elseif ($this->medico instanceof medico) {
            return "Error: El método Insert() no existe en la clase Medico.";
        } else {
            return "Error: \$this->medico no es una instancia válida de la clase Medico.";
        }
        
    } 
}
