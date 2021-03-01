<html>
<head>
<title></title>
</head>
<style>
    div{
        border:2px solid;
        height:400px;
        width:400px;
    }
</style>
<body>
<form method="post" action="<?php echo base_url()?>Exam1/reg_comp">
<div>
<h2>COMPLAINT FORM</h2>
Subject:<br><input type="text" name="subject"><br>
Complaint:<br><input type="text" name="complaint"><br>
Current Date:<br><input type="date" name="date"><br>
<input type="submit" value="submit">
</div>
</form>
</body>
</html>
