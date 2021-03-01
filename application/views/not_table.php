<html>
<head>
<title></title>
<style>
.bi{
	background-image:url("../image/img7.jpg");
	background-size:cover;
}
table,td{
    border:2px solid;
    border-collapse:collapse;
    text-align:center;
    background-color:rgba(0,0,0,0.3);
    padding:20px;
    color:white;
}
</style>
</head>
<body class="bi">

<table>
    <h4>TABLE</h2>
    <tr>
    <td>Teacher Name</td>
    <td>Phone No</td>
    <td>Notification</td>
    <td>Current Date</td>
    <td>Action</td>
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->name;?></td>
         <td><?php echo $row->phoneno;?></td>
         <td><?php echo $row->notification;?></td>
         <td><?php echo $row->currentdate;?></td>
         <td><a href="<?php echo base_url()?>Program/delete1/<?php echo $row->loginid;?>" >Delete</a></td>
         </tr>
         <?php
        }
      }
    ?>
</table>
</form>
</body>
</html>