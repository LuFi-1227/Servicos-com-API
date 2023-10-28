<?php
namespace Controllers;
include_once "vendor/autoload.php";

use Models\Datalist;

class Controllist{
    public function list($Obj){
        $data = new Datalist();
        $obj = json_decode($Obj, true);
        $name = $obj['value'];
        $result = $data->listPerName($name);
        $vet = [];
        if($result){
            $i = 0;
            while($data = mysqli_fetch_assoc($result)){
                $vet[$i] = $data;
                $i++; 
            }
            return json_encode($vet);
        }else{
            return 0;
        }
    }
}
?>