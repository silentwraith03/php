<html>
    <body>
        <?php
        $uid = $_POST["userid"];
        $pw = $_POST['password'];

        if($uid == 'sw7906' and $pw == '1234')
        {
            session_start();
            $_SESSION['sid']=session_id();
            echo "Logged in successfully.<br>";
        }
        else
        {
            echo "<br>Incorrect credentials!!<br>";
        }
        ?>
        <a href="form.php">Back </a>
        <a href="AdminLogout.php">Logout</a>
    </body>
</html>