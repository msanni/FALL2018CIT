<html>
<body>

<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myClass($class) {
  include_once('classes/'.$class.'.class.php');
}

spl_autoload_register('myClass');


  $thisFirstname = $_POST["firstName"];
  $thisLastname = $_POST["lastName"];
  $thisEmail = $_POST["email"];

  $registeredUser = new registeredUser('New User', $thisFirstname);

?>

    <?php echo "The Registered user's first name is: ".$thisFirstname;?><br />

    <?php echo "The Registered user's last name is: ".$thisLastname;?><br />

    <?php echo "The Registered user's last name is: ".$thisEmail;?><br />
<br />
<hr>

  <?php  if(is_object($registeredUser)) {
    echo "Processing Complete";
    }
    else {
      echo "Processing Not Complete";
    }
  ?>
<br />
 <a href="index.php">Go Back</a>

</body>
</html>
