<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
body{
    margin:0;
    padding:0;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li {
  float: left;
}

li a {
  display: block;
  color: #666;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #ddd;
}

li a.active {
  color: white;
  background-color: grey;
}
</style>
</head>
<body>
<ul>
    <li class="active"><a href="home.php">Home</a></li>
    <li><a href="profile.php">Profile</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>