<html>
<head>
<title>Personal INFO</title>
</head>

<body>
<h1>
    Welcome! Please register yourself
</h1>

<form method="post" action="Controller/controller.php">
    First Name:<input type="text" size="12" maxlength="12" name="firstName"><br />
    Last Name:<input type="text" size="12" maxlength="36" name="lastName"><br />
    Content:<input type="text" size="12" maxlength="100" name="content"><br />
    <input type="submit">
</form>
<?php include 'View/ShowGuestBook.php';
?>

</body>
</html>