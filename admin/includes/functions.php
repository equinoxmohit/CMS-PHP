<?php

function insert_category(){
  if(isset($_POST['add_category'])){
      global $connection;
      $cat_name=$_POST['cat_name'];
      $query="INSERT INTO categories(category_name)";
      $query.="VALUES ('$cat_name')";
      $add_category_query=mysqli_query($connection,$query);
      if(!$add_category_query){
        die("Category Not added").mysqli_error($connection);
      }
  }
}

function delete_category(){
  if(isset($_GET['delete'])){
    global $connection;
    $id=$_GET['delete'];
    $query="DELETE FROM categories WHERE category_id= $id ";
    $delete_query=mysqli_query($connection,$query);
    if(!$delete_query){
      die("Couldn't delete".mysqli_error($connection));
    }else{
        header("Location: index.php");
      }
  }
}

function update_category(){
  if(isset($_POST['update_category'])){
      global $connection;
      $id=$_GET['update'];
      $category_name=$_POST['update_cat_name'];
      $query="UPDATE categories SET category_name='$category_name' WHERE category_id='$id'";
      $result_update_query=mysqli_query($connection,$query);
      if(!$result_update_query)
      {
         die("Update Query not executed" .mysqli_error($connection));
      }else{
        header("Location: index.php");
      }
  }

}


 ?>
