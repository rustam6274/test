<?php
require_once '../mod.php'; 
if (isset($_POST["name"])) { 
    $result = ['message' => $_POST["name"]];
    if (is_numeric($result["message"])) {
    	$result['message'] = 'Введите название региона!';
    	echo json_encode($result);
    }elseif(empty($result['message'])){
        $result['message'] = 'Введите название региона!';
        echo json_encode($result);
    }else{
        $db = new mod();
        if(mod::getIdRegion($_POST['name']) == 0)
        {
            $flag = mod::setRegiontime($result["message"],$_POST["time"]);
            $result = ['message' => 'Успешно! '.$_POST['name']];
            echo json_encode($result);
        }
        else
        {
            $result['message'] = 'Регион с таким именем уже есть!';
    	    echo json_encode($result);
        }
    }
}
?>