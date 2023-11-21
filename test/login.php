<?php 
    include_once 'header.php';
?>

<html>
    
    <div class="signup-form">
        <h2>Log In</h2>
        <form action="includes/login.inc.php" method="post">
            
             <input type="text" name="name" placeholder="Email/Username...">
             <input type="password" name="pwd" placeholder="Password...">
             <button type="submit" name="submit">Log In</button>

        </form>

    </div>

    <center><div class="error">
        <?php 
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!</p>";
                }
                elseif ($_GET["error"]=="wronglogin") {
                    echo "<p>Incorrect log in information!</p>";
                }
                
            }
            
            ?>
    </div></center>
</html>

<?php 
    include_once 'footer.php';
?>