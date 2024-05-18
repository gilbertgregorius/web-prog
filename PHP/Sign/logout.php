<?php
session_start();
session_unset();
session_destroy();
header("Location: sign_in_user_form.html");
header("refresh:2;url='sign_in_user_form.html'");
exit();
?>
  