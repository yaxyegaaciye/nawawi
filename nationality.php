<?php
$conn=new mysqli("localhost","root","","simpledata");
// mysqli_select_db($link,"");
?>
<form name="nationilty" action="" method="POST">
<table>
<tr>
<td></td>
<td> <select style="width:450px ; height:31px;" name="nationality" > 
<option> Select your country </option>
<?php
$sql= "SELECT * FROM nationality";
$res=$conn->query($sql);
while($row=$res->fetch_assoc())
{ ?>
<option><?php echo  $row["name"]; ?></option>
    <?php
}
?>
</select></td></tr>
</table>
</form>

