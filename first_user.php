<?php
function setFirstUser($firstName) {
    if (!isset($_SESSION['firstUser'])) {
        $_SESSION['firstUser'] = $firstName;
    }
}
function displayFirstUser() {
    if (isset($_SESSION['firstUser'])) {
        echo $_SESSION['firstUser'];
    } else {
        echo "No user has logged in yet.";
    }
}
?>
