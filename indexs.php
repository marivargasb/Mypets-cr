<?php

require_once('app/ini.php');

//echo $fbauth->getAuthUrl();

?>


<!DOCTYPE html>

<html>
<head>

<title> </title>

</head>

<body>

<?php if ($fbauth->isLogin()): ?>
<a href="logout.php">Cerrar Sesion</a> 
<?php else: ?>
<a href="<?php echo $fbauth->getAuthUrl(); ?>">Iniciar Sesion </a>
<?php endif; ?>

</body>

</html>

