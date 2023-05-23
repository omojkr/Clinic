<?php
session_start();
session_unsent();
header("Location: login.php");
?>