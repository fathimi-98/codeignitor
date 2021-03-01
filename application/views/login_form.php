<html>
<head>
<title></title>
<style>
body{
	background-image:url("../image/login2.jpg");
	background-size:cover;
    }
input{
    padding:10px;
    margin:20px;
}
.a{
    border:2px solid;
    width:500;
    background-color:rgba(0,0,0,0.6);
    margin-top:150px;
    margin-left:400px;
    color:white;
    text-align:center;
    font-size:25px;
}
h2{
    color:red;
}
</style>
</head>
<body>
<form  method="post" action="<?php echo base_url()?>Program/pass1">
<div class="a">
<h2>LOGIN</h2>
Email id:<input type="text" name="email" placeholder="email"><br>
Password:<input type="password" name="password" placeholder="password"><br>
<input type="submit" value="login">
</div>
</form>
</body>
</html>