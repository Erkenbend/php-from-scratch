<?php
include_once 'GuestBookEntry.php';
include_once 'GuestBook.php';

//use GuestBookEntry;
/*
class Controller {

    public function add($firstName, $lastName, $content) {
        $guestBookEntry = new GuestBookEntry($firstName, $lastName, $content);

    }
}
*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $guestBookEntry = new GuestBookEntry($_POST['firstName'], $_POST['lastName'], $_POST['content']);
    $success = GuestBook::addEntry($guestBookEntry);

    if ($success) {
        header("Location: http://localhost:8080/index.php");
        exit;
    }
}


