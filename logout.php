<?php
session_start();
unset($_SESSION['id']);
session_destroy();

header("Location: http://localhost/php/event/web/index.php");
exit;
?>