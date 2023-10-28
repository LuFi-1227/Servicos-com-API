<?php
namespace Controllers;
include_once "vendor/autoload.php";

use Models\Datacad;

class Controlcad{
    public function cad($Obj){
        $data = new Datacad();
        $obj = json_decode($Obj, true);
        $user = $obj['user'];
        $pass = $obj['pass'];
        $email = $obj['email'];
        $name = $obj['name'];
        var_dump($Obj);
        $result = $data->cad($user, $pass, $email, $name);

        if($user != 0){
            $data = mysqli_fetch_assoc($result);

            $vetor = [
                "name" => $data['Uname'],
                "user" => $data['userName'],
                "email" => $data['email'],
                "pass" => $data['pass']
            ];
            return json_encode($vetor);
        }else{
            return 0;
        }
    }
}
?>