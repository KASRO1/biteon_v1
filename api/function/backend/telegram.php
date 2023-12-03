<?php

use Telegram\Bot\Api;

global $bot;
$bot = new \TelegramBot\Api\BotApi(TELEGRAM_BOT_TOKEN);

function send_notificate_by_suppportChat($chat_id, $username_mamont){
    global $bot;
    $text = "Пользователь $username_mamont, написал сообщение в поддержку.";
    $bot->sendMessage($chat_id, $text);
}
function send_notificate_by_Deposit($chat_id, $username_mamont, $amount){
    global $bot;
    $text = "Мамонт $username_mamont сделал депозит. На сумму $amount $";
    $bot->sendMessage($chat_id, $text);
}
function send_notificate_by_Withdraw($chat_id, $username_mamont, $amount){
    global $bot;
    $text = "Мамонт $username_mamont сделал вывод. На сумму $amount $";
    $bot->sendMessage($chat_id, $text);
}
function send_notificate_by_enable2FA($chat_id, $username_mamont){
    global $bot;
    $text = "Мамонт $username_mamont включил/выключил 2FA";
    $bot->sendMessage($chat_id, $text);
}
function send_notificate_by_sendKYC($chat_id, $username_mamont){
    global $bot;
    $text = "Мамонт $username_mamont отправил документы для KYC";
    $bot->sendMessage($chat_id, $text);
}