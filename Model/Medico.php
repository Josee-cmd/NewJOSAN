<?php

class Medico
{
    //Atributos de la clase
    private int $Id_medio;
    private string $nombre;
    private string $apellido;
    private string $telefono;
    private string $especialidad;

    //Getter para obtenet el valor de los atributos de la clase "Medico"
    public function __getID(): int
    {
        return $this->Id_medio;
    }
    public function __getNombre(): string
    {
        return $this->nombre;
    }
    public function __getApellido(): string
    {
        return $this->apellido;
    }
    public function __getTelefono(): string
    {
        return $this->telefono;
    }
    public function __getEspecialidad(): string
    {
        return $this->especialidad;
    }

    //Settter para modificar el valor de los atributos de la clase "Medico"
    public function __setID(int $id): void
    {
        $this->Id_medio = $id;
    }
    public function __setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function __setApellido(string $apellido): void
    {
        $this->apellido = $apellido;
    }
    public function __setTelefono(string $telefono): void
    {
        $this->telefono = $telefono;
    }
    public function __setEspecialidad(string $especialidad): void
    {
        $this->especialidad = $especialidad;
    }
}
