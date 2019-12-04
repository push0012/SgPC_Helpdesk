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
	if($("#gprofessional-field").css('display') != 'none') {

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
	}
	return output;
}
$(document).ready(function() {
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

	$('#district').change(function(){
		console.log($(this).val() )
	})
		
	

});