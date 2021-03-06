<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DJY News | Login Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <link rel="shortcut icon" type="images" href="images/logo.png" />





  <meta charset="UTF-8">
  <style>
    *,
    ::after,
    ::before {
      box-sizing: border-box;
    }

    body {
      background-color: #212121;
      color: #fff;
      font-family: monospace, serif;
      letter-spacing: 0.05em;
    }

    h1 {
      font-size: 23px;
    }

    .form {
      width: 300px;
      padding: 64px 15px 24px;
      margin: 0 auto;
    }

    .form .control {
      margin: 0 0 24px;
    }

    .form .control input {
      width: 100%;
      padding: 14px 16px;
      border: 0;
      background: transparent;
      color: #fff;
      font-family: monospace, serif;
      letter-spacing: 0.05em;
      font-size: 16px;
    }

    .form .control input:hover,
    .form .control input:focus {
      outline: none;
      border: 0;
    }

    .form .btn {
      width: 100%;
      display: block;
      padding: 14px 16px;
      background: transparent;
      outline: none;
      border: 0;
      color: #fff;
      letter-spacing: 0.1em;
      font-weight: bold;
      font-family: monospace;
      font-size: 16px;
    }

    .block-cube {
      position: relative;
    }

    .block-cube .bg-top {
      position: absolute;
      height: 10px;
      background: #020024;
      background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
      bottom: 100%;
      left: 5px;
      right: -5px;
      transform: skew(-45deg, 0);
      margin: 0;
    }

    .block-cube .bg-top .bg-inner {
      bottom: 0;
    }

    .block-cube .bg {
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      background: #020024;
      background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
    }

    .block-cube .bg-right {
      position: absolute;
      background: #020024;
      background: #00d4ff;
      top: -5px;
      z-index: 0;
      bottom: 5px;
      width: 10px;
      left: 100%;
      transform: skew(0, -45deg);
    }

    .block-cube .bg-right .bg-inner {
      left: 0;
    }

    .block-cube .bg .bg-inner {
      transition: all 0.2s ease-in-out;
    }

    .block-cube .bg-inner {
      background: #212121;
      position: absolute;
      left: 2px;
      top: 2px;
      right: 2px;
      bottom: 2px;
    }

    .block-cube .text {
      position: relative;
      z-index: 2;
    }

    .block-cube.block-input input {
      position: relative;
      z-index: 2;
    }

    .block-cube.block-input input:focus~.bg-right .bg-inner,
    .block-cube.block-input input:focus~.bg-top .bg-inner,
    .block-cube.block-input input:focus~.bg-inner .bg-inner {
      top: 100%;
      background: rgba(255, 255, 255, 0.5);
    }

    .block-cube.block-input .bg-top,
    .block-cube.block-input .bg-right,
    .block-cube.block-input .bg {
      background: rgba(255, 255, 255, 0.5);
      transition: background 0.2s ease-in-out;
    }

    .block-cube.block-input .bg-right .bg-inner,
    .block-cube.block-input .bg-top .bg-inner {
      transition: all 0.2s ease-in-out;
    }

    .block-cube.block-input:focus .bg-top,
    .block-cube.block-input:focus .bg-right,
    .block-cube.block-input:focus .bg,
    .block-cube.block-input:hover .bg-top,
    .block-cube.block-input:hover .bg-right,
    .block-cube.block-input:hover .bg {
      background: rgba(255, 255, 255, 0.8);
    }

    .block-cube.block-cube-hover:focus .bg .bg-inner,
    .block-cube.block-cube-hover:hover .bg .bg-inner {
      top: 100%;
    }

    .credits {
      position: fixed;
      left: 0;
      bottom: 0;
      padding: 15px 15px;
      width: 100%;
      z-index: 111;
    }

    .credits a {
      opacity: 0.6;
      color: #fff;
      font-size: 11px;
      text-decoration: none;
    }

    .credits a:hover {
      opacity: 1;
    }
  </style>

</head>

<body>
  <!-- Navigation -->
  <?php include('includes/header.php'); ?>
  <br><br>
  <!-- partial:index.partial.html -->
  <form autocomplete='off' class='form' method="POST" action="<?php echo base_url() . 'Account/proses_session_login'; ?>">
    <div class='control'>
      <h1>
        LOGIN
      </h1>
    </div>

    <div class='control block-cube block-input'>
      <input name='nama_user_david' placeholder='Username' type='text'>
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
    </div>

    <div class='control block-cube block-input'>
      <input name='password_david' placeholder='Password' type='password'>
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
    </div>

    <button class='btn block-cube block-cube-hover' type='button'>
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
      <input class='text' type="submit" name="login" value="login">
    </button>

  </form>

  <form autocomplete='off' class='form' method="POST" action="<?php echo base_url() . 'Account/session_register'; ?>">
    <button class='btn block-cube block-cube-hover' type='button'>
      <div class='bg-top'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg-right'>
        <div class='bg-inner'></div>
      </div>
      <div class='bg'>
        <div class='bg-inner'></div>
      </div>
      <input class='text' type="submit" name="register" value="register">
    </button>

  </form>

  <!-- partial -->

  <!-- Footer -->
  <br><br><br><br><br><br><br><br>
  <?php include('includes/footer.php'); ?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>


<?php
/*
<body>
    <h1>LOGIN SESSION</h1>

    <form method="POST" action="<?php echo base_url(). 'Dosen/proses_session_login'; ?>">
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="username"></td>
        </tr>

            <tr>
                <td>NIDN</td>
                <td><input type="password" name="password"></td>
            </tr> 

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="login" value="LOGIN">
                        <input type="submit" name="forgotpassword" value="LUPA PASSWORD">
                    </td>
                </tr>

</table>
</form>
</body>
</html>
*/
?>