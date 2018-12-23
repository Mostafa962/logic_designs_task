$(document).ready(function () {
	$("#submit").click(function() {
	var file_data = $('#file').prop('files')[0];  
    var form_data = new FormData();                  
    form_data.append('file', file_data);
	    $.ajax({
	        type: "POST",
	        url: "process.php",
	        dataType: 'text',  
	        contentType: false,
	        processData: false,
	        data: form_data,  
	        success: function(response){
	               //$('#form')[0].reset();
	               $(".files").append(response);
	        }
		});
		return false;
	});
});

