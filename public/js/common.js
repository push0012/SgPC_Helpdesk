function validate() {
	var output = true;
	$(".registration-error").html('');
	if($("#personal-field").css('display') != 'none') {
		console.log('comes here');
		console.log($("#title").val());
		if($("#title").val() == null) {
			console.log('comes here too');
			output = false;
			$("#title-error").html("required");
		}	
		/*if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
			$("#email-error").html("invalid");
			output = false;
		}*/
	}
	
	/*if($("#password-field").css('display') != 'none') {
		if(!($("#user-password").val())) {
			output = false;
			$("#password-error").html("required");
		}	
		if(!($("#confirm-password").val())) {
			output = false;
			$("#confirm-password-error").html("Not Matched");
		}	
		if($("#user-password").val() != $("#confirm-password").val()) {
			output = false;
			$("#confirm-password-error").html("Not Matched");
		}	
	}*/
	return output;
	}
	
$(document).ready(function() {
	$("#next").click(function(){
		var output = validate();
		if(output) {
			var current = $(".highlight");
			var next = $(".highlight").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#back").show();
				$("#finish").hide();
				$(".highlight").removeClass("highlight");
				next.addClass("highlight");
				if($(".highlight").attr("id") == "professional") {
					$("#next").hide();
					$("#finish").show();				
				}
			}
		}
	});
	$("#back").click(function(){ 
		var current = $(".highlight");
		var prev = $(".highlight").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#next").show();
			$("#finish").hide();
			$(".highlight").removeClass("highlight");
			prev.addClass("highlight");
			if($(".highlight").attr("id") == "personal") {
				$("#back").hide();			
			}
		}
	});

	$('#district').change(function(){
		console.log($(this).val() )
	})
		
	

});