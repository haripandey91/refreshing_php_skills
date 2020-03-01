<!DOCTYPE html>
<html>
<body>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<?php  
$ages = array("Harri"=>"28", "Jani"=>"27", "Olli"=>"31", "Pentti"=>"26");

?>
<table>
	<tr>
    	<th>Name</th>
        <th>age</th>
    </tr>
 <?php foreach($ages as $name => $age){ ?>
    <tr>
    	<td><?php echo $name; ?></td>
        <td><?php echo $age;?></td>
    </tr>
    <br>	
   <?php }?>

</table>

</body>
</html>
