<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
define('_MYSQL_SET_SQL_MODE',true);
$GLOBALS['spip_connect_version'] = 0.7;
spip_connect_db('localhost','','root','root','vayaterra','mysql', 'spip','');
//spip_connect_db('localhost','','vayaterra','PrJ4cdnl15','vayaterra','mysql', 'spip','');
?>