<?php
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DJY News | Home Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include('includes/header.php'); ?>

  <!-- Page Content -->
  <div class="container">



    <div class="row" style="margin-top: 4%">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <?php
        $url = 'https://newsapi.org/v2/top-headlines?country=id&apiKey=4a3d81b73e3e4cfbaac57c3e390a1c5d';
        $response = file_get_contents($url);
        $NewsData = json_decode($response);

        foreach ($NewsData->articles as $News) {
        ?>

          <div class="card mb-4">
            <img class="card-img-top" src="<?php echo htmlentities($News->urlToImage); ?>" alt="<?php echo htmlentities($News->title); ?>">
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($News->title); ?></h2>

              <p><?php echo $News->content ?> </p>

              <a href=<?php echo htmlentities($News->url) ?> class="btn btn-primary" target="_blank">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($News->publishedAt); ?>

            </div>
          </div>
        <?php } ?>

        <!-- Pagination -->


      </div>

      <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php'); ?>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  </head>
</body>

</html>