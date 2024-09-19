$( document ).ready(function() {
    $("#courierButton").click(
        function(){
            sendAjaxFormCourier('result', 'ajaxFormCourier', 'ajax/ajax_courier.php');
            return false; 
        }
    );
});
 
function sendAjaxFormCourier(result, ajax_form, url) {
    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        beforeSend: function(){
	 		$("#courierButton").prop("disabled", true); 
	 	},
        success: function(response) {
            result = $.parseJSON(response);
            $('#result').html('Результат : '+result.message);
            $("#courierButton").prop("disabled", false);
        },
        error: function(response) {
            $('#result').html('Ошибка. Данные не отправлены.');
        }
    });
}