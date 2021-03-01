<html>
<head>
<title>work</title>
<style>
.bi{
	background-image:url("../image/img7.jpg");
	background-size:cover;
}
/*nav section area starts*/
.menubar{
	background-color:black;
	text-align:center;
	
}
.menubar ul{
	display:inline-flex;
	list-style:none;
	
	
}
.menubar ul li a{
	color:white;
	text-decoration:none;
	
}
.submenu{
	display:none;
	
}
.menubar ul li{

	padding:15px;
}
.menubar ul li:hover{
	background-color:red;
	border-radius:10px;
}
.menubar ul li:hover .submenu{
	display:block;
	position:absolute;
	background-color:black;
	margin-top:15px;
	margin-left:-15px;
	border-radius:10px;
	padding:10px;
}
.menubar ul li:hover .submenu ul{
	display:block;
	margin-left:-30px;
		
}
.menubar ul li:hover .submenu ul li{
	padding:20px;
	border-bottom:1px solid red;
		
}
/*nav section area stops*/
.head{
    color:white;
    text-align:left;
}

</style>
</head>
<body class="bi">
<nav class="menubar">
<ul>
	<li><a href="<?php echo base_url()?>Program/page_view">Home</a></li>
	<li><a href="<?php echo base_url()?>Program/view4">Profile</a></li>
	<li><a href="<?php echo base_url()?>Program/reg4">View Notification</a></li>
</ul>
</nav>
<div class="head">
<h1>Student Mangement System</h1>
</div>
</body>
</html>