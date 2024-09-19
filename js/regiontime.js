$( document ).ready(function() {
    $("#regiontimeButton").click(
        function(){
            sendAjaxFormRegiontime('result', 'ajaxFormRegiontime', 'ajax/ajax_regiontime.php');
            return false; 
        }
    );
});

function sendAjaxFormRegiontime(result, ajax_form, url) {
    $.ajax({
        url:      url,
        type:     "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),
        beforeSend: function(){
	 		$("#regiontimeButton").prop("disabled", true); 
	 	},
        success: function(response) {
            result = $.parseJSON(response);
            $('#result').html('Результат : '+result.message);
            $("#regiontimeButton").prop("disabled", false);
        },
        error: function(response) {
            $('#result').html('Ошибка. Данные не отправлены.');
        }
    });
}