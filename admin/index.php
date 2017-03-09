<?php ob_start(); ?>
<?php include 'includes/admin-header.php'; ?>
<?php include '../db.php'; ?>
<?php include 'includes/functions.php'; ?>
<?php
 insert_category();
 ?>

<body>
    <div id="wrapper">
      <?php include 'includes/admin-nav.php'; ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Admin Page
                            <small>Subheading</small>
                        </h1>

                      <div class="col-xs-6">
                      <form class="" action="" method="post">
                        <div class="form-group">
                        <label for="add_cat_name">Add Category Name</label>
                        <input type="text" id="add_cat_name" name="cat_name" class="form-control" required />
                      </div>
                      <div>
                        <button type="submit" name="add_category"  class="btn btn-primary">Add Category </button>
                          </div>


                      </form>
                      <form class="" action="" method="post">
                        <div class="form-group">
                        <label for="update_cat_name">Update Category Name</label>
                        <?php
                            if(isset($_GET['update'])){
                                $id=$_GET['update'];
                                $query="SELECT * FROM categories WHERE category_id= $id";
                                $select_id_query=mysqli_query($connection,$query);
                                if(!$select_id_query){
                                  die("Couldn't select" .mysqli_error($connection));
                                }else{
                                  while($row=mysqli_fetch_assoc($select_id_query)){
                                      $category_name=$row['category_name'];
                                      echo "<input type='text' value='$category_name' id='update_cat_name' name='update_cat_name' class='form-control' required />";
                                    }
                                  }
                                }
                       ?>
                      </div>
                      <div>
                        <button type="submit" name="update_category"  class="btn btn-primary">Update Category </button>
                          </div>
                      </form>
                  </div>
                      <div class="col-xs-6">
                        <table class="table table-hover table-striped table-responsive">
                          <thead>
                            <tr>
                              <th>Category Id</th>
                              <th>Category Name</th>
                              <th>Delete Category</th>
                              <th>Update Category</th>
                            </tr>
                              </thead>
                              <tbody>
                                <?php
                                  $query="SELECT * FROM categories";
                                  $select_admin_categories_query=mysqli_query($connection,$query);
                                  while($row=mysqli_fetch_assoc($select_admin_categories_query))
                                  {
                                    ?>
                                    <tr>
                                      <?php
                                      $category_id=$row['category_id'];
                                      $category_name=$row['category_name'];
                                      echo "<td>{$category_id}</td>";
                                      echo "<td>{$category_name}</td>";
                                      echo "<td><a href='index.php?delete={$category_id}'><span class='glyphicon glyphicon-trash'></span></a></td>";
                                      echo "<td><a href='index.php?update={$category_id}'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                                  }
                                 ?>
                            </tr>

                          </tbody>

                        </table>
                      </div>

                      <?php
                          delete_category();
                       ?>

                       <?php
                        update_category();
                        ?>
                    <?php include 'includes/admin-footer.php'; ?>
