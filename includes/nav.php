<?php ob_start(); ?>
<?php include 'db.php'; ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">CMS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <?php
                $query="SELECT * FROM categories";
                $select_categories_query=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($select_categories_query))
                {
                  $category_name=$row['category_name'];
                  echo "<li>
                    <a href='#'>{$category_name}</a>
                  </li>";
                }
               ?>
               <li>
                 <a href="admin">Admin Page</a>
               </li>
          </ul>
        </div>



        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
