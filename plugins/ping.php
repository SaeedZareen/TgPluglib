<?php
$plugin_info = [
  "name"=>"Ping",
  "description"=>"This is very simple plugin for ping,pong game",
  "developer"=>"@EMlNEM"
];
if ($textmessage == "/ping") {
  SendMessage($chat_id,"pong");
}
 ?>
