<?php
$conn = new PDO('mysql:host=localhost; dbname=abramo','root', 'root');
if (isset($_POST['Submit'])) {
 

$email=$_POST['email'];
 
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO newletter (email)
VALUES ('$email')";
 
$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='index.html'</script>";
}
?> 