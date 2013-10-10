<?php include_once "./entry_controller.php"; ?>
<?php initialize(); ?>
<?php include_once "./sales_widget.php" ?>

<b>New Line Item</b>
<form action="" method="POST">
  *Date (e.g. 12/21/1999):<input type="text" name="date" /><br />
  *Dealer # (e.g. 107, 2107):<input type="text" name="id" /><br />
  Ticket #:<input type="text" name="ticket" /><br />
  Stock #:<input type="text" name="stock" /><br />
  *Description:<input type="text" name="desc" /><br />
  Notes:<input type="text" name="note" /><br />
  Regular Price:<input type="text" name="ask" /><br />
  *Sold For:<input type="text" name="sold_for" /><br />
  +Dealer Split (e.g. .5, .9):<input type="text" name="split" /><br />
  +Dealer Earn (e.g. 40.00, 35.50):<input type="text" name="earn" /><br />
  Paid By:<input type="text" name="paid_by" /><br />
  <input type="submit" name="New Dealer">
</form><br>

<i>Items marked with a * are required, items marked by a + will attempt to calculate the appropriate final value if left empty.</i>

