<?php
header("Content-type: text/html; charset=utf-8");

//Через POST внешний скрипт получает такие данные от редактора как username, введенный пользователем текст и т.д.

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$body = $_POST['body'];

$return_mas = array();
$return_mas['status'] = 0;

if($user_id > 0)//Имеет смысл делать проверку на user_id чтобы скрипт отрабатывал только в ответ на телеграм запрос
{
	if($body == "start")
		$con = "Хелло, добро пожаловать в историю финала. /n
Каков ответ?" . $username;
	else
	if($body == "goodbye")	
		$con = "Умница, сил тебе:/n55.764808,37.678148/n55.7639219, 37.6955673/n55.767124, 37.687979/n55.780087, 37.674239";	
else
	if($body == "Goodbye")	
		$con = "Умница, сил тебе:/n55.764808,37.678148/n55.7639219, 37.6955673/n55.767124, 37.687979/n55.780087, 37.674239";
else
	if($body == "goodbye.")	
		$con = "Умница, сил тебе:/n55.764808,37.678148/n55.7639219, 37.6955673/n55.767124, 37.687979/n55.780087, 37.674239";
else
	if($body == "Goodbye.")	
		$con = "Умница, сил тебе:/n55.764808,37.678148/n55.7639219, 37.6955673/n55.767124, 37.687979/n55.780087, 37.674239";	
	else
		$con = "Ты сильнее, чем ты думаешь. Постарайся остаться со мной на протяжении всего пути.";
	
	$return_mas['status'] = 1;//Необходимо вернуть 1
	$return_mas['body'] = $con;//что ответить пользователю
	$return_mas['type'] = 'update';

	
}	

echo json_encode($return_mas);//Сериализуем массив. Редактор поймет ответ тлько в таком виде

?>