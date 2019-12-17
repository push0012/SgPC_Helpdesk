//Graduate Data Store
//$("#finish").click(function(){
function degree_save(){
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
            'new_cos':$('#new_cos').val(),
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
            url: '/application/graduate/register',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/confirm/?ref=' + msg.ref+'&date='+msg.date;
                },4000); 
            },
            error: function(msg) {
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/failure';
                },4000); 
            }
        });
    }


    //Diploma Data Store
 //   $("#dfinish").click(function(){
function diploma_save(){
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
            url: '/application/diploma/register',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/confirm';
                },4000); 
            },
            error: function(msg) {
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/failure';
                },4000); 
            }
        });
}

$(document).ready(function() {
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
                url: '/admin/masterdata/college',
                data: savedata,
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },4000); 
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },4000); 
                }
            });
        }
    });
    //update college
    $("#clg_edit").click(function(){
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
                type: "PUT",
                url: '/admin/masterdata/college/'+ $('#clg_id').val(),
                data: savedata,
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },4000); 
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },4000); 
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
                url: '/admin/masterdata/collegecourse',
                data: savedata,
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    /*setTimeout(function(){
                        window.location = '/admin/masterdata//collegecourse';
                    },4000);*/
                    
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    window.location = '/collegecourse';
                }
            });
        }
    });

    //graduation approve
    $("#g_reg_app").click(function(){
        var savedata = {
            'stu_id': $('#stu_id').val(),
            'stu_mobile': $('#stu_mobile').val(),
            'stu_email': $('#stu_email').val(),
            'reg_date': $('#reg_date').text(),
            'clg_id': $('#clg_id').val(),
            'cos_id': $('#cos_id').val(),
            'spc_id': $('#spc_id').val(),
            'degree_reg_no': $('#g_reg_no').val(),
        }
        console.log(savedata);
        $.ajax({
            type: "POST",
            url: '/admin/pending/degree/approving',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },4000);
                //console.log(msg);
            },
            error: function(msg) {
                //console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },4000);
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
            url: '/admin/pending/degree/rejecting',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },4000);
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },4000);
                console.log(msg);
            }
        });
    });

    //diploma approve
    $("#d_reg_app").click(function(){
        var savedata = {
            'stu_id': $('#stu_id').val(),
            'stu_mobile': $('#stu_mobile').val(),
            'stu_email': $('#stu_email').val(),
            'reg_date': $('#reg_date').text(),
            'clg_id': $('#clg_id').val(),
            'cos_id': $('#cos_id').val(),
            'diploma_reg_no': $('#d_reg_no').val(),
        }
        console.log(savedata);
        $.ajax({
            type: "POST",
            url: '/admin/pending/diploma/approving',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },4000);
                //console.log(msg)
                
            },
            error: function(msg) {
                //console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },4000);
            }
        });
    });

    //diploma Reject
    $("#d_reg_rej").click(function(){
        var savedata = {
            'stu_id': $('#stu_id').val(),
            'clg_id': $('#clg_id').val(),
            'cos_id': $('#cos_id').val(),
        }
        console.log(savedata);
        $.ajax({
            type: "POST",
            url: '/admin/pending/diploma/rejecting',
            data: savedata,
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },4000);
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },4000);
                console.log(msg);
            }
        });
    });
    
});