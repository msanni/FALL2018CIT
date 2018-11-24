
<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
      <?php echo $message?>
    </div>
  <?php }?>

<h1><?php echo $title;?></h1>
  </div>

	<?php foreach($users as $s){?>
    <h3><a href="<?php echo BASE_URL?>members/users/<?php echo $s['uID'];?>" title="<?php echo $s['first_name'];?> <?php echo $s['last_name'];?>"><?php echo $s['email'];?></a></h3>
    <p><?php echo $s['first_name'];?> <?php echo $s['last_name'];?></p>
    <p><a href="mailto:<?php echo $s['email'];?>"><?php echo $s['email'];?></a></p>
    <p><?php
    if($u->isActive($uID)) {
    ?>
    <a href="<?php echo BASE_URL;?>manageusers/edit/<?php echo $pID?>" class="btn btn-primary">Edit</a>

    <?php
    }
    else { ?>
    <a href="<?php echo BASE_URL;?>manageusers/delete/<?php echo $pID?>" class="btn btn-primary">Delete</a>
    <?php
    }
    ?>

    </p>


<?php }?>

</div>

<?php include('views/elements/footer.php');?>
