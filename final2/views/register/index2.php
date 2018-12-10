
<?php include('views/elements/header.php');?>


<div class="container">
	<div class="page-header">

   <h1> the Add User View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>register/<?php echo $task?>" method="post" onsubmit="editor.post()" id="new_user">
          <div>
						<label>First Name</label>
	          <input type="text" class="span6" id="post_fname" name="post_fname" value="<?php echo $fname?>">
					</div>
					<br clear="all" />
					<div id="firstNameError" class="error"></div>
					<br />
					<div>
					<label>Last Name</label>
          <input type="text" class="span6" id="post_lname" name="post_lname" value="<?php echo $lname?>">
					</div>
					<br clear="all" />
					<div id="lastNameError" class="error"></div>
					<br />
					<div>
					<label>Email</label>
          <input type="text" class="span6" id="post_email" name="post_email" value="<?php echo $email?>">
					</div>
					<br clear="all" />
					<div id="emailError" class="error"></div>
					<br />
					<label>Password</label>
          <input type="text" class="span6" id="post_password" name="post_password" value="<?php echo $password?>">
					</div>
					<br clear="all" />
					<div id="passwordError" class="error"></div>
					<br />
					<br/>
          <input type="hidden" name="uID" value="<?php echo $uID?>"/>
					<div>
          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>
				</div>

        </form>

				<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
				<script src='http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>
				<script type="text/javascript">$("#new_post").validate();</script>
			<script>
			$("#new_user").submit( function(event) {
					//alert("Form Submitted!");

					var formSubmissionOK = true;

					if ( ! $("#post_fname").val() ) {
						/*! = true becomes false
				and false becomes true or !isValid() // is not vailid */
						formSubmissionOK = false;
						$("#firstNameError").text("Please provide a first name.");
						$("#firstNameError").show();
					}

					if ( ! $("#post_lname").val() ) {
						formSubmissionOK = false;
						 $("#lastNameError").text("Please provide a last name.");
						$("#lastNameError").show();
					}

					if ( ! $("#post_email").val() ) {
						formSubmissionOK = false;
						 $("#emailError").text("Please provide an email.");
						$("#emailError").show();
					}
					if ( ! $("#post_password").val() ) {
						formSubmissionOK = false;
						 $("#passwordError").text("Please provide an password.");
						$("#passwordError").show();
					}

				 if (formSubmissionOK == false) {
					event.preventDefault();
				}

				});

			 </script>

      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
