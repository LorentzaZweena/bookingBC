<!DOCTYPE html>
<html lang="en">
<?php  
  include_once("../config.php");
  session_start();
?>

  <?php 
  include_once($rootURL."/layout/header.php");
  ?>
    <body>
    <div class="page">
    <?php include_once($rootURL."/layout/navbar.php"); ?>
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center">
           <h1>Checkout</h1>
          </div>
        </div>
        <?php include_once($rootURL."/layout/footer.php"); ?>
        </div>
    </body>
</html>