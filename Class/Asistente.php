<?php

class Asistente
{
    private int $IdPaciente;
    private string $nombre;
    private string $apellido;
    private int $edad;
    private string $email;
    private string $telefono;

    // Constructor que puede recibir parámetros para inicializar los atributos de la clase "Asistente"
    public function __construct(int $id, string $nombre, string $apellido, int $edad, string $email, string $telefono)
    {
        $this->IdPaciente = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->email = $email;
        $this->telefono = $telefono;
    }

    //Getter para obtener el valor de los atributos de la clase "Asistente"
    public function __getIdPaciente(): int
    {
        return $this->IdPaciente;
    }
    public function __getNombre(): string
    {
        return $this->nombre;
    }

    public function __getApellido(): string
    {
        return $this->apellido;
    }

    public function __getEdad(): int
    {
        return $this->edad;
    }

    public function __getEmail(): string
    {
        return $this->email;
    }

    public function __getTelefono(): string
    {
        return $this->telefono;
    }

    //Setter para modificar el valor de los atributos de la clase "Asistente
    public function __setId(int $id): void
    {
        $this->IdPaciente = $id;
    }

    public function __setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function __setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }

    public function __SetEdad(int $edad): void
    {
        $this->edad = $edad;
    }

    public function __setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __setTelefono(string $telefono):void{
        $this->telefono = $telefono;
    }

    //Metodos y funciones de la clase Asistente
    public  function __ConsultarTratamiento()
    {
    }

    public function __ConsultarDatosMedicos()
    {
    }

    public function __ModificarDatosPersonales()
    {
    }

    public function __ConsultarDatosDelPaciente()
    {
    }
}
