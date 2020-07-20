<?
include 'tgLib.php';

const TOKEN = '1346412352:AAH3-7Dd0znL894s23c3rujQpuej-v3ex9Y';
$bot = new tgBot(TOKEN);
$data = json_decode(file_get_contents('php://input'),true);
if (!$data) die;
$text = strtolower($data['message']['text']);
$peer_id = $data['message']['chat']['id'];
$id = $data['message']['from']['id'];
$first_name = $data['message']['from']['first_name'];
if ($data['message']['reply_to_message']['from']['id']) {$reply_author = $data['message']['reply_to_message']['from']['id'];}
if ($data['message']['reply_to_message']['message_id']) {$reply_message_id = $data['message']['reply_to_message']['message_id'];}

if ($text)
{
    if ($text == "ид чата") $bot->reply($peer_id, $peer_id);

    if ($text == "тест1")
    {
        $bot->reply($peer_id, 'В условии');
        $bot->reply($peer_id, 'de_dust');
    }
    if ($text == "тест2")
    {
        $bot->reply($peer_id, 'В условии');
        $bot->reply($peer_id, 'de+dust');
    }
}
exit('ok'); //tg can be shocked if willn't see 'ok'))))