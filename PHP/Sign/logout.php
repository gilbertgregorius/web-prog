<?php
session_start();
session_unset();
session_destroy();
header("refresh:2;url='sign_in_user_form.html'");
exit();
?>
  