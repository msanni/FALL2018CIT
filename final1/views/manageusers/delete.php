<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Delete User</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageusers/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>

          <button id="submit" type="submit" class="btn btn-primary" >Delete</button>
        </form>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
