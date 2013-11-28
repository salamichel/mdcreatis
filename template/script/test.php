

<?php

$md_page = new mdcreatis($db);
$md_page->setPagePath("include/pic/picDV.php");

$r = $md_page->getPageInfo();

print_r($r);

?>