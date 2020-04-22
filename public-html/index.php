<?php
$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
?>
<html>
<head>
<title>Personal INFO</title>
</head>

<body>
<h1>
    Welcome!
</h1>

<form method="post" action="controller.php">
    First Name:<input type="text" size="12" maxlength="12" name="Fname"><br />
    Last Name:<input type="text" size="12" maxlength="36" name="Lname"><br />
    <input type="submit">
</form>

</body>
</html>