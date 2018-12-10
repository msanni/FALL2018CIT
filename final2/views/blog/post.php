
<?php include('views/elements/header.php');?>

<?php if($message){?>
  <div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <?php echo $message?>
  </div>
<?php }?>

<?php
if( is_array($post) ) {
    extract($post);

}?>



    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>

        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
<br  />
    <p>



      <?php
      if($u->isAdmin()) {
      ?>
      <div class="span8">

      <a href="<?php echo BASE_URL;?>manageposts/edit/<?php echo $pID?>" class="btn btn-primary">Edit</a>
      <a href="<?php echo BASE_URL;?>manageposts/delete/<?php echo $pID?>" class="btn btn-primary">Delete</a>

      <?php
      }
      else {

      }
      ?>

  </p>

     <?php include('views/blog/add.php');?>




  <?php include('views/elements/footer.php');?>
