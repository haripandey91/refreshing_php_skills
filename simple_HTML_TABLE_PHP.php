<!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<?php  
$ages = array("Harri"=>"28", "Jani"=>"27", "Olli"=>"31", "Pentti"=>"26");

?>
<div style="overflow-x:auto;">
    <table>
        <tr>
            <th>Name</th>
            <th>age</th>
        </tr>
        <?php foreach($ages as $name => $age){ ?>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $age;?></td>
        </tr><br>	
        <?php }?>
    </table>
    </div>
</body>
</html>
