function callNotification($icon, $title, $message,$type) {

$.notify({
    // options
    icon: $icon,
    title: $title,
    message:  $message,
},{
    // settings
    type: $type,
    allow_dismiss: true,
    placement: {
        from: "bottom",
        align: "right"
    },
    z_index: 1031,
    delay: 3000,
    timer: 1000,
    animate: {
        enter: 'animated fadeIn',
        exit: 'animated fadeOut'
    },
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
        '<h6 data-notify="title"><span data-notify="icon"></span> {1}</h6> ' +
        '<span data-notify="message">{2}</span>' +
    '</div>' 
});
}

//open large image box
$( document ).ready(function() {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        console.log("hell")
        event.preventDefault();
        $(this).ekkoLightbox({
            
            showArrows: true,
        });
    });   
});