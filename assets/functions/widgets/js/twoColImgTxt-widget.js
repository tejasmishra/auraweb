jQuery(document).ready(function() {
 
	jQuery('#widget-twocolimgtxt-2-upload_image').click(function() {
		 formfield = jQuery('#widget-twocolimgtxt-2-upload_image').attr('name');
		 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		 return false;
	});
	 
	window.send_to_editor = function(html) {
		 imgurl = jQuery('img',html).attr('src');
		 jQuery('#widget-twocolimgtxt-2-upload_image').val(imgurl);
		 tb_remove();
	}
 
});