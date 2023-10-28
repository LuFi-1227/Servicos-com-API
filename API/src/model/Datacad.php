<?php
namespace Models;
include_once "vendor/autoload.php";

use Conn\Connect;

class Datacad{
    public function cad($user, $password, $email, $name){
        $conn = new Connect();

        $conn = $conn->Connect();

        $tablename = "users";

        $query = "insert into $tablename(userName, email, Uname, pass) values ('$user', '$email', '$name', '$password')";

        $result = mysqli_query($conn, $query);

        if($result){
            return $result;
        }else{{
            return 0;
        }}
    }
}
?>