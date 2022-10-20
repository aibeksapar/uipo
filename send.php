<?php



$name = $_POST['input-name'];
$email = $_POST['input-email'];
// $select = $_POST['input-select'];


function parser($url) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($curl);
	if($result == false) {
		echo "Ошибка отправки запроса: " . curl_error($curl);
		return false;
	} else {
		return true;
	}
}


$message .= "Новое сообщение из формы";
$message .= "Имя: ".$name;
$message .= "Почта: ".$email;
// $message .= "Услуга: ".$select;

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5653817837:AAHwz1BWKQ2u4ZSLwCqLhbffIcNXLHnj5yI";

//Сюда вставляем chat_id
$chat_id = "-551351818";

parser("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}");

?>