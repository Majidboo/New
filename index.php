<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
</head>

<?php 
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$User = $_POST['UserText'];
$Pass = $_POST['PasswordUser'];

$user = file_get_contents('file.txt');
 
if(strpos($user , $User) !== false){
echo("DO NOT REAPET THAT EMAIL OR PASSWORD ITS ALREADY USE");

exit;

}




file_put_contents('file.txt', "$User , $Pass\n", FILE_APPEND);

echo("SUCCESSFUL REGISTER");
}
?>