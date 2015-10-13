<?php
session_start();

include __DIR__ . '/../c3.php';

// store userame in SESSION superglobal
$_SESSION['username'] = $username;

$url ='views/public_index.php';
header("Location: $url");
exit;