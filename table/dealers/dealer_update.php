<?php
include_once "./update_controller.php";
initialize();
include_once "./dealers_widget.php";
?>

<b>Update A Dealer</b>
<form action="" method="POST">
ID #:<input type="text" name="id" /><br><br><br>

New Initials:<input type="text" name="initials" /><br>
New ID #:<input type="text" name="new_id" /><br>
New Type:<input type="text" name="type" /><br>
New First Name:<input type="text" name="fname" /><br>
New Last Name:<input type="text" name="lname" /><br>
New Street Address:<input type="text" name="street" /><br>
New City:<input type="text" name="city" /><br>
New State:<input type="text" name="state" /><br>
New Phone:<input type="text" name="phone" /><br>
New e-mail:<input type="text" name="email" /><br>
New Split:<input type="text" name="split" /><br>
  <input type="submit" name="Update" />
</form>
