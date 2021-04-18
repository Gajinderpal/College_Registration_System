<?php
session_start();
session_destroy();
unset($_session);
header('location:index.php');
?>
