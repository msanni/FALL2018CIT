<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myClass($class) {
  include_once('classes/'.$class.'.class.php');
}

spl_autoload_register('myClass');

$testAdd = user::addNum(4,5);


?>


<html >
<head>
  <meta charset="UTF-8">
  <title>Excerise 3</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
<p>Before You Fill Out This Form, Let's Do Some Math!: <?php echo $testAdd; ?></p>

  <form method="post" id="registerForm" action="results.php">
    <div>


      <div>
      <label for="name">First Name:  </label>
      <input type="text" id="firstName" name="firstName" maxlength="20"  />
  </div>
  <br />
  <br />
  <div>
      <label for="name">Last Name: </label>
      <input type="text" id="lastName"  name="lastName" maxlength="20"  />
  </div>
  <br />
  <br />
  <div>
      <label for="name">Email: </label>
      <input type="text" id="email"  name="email" maxlength="20"  />
  </div>
  <br />
  <br />

    <input class="submit" id="submit" type="submit" value="Register" />
  </form>




</body>
</html>
