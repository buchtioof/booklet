<?php include 'connectDB.php';?>

<?php
	// Use foreach to access all the courses data
	foreach ($dbfetch as $database) { 
?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('#button').click(function(){ 
				if(!$('#iframe').length) {
						$('#iframeHolder').html('<iframe id="iframe" src="<?php echo $database['url']; ?>" width="200" height="150"></iframe>');
				}
			});   
			});
	</script>
<?php } // End the foreach loop ?>