$(document).ready(function() {
    //Graduate Data Store
    $("#finish").click(function(){
        var posts = []; 
        $('#languageTable > tbody  > tr').each(function() {
            var postData = {
                'language_name':$(this).find('#language_name').val(),
                'write_skill':$(this).find('#writting').val(),
                'read_skill':$(this).find('#reading').val(),
                'speech_skill' :$(this).find('#speech').val()
            };
            posts.push(postData);
        });
        var savedata = {
            'title' : $('#title').val(),
            'stu_name':$('#stu_name').val(),
            'sex' : $('#sex').val(),
            'dob':$('#dob').val(),
            'nic' : $('#nic').val(),
            'stu_address':$('#stu_address').val(),
            'district' : $('#district').val(),
            'dsa_id':$('#dsa_id').val(),
            'stu_mobile' : $('#stu_mobile').val(),
            'stu_telephone':$('#stu_telephone').val(),
            'stu_email' : $('#stu_email').val(),

            'clg_id':$('#clg_id').val(),
            'cos_id' : $('#cos_id').val(),
            'spc_id':$('#spc_id').val(),
            'speciality_in_word':$('#speciality_in_word').val(),
            'medium' : $('#medium').val(),
            'degree_class':$('#degree_class').val(),
            'effective_date':$('#effective_date').val(),
            'other_details' : $('#other_details').val(),

            'job_availability':$('#job_availability').val(),
            'job_sector':$('#job_sector').val(),
            'job_preference' : $('#job_preference').val(),
            'language' : posts,
            'it_skill':$('#it_skill').val(),
            'it_skill_detail':$('#it_skill_detail').val(),
            'extra_activity' : $('#extra_activity').val(),
        }
        $.ajax({
            type: "POST",
            url: '/graduate_register',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
            },
            error: function(msg) {
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
            }
        });
    });

    //Diploma Data Store
    $("#dfinish").click(function(){
        var posts = []; 
        $('#languageTable > tbody  > tr').each(function() {
            var postData = {
                'language_name':$(this).find('#language_name').val(),
                'write_skill':$(this).find('#writting').val(),
                'read_skill':$(this).find('#reading').val(),
                'speech_skill' :$(this).find('#speech').val()
            };
            posts.push(postData);
        });
        var savedata = {
            'title' : $('#title').val(),
            'stu_name':$('#stu_name').val(),
            'sex' : $('#sex').val(),
            'dob':$('#dob').val(),
            'nic' : $('#nic').val(),
            'stu_address':$('#stu_address').val(),
            'district' : $('#district').val(),
            'dsa_id':$('#dsa_id').val(),
            'stu_mobile' : $('#stu_mobile').val(),
            'stu_telephone':$('#stu_telephone').val(),
            'stu_email' : $('#stu_email').val(),

            'clg_id':$('#d_clg_id').val(),
            'cos_id' : $('#d_cos_id').val(),
            'speciality_in_word':$('#speciality_in_word').val(),
            'medium' : $('#medium').val(),
            'effective_date':$('#effective_date').val(),
            'other_details' : $('#other_details').val(),

            'job_availability':$('#job_availability').val(),
            'job_sector':$('#job_sector').val(),
            'job_preference' : $('#job_preference').val(),
            'language' : posts,
            'it_skill':$('#it_skill').val(),
            'it_skill_detail':$('#it_skill_detail').val(),
            'extra_activity' : $('#extra_activity').val(),
        }
        $.ajax({
            type: "POST",
            url: '/diploma_register',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
            },
            error: function(msg) {
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
            }
        });
    });
});