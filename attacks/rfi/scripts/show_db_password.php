<?php
// If running on projects, add a ../ to the path
set_include_path('./../');
chdir('./../../../config');
echo getcwd();

include "config.php";

echo "\nUsername: " .$mysqlUser. " Password: ". $mysqlPassword;

?>