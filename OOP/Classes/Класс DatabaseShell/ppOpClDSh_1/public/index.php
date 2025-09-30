<?php
include_once('classes/dataBaseShell.php');

$db = new DataBaseShell("MySQL-8.0", "root", "", "for_php_education");

$userArr = [
	['name'=>'user1', 'age'=>23],
	['name'=>'user2', 'age'=>24],
	['name'=>'user3', 'age'=>25],
	['name'=>'user4', 'age'=>26],
	['name'=>'user5', 'age'=>27]
];
$answerArr =[];
$result = $db->save('users',$userArr[0]);
echo $result['msg'];echo'<br/>';
$answerArr[] = $result;

$result = $db->save('users',$userArr[1]);
echo $result['msg'];echo'<br/>';
$answerArr[] = $result;

$result = $db->save('users',$userArr[2]);
echo $result['msg'];echo'<br/>';
$answerArr[] = $result;

$result = $db->del('users', 1);

$answerArr[] = $result;

$result = $db->delAll('users', [1, 2, 8, 11]);
for($answerArr; $res = array_pop($result); $answerArr[] = $res);


$result = $db->get('users', 1);
$answerArr[] = $result;

$result = $db->get('users', 65);
$answerArr[] = $result;

$result = $db->getAll('users', [1,2,33,44,77]);
for($answerArr; $res = array_pop($result); $answerArr[] = $res);


$result = $db->selectAll('users', 'where id >= 2');
$answerArr[] = $result;
$result = json_encode($answerArr);

?>
<script>console.log(<?=$result?>)</script>
