﻿<?php require_once('../../../Connections/mctarant_assignment_2012.php'); ?>
<?php 
	if(isset($_GET['pageID']))
	  {
		$pageID = $_GET['pageID'];
		
		mysql_select_db($database_mctarant_assignment_2012, $mctarant_assignment_2012);
	
		$query_rsPages = "SELECT * FROM pages, images WHERE pageID = '$pageID' AND pages.imageID = images.imageID"; 
		 
		$rsPages = mysql_query($query_rsPages, $mctarant_assignment_2012) or die("An error has occurred. Please contact the webmaster. Thank you."); 
		
		$row_rsPages = mysql_fetch_assoc($rsPages);
	  }
?>
<?php include("includes/headerHTML.incl.php");?>
<article id="fullsize">
<div class="heading">
<h1><?php echo $row_rsPages['pageTitle'];?></h1>
</div>
<div class="content">
<div>
<img src="./images/large/<?php echo $row_rsPages['imageFile'];?>" width="300px" />
<p><?php echo stripslashes(nl2br($row_rsPages['pageText']));?></p>
</div>
</div>
</article>
</div>
<div class="clear"></div>
</section>
<?php include("includes/simpleFooterHTML.incl.php");?>