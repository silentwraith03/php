<?php
//below code is executed when the form is submitted
if(isset($_GET['form_submitted'])){
    echo "<br><h2>Thank You {$_GET['firstname']} !!! </h2> <br>";

    echo "<br>You have been registered as {$_GET['firstname']} {$_GET['lastname']}<br>";

    echo "Go <a href='regFormPersonalData.php' >back</a> to the form</p>";
}
else{
    echo "<br> Sorry you have not submitted the form!!! <br>";
}

?>