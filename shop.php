<?php require_once("../resources/config.php");?>

<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Shop</h1>

        </header>

        <hr>

        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

          <?php get_products(); ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
