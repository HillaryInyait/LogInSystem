<?php 
  session_start();
?>   

<!DOCTYPE html>
<html>

<head>
  <title>This Is An Introduction</title>
  <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>

  <header>
    <nav>
      <a href="index.php">Home</a>
      <a href="#">ABOUT US</a>
      <?php
      if (isset($_SESSION["useruid"])) {
        echo "<a href='profile.php'>Profile Page</a>";
        echo "<a href='includes/logout.inc.php'>Log Out</a>";
      }
      else {
        echo "<a href='signup.php'>SIGN UP</a>";
        echo "<a href='login.php'>LOG IN</a>";
      }
      ?>
    </nav>
  </header>

</body>

</html>