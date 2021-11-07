<?php 


require('../htmlpurifier-4.13.0/library/HTMLPurifier.auto.php');

$config = HTMLPurifier_Config::createDefault();
$purifier = new HTMLPurifier($config);
$input = $_POST;

$clean_html = $purifier->purify($input);

echo $clean_html;


