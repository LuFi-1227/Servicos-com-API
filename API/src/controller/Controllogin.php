<?php
namespace Controllers;
include_once "vendor/autoload.php";

use Models\Datalogin;

class Controllogin{
    public function login($Obj){
        $data = new Datalogin();
        $obj = json_decode($Obj, true);
        $user = $obj['user'];
        $pass = $obj['pass'];
        $result = $data->login($user, $pass);

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