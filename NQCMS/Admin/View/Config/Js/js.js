$('form').submit(function() {
	var data=$(this).serialize();
	$.ajax({
		url: ACTION,
		type: 'POST',
		dataType: 'json',
		data: data,
		success:function(json){
			alert(json.message);
		}
	})
	return false;
	
});