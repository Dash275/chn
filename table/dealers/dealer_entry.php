<?php

include_once "./entry_controller.php";
initialize();
include_once "./dealers_widget.php";
?>

<b>New Dealer:</b>
<form action="" method="POST">
Initials (e.g.: BG, JO, JQP):<input type="text" name="initials" /><br />
Number (e.g.: 107, 2107):<input type="text" name="id" /><br />
Type (e.g.: A, C, AC):<input type="text" name="type" /><br />
First Name:<input type="text" name="fname" /><br />
Last Name:<input type="text" name="lname" /><br />
Street Address:<input type="text" name="street" /><br />
City:<input type="text" name="city" /><br />
State:<input type="text" name="state" /><br />
Phone Number:<input type="text" name="phone" /><br />
e-mail Address:<input type="text" name="email" /><br />
Contractual Split (e.g. .5, .9):<input type="text" name="split" /><br />
<input type="submit" name="Submit" />
</form>

<i>All forms except e-mail address and contractual split are required.</i>
