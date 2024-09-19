$( document ).ready(function() {
    $("#regionButton").click(
        function(){    
            sendAjaxFormRegion('result', 'ajaxFormRegion', 'ajax/ajax_region.php');
            return false;
        }
    );
});
 
function sendAjaxFormRegion(result, ajax_form, url) {
 
    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        beforeSend: function(){
	 		$("#regionButton").prop("disabled", true); 
	 	},
        success: function(response) {
            result = $.parseJSON(response);
            if(result !== null){
                $('#result').html('Регион: '+result.region+'<br>Имя курьера: '
                    +result.courier+'<br>Дата выезда из Москвы: '+result.date+'<br>Дата прибытия: '+result.arrive);
                $("#regionButton").prop("disabled", false);
            } else{
                $('#result').html('На эту дату курьера нельзя выбрать!');
                $("#regionButton").prop("disabled", false);
            }
        },
        error: function(response) {
            $('#result').html('Ошибка. Данные не отправлены.');
        }
    });
}
