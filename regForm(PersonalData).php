<html>
    <head>
</head>
<body>
    <h2>Registration Form</h2>

    <form action="FormSubmit.php" method="GET">
        <br>
        First name: <input type="text" name="firstname"> <br>
        Last name: <input type="text" name="lastname"> <br>
        Age: <input type="text" name="age"> <br>
        EmailId: <input type="text" name="email"> <br>
        Course: <input type="text" name="course"> <br>
        <input type="hidden" name="form_submitted" value="1" />
        <input type="submit" value="Submit">

    </form>
</body>
</html>