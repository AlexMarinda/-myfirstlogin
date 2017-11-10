
<?php 
include("connect.php");
$
$query="SELECT * from members where address='$a' or hobby='$a'";
$result=mysql_query($query);
if(!$result)
{
echo"sorry no found!";
} 
while($row=mysql_fetch_array($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['fname']; ?></td>
<td><?php echo $row['sname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['dob']; ?></td>
<td><?php echo $row['dor']; ?></td>
<td><?php echo $row['address']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['contact']; ?></td>
<td><?php echo $row['hobby']; ?></td>
<td> <img src="picperson/<?php echo $row['picture'];?>" width="150" height="150" > </td>
</tr>
<?php
} 
?>