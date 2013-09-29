<?php

$version[0] = <<<EOV
<b>0.1a ("Foundation", closed test), 2013-09-06</b><br>
<i>To succeed, planning alone is insufficient. One must improvise as well.</i><br>
-Standard: Short PHP tags allowed.<br>
-Database: sales, dealer tables, desk user.<br>
-Interface: Created landing page (index.php).<br>
-Interface: Created redirect mode (do_redirect.php).<br>
-Interface: Created programmatic sales report page, need to create form field mechanism to generate reports.<br>
EOV;

$version[1] = <<<EOV
<b>0.2 ("Second Foundation"), 2013-09-24</b><br>
<i>Secrecy as deep as this is past possibility without nonexistence as well.</i><br>
-Standard: Chosen MVC-like structure.<br>
-Interface: Created dealer report generator.<br>
EOV;

foreach (array_reverse($version) as $v) {
    echo "$v<br>"; }

?>
