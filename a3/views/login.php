<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
   <?php echo $numbers ?>

	 <div class="row">
	 		<div class="span8">
	 			<form action="<?php echo BASE_URL?>login/<?php echo $task?>" method="do_login" onsubmit="editor.post()">
	 				<label>User</label>
	 				<input type="text" class="span6" name="username" value="<?php echo $user?>">
	 				<label>Password</label>
	 				<input type="text" class="span6" name="password" value="<?php echo $password?>">
	 				<br/>

	 				<button id="submit" type="submit" class="btn btn-primary" >Submit</button>
	 			</form>

	 		</div>

  </div>
</div>
<?php include('elements/footer.php');?>
