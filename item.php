<?php require_once("../resources/config.php");?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>



    <!-- Page Content -->
<div class="container">

       <!-- Side Navigation -->
       <?php include(TEMPLATE_FRONT . DS . "side_nav.php"); ?>

<?php
$query = query("SELECT * FROM products WHERE product_id=" . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)):






 ?>
<div class="col-md-9">

<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">
       <img class="img-responsive" src="<?php echo $row['product_image'];?>" alt="">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">


    <div class="caption-full">
        <h4><a href=""><?php echo $row['product_title'];?></a> </h4>
        <hr>
        <h4><?php echo $row['product_price'];?></h4>


        <p><?php echo $row['short_desc'];?></p>


    <form action="">
        <div class="form-group">
            <a href="cart.php?add=<?php echo $row['product_id'];?>" type="submit" class="btn btn-primary" target="checkout.php">add to cart</a>
        </div>
    </form>

    </div>

</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

<p></p>
<p><?php echo $row['product_description'];?></p>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">





 </div>

 </div>

</div>


</div><!--Row for Tab Panel-->




</div> <!---col-md-9 ends here-->

<?php endwhile; ?>



</div>

    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
