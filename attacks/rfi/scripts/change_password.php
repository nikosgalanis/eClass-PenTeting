<?php
set_include_path('./../');
// If running on files exchange, remove a ../ from the path
chdir('./../../../../');
echo getcwd();

include "index.php";
// Changing every user's password to 'password'
$upd = "UPDATE user
SET password = '5f4dcc3b5aa765d61d8327deb882cf99'
WHERE use ";
db_query($upd, $mysqlMainDb);

?>