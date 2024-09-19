<?php
require_once '../mod.php'; 
if (isset($_POST["from_date"])) { 
    if (isset($_POST["to_date"])) {
        $db = new mod();
        $result = mod::getTravel($_POST["from_date"], $_POST["to_date"]);
        echo json_encode($result); 
    } else{
        $result = null;
        echo json_encode($result);
    }
} else {
    $result = null;
    echo json_encode($result);
}