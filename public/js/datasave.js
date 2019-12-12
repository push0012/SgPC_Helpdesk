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

    //Store Colleges
    $("#clg_store").click(function(){
        var output = form_validate();
        if(output){
            var savedata = {
                'clg_name': $('#clg_name').val(),
                'clg_type': $('#clg_type').val(),
                'clg_address': $('#clg_address').val(),
                'clg_telephone': $('#clg_telephone').val(),
                'clg_email': $('#clg_email').val(),
                'clg_website': $('#clg_website').val(),
            }
            $.ajax({
                type: "POST",
                url: '/college',
                data: savedata,
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success','/college' );
                    setTimeout(function(){
                        window.location = '/college';
                    },4000); 
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
                    window.location = '/college';
                }
            });
        }
    });

    //store Courses
    $("#cos_store").click(function(){
        var output = form_validate();
        console.log(output);
        if(output){
        var posts = []; 
        $('#courseTable > tbody  > tr').each(function() {
            var postData = {
                'spc_name':$(this).find('#spc_name').val(),
                'cos_duration':$(this).find('#cos_duration').val(),
            };
            posts.push(postData);
        });
        
            var savedata = {
                'clg_id': $('#e_clg_id').val(),
                'cos_id': $('#cos_id').val(),
                'speciality': posts,
            }
            $.ajax({
                type: "POST",
                url: '/collegecourse',
                data: savedata,
                success: function( msg ) {
                    /*callNotification('fas fa-check-circle','Information','Data Save Successfully','success','/college' );
                    setTimeout(function(){
                        window.location = '/collegecourse';
                    },4000);*/
                    console.log(msg);
                },
                error: function(msg) {
                    console.log(msg);
                    //callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
                   // window.location = '/collegecourse';
                }
            });
        }
    });

    //graduation approve
    $("#g_reg_app").click(function(){
        var savedata = {
            'stu_id': $('#stu_id').val(),
            'clg_id': $('#clg_id').val(),
            'cos_id': $('#cos_id').val(),
            'spc_id': $('#spc_id').val(),
            'degree_reg_no': $('#g_reg_no').val(),
        }
        console.log(savedata);
        $.ajax({
            type: "POST",
            url: '/approving',
            data: savedata,
            success: function( msg ) {
                /*callNotification('fas fa-check-circle','Information','Data Save Successfully','success','/college' );
                setTimeout(function(){
                    window.location = '/collegecourse';
                },4000);*/
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                //callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
               // window.location = '/collegecourse';
            }
        });
    });

    //graduation reject
    $("#g_reg_rej").click(function(){
        var savedata = {
            'stu_id': $('#stu_id').val(),
            'clg_id': $('#clg_id').val(),
            'cos_id': $('#cos_id').val(),
            'spc_id': $('#spc_id').val(),
        }
        console.log(savedata);
        $.ajax({
            type: "POST",
            url: '/rejecting',
            data: savedata,
            success: function( msg ) {
                /*callNotification('fas fa-check-circle','Information','Data Save Successfully','success','/college' );
                setTimeout(function(){
                    window.location = '/collegecourse';
                },4000);*/
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                //callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
               // window.location = '/collegecourse';
            }
        });
    });
    
});