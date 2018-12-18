<?php
include ("header.php");
session_start();
$userprofile =$_SESSION['email'];
if($userprofile == TRUE) {

} else {
   header('location:login.php');
}

?>
<h1 align="justify">Profile Loading.....</h1>
</body>
</html>