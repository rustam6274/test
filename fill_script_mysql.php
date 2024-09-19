<?php
require_once 'mod.php';
$db = new mod();

$date0 = date ("2024-05-01"); // Начало
$tags = 90;                   // Количество дней


$i = mod::getTraveiс();       // Количество курьеров
$j = mod::getTraveir();       // Количество регионов


for ($m = 0; $m <= $tags; $m++) {
    for ($n = 0; $n <= $i; $n++) {
    	$courier_id = rand(1, $i);
        $region_id = rand(1, $j);
    	$travel_time = mod::get_travel_time($region_id);
        $date1 = date ("Y-m-d", strtotime ($date0 ."+".$travel_time." days"));
        if (mod::getTravel7($courier_id, $date0, $date1) == 0){
            //echo $region_id." ".$date0." ".$courier_id." ".$date1."<br>";
            mod::setTravelsave($region_id, $date0, $courier_id, $date1);
        }
    }
    $date0 = date ("Y-m-d", strtotime ($date0 ."+1 days"));
}
    
    
    
    
    
    
    


?>