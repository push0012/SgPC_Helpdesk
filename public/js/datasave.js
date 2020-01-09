//Graduate Data Store
//$("#finish").click(function(){
function degree_save(){
        //console.log($( '#certificate_image' )[0].files[0])
        var savedata = new FormData();
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
        
            savedata.append('title' , $('#title').val());
            savedata.append('stu_name',$('#stu_name').val());
            savedata.append('sex' , $('#sex').val());
            savedata.append('dob',$('#dob').val());
            savedata.append('nic' , $('#nic').val());
            savedata.append('stu_address',$('#stu_address').val());
            savedata.append('district' , $('#district').val());
            savedata.append('dsa_id',$('#dsa_id').val());
            savedata.append('stu_mobile' , $('#stu_mobile').val());
            savedata.append('stu_telephone',$('#stu_telephone').val());
            savedata.append('stu_email' , $('#stu_email').val());

            savedata.append('clg_id',$('#clg_id').val());
            savedata.append('new_clg',$('#new_clg').val());
            savedata.append('cos_id' , $('#cos_id').val());
            savedata.append('new_cos',$('#new_cos').val());
            savedata.append('spc_id',$('#spc_id').val());
            savedata.append('speciality_in_word',$('#speciality_in_word').val());
            savedata.append('medium' , $('#medium').val());
            savedata.append('degree_class',$('#degree_class').val());
            savedata.append('effective_date',$('#effective_date').val());
            savedata.append('other_details' , $('#other_details').val());

            savedata.append('job_availability',$('#job_availability').val());
            savedata.append('job_sector',$('#job_sector').val());
            savedata.append('job_preference' , $('#job_preference').val());
            savedata.append('language' , JSON.stringify(posts));
            savedata.append('it_skill',$('#it_skill').val());
            savedata.append('it_skill_detail',$('#it_skill_detail').val());
            savedata.append('extra_activity' , $('#extra_activity').val());
    
        
        //savedata.append('certificate_image' , $( '' )[0].files[0]);
        $.each($('input[type=file]')[0].files, function(i, value){
            savedata.append('certificate_image['+i+']', value); // change this to value
        });
        $.ajax({
            type: "POST",
            url: '/resource/application/graduate/register',
            data: savedata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            success: function( msg ) {
                console.log(msg)
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/confirm/?ref=' + msg.ref+'&date='+msg.date;
                },2500);
            },
            error: function(msg) {
                console.log(msg)
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/failure';
                },2500);
            }
        });
    }


    //Diploma Data Store
 //   $("#dfinish").click(function(){
