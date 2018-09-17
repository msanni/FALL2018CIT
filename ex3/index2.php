<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
/*
include_once("classes/user.class.php");
include_once("classes/user_type1.class.php");
include_once("classes/user_type2.class.php");
*/
function myClass($class) {
  include_once('classes/'.$class.'.class.php');
}

spl_autoload_register('myClass');

$testAdd = user_type1::addNum(4,5);

$user_type1 = new user_type1('Regular User','jwakolbi');

$user_type2 = new user_type2('Administrator','msanni');

$test="";

$user_type2->first_name= "Machioud";
$user_type2->last_name= "Sanni";
$user_type2->email_address= "msanni@iu.edu";


$user_type1->first_name= "Jennifer";
$user_type1->last_name= "Wakolbinger";
$user_type1->email_address= "jwakolbi@iupui.edu";


function testThis(user_type2 $val){
    Echo "my object is User 2";
  }

$user = new user('user');

?>


<html >
<head>
  <meta charset="UTF-8">
  <title>Excerise 3 - msanni</title>


</head>

<body>
<p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo $testAdd; ?></p>

  <form method="post" action="results.php">
    <div>


      <div>
      <label for="name">First Name:  </label>
      <input type="text" id="firstName" name="firstName" maxlength="20"  />
  </div>
  <br />
  <div>
      <label for="name">Last Name: </label>
      <input type="text" id="lastName"  name="lastName" maxlength="20"  />
  </div>
  <br />
  <div>
      <label for="name">Email: </label>
      <input type="text" id="email"  name="email" maxlength="20"  />
  </div>
  <br />
    <input class="submit" id="submit" type="submit" value="Log In" />
  </form>


 <?php /* echo "User Level: ".$user_type1->user_level; */ ?><br />
<?php /* echo "$user_type1->user_level".": "."$user_type1->user_id"; */ ?><br />
<?php /* echo "$user_type1->user_level"." Type: ". "$user_type1->user_type";  */ ?><br />
<?php /* echo "First Name: "."$user_type1->first_name"; */ ?><br />
<?php /* echo "Last Name: "."$user_type1->last_name"; */   ?><br />
<?php /* echo "Email Address: "."$user_type1->email_address";  */ ?><br />

<hr>

<?php echo "User Level: ".$user_type2->user_level;  ?><br />
<?php echo "$user_type2->user_level".": "."$user_type2->user_id";  ?><br />
<?php echo "$user_type2->user_level"." Type: ". "$user_type2->user_type";   ?><br />
<?php echo "First Name: "."$user_type2->first_name"; ?><br />
<?php echo "Last Name: "."$user_type2->last_name";   ?><br />
<?php echo "Email Address: "."$user_type2->email_address";  ?><br />
<br />


</body>
</html>
