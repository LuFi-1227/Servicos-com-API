<?php
namespace Conn;
require_once "vendor/autoload.php";

class Connect{
    public function Connect(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "login";
        
        $conn = mysqli_connect($host, $user, $password, $dbname);
        // Verificar se a conexão foi bem-sucedida
        if(!$conn) {
            die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
        }else{
            // Configurar o conjunto de caracteres para UTF-8
            mysqli_set_charset($conn, "utf8");
            return $conn;
        }
    }
}
?>