<style>
input::-webkit-input-placeholder {
font-size: 16px;
}
</style>
 <div class="container">
 <br><h4 class="cols-sm-2 control-label" style="text-align: center;">Добавить регион</h4><br>
 <div class="main-form" style="max-width: 300px; margin-left: auto; margin-right: auto; padding: 15px;">
 <form id='ajaxFormRegiontime' class="" method="post" action="">
 <div class="form-group">
 <label for="name" class="cols-sm-2 control-label">Регион</label>
 <div class="cols-sm-10">
 <div class="input-group">
 <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
 <input type="text" class="form-control" name="name" id="name" placeholder="Введите регион"/>
 </div>
 </div>
 </div>
 <div class="form-group">
 <label for="email" class="cols-sm-2 control-label">Время в пути</label>
 <div class="cols-sm-3">
 <div class="input-group">
    <select class="form-control" name="time" id="time">
                  <option selected="selected" value="1">1 час</option>
                  <option value="2">2 часа</option>
                  <option value="3">3 часа</option>
                  <option value="4">4 часа</option>
                  <option value="5">5 часов</option>
                  <option value="6">6 часов</option>
                  <option value="7">7 часов</option>
                  <option value="8">8 часов</option>
                  <option value="9">9 часов</option>
                  <option value="10">10 часов</option>
                  <option value="11">11 часов</option>
                  <option value="12">12 часов</option>
    </select>
 </div>
 </div>
 </div>
 <div class="form-group ">
 	<button type="button" id="regiontimeButton" class="btn btn-primary btn-lg btn-block login-button">
 		Добавить
 	</button>
 </div>

 </form>
 </div>
 </div>
<hr>
<div id="result" style="text-align: center;">
	<h4>Информационное поле</h4>
</div>










