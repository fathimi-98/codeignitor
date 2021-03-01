<html>
<head>
<title></title>
<style>
    input,textarea{
        padding:10px;
        margin:10px;
        text-align:center;
    }
    div{
        border:2px solid black;
        text-align:center;
        padding:20px;
        width:400px;
        height:500px;
    }
</style>
</head>
<body>
    
    <form method="post" action="<?php echo base_url()?>Program/regist">
    <div>
    <h2>REGISTER</h2>
    Name:<input type="text" name="name" placeholder="name"><br>
    Address:<textarea name="address" placeholder="address"></textarea></br>
    Gender:<input type="radio" name="gender" id="female" value="female">
    <label for="female">F</label>
    <input type="radio" name="gender" id="male" value="male">
    <label for="male">M</label><br>
    Age:<input type="text" name="age" placeholder="age"><br>
    E-mail:<input type="email" name="email" placeholder="email"><br>
    Password:<input type="password" name="password" placeholder="password"><br>
    <input type="submit" value="register">
    </div>
    </form>
</body>
</html>