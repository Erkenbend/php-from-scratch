<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<?php
include 'GuestBook.php';

$guestBook = new GuestBook();
?>
</body>
</html>