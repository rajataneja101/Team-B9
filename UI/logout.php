<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
<?php
session_unset(); //remove all session variables
session_destroy(); // destroy the session 
header('location: index.php')
?>
</body>
</html>