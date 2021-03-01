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
<form method="post" action="<?php echo base_url()?>Program/update" >
<?php
   if(isset($d))
   {
       foreach($d->result() as $row1)
       {
           ?>
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $row1->sname;?>"></td>
</tr><tr>
<td>Address:</td>
<td><input type="text" name="address" value="<?php echo $row1->address;?>"></textarea></td>
</tr>
<tr>
<td>Gender:</td>
<td><input type="text" name="gender" value="<?php echo $row1->gender;?>"><input type="radio" name="gender" value="f">female<input type="radio" name="gender" value="m">male</td>
</tr>
<tr>
<td>Age:</td>
<td><input type="text" name="age" value="<?php echo $row1->age;?>"></td>
</tr>
<tr>
<td>email:</td>
<td><input type="email" name="email" value="<?php echo $row1->email;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="id" value="<?php echo $row1->sid;?>"></td>
<td><input type="submit" name="update" value="update"></td>
</tr>

</table>
<?php
       }
   }
else{
    ?>

<table>
    <h4>TABLE</h2>
    <tr rowspan="4" >
    <td>Name</td>
    <td>address</td>
    <td>gender</td>
    <td>age</td>
    <td>email</td>
    <!--<td>password</td>-->
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->sname;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->age;?></td>
         <td><?php echo $row->email;?></td>
         <!--<td><?php// echo $row->password;?></td>-->
         <td><a href="<?php echo base_url()?>Program/update/<?php echo $row->sid;?>" >Edit</a></td>
         <td><a href="<?php echo base_url()?>Program/delete/<?php echo $row->sid;?>" >Delete</a></td>
         </tr>
         <?php
         }
      }
      else
      {
          ?>
          <tr><td>no data found</td>
          </tr>
          <?php
      }
    }
      ?>

</table>
</form>
</body>
</html>