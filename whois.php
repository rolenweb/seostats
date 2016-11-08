<?php
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require(__DIR__ . '/vendor/autoload.php');
}

use phpWhois\Whois;

$whois = new Whois();

$query = 'rolenweb.ru';
$result = $whois->lookup($query,false);
echo "<pre>";
print_r($result);
echo "</pre>";

?>