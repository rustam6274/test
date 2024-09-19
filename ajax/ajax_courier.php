<?php
require_once '../mod.php'; 
if (isset($_POST["name"])) { 
    $result = ['message' => $_POST["name"]];
    if (is_numeric($result["message"])) {
    	$result['message'] = 'Введите имя';
    	echo json_encode($result);
    }elseif(empty($result['message'])){
        $result['message'] = 'Введите имя';
        echo json_encode($result);
    }else{
        $db = new mod();
        if(mod::getIdCourier($_POST['name']) == 0)
        {
            $flag = mod::setCourier($result["message"]);
            $result = ['message' => 'Успешно! '.$_POST['name']];
            echo json_encode($result);
        }
        else
        {
            $result['message'] = 'Курьер с таким именем уже есть!';
    	    echo json_encode($result);
        }
    }
}
?>