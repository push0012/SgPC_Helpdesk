function gvalidate() {
	var output = true;
	$(".registration-error").html('');
	/*if($("#gpersonal-field").css('display') != 'none') {
		if(($("#title").val() == null)) {
			output = false;
			$("#title-error").html("Required");
		}
		if($("#stu_name").val() == "") {
			output = false;
			$("#stu_name-error").html("Required");
		}	
		if($("#sex").val() == null) {
			output = false;
			$("#sex-error").html("Required");
		}
		if($("#dob").val() == "") {
			output = false;
			$("#dob-error").html("Required");
		}
		if($("#nic").val() == "") {
			output = false;
			$("#nic-error").html("Required");
		}
		if($("#stu_address").val() == "") {
			output = false;
			$("#stu_address-error").html("Required");
		}
		if($("#district").val() == null) {
			output = false;
			$("#district-error").html("Required");
		}
		if($("#dsa_id").val() == null) {
			output = false;
			$("#dsa_id-error").html("Required");
		}
		if($("#stu_mobile").val() == "") {
			output = false;
			$("#stu_mobile-error").html("Required");
		}
		if($("#stu_email").val() == "") {
			output = false;
			$("#stu_email-error").html("Required");
		}
	}*/
	
	/*if($("#geducational-field").css('display') != 'none') {

		if($("#clg_id").val() == null) {
			output = false;
			$("#clg_id-error").html("Required");
		}
		if($("#cos_id").val() == null) {
			output = false;
			$("#cos_id-error").html("Required");
		}
		if($("#medium").val() == null) {
			output = false;
			$("#medium-error").html("Required");
		}
		if($("#degree_class").val() == null) {
			output = false;
			$("#degree_class-error").html("Required");
		}
		if($("#effective_date").val() == "") {
			output = false;
			$("#effective_date-error").html("Required");
		}
		
	}*/
	/*if($("#gprofessional-field").css('display') != 'none') {

		if($("#job_availability").val() == null) {
			output = false;
			$("#job_availability-error").html("Required");
		}
		if($("#it_skill").val() == null) {
			output = false;
			$("#it_skill-error").html("Required");
		}
		
		//job sector enable true
		if($('#job_sector').is(':disabled') == false && $("#job_sector").val() == null) {
			output = false;
			$("#job_sector-error").html("Required");
		}
		//it skill details enabled true
		if($('#it_skill_detail').is(':disabled') == false && $("#it_skill_detail").val() == "") {
			output = false;
			$("#it_skill_detail-error").html("Required");
		}
	}*/
	return output;
}
function form_validate(){
	var output = true;
	$(".registration-error").html('');
	if($("#clg_name").val() == "") {
		output = false;
		$("#clg_name-error").html("Required");
	}
	if($("#clg_type").val() == null) {
		output = false;
		$("#clg_type-error").html("Required");
	}
	if($("#clg_address").val() == "") {
		output = false;
		$("#clg_address-error").html("Required");
	}
	if($("#clg_telephone").val() == "") {
		output = false;
		$("#clg_telephone-error").html("Required");
	}
	if($("#clg_email").val() == "") {
		output = false;
		$("#clg_email-error").html("Required");
	}
	if($("#clg_website").val() == "") {
		output = false;
		$("#clg_website-error").html("Required");
	}
	if($("#it_skill").val() == "") {
		output = false;
		$("#it_skill-error").html("Required");
	}
	return output;
}
function dvalidate() {
	var output = true;
	$(".registration-error").html('');
	/*if($("#dpersonal-field").css('display') != 'none') {
		if(($("#title").val() == null)) {
			output = false;
			$("#title-error").html("Required");
		}
		if($("#stu_name").val() == "") {
			output = false;
			$("#stu_name-error").html("Required");
		}	
		if($("#sex").val() == null) {
			output = false;
			$("#sex-error").html("Required");
		}
		if($("#dob").val() == "") {
			output = false;
			$("#dob-error").html("Required");
		}
		if($("#nic").val() == "") {
			output = false;
			$("#nic-error").html("Required");
		}
		if($("#stu_address").val() == "") {
			output = false;
			$("#stu_address-error").html("Required");
		}
		if($("#district").val() == null) {
			output = false;
			$("#district-error").html("Required");
		}
		if($("#dsa_id").val() == null) {
			output = false;
			$("#dsa_id-error").html("Required");
		}
		if($("#stu_mobile").val() == "") {
			output = false;
			$("#stu_mobile-error").html("Required");
		}
		if($("#stu_email").val() == "") {
			output = false;
			$("#stu_email-error").html("Required");
		}
	}
	*/
	/*if($("#deducational-field").css('display') != 'none') {

		if($("#d_clg_id").val() == null) {
			output = false;
			$("#d_clg_id-error").html("Required");
		}
		if($("#d_cos_id").val() == null) {
			output = false;
			$("#d_cos_id-error").html("Required");
		}
		if($("#medium").val() == null) {
			output = false;
			$("#medium-error").html("Required");
		}
		if($("#effective_date").val() == "") {
			output = false;
			$("#effective_date-error").html("Required");
		}
		
	}*/
	/*if($("#dprofessional-field").css('display') != 'none') {

		if($("#job_availability").val() == null) {
			output = false;
			$("#job_availability-error").html("Required");
		}
		if($("#it_skill").val() == null) {
			output = false;
			$("#it_skill-error").html("Required");
		}
		
		//job sector enable true
		if($('#job_sector').is(':disabled') == false && $("#job_sector").val() == null) {
			output = false;
			$("#job_sector-error").html("Required");
		}
		//it skill details enabled true
		if($('#it_skill_detail').is(':disabled') == false && $("#it_skill_detail").val() == "") {
			output = false;
			$("#it_skill_detail-error").html("Required");
		}
	}*/
	return output;
}
$(document).ready(function() {
	//for graduates
	$("#next").click(function(){
		var output = gvalidate();
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
				if($(".highlight").attr("id") == "gcaptcha") {
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
			if($(".highlight").attr("id") == "gpersonal") {
				$("#back").hide();			
			}
		}
	});

	//for diplomas
	$("#dnext").click(function(){
		var output = dvalidate();
		if(output) {
			var current = $(".highlight");
			var next = $(".highlight").next("li");
			if(next.length>0) {
				$("#"+current.attr("id")+"-field").hide();
				$("#"+next.attr("id")+"-field").show();
				$("#dback").show();
				$("#dfinish").hide();
				$(".highlight").removeClass("highlight");
				next.addClass("highlight");
				if($(".highlight").attr("id") == "dcaptcha") {
					$("#dnext").hide();
					$("#dfinish").show();				
				}
			}
		}
	});
	$("#dback").click(function(){ 
		var current = $(".highlight");
		var prev = $(".highlight").prev("li");
		if(prev.length>0) {
			$("#"+current.attr("id")+"-field").hide();
			$("#"+prev.attr("id")+"-field").show();
			$("#dnext").show();
			$("#dfinish").hide();
			$(".highlight").removeClass("highlight");
			prev.addClass("highlight");
			if($(".highlight").attr("id") == "dpersonal") {
				$("#dback").hide();			
			}
		}
	});
		
	

});