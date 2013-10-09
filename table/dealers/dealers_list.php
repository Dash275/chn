<?php include_once "./dealers_model.php"; ?>

<h3>Dealers and Consignors</h3>
<table border="1">
  <tr>
    <th>Dealer ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>e-mail</th>
    <th>Contractual Split</th>
  </tr>

<?php

$full_table = full_table();
while ($r = mysqli_fetch_assoc($full_table))
{

?>

  <tr>
    <td><?= $r["dealer_initials"] . $r["dealer_id"]
          . $r["dealer_class"] ?></td>
    <td><?= $r["dealer_fname"] . " " . $r["dealer_lname"] ?></td>
    <td><?= $r["dealer_street"] . "<br>" . $r["dealer_city"] . ", "
          . $r["dealer_state"] ?></td>
    <td><?= $r["dealer_phone"] ?></td>
    <td><?= $r["dealer_email"] ?></td>
    <td><?= $r["dealer_split"] ?></td>
  </tr>

<?php
}
?>
