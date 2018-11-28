<?php
session_start();
session_unset();
session_destroy();
echo "Until next time, so long!";
include "login.php";
?>