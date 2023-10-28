<?php
 header ("Content-Type: application/json");

 require ("vendor/autoload.php");

 $method = $_SERVER ["REQUEST_METHOD"];
 $url = $_SERVER ["REQUEST_URI"];

$url = explode("/", $url);
 switch($method){
    case "POST":
        $url = $url[5];
        switch($url){
            case "login":
                $ctrl = new Controllers\Controllogin();
                $result = $ctrl->login(file_get_contents("php://input"));
                echo $result;
            break;

            case "cadastro":
                $ctrl = new Controllers\Controlcad();
                $result = $ctrl->cad(file_get_contents("php://input"));
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
    case "GET":
        switch($url[5]){
            case "users":
                $ctrl = new Controllers\Controllist();
                $obj = [
                    'value' => $url[6]
                ];
                $object = json_encode($obj);
                $result = $ctrl->list($object);
                echo $result;
            break;
            default:
                $response = [
                    "status" => 404,
                    "message" => "Rota $url nao encontrada"
                ];
                header ("HTTP/1.0 404 Pesquisa não permitida");
                echo (json_encode($response));
            break;
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