<?php
namespace Models;
include_once "vendor/autoload.php";

use Conn\Connect;

class Datalist{
    public function listPerName($name){
        $conn = new Connect();

        $conn = $conn->Connect();

        $tablename = "users";
        if($name != 0){
            $query = "SELECT Uname, userName, email FROM $tablename WHERE Uname LIKE '%$name%'";
        }else{
            $query = "SELECT Uname, userName, email FROM $tablename";
        }
        $result = mysqli_query($conn, $query);

        if(!empty($result) && mysqli_num_rows($result)>0){
            return $result;
        }else{{
            return 0;
        }}
    }
}
?>