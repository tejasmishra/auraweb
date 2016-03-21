jQuery(document).ready(function($) {

    var custom_uploader; 
    
    $('.upload-img').click(function(e) {
 
        e.preventDefault();
        $(this).parent().addClass('activeImageUpload');

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('.activeImageUpload .upload-img').val(attachment.url);
            $('.activeImageUpload .spanClass img' ).attr( 'src', attachment.url);
            $('.activeImageUpload .spanClass' ).parent().removeClass('activeImageUpload');
        });


 
        //Open the uploader dialog
        custom_uploader.open();
        
    });
  
	// $('#widget-imagewidget-3-upload_image').click(function(e) {
 
 //        e.preventDefault();
 
 //        //If the uploader object has already been created, reopen the dialog
 //        if (custom_uploader) {
 //            custom_uploader.open();
 //            return;
 //        }
 
 //        //Extend the wp.media object
 //        custom_uploader = wp.media.frames.file_frame = wp.media({
 //            title: 'Choose Image',
 //            button: {
 //                text: 'Choose Image'
 //            },
 //            multiple: true
 //        });
 
 //        //When a file is selected, grab the URL and set it as the text field's value
 //        custom_uploader.on('select', function() {
 //            var selection = custom_uploader.state().get('selection');
 //            var i = 0;
 //            selection.map( function( attachment ) {
 //                    i++;
 //                    attach = attachment.toJSON();
 //                    console.log(i + ' ' + attach.url);
 //                    $('#widget-imagewidget-3-upload_image ~ span').val(attach.url);
 //            });

 //            // $('#widget-imagewidget-3-upload_image').val(attachment.url);
 //        });
 
 //        //Open the uploader dialog
 //        custom_uploader.open();
 
 //    });
 
});