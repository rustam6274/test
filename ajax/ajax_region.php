<?php
require_once '../mod.php'; 

if (isset($_POST["region"])) { 
    $result = array(
        'message' => 'Запись внесена в БД',
    	'region'  => $_POST["region"],
    	'date'    => $_POST["date"],
    	'courier' => $_POST["courier"]
    );
    $db = new mod();
    $courier = mod::getIdCourier($result["courier"]);
    $region  = mod::getIdRegion($result["region"]);

    $rand2 = $_POST["region"];
    $travel_time = mod::get_travel_time1($_POST["region"]);
    $today1 = date($_POST["date"]);
    $today2 = date ("Y-m-d", strtotime ($today1 ."+".$travel_time." days"));

    if (mod::getTravel7($courier, $today1, $today2) == 1)
    {
        $result = null;
        echo json_encode($result);
    }
    else
    {
        $arrive = mod::setTravel($region, $result["date"], $courier, $result["region"], $today2);
        $result['arrive'] = $arrive;
        echo json_encode($result); 
    }
}