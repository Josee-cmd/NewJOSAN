<?php

class usuarios
{
    //Atributos de la clase Usuario
    private int $IdUsuario;
    private string $password;
    private bool $loginStatus;
    private DateTime $dia;
    private string $rol;

    // Constructor que puede recibir parámetros para inicializar los atributos de la clase "usuarios"
    public function __construct(int $id, string $password, bool $loginStatus, DateTime $dia, string $rol)
    {
        $this->IdUsuario = $id;
        $this->password = $password;
        $this->loginStatus = $loginStatus;
        $this->dia = $dia;
        $this->rol = $rol;
    }

    // Getter para obtener el valor de los atributos de la clase "usuarios"
    public function __getId():int{
        return $this->IdUsuario;
    }
    public function __getPasswor():string{
        return $this->password;
    }
    public function __getLoginStatus():bool{
        return $this->loginStatus;
    }
    public function __getDia():DateTime{
        return $this->dia;
    }
    public function __getRol():string{
        return $this->rol;
    }
    //Setter para modificar el valore de los atributos de la clase "usuarios"
    public function __setID(int $id):void{
        $this->IdUsuario = $id;
    }

    public function __setPassword(string $password):void{
        $this->password = $password;
    }

    public function __setLoginStatus(bool $status):void{
        $this->loginStatus = $status;
    }

    public function __setDia(DateTime $dia):void{
        $this->dia = $dia;
    }
    public function __setRol(string $rol):void{
        $this->rol = $rol;
    }
    //Metodos-Funciones que contedra esta clase
    public function __loginStatus(): bool
    {
        return $this->loginStatus;
    }

    public function __MostrarDatos(): void
    {
        echo $this->IdUsuario . " " . "<br>" .
            $this->password . " " . "<br>" .
            $this->loginStatus . " " . "<br>" .
            $this->dia->format('Y-m-d H:i:s');  // Formatear el objeto DateTime a una cadena
    }
}
