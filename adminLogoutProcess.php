<?php
session_start();
print_r($_SESSION); // See what’s in the session before unsetting
unset($_SESSION["data"]);
print_r($_SESSION); // Check again after
?>
