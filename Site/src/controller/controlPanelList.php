<?php
    namespace Controll;
    require_once "../../vendor/autoload.php";

    use Conn\connection;
    $ctrl = new controlPanelList();
    if(isset($_POST['data'])){
        $name = $_POST['data'];
        $ctrl->list($name, "get");
    }else{
        $ctrl->list("", "get");
    }

    class controlPanelList{
        public function list($name, $method){
            $url = "http://localhost/PHP/Servicos-com-API/API/index.php/users/".$name; 
            $api = new connection();

            $response = $api->requestAPI($url, $method, null);
            $vet = json_decode($response, true);
            $i = 0;
            $string =  " <table border='1' width=100%>
                <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Usuário</th>
                </tr>";
            if($vet != 0){
                while($i < count($vet)){
                    $data = $vet[$i];
                    $string = $string."<tr>
                            <td>".$data['Uname']."</td>
                            <td>".$data['email']."</td>
                            <td>".$data['userName']."</td>
                        </tr>";
                    $i++;
                }
            }
            $string = $string."</table>";
            echo $string;
        }
    }
?>