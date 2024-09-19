<?php 
    require_once 'mod.php'; 
    $db = new mod();
    $region  = mod::getRegion();
    $courier = mod::getCourier();
?>

 <div class="container">
 <br><h4 class="cols-sm-2 control-label" style="text-align: center;">Регистрация поездки</h4><br>
 <div class="main-form" style="max-width: 300px; margin-left: auto; margin-right: auto; padding: 15px;">
 <form id='ajaxFormRegion' class="" method="post" action="">
 <div class="form-group">
 <label for="username" class="cols-sm-2 control-label">Регион</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-building-o fa" aria-hidden="true"></i></span>
 <select class="form-control" name="region" id="region">
 	<?php 
 	$countRegion = count($region);
 	for ($i=0; $i < $countRegion; $i++) { 
 		echo "<option>";
 		echo $region[$i];
 		echo "</option>";
 	}
 	?>
 </select>
 </div>
 </div>
 </div>
 <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Дата выезда из Москвы</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
 <input type="date" class="form-control" name="date" id="date" placeholder="Введите дату">
 </div>
 </div>
 </div>
 <div class="form-group">
 <label for="username" class="cols-sm-2 control-label">Курьер</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
 <select class="form-control" name="courier" id="courier">
 	<?php 
 	$countCourier = count($courier);
 	for ($i=0; $i < $countCourier; $i++) { 
 		echo "<option>";
 		echo $courier[$i];
 		echo "</option>";
 	}
 	?>
 </select>
 </div>
 </div>
 </div>
 <div class="form-group ">
 	<button type="button" name='regionButton' id="regionButton" class="btn btn-primary btn-lg btn-block login-button">
 		Регистрация
 	</button>
 </div>
 
 </form>
 </div>
 </div>
<hr>
<div id="result" style="text-align: center;">
	<h4>Информационное поле</h4>
</div>












