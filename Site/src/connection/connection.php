<?php
namespace Conn;
include_once "../../vendor/autoload.php";

class connection{
    public function requestAPI($url, $method, $data){
        $require = curl_init ();
        // define qual é a url destino da api (chamada de end point) que receberá a requisição
        curl_setopt ($require, CURLOPT_URL, $url);
        // aqui estamos falando que esperamos uma resposta da api
        curl_setopt ($require, CURLOPT_RETURNTRANSFER, true);
        // aqui definiremos o que mandaremos para a api, no caso o json
        curl_setopt ($require, CURLOPT_POSTFIELDS, $data);
        // aqui definimos um cabeçalho falando que o conteúdo que estamos mandando é um json
        curl_setopt ($require, CURLOPT_HTTPHEADER, array (
            "Content-Type: application/json"
        ));
        // aqui definimos o último parametro do curl que é qual método queremos. Dependendo do que está no $method o switch case define qual o método da requisição
        switch ($method) {
            case "post" : 
                curl_setopt ($require, CURLOPT_POST, 1);
                break;
            case "get" : 
                curl_setopt ($require, CURLOPT_HTTPGET, 1);
                break;
            case "put" : 
                curl_setopt ($require, CURLOPT_PUT, 1);
                //curl_setopt ($require, CURLOPT_CUSTOMREQUEST, "PUT");
                break;
            case "delete" : 
                //curl_setopt ($require, CURLOPT_HTTPDELETE, 1);
                break;
            default : 
                echo ("método não existe");
                break;
        }
        $response = curl_exec($require);
        return $response;
    }
}
?>