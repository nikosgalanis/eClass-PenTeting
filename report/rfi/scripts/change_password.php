<?php
set_include_path('./../../');
// If running on files exchange, remove a ../ from the path
chdir('./../../../');

include "index.php";
// Changing every user's password to 'password'
$upd = "UPDATE user
SET password = '1a1dc91c907325c69271ddf0c944bc72'
WHERE user.username = 'ncalathes33'  ";
db_query($upd, $mysqlMainDb);

?>
