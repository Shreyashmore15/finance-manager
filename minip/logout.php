<?php
include('server.php');
include('functions.php');

session_destroy();
unset($_SESSION['username']);
redirect('login.php');

?>