<!DOCTYPE html>
<html>
<head>
<title>WARKOPTC - Login</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>

#kotak{
width: 38%;
height: 50%;
border: 5px #404040;
background-color: white;
margin: 150px 400px 80px 400px;
webkit-border-radius:20px;-moz-border-radius: 20px; border-radius: 20px;
padding: 20px;
}
#background{
background-color: #0099CC;
font-size : 30;
}
.btn{
width: 30%;
margin: 5px 5px 5px 348px;
}
</style>

</head>
<body id="background">
<div id="kotak">


<form method="post" action="actlogin.php">

<label for="exampleInputEmail1">Username</label>
<input type='text' name='username' id="exampleInputEmail1" class="form-control"><br><br>
<label for="exampleInputPassword1">Password</label>
<input type="password" name='password' id="exampleInputPassword1" class="form-control"><br><br>
<button type="submit" class="btn btn-default">Login</button>
</form>


</div>

</body>
</html>
