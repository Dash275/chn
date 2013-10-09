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

$version[2] = <<<EOV
<b>0.5 ("The Restaurant at the End of the Universe"), 2013-10-09</b><br>
<i>In the beginning the universe was created. This has made a lot of people very angry and been widely regarded as a bad move.</i><br>
-Interface: Finished Sales Report generator, although I may go back and change some bits about it later.<br>
-Interface: Finished Dealer Types table interface. It's probably a bit crowded with four functions on the same page, so I may break those up later.<br>
-Interface: Begun Dealer Info table interface. I've opted to do like the types interface, where the top of the screen will show latest entries into the database on multiple pages dedicated to different table functions.<br>
EOV;

foreach (array_reverse($version) as $v) {
    echo "$v<br>"; }

?>
