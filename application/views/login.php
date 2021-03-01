<html>
<head>
<title></title>
<style>
input{
    padding:10px;
    margin:20px;
}
.a{
    border:2px solid;
    width:500;
}
</style>
</head>
<body>
<form  method="post" action="<?php echo base_url()?>Program/pass">
<div class="a">
Email id:<input type="text" name="emailid" placeholder="email id"><br>
Password:<input type="password" name="password" placeholder="password"><br>
<input type="submit" value="login">
</div>
</form>
</body>
</html>