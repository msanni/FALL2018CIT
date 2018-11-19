<?php

include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
    <h1>Latest News from <?php echo $title;?> </h1>
  </div>
  
   <?php
		echo $feed_data; 
  
  ?>
 
  
  
  
  
  
</div>
<?php include('views/elements/footer.php');?>
