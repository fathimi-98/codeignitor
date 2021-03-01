<html>
<head>
<title></title>
<style>
    .bi{
	background-image:url("../image/tr_img4.jpg");
	background-size:cover;
    }
    textarea{
        padding:40px;
        margin:10px;
        text-align:center;
        
    }
    input{
        padding:10px;
        margin:10px;
        text-align:center;
    }
    div{
        border:2px solid black;
        text-align:center;
        padding:20px;
        width:400px;
        height:300px;
        background-color:rgba(0,0,0,0.5);
        color:white;
        margin-left:350px;
    }
</style>
</head>
<body class="bi">
    
    <form method="post" action="<?php echo base_url()?>Program/reg3">
    <div>
    <h2>NOTIFICATION</h2>
    Notification:<textarea name="notification" placeholder="notification"></textarea><br>

    <input type="submit" value="submit">
    </div>
    </form>
</body>
</html>