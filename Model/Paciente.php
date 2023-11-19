<?php
require_once "user.php";
class Paciente extends usuarios
{
    //Atributos que contiene la clase "Paciente"
    private int $Id_paciente;
    private string $nombre;
    private string $apellido;
    private string $email;
    private string $telefono;
    private int $edad;
    private DateTime $fecha;
    // Constructor que puede recibir parámetros para inicializar los atributos
    public function __construct(int $id, string $password, bool $loginStatus, DateTime $dia, int $idPaciente, string $nombre, string $apellido, string $email, string $telefono, int $edad, DateTime $fecha)
    {
        //Llamar al constructor de la clase base (Usuarios)
        parent::__construct($id, $password, $loginStatus, $dia);
        $this->Id_paciente = $idPaciente;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->telefono = $telefono;
        $this->edad = $edad;
        $this->fecha = $fecha;
    }
    // Getter para obtener el valor de los atributos de la clase "Paciente"
    public function __getIdPaciente(): int
    {
        return $this->Id_paciente;
    }

    public function __getNombre(): string
    {
        return $this->nombre;
    }
    public function __getApellido(): string
    {
        return $this->apellido;
    }

    public function __getEmail(): string
    {
        return $this->email;
    }

    public function __getTelefono(): string
    {
        return $this->telefono;
    }

    public function __getEdad(): int
    {
        return $this->edad;
    }

    public function __getFecha(): DateTime
    {
        return $this->fecha;
    }


    //Setter para modificar los valores de los atributos de la clase "Paciente"
    public function __setIdPaciente(int $id): void
    {
        $this->Id_paciente = $id;
    }

    public function __setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function __setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }

    public function __setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function __setFecha(DateTime $fecha): void
    {
        $this->fecha = $fecha;
    }
    //Metodos-Funciones que contedra esta clase
    public function __ModificarDatosPersonales()
    {
    }

    public function __ConsultarDatosMedicos()
    {
    }

    public function __ConsultarDatos()
    {
    }

    public function __ConsultarHistorialClinico()
    {
    }

    public function __ConsultarTratamiento()
    {
    }

    public function __MostrarDatos(): void
    {
        // Llamamos al método de la clase base (usuarios)
        echo 'Datos de la clase Usuario' . "<br><br>";
        parent::__MostrarDatos();
        // Imprimir los datos específicos de la clase Paciente
        echo "<br><br>" . 'Datos de la clase Paciente' . "<br><br>";
        echo $this->Id_paciente . " " . "<br>" .
            $this->nombre . " " . "<br>" .
            $this->apellido . " " . "<br>" .
            $this->email . " " . "<br>" .
            $this->telefono . " " . "<br>" .
            $this->edad . " " . "<br>" .
            $this->fecha->format('Y-m-d H:i:s');  // Formatear el objeto DateTime a una cadena
    }
}
//Inicializar con la fecha y hora actual
$fechaEspecifica = new DateTime('2023-11-19 12:30:00');
// Crear una instancia de la clase Paciente
$nuevoPaciente = new Paciente(1, "contrasena", true, new DateTime(), 1, "Jose", "Salcedo", "josesslcedo", "3043059", 20, $fechaEspecifica);

//Mostramos todos los datos instanciados de la clase "Paciente"
echo $nuevoPaciente->__MostrarDatos();
