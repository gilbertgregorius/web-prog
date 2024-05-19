<?php
session_start();
session_unset();
session_destroy();
<<<<<<< HEAD
header("refresh:2;url='sign_in_user_form.html'");
exit();
?>
  
=======
header("Location: ../index.php");
header("refresh:2;url='../index.php'");
exit();
?>
>>>>>>> 7bd9f55c21842df074745429ba98a3350cf18088
