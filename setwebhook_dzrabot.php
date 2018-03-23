<?php
function regHandler($token, $murl)
{
$url = "https://api.telegram.org/bot" . $token . "/setWebhook";
$ch = curl_init();
$optArray = array(
CURLOPT_URL => $url,
CURLOPT_POST => true,
CURLOPT_SAFE_UPLOAD => false,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POSTFIELDS => array('url' => $murl)
);
curl_setopt_array($ch, $optArray);
$result = curl_exec($ch);
echo "<pre>";
print_r($result);
echo "</pre>";
curl_close($ch);
}
 
$token = '185520626:AAE5J2aL6eGaqTQjqj4ohkDFKanDHpSJYDw'; // ТОКЕН БОТА 
$handlerurl = 'https://jiharb.github.io/bothook.php'; // ССЫЛКА НА ФАЙЛ ОБРАБОТЧИК
regHandler($token, $handlerurl);

//https://api.telegram.org/bot297467025:AAGOxo5ILf91cMmKY_IkGwI9tZbG0EZBUxk/getwebhookinfo
// urlencode
?>