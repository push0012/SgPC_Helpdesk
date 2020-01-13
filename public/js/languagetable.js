$(document).ready(function() {
var s = $('#languageTable').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false,
    select: true
});


    s.row.add( [
        '<input type=\"text\" class=\"hiddninput\" id=\"language_name\" name=\"language_name\" value=\"Sinhala\" disabled/>',
        '<select class=\"form-control\" name=\"writting\" id=\"writting\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"reading\" id=\"reading\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"speech\" id=\"speech\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        
    ] ).draw( false );
    s.row.add( [
        '<input type=\"text\" class=\"hiddninput\" id=\"language_name\" name=\"language_name\" value=\"Tamil\" disabled/>',
        '<select class=\"form-control\" name=\"writting\" id=\"writting\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"reading\" id=\"reading\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"speech\" id=\"speech\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        
    ] ).draw( false );
    s.row.add( [
        '<input type=\"text\" class=\"hiddninput\" id=\"language_name\" name=\"language_name\" value=\"English\" disabled/>',
        '<select class=\"form-control\" name=\"writting\" id=\"writting\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"reading\" id=\"reading\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"speech\" id=\"speech\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        
    ] ).draw( false );

$('#addLanguage').on( 'click', function () {
    s.row.add( [
        '<input type=\"text\" id=\"language_name\" name=\"language_name\" size=\"10\" required/>',
        '<select class=\"form-control\" name=\"writting\" id=\"writting\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"reading\" id=\"reading\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"speech\" id=\"speech\">'+
            '<option value=\"A\" >Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\" selected>Weak</option>'+
        '</select>',
        
    ] ).draw( false );
} );

//Course_Subject Table
//select specific rows when click on row
$('#languageTable tbody').on( 'click', 'tr:not(:first-child):not(:nth-child(2)):not(:nth-child(3))', function () {
    if ( $(this).hasClass('selected') ) {
        $(this).removeClass('selected');
    }
    else {
        s.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
    }
} ); 
//remove selected row when click on remove button
$('#removeLanguage').click( function () {
    s.row('.selected').remove().draw( false );
} );



//add course Speciality things within DataTable
    var h = $('#courseTable').DataTable({
        paging: false,
        searching: false,
        ordering:  false,
        info: false,
        select: true
    });

    $('#addSPC').on( 'click', function () {
        h.row.add( [
            '<input type=\"text\" id=\"spc_name\" name=\"spc_name\" size=\"70\" required/>',
            '<input type=\"text\" id=\"cos_duration\" name=\"cos_duration\" size=\"10\" required/>',
        ] ).draw( false );
    } );
    
    //draw First row
    $('#addSPC').click();
    //Course_Subject Table
    //select specific rows when click on row
    $('#courseTable tbody').on( 'click', 'tr', function () {
        if ( $(this).hasClass('selected') ) {
            $(this).removeClass('selected');
        }
        else {
            h.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    } );
    //remove selected row when click on remove button
    $('#removeSPC').click( function () {
        h.row('.selected').remove().draw( false );
    } );

    //college list table
    var l = $('#collegelistTable').DataTable();
    var r = $('#mytable').DataTable();
    var j = $('#userlistTable').DataTable();
     var e = $('#studentlistTable').DataTable(
        /*{
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        } */
     );
     
    //course list table
    var q = $('#courseslistTable').DataTable();

    //speciality list table
    var x = $('#specialitylistTable').DataTable();

    //program list table
    var b = $('#programlistTable').DataTable();

    //for graduation detail form
	$('#show_clg_id').change(function(e) {
        var clgid = $(this).val();
        console.log(clgid)
		$.ajax({
			type: "GET",
			url: '/ajax/get_all/' + clgid,
			success: function( msg ) {
                console.log(msg)
                $('#show_cos_id :gt(0)').remove();
                b.rows().remove();
				$.each(msg, function(value,key) {  
					$("#show_cos_id").append($("<option>").attr("value", key.cos_id).text(key.cos_title));
                });
                
			}
		});
    });
    $('#show_cos_id').change(function(e) {
		
            var postData = {
                'cos_id' :$(this).val(),
                'clg_id' :$("#show_clg_id").val()
            }
			$.ajax({
				type: "GET",
				url: '/ajax/speciality_by/',
				data: postData,
				success: function( msg ) {
                    b.rows().remove();
					$.each(msg, function(value,key) { 
                        b.row.add( [
                            key.spc_name,
                            key.cos_type,
                            key.cos_duration,
                            '<a href=\"collegecourse/'+ key.spc_id +'/'+$("#show_cos_id").val() +'/'+$("#show_clg_id").val()+'/edit\"><i class=\"fas fa-edit\"></a></i>'
                        ] ).draw( false );
					});
				}
			});
		
	    });
});