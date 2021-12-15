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

  <title>News Portal | Contact us</title>

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

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
    <br><br><br>
    <?php
    $pagetype = 'contactus';
    //$query = mysqli_query($con, "select PageTitle,Description from tblpages where PageName='$pagetype'");
    $query = mysqli_query($con, "select name_contact, address_contact, phone_contact, email_contact
     from contact_person");
    while ($row = mysqli_fetch_array($query)) {

    ?>
      <h5 class="mt-4 mb-3">Nama: <?php echo htmlentities($row['name_contact']) ?>
        <p class="mt-4 mb-3">Alamat: <?php echo htmlentities($row['address_contact']) ?>
        <p class="mt-4 mb-3">Nomor HP: <?php echo htmlentities($row['phone_contact']) ?>
        <p class="mt-4 mb-3">Email: <?php echo htmlentities($row['email_contact']) ?><br><br>

        </p>



        <!-- Intro Content -->
        <div class="row">

          <div class="col-lg-12">

            <p><?php //echo $row['Description']; 
                ?></p>
          </div>
        </div>
        <!-- /.row -->
      <?php } ?>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>