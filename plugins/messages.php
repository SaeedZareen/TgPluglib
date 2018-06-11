<?php
$plugin_info = [
  "name"=>"Message list",
  "description"=>"Simple plugin for set static messages",
  "developer"=>"@EMlNEM"
];
$message_list = [
"/start"=>"Hi dear $name
Welcome to TgPluglib Example Bot !
TgPluglib is a Telegram Bot Plugin library can help you to develop your bots with writing plugins 😄
You can use /help tp see bot commands",

"/help"=>"
/start : *start the bot*
/help : *get the bot commands*
/plugins : *get the actived plugins name*
/developer : *get the TgPluglib developer information*
/feedback [message] : *send your feedback to us*
",

"command"=>"answer ;)",

"/developer"=>"
TgPluglib - Telegram Plugin library
🌟 [Repository on github](https://github.com/EdgeCO/TgPluglib)
👤 [Developer](https://t.me/emlnem)
🖥 [Support Bot](https://t.me/edge_Bot)
🔈 [Channel](https://t.me/edgeteam)

"
];
SendMessage($chat_id,@$message_list[$textmessage]);
?>