function diploma_save(){
        var savedata = new FormData();
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
            savedata.append('title' , $('#title').val());
            savedata.append('stu_name',$('#stu_name').val());
            savedata.append('sex' , $('#sex').val());
            savedata.append('dob',$('#dob').val());
            savedata.append('nic' , $('#nic').val());
            savedata.append('stu_address',$('#stu_address').val());
            savedata.append('district' , $('#district').val());
            savedata.append('dsa_id',$('#dsa_id').val());
            savedata.append('stu_mobile' , $('#stu_mobile').val());
            savedata.append('stu_telephone',$('#stu_telephone').val());
            savedata.append('stu_email' , $('#stu_email').val());

            savedata.append('clg_id',$('#clg_id').val());
            savedata.append('new_clg',$('#new_clg').val());
            savedata.append('cos_id' , $('#cos_id').val());
            savedata.append('speciality_in_word',$('#speciality_in_word').val());
            savedata.append('medium' , $('#medium').val());
            savedata.append('effective_date',$('#effective_date').val());
            savedata.append('other_details' , $('#other_details').val());

            savedata.append('job_availability',$('#job_availability').val());
            savedata.append('job_sector',$('#job_sector').val());
            savedata.append('job_preference' , $('#job_preference').val());
            savedata.append('language' , JSON.stringify(posts));
            savedata.append('it_skill',$('#it_skill').val());
            savedata.append('it_skill_detail',$('#it_skill_detail').val());
            savedata.append('extra_activity' , $('#extra_activity').val());

            $.each($('input[type=file]')[0].files, function(i, value){
                savedata.append('certificate_image['+i+']', value); // change this to value
            });
        $.ajax({
            type: "POST",
            url: '/resource/application/diploma/register',
            data: savedata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/confirm/?ref=' + msg.ref+'&date='+msg.date;
                },2500); 
            },
            error: function(msg) {
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/failure';
                },2500); 
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
                'clg_address': $('#clg_address').val(),
                'clg_telephone': $('#clg_telephone').val(),
                'clg_email': $('#clg_email').val(),
                'clg_website': $('#clg_website').val(),
            }
            $.ajax({
                type: "POST",
                url: '/admin/masterdata/college',
                data: savedata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },2500); 
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },2500); 
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
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: savedata,
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },2500); 
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    console.log(msg);
                    setTimeout(function(){
                        window.location = '/admin/masterdata/college';
                    },2500); 
                }
            });
        }
    });

    //store course Titles
    $("#cos_title_store").click(function(){
        /*var output = form_validate();
        if(output){*/
            var savedata = {
                'cos_title': $('#cos_title').val(),
                'cos_type': $('#cos_type').val(),
            }
            $.ajax({
                type: "POST",
                url: '/admin/masterdata/course',
                data: savedata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    setTimeout(function(){
                        window.location = '/admin/masterdata/course';
                    },2500);
                    
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    setTimeout(function(){
                        window.location = '/admin/masterdata/course';
                    },2500);
                }
            });
        //}
    });
    //Edit course Titles
    $("#cos_title_edit").click(function(){
        /*var output = form_validate();
        if(output){*/
            var savedata = {
                'cos_title': $('#cos_title').val(),
                'cos_type': $('#cos_type').val(),
            }
            $.ajax({
                type: "PUT",
                url: '/admin/masterdata/course/'+ $('#cos_id').val(),
                data: savedata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    setTimeout(function(){
                        window.location = '/admin/masterdata/course';
                    },2500);

                    
                },
                error: function(msg) {
                    console.log(msg)
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    setTimeout(function(){
                    window.location = '/admin/masterdata/course';
                    },2500);
                }
            });
        //}
    });


    //store Courses
    $("#cos_store").click(function(){
        //var output = form_validate();
        //console.log(output);
        //if(output){
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
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    setTimeout(function(){
                        window.location = '/admin/masterdata/collegecourse';
                    },2500);
                    
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    setTimeout(function(){
                        window.location = '/admin/masterdata/collegecourse';
                    },2500);
                }
            });
        //}
    });

    //Edit Courses
    $("#program_edit").click(function(){
            var savedata = {
                'clg_id': $('#clg_id').val(),
                'cos_id': $('#cos_id').val(),
                'spc_id': $('#spc_id').val(),
                'cos_duration': $('#cos_duration').val(),
                'cos_coor_name': $('#cos_coor_name').val(),
                'cos_coor_mobile': $('#cos_coor_mobile').val(),
            }
            $.ajax({
                type: "PUT",
                url: '/admin/masterdata/collegecourse/'+ $('#spc_id').val(),
                data: savedata,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function( msg ) {
                    callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                    setTimeout(function(){
                        window.location = '/admin/masterdata/collegecourse';
                    },2500);
                },
                error: function(msg) {
                    callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                    setTimeout(function(){
                        window.location = '/admin/masterdata/collegecourse';
                    },2500);
                }
            });
        //}
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
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },2500);
                //console.log(msg);
            },
            error: function(msg) {
                //console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },2500);
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
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success');
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },2500);
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/degree/';
                },2500);
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
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },2500);
                //console.log(msg)
                
            },
            error: function(msg) {
                //console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','danger' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },2500);
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
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function( msg ) {
                callNotification('fas fa-check-circle','Information','Data Save Successfully','success' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },2500);
                console.log(msg);
            },
            error: function(msg) {
                console.log(msg);
                callNotification('fas fa-exclamation-triangle','Error','Data Saving Unsuccessfully','error' );
                setTimeout(function(){
                    window.location = '/admin/pending/diploma/';
                },2500);
                console.log(msg);
            }
        });
    });
    
});