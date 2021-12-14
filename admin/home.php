<?php
require_once 'functions.php';
session_start();

checkAuthAndRedirect();

echo 'Connecté !<br>';

var_dump($_SESSION);
