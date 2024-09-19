 <div class="container">
 <br><h4 class="cols-sm-2 control-label" style="text-align: center;">Расписание поездок</h4><br>
 <div class="main-form" style="max-width: 300px; margin-left: auto; margin-right: auto; padding: 15px;">
 <form id='ajaxFormSelect' class="" method="post" action="">

 <div class="form-group">
 <label for="username" class="cols-sm-2 control-label">Дата с</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
<input type="date" class="form-control" name="from_date" id="from_date" placeholder="Enter data"/>
 </div>
 </div>
 </div>

 <div class="form-group">
 <label for="username" class="cols-sm-2 control-label">Дата по</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-clock-o fa" aria-hidden="true"></i></span>
<input type="date" class="form-control" name="to_date" id="to_date" placeholder="Enter data"/>
 </div>
 </div>
 </div>
 <div class="form-group ">
 	<button type="button" name='selectDate' id="selectDate" class="btn btn-primary btn-lg btn-block login-button">
 		Отправить
 	</button>
 </div>
 </form>
 </div>
 </div>
<hr>
<div class="info" id="result" style="text-align: center;">
	<h4>Информационное поле</h4>
</div>
