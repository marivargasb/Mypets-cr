<?php

session_start();
session_destroy();

$extra = '..\..\registro.php';

  header("Location: $extra");