<html>
<head>
<title></title>
<style>
table,td{
    border:2px solid;
    border-collapse:collapse;
}
</style>
</head>
<body>
<table>
    <tr>
    <td>Email Id</td>
    <td>Password</td>
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->lid;?></td>
         <td><?php echo $row->email;?></td>
         <td><?php echo $row->password;?></td>
         </tr>
         <?php
         }
      }
      ?>

</table>
</form>
</body>
</html>