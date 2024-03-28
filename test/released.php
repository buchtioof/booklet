<?php
	// Connect to database
	$con = mysqli_connect("localhost","root","","spotihess");
	// Get all the courses from courses table
	// execute the query
	// Store the result
	$sql = "SELECT * FROM `songs` order by `released` desc";
	$dbquery = mysqli_query($con,$sql);
	$dbfetch = mysqli_fetch_all($dbquery,MYSQLI_ASSOC);
?>

<?php
  // Use foreach to access all the courses data
  foreach ($dbfetch as $database) { ?>
    <div class="songbox">
      <img src="<?php echo $database['img']; ?>" style="width:50%">
      <h2><?php echo $database['name']; ?></h2>
      <p><?php echo $database['artist']; ?></p>
      <?php
        if($database['status']=="1")
          // if a course is active i.e. status is 1
          // the toggle button must be able to deactivate
          // we echo the hyperlink to the page "deactivate.php"
          // in order to make it look like a button
          // we use the appropriate css
          // red-deactivate
          // green- activate
          echo "<a href=deactivate.php?id=".$database['id']." class='btn red'>Retirer de vos favoris</a>";
        else
          echo "<a href=activate.php?id=".$database['id']." class='btn green'>Ajouter dans vos favoris</a>";
      ?>
      <button id="button">Lecture</button>
    </div>
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
