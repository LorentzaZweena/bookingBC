<?php
include_once("../config.php");
session_start();
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $action = mysqli_query($connect, "INSERT INTO categories VALUES(NULL, '$name')");
        if($action){
            header("Location: ".$baseURL."/category/index.php");
            exit();
        } else {
            echo "<script>alert('gagal')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

  <?php 
  include_once($rootURL."/layout/header.php");
  ?>
    <body>
    <div class="page">
    <?php include_once($rootURL."/layout/navbar.php"); ?>
        <div class="page-body">
          <div class="container-xl d-flex flex-column justify-content-center"> 
            <div class="row">
            <div class="col">
          <h1 class="page-title">Category Add</h1>
          </div> 
          
            </div>
         
        </div>
          
          
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            
          <form class="card" method="post">
                <div class="card-header">
                  <h3 class="card-title">Basic form</h3>
                </div>
                <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label required">Category name</label>
                    <div>
                      <input type="text" name="name"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Category">
                    
                    </div>
                  </div>
                  
                </div>
                <div class="card-footer text-end">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
        
        </div>
        <?php include_once($rootURL."/layout/footer.php"); ?>
        </div>

    </body>
</html>