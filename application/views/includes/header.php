 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
   <div class="container">
     <a class="navbar-brand" href="<?php echo base_url() . 'Home' ?>"><img src="images/logo.png" height="50"></a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
       <ul class="navbar-nav ml-auto">
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url() . 'About' ?>">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="index.php">News</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="<?php echo base_url() . 'Contact' ?>">Contact us</a>
         </li>
         <li class="nav-item">
           <?php
            //IF data user kosong
            if (empty($_SESSION['account_username'])) {
            ?>
             <a class="nav-link" href="<?php echo base_url() . 'Account' ?>">Login</a>
           <?php
              //IF data user tersedia
            } else if (!empty($_SESSION['account_username'])) {
            ?>
             <!---
             <a><strong>$_SESSION[account_username]</strong></a>
             <ul class='navbar-nav ml-auto'>
               <form method='GET' action='home.php' enctype='multipart/form-data'>
                 <li><a class='nav-link' href='customaccount.php'>Account</a></li>
                 <li><input class='nav-link' type='submit' name='Account/logout' value='Logout'></a></li>
--->
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             $_SESSION[account_username]
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <form method='GET' action='home.php' enctype='multipart/form-data'>
               <a class="dropdown-item" href='customaccount.php'>Account</a>
               <a class="dropdown-item" href='customaccount.php'>Subscription</a>
               <a class="dropdown-item" href="Logout">Logout</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Tulis Berita</a>
               <a class="dropdown-item" href="#">Lihat Berita Pribadi</a>
             </form>
           </div>
         </li>
         </form>
       <?php
            }
        ?>
       </ul>
       <li>
         <?php
          /*
          if (empty($_SESSION['account_username'])) {
            echo "<a href='Bagian David/account.php'>Login</a>";
          } else if (!empty($_SESSION['account_username'])) {
            echo "<a><strong>$_SESSION[account_username]</strong></a>";
            echo "<ul class='dropdown-list'>";
            echo "<form method='GET' action='home.php' enctype='multipart/form-data'>";
            echo "<li><a class='dropdown' href='customaccount.php'>Account</a></li>";
            echo "<li><input class='dropdown' type='submit' name='logout' value='Logout'></a></li>";
            echo "</form>";
          }*/
          ?>
         </ul>
       <li>
         <?php
          /*
          if (empty($_SESSION['account_username'])) {
          } else if (!empty($_SESSION['account_username'])) {
            if (!empty($_SESSION['account_userlevel']) && $_SESSION['account_userlevel'] == 'admin') {
              echo "<a href='Bagian Sanctus/sigadgetdashboard.php'>Dashboard</a>";
              echo "<ul class='dropdown-list'>";
              echo "<li><a class='dropdown' href='sigadgettransactions.php'>Transactions</a></li>";
              echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetproducts.php'>Products</a></li>";
              echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetsales.php'>Sales</a></li>";
              echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetcouriers.php'>Couriers & Distributions</a></li>";
              echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetcustomers.php'>Customers</a></li>";
              echo "<li><a class='dropdown' href='Bagian Sanctus/sigadgetadmins.php'>Admins</a></li>";
              echo "<li><a class='dropdown' href='sigadgetregisterimage.php'>Pictures</a></li>";
            }
          }*/
          ?>
         </ul>
       </li>

       </ul>
     </div>
   </div>
 </nav>




 <li>