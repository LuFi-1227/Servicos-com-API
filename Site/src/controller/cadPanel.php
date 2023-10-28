<?php
    namespace Controll;
    require_once "../../vendor/autoload.php";

    use Conn\connection;

    if(isset($_POST['user']) && isset($_POST['Pass']) && isset($_POST['name']) && isset($_POST['email'])){
        $ctrl = new cadPanel();
        $user = $_POST['user'];
        $pass = $_POST['Pass'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $ctrl->cadastro($user, $pass, $email, $name, "post");
    }

    class cadPanel{
        public function cadastro($user, $password, $email, $name, $method){
            $url = "http://localhost/PHP/Servicos-com-API/API/index.php/cadastro"; 
            $api = new connection();

            $data = [
                'user' => $user,
                'pass' => $password,
                'email' => $email,
                'name' => $name
            ];

            $data = json_encode($data);

            $response = $api->requestAPI($url, $method, $data);
            if($response){
                //header("Location: ../view/listUsers.php");
            }
        }
    }
?>