<html>
<head>
<title></title>
<style>
    .bi{
	background-image:url("../image/tr_img4.jpg");
	background-size:cover;
    }
    input,textarea{
        padding:10px;
        margin:10px;
        text-align:center;
    
    }
    .ci{
        border:2px solid black;
        text-align:center;
        padding:20px;
        width:600px;
        height:700px;
        margin-left:350px;
        color:white;
        background-color:rgba(0,0,0,0.6);
    }
</style>
</head>
<body>
<div class="bi">
<form method="post" action="<?php echo base_url()?>Program/reg2">
    <div class="ci">
    <h2>REGISTER FORM</h2>
    Name:<input type="text" name="name" placeholder="name"><br>
    Address:<textarea name="address" placeholder="address"></textarea><br>
    District:<input list="location" name="district"><br>
        <datalist id="location">
        <option value="tvm">
        <option value="kollam">
        <option value="kottayam">
        <option value="alappuzha">
        <option value="ernakulam">
        </datalist>
    Pincode:<input type="text" name="pincode" placeholder="pincode"><br>
    Phone Number:<input type="text" name="phoneno" placeholder="phoneno"><br>
    Gender:<input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" >
            <label for="female">Female</label><br>
    Age:<input type="text" name="age" placeholder="age"><br>
    Subject:<input list="subject" name="subject"><br>
        <datalist id="subject">
        <option value="EDC">
        <option value="C">
        <option value="Python">
        <option value="Java">
        <option value="PHP">
        <option value="Mobile Computing">
        <option value="Soft Skill">
        </datalist>
    Email:<input type="email" name="email" placeholder="email"><br>
    Password:<input type="text" name="password" placeholder="password"><br>
    <input type="submit" value="register">
    </div>
    </form>
    </div>
</body>
</html>