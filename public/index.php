<?php
include_once('classes/dataBaseShell.php');

$dbSh = new DataBaseShell("MySQL-8.0", "root", "", "for_php_education");

// $result = $dbSh->save('users',['name'=>'user7', 'age'=>24]);
// $result = $dbSh->del('users', 15);
// $result = $dbSh->delAll('users', [14, 13, 12, 11]);
// $result = $dbSh->get('users', 1);
$result = $dbSh->getAll('users', [1,2,3,4,5]);
// var_dump($result);
$result = json_encode($result);

?>
<script>console.log(<?=$result?>)</script>
