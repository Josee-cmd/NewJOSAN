<?php

class usuarios
{
    private int $IdUsuario;
    private string $password;
    private bool $loginStatus;
    private DateTime $dia;

    public function __construct(int $id, string $password, bool $loginStatus, DateTime $dia){
        $this->IdUsuario = $id;
        $this->password = $password;
        $this->loginStatus = $loginStatus;
        $this->dia = $dia;
    }

    public function __loginStatus(): bool
    {
        return $this->loginStatus;
    }

    public function __MostrarDatos(): void
    {
        echo $this->IdUsuario . " " ."<br>".
            $this->password . " " ."<br>".
            $this->loginStatus . " " ."<br>".  
            $this->dia->format('Y-m-d H:i:s');  // Formatear el objeto DateTime a una cadena
    }
}
