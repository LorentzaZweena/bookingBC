<?php
include_once("../config.php");
session_start();

    $id = $_GET['id'];
    $category = mysqli_query($connect, "INSERT INTO categories WHERE id='$id'");

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
            <div class="row">
            <div class="col">
          <h1 class="page-title">Category</h1>
          </div> 
          <div class="col-auto ms-auto">
             <a href="<?php echo $baseURL; ?>/category/create.php" class="btn btn-info">Add</a>
          </div>
            </div>
         
        </div>
          
          
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card">
              <div class="card-body">
                <div id="table-default" class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th><button class="table-sort" data-sort="sort-no">No</button></th>
                        <th><button class="table-sort" data-sort="sort-name">Name</button></th>
                        <th><button class="table-sort" data-sort="sort-action">Action</button></th>
              
                      </tr>
                    </thead>
                    <tbody class="table-tbody">
                      <?php
                        $data = mysqli_query($connect, "SELECT * from categories ORDER BY name ASC");
                        $no = 1;

                        while($category = mysqli_fetch_array($data)) {
                      ?>
                      <tr>
                        <td class="sort-no"><?= $no++ ?></td>
                        <td class="sort-name">Snack</td>
                        <td class="sort-action">
                          <div class="btn-list flex-nowrap">
                            <a href="<?php echo $baseURL; ?>/category/edit/edit.php?id=<?= $category["id"] ?>"class="btn btn-info">Edit</a>
                            <a href="<?php echo $baseURL; ?>/category/edit/delete.php" class="btn btn-danger">Delete</a>
                          </div>
                        </td>
                        </tr>
                        <?php } ?>
                       
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        </div>
        <?php include_once($rootURL."/layout/footer.php"); ?>
        </div>

    </body>
</html>