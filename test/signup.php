<?php 
    include_once 'header.php';
?>

<html>
    
    <div class="signup-form">
        <h2>Sign Up</h2>
        <form action="includes\signup.inc.php" method="post">
             <input type="text" name="name" placeholder="Full name...">
             <input type="text" name="email" placeholder="Email...">
             <input type="text" name="uid" placeholder="Username...">
             <input type="password" name="pwd" placeholder="Password...">
             <input type="password" name="pwdrepeat" placeholder="Confirm Password...">
             <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <center><div class="error">
        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                elseif ($_GET["error"]=="invalidUid") {
                    echo "<p>Choose a proper username!</p>";
                }
                elseif ($_GET["error"]=="invalidEmail") {
                    echo "<p>Choose a proper email!</p>";
                }
                elseif ($_GET["error"]=="passwordsdontmatch") {
                    echo "<p>Passwords doesnt match!</p>";
                }
                elseif ($_GET["error"]=="stmtfailed") {
                    echo "<p>Something went wrong try again!</p>";
                }
                elseif ($_GET["error"]=="usernametaken") {
                    echo "<p>Username entered is already taken!</p>";
                }
                elseif ($_GET["error"]=="none") {
                    echo "<p>You have signed up!</p>";
                }

            }
            
            ?>
    </div></center>

</html>



<?php 
    include_once 'footer.php';
?>