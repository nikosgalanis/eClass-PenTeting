<?php
    
ini_set('include_path', '../');
chdir('./../../../../');

$query = " SELECT * 
           FROM user
           where user.name == 'drunkadmin'
";

db_query($query, $mysqlMainDb);

?>