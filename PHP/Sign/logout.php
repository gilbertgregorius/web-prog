<?php
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
header("refresh:2;url='../index.php'");
exit();
?>