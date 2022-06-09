<html>
    <body>
        <?php
        $fn = $_POST["firstname"];
        $ln = $_POST['lastname'];
        $cs = $_POST['course'];
        $gen = $_POST['gender'];

        /*if($uid == 'sw7906' and $pw == '1234')
        {
            session_start();
            $_SESSION['sid']=session_id();
            echo "Logged in successfully.<br>";
        }
        else
        {
            echo "<br>Incorrect credentials!!<br>";
        }*/
            session_start();
            $_SESSION['sid']=session_id();
            echo "Submitted.<br>";
        ?>
        <a href="form.php">Back </a>
    </body>
</html>