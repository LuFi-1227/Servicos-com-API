<?php
    namespace Controll;
    require_once "../../vendor/autoload.php";

    use Conn\connection;

    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    if(isset($_POST['user']) && isset($_POST['Pass'])){
        $ctrl = new controlPanelLogin();
        $user = $_POST['user'];
        $pass = $_POST['Pass'];
        $ctrl->verifyLogin($user, $pass, "post");
    }

    class controlPanelLogin{
        public function verifyLogin($user, $password, $method){
            $url = "http://localhost/PHP/Servicos-com-API/API/index.php/login"; 
            $api = new connection();

            $data = [
                'user' => $user,
                'pass' => $password
            ];

            $data = json_encode($data);

            $response = $api->requestLogin($url, $method, $data);
            $response = json_decode($response, true);
            session_start();
            $_SESSION['loginJWT'] = JWT::encode($response, "htsres", 'HS256');
            header("Location: ");
            echo "logado";
        }
    }
?>