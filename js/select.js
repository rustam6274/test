$( document ).ready(function() {
    $("#selectDate").click(
        function(){    
            sendAjaxFormSelect('result', 'ajaxFormSelect', 'ajax/ajax_select.php');
            return false; 
        }
    );
});
 
function sendAjaxFormSelect(result, ajax_form, url) {
 
    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        beforeSend: function(){
	 		$("#selectDate").prop("disabled", true); 
	 	},
        success: function(response) {
            result = $.parseJSON(response);
            $('.info').empty();
            if(result !== null){
                for (var i =0; i < result.length; i++){
                    $('#result').append('<p>Регион : '+result[i].region+'<br>Имя курьера : '+result[i].courier+
                    '<br> Дата отправки : '+result[i].departure+'<br> Дата прибытия : '+result[i].arrive+'</p><hr>');
                }
                $("#selectDate").prop("disabled", false);
            } else{
                $('#result').html('Не введены даты!');
                $("#selectDate").prop("disabled", false);
            }
        },
        error: function(response) {
            $('#result').html('Ошибка. Данные не отправлены.');
            $("#selectDate").prop("disabled", false);
        }
    });
}
