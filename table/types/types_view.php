<?php
include_once 'types_controller.php';

initialize();

?>

<table border="1">
<tr><th>Type</th><th>Split</th></tr>
<?php
$table = show_table();
while ($row = mysqli_fetch_array($table))
    {
    ?>
    <tr>
    <td><?= $row['dealer_type'] ?></td>
    <td><?= $row['dealer_split'] ?></td>
    </tr>
    <?php
    }
    ?>
</table><br>

<b>New Type</b>
<form action="" method="POST">
New Type: <input type="text" name="new_type" /><br />
Dealer Split: <input type="text" name="new_split" /><br />
<input type="submit" name="Create New" />
</form>

<b>Change Split</b>
<form action="" method="POST">
Dealer Type: <input type="text" name="spl_type" /><br />
New Split: <input type="text" name="spl_new_split" /><br />
<input type="submit" name="Change Split" />
</form>

<b>Change Type ID</b>
<form action="" method="POST">
Old Type: <input type="text" name="type_old" /><br />
New Type: <input type="text" name="type_new" /><br />
<input type="submit" name="Change ID" />
</form>

<b>Delete Type</b>
<form action="" method="POST">
Type: <input type="text" name="del_type" /><br />
<input type="submit" name="Delete Type" />
</form>
