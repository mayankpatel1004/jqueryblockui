<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript" src="jquery.corner.js"></script>
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function() 
{	
	jQuery('#open_block').click(function()
	{
		jQuery(this).corner();
		jQuery.blockUI({ message: jQuery('#close_block'), css: {position: 'absolute', width: 'auto'} }); 
		jQuery('.blockOverlay').attr('title','Click to unblock').click(jQuery.unblockUI);
	});
	jQuery('#open_block2').click(function()
	{
		jQuery(this).corner();
		jQuery.blockUI({ message: jQuery('#close_block2'), css: {position: 'absolute', width: 'auto'} });
		jQuery('.blockOverlay').attr('title','Click to unblock').click(jQuery.unblockUI);
	});
});
</script>

<div id="open_block">Show Content</div>
<div id="close_block" style="display:none;">Test Content 1</div>

<div id="open_block2">Show Content2</div>
<div id="close_block2" style="display:none;">Test Content 2<br />
	<div onclick="jQuery('#open_block').click();">Show Content</div>
</div>