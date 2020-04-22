<?php

use Model\GuestBook;

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});
?>
<html>
<head>
    <title>Guestbook</title>
</head>

<body>
<h1>
    All Entries
</h1>

<table>
    <tr>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Content</td>
    </tr>
    <?php
    //include_once 'GuestBook.php';
    $entries = GuestBook::getAllEntries();
    foreach($entries as $entry){ ?>
        <tr>
            <td><?php echo $entry->getFirstName(); ?></td>
            <td><?php echo $entry->getLastName(); ?></td>
            <td><?php echo $entry->getContent(); ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>