<html>
<head>
<title></title>
<style>
body{
	background-image:url("../image/image2.jpg");
	background-size:cover;
    }
table,td{
    border:2px solid;
    border-collapse:collapse;
    padding:10px;
    
    
}

</style>
</head>
<body>
<table>
    <h4>TABLE</h2>
    <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Address</td>
    <td>District</td>
    <td>Pincode</td>
    <td>Phone No</td>
    <td>DOB</td>
    <td>Gender</td>
    <td>Education</td>
    <td>Email ID</td>
    <td>Action</td>
    <!--<td>password</td>-->
    </tr>
    <?php
    if($n->num_rows()>0)
      {
        foreach($n->result() as $row)
        {
         ?>
         <tr>
         <td><?php echo $row->first_name;?></td>
         <td><?php echo $row->last_name;?></td>
         <td><?php echo $row->address;?></td>
         <td><?php echo $row->district;?></td>
         <td><?php echo $row->pincode;?></td>
         <td><?php echo $row->phoneno;?></td>
         <td><?php echo $row->dob;?></td>
         <td><?php echo $row->gender;?></td>
         <td><?php echo $row->education;?></td>
         <td><?php echo $row->email;?></td>
         
         <?php
         if($row->status==1)
         {
             ?>
             <td>Approved</td>
             <td><a href="<?php echo base_url()?>Program/reject2/<?php echo $row->loginid;?>" >Reject</a></td>
             <?php
         }
         elseif($row->status==2)
         {
             ?>
             <td>Rejected</td>
             <td><a href="<?php echo base_url()?>Program/approve2/<?php echo $row->loginid;?>" >Approve</a></td>
             <?php
         }
         else{
             ?>
            <td><a href="<?php echo base_url()?>Program/approve2/<?php echo $row->loginid;?>" >Approve</a></td>
            <td><a href="<?php echo base_url()?>Program/reject2/<?php echo $row->loginid;?>" >Reject</a></td>
            </tr>
            <?php
            }
        }
    }
      else
      {
          ?>
          <tr><td>no data found</td>
          </tr>

         <?php
      }
      ?>

</table>
</form>
</body>
</html>