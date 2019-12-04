$(document).ready(function() {
	//Prevent name filed from special charecters
	$("#stu_name").keypress(function(e) {
		$("#stu_name-error").remove();
		var error = "";
		var k = e.keyCode,
		$return = ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32  || (k >= 48 && k <= 57));
		if(!$return) {
			  return false;
		}
	});
	//Prevent inserting dob after today
	$('#dob').prop('max', function(){
		return new Date().toJSON().split('T')[0];
	});
	//Nic Field
	$("#nic").keypress(function(e) {
		$("#nic-error").remove();
		var k = e.keyCode,
		$return = ((k >= 48 && k <= 57));
		if(!$return) {
			  return false;
		}
	});
	//get mobile as number
	$("#stu_mobile").keypress(function(e) {
		$("#stu_mobile-error").remove();
		var k = e.keyCode,
		$return = ((k >= 48 && k <= 57));
		if(!$return) {
			  return false;
		}
	});
	//get telephone as number
	$("#stu_telephone").keypress(function(e) {
		$("#stu_telephone-error").remove();
		var k = e.keyCode,
		$return = ((k >= 48 && k <= 57));
		if(!$return) {
			  return false;
		}
	});

	$('#district').change(function(e) {
		var distr = $(this).val();
		$.ajax({
			type: "GET",
			url: '/dsdivision/' + distr,
			success: function( msg ) {
				$("#dsa_id").empty();
				$.each(msg, function(value,key) {  
					$("#dsa_id").append($("<option>").attr("value", key.dsa_id).text(key.dsa_name));   
				});
			}
		});
	});

	$('#clg_id').change(function(e) {
		var clgid = $(this).val();
		console.log(clgid)
		$.ajax({
			type: "GET",
			url: '/collegecourse/' + clgid,
			success: function( msg ) {
				$("#cos_id").empty();
				$.each(msg, function(value,key) {  
					$("#cos_id").append($("<option>").attr("value", key.cos_id).text(key.cos_title));   
				});
			}
		});
	});


	$('#cos_id').change(function(e) {
		//console.log(clgid)
		var postData = {
			'cos_id' :$(this).val(),
			'clg_id' :$("#clg_id").val()
		}
		$.ajax({
			type: "GET",
			url: '/speciality_request/',
			data: postData,
			success: function( msg ) {
				$("#spc_id").empty();
				$.each(msg, function(value,key) {  
					$("#spc_id").append($("<option>").attr("value", key.spc_id).text(key.spc_name));   
				});
			}
		});
	});
	$('#spc_id').change(function(e) {

		if($(this).val() == 2){
			$("#speciality_in_word").attr('disabled',false);
		}else{
			$("#speciality_in_word").attr('disabled',true);
		}
	});


	//prevent later dates entering
	$('#effective_date').prop('max', function(){
		return new Date().toJSON().split('T')[0];
	});

	//jobavailability doprdown eneble
	$('#job_availability').change(function(e) {
		if($(this).val() == "Yes"){
			$("#job_sector").attr('disabled',false);
		}else{
			$("#job_sector").attr('disabled',true);
		}	
	});

	//it skill doprdown eneble
	$('#it_skill').change(function(e) {
		if($(this).val() == "Yes"){
			$("#it_skill_detail").attr('disabled',false);
		}else{
			$("#it_skill_detail").attr('disabled',true);
		}	
	});

	
});