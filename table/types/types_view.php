<?php
include_once 'types_controller.php';

initialize();

$table = show_table();
?>

<table border="1">
<tr><th>Type</th><th>Split</th></tr>
<?php
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
