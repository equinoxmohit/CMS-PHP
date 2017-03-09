<!-- header included -->
<?php include 'includes/header.php'; ?>
<body>
  <!-- navigation included -->
<?php include 'includes/nav.php'; ?>

    <div class="container">
        <div class="row">
          <!-- blog included-->
          <?php include 'db.php'; ?>
          <div class="col-md-8">

              <h1 class="page-header">
                    Page Heading
                  <small>Secondary Text</small>
              </h1>
              <?php
                $query="SELECT * FROM blogs";
                $select_blogs_query=mysqli_query($connection,$query);
                while($row=mysqli_fetch_assoc($select_blogs_query))
                {
                  $blog_title=$row['blog_title'];
                  $author_name=$row['author_name'];
                  $posted_date=$row['posted_date'];
                  $image=$row['image'];
                  $blog_body=$row['blog_body'];
                 ?>
              <!-- First Blog Post -->
              <h2>
                  <a href="#"><?php echo $blog_title; ?></a>
              </h2>
              <p class="lead">
                  by <a href="index.php"><?php echo $author_name; ?></a>
              </p>
              <p><span class="glyphicon glyphicon-time"></span><?php echo $posted_date; ?></p>
              <hr>
              <img class="img-responsive" src="images/<?php echo $image?>.jpg" alt="">
              <hr>
              <p><?php echo $blog_body; ?></p>
              <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

              <hr>
          <?php
          }
           ?>

          </div>

          <!-- side nav included -->
          <?php include 'sidenav.php'; ?>
        </div>
        <hr>

<!--footer included  -->
<?php include 'includes/footer.php'; ?>
