<?php
include_once("Conexion.php");
class usuarios
{
    //Atributos de la clase Usuario
    private int $IdUsuario;
    private string $password;
    private string $nombre;
    private bool $loginStatus;
    private string $dia;

    private $con;

    // Constructor que puede recibir parámetros para inicializar los atributos de la clase "usuarios"
    public function __construct()
    {
        $this->con = new Conexion();
    }

    // Getter para obtener el valor de los atributos de la clase "usuarios"
    public function __getId(): int
    {
        return $this->IdUsuario;
    }
    public function __getNombre(): string
    {
        return $this->nombre;
    }
    public function __getPasswor(): string
    {
        return $this->password;
    }
  
    public function __getLoginStatus(): bool
    {
        return $this->loginStatus;
    }
    public function __getDia(): string
    {
        return $this->dia;
    }

    //Setter para modificar el valore de los atributos de la clase "usuarios"
    public function __setID(int $id): void
    {
        $this->IdUsuario = $id;
    }
    public function __setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public function __setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function __setLoginStatus(bool $status): void
    {
        $this->loginStatus = $status;
    }

    public function __setDia(string $dia): void
    {
        $this->dia = $dia;
    }

    //Registrar un nuevo usuario al sistema
    public function Insert()
    {
        $sqlId = "SELECT * FROM usuarios WHERE userId = '{$this->__getId()}'";
        $resultado = $this->con->consultaRetorno($sqlId);
        $num = mysqli_num_rows($resultado);

        if ($num == 0) {
            $secondSql = "INSERT INTO `usuarios`(`userId`, `nombreUser`,`password`, `loginStatus`, `registerDate`) VALUES 
            ('{$this->__getId()}','{$this->__getNombre()}','{$this->__getPasswor()}','{$this->__getLoginStatus()}','{$this->__getDia()}')";
            $this->con->consultaSimple($secondSql);
            echo "<script>
            location.href = `../View/sign up.Medico.php`;
            </script>";
        } else {
            //El id del usuario ya se encuentra en el sistema
            echo "Este usuario ya se encuentra en el sistema";
        }
    }

    
    //Metodos-Funciones que contedra esta clase
    public function __loginStatus(): bool
    {
        return $this->loginStatus;
    }
}
