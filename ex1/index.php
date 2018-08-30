<?php
	include '_includes/config.php';

 	include ABSOLUTE_PATH .'/_includes/header.inc.php';

	include ABSOLUTE_PATH .'/_includes/main_nav.inc.php';
?>

<?php
$preferences = array (
  "name" => "Machioud Sanni",
  "favorite color" => "olive",
  "favorite movie" => "avengers",
  "favorite book" => "The subtle art of not giving a f",
  "favorite website" => "YouTube"
	);
?>


<h1> My name is <?php echo $preferences ["name"] ?> </h1>

<?php
for ($i = 0; $i < 1; ++$i) {
echo '<ul>';
      echo '<li>' .$preferences["favorite color"]. '<li>',
            '<li>' .$preferences["favorite movie"]. '<li>',
            '<li>' .$preferences["favorite book"].  '<li>',
            '<li>' .$preferences["favorite website"]. '<li>';
echo '</ul>';

if($preferences == "name"){
  print null;
  }
}
 ?>


<?php
	 	include ABSOLUTE_PATH .'/_includes/footer.inc.php';
?>
