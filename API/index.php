<?php
 header ("Content-Type: application/json");

 require ("vendor/autoload.php");

 $method = $_SERVER ["REQUEST_METHOD"];
 $url = $_SERVER ["REQUEST_URI"];

$url = explode("/", $url);
$url = $url[5];
 switch($method){
    case "POST":
        switch($url){
            case "login":
                $ctrl = new Controllers\Controllogin();
                $result = $ctrl->login(file_get_contents("php://input"));
                echo $result;
            break;
            default:
                $response = [
                    "status" => 404,
                    "message" => "Rota $url nao encontrada"
                ];
                header ("HTTP/1.0 404 Page Not Allowed");
                echo (json_encode ($response));
        }
    break;
    default:
        $response = [
            "status" => 405,
            "message" => "Metodo $method nao permitido"
        ];
        header ("HTTP/1.0 405 Method Not Allowed");
        echo (json_encode ($response));
}
?>