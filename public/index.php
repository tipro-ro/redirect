<?php 

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

header('Location: https://tipro.ro/?utm_source='.$actual_link.'&utm_medium=redirect&utm_campaign='.$_SERVER['SERVER_NAME']);
header('X-love: necenzurat');

exit;