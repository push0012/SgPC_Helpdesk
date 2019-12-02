$(document).ready(function() {
var s = $('#languageTable').DataTable({
    paging: false,
    searching: false,
    ordering:  false,
    info: false,
    select: true
});


    s.row.add( [
        '<lable id=\"language_name\" name=\"language_name\" value=\"Sinhala\">Sinhala</lable>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        
    ] ).draw( false );
    s.row.add( [
        '<lable id=\"language_name\" name=\"language_name\" value=\"Sinhala\">Tamil</lable>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        
    ] ).draw( false );
    s.row.add( [
        '<lable id=\"language_name\" name=\"language_name\" value=\"Sinhala\">English</lable>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        
    ] ).draw( false );

$('#addLanguage').on( 'click', function () {
    s.row.add( [
        '<input type=\"text\" id=\"language_name\" name=\"language_name\" size=\"10\" required/>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
        '</select>',
        '<select class=\"form-control\" name=\"method\" id=\"method\">'+
            '<option value=\"A\" selected>Very Good</option>'+
            '<option value=\"B\">Good</option>'+
            '<option value=\"C\">Fair</option>'+
            '<option value=\"D\">Weak</option>'+
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

});