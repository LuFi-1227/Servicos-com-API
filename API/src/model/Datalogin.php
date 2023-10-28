<?php
namespace Models;
include_once "vendor/autoload.php";

use Conn\Connect;

class Datalogin{
    public function login($user, $password){
        $conn = new Connect();

        $conn = $conn->Connect();

        $tablename = "users";

        $query = "SELECT Uname, userName, email, pass FROM $tablename WHERE userName = '$user' and pass = '$password'";

        $result = mysqli_query($conn, $query);

        if(!empty($result) && mysqli_num_rows($result)==1){
            return $result;
        }else{{
            return 0;
        }}
    }
}
?>