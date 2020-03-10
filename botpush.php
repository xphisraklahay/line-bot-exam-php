<?php



require "vendor/autoload.php";

$access_token = '4G6fYrRvIq3SmwB3H+BSxj7kqfS3GZWXGvOxeuAY20zbcojVJCPOn+07Xwlnn2JgfuutobhdrLicznBg//oKH5JEA/wkR43qZGHkrhOJQmTYpc7deUtJA97ho0LBToPkVobF39rLZ1hO7JbJLHuEyAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'e2c5cad093903935db37e0bec892d5a0';

$pushID = '@054iwnnd';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







