<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
	<h4 class="modal-title"><?php echo $title; ?></h4>
</div>
<iframe src="<?php echo base_url('ViewerJS/#../resources/docs/' . $filename) ?>" width="600px" height="600px" allowfullscreen  webkitallowfullscreen class="iframe"></iframe>
<script type="text/javascript">
	$('.iframe').ready(function() {
	   setTimeout(function() {
			$('.iframe').contents().find('.download').remove();
			$('.iframe').contents().find('.about').remove();
	   }, 100);
	});
</script>
					