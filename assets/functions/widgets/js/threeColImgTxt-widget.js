jQuery(document).ready(function() {
 
	jQuery('#widget-threecolimgtxt-2-upload_image1').click(function() {
		 formfield = jQuery('#widget-threecolimgtxt-2-upload_image1').attr('name');
		 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
		 return false;
	});
	 
	window.send_to_editor = function(html) {
		 imgurl = jQuery('img',html).attr('src');
		 jQuery('#widget-threecolimgtxt-2-upload_image1').val(imgurl);
		 tb_remove();
	}

	 
});