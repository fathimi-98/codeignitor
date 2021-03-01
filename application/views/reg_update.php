<html>
<head>
<title></title>
<style>
.bi{
	background-image:url("../image/img8.jpg");
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
        padding:10px;
        width:500px;
        height:800px;
        background-color:rgba(0,0,0,0.5);
        margin-left:300px;
        color:white;
        font-size:20px;
        
    }
</style>
</head>
<body class="bi">
<form method="post" action="<?php echo base_url()?>Program/update1">
<div class="ci">
<?php
   if(isset($d))
   {
       foreach($d->result() as $row1)
       {
           ?>
<h2>UPDATION FORM</h2>
First Name:<input type="text" name="fname" value="<?php echo $row1->first_name;?>"><br>
Last Name:<input type="text" name="lname" value="<?php echo $row1->last_name;?>"><br>
Address:<input type="text" name="address" value="<?php echo $row1->address;?>"><br>
District:<input type="text" name="district" value="<?php echo $row1->district;?>"><br>
Pincode<input type="text" name="pincode" value="<?php echo $row1->pincode;?>"><br>
Phone Number:<input type="text" name="phoneno" value="<?php echo $row1->phoneno;?>"><br>
DOB:<input type="text" name="dob" value="<?php echo $row1->dob;?>"><br>
Gender:<input type="text" name="gender" value="<?php echo $row1->gender;?>"><br>
Education:<input type="text" name="education" value="<?php echo $row1->education;?>"><br>
email:<input type="email" name="email" value="<?php echo $row1->email;?>"><br>
<input type="hidden" name="id" value="<?php echo $row1->id;?>"><br>
<input type="submit" name="update" value="update">
</form>
<?php
       }
   }
?>
</div>
</body>
</html>