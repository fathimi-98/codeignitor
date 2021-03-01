<html>
<head>
<title></title>
<style>
    .bi{
	background-image:url("../image/img.jpg");
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
        width:400px;
        height:800px;
        background-color:rgba(0,0,0,0.5);
        color:white;
        margin-left:400px;
    }
</style>
</head>
<body>
<div class="bi">
    <form method="post" action="<?php echo base_url()?>Program/reg1">
    <div class="ci">
    <h2>REGISTER FORM</h2>
    First name:<input type="text" name="first_name" placeholder="first_name"><br>
    Last name:<input type="text" name="last_name" placeholder="last_name"><br>
    Address:<textarea name="address" placeholder="address"></textarea><br>
    District:<input list="location" name="district"><br>
        <datalist id="location">
        <option value="tvm">
        <option value="kollam">
        <option value="kottayam">
        <option value="ernakulam">
        <option value="alappuzha">
        </datalist>
    Pincode:<input type="text" name="pincode" placeholder="pincode"><br>
    Phone Number:<input type="text" name="phoneno" placeholder="phoneno"><br>
    DOB:<input type="date" name="dob"><br>
    Gender:<input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female" >
            <label for="female">Female</label><br>
    Education:<input list="education" name="education"><br>
           <datalist id="education">
           <option value="btech">
           <option value="be">
           <option value="bsc">
           <option value="bba">
           <option value="msc">
           <option value="mca">
           </datalist>
    Email:<input type="email" name="email" placeholder="email"><br>
    Password:<input type="text" name="password" placeholder="password"><br>
    <input type="submit" value="register">
    </div>
    </form>
</div>
</body>
</html>