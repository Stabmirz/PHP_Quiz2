
<?php 
session_start();
$accounts = array(

    1 => array(
        'surname' => 'Matt',
        'lastname' => 'Kent',
        'email' => 'matt@gmail.com',
        'password' => 'test123'

    ),
    2 => array(
        'surname' => 'Jake',
        'lastname' => 'Johnssen',
        'email' => 'jake@gmail.com',
        'password' => 'test456'
    )
);

if(isset($_POST['login'])) {
    $user=$_POST['email'];
    $pass=$_POST['password'];

    foreach($accounts as $account) { 

        if($account['email'] == $user && $account['password'] ==$pass ) {
            $_SESSION['email'] = $user;
            header("Location: home.php");
            break;  
        }
        elseif($account['email'] != $_POST['email']) {
            echo 'Wrong e-mail';
            break;
        }
        elseif($account['password'] != $_POST['password']) {
            echo 'Wrong password';
            break;
        }

    }

}

?>

<style>
#form{
    margin:100px 0px 0px 500px;
}
</style>
<h1 id="form">Login</h1>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
</head>
<body>
<form method="post" id="form">

    <label>E-mail:</label><br/>
    <input name="email" type="text" /><br/><br/>

    <label>Password:</label><br/>
    <input name="password" type="password" /><br/><br/>

    <input name="login" type="submit" value="Login" />

</form>
</body>
</html>