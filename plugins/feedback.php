<?php
$plugin_info = [
  "name"=>"FeedBack",
  "description"=>"This plugin can help you to send your feedback to bot admins & admins can answer you",
  "developer"=>"@EMlNEM"
];
if (strpos($textmessage,"/feedback") !== false) {
  $n = 0;
  $admins_count = count($admins) - 1;
  while ($n <= $admins_count) {
    Forward($admins[$n],$chat_id,$message_id);
    $n++;
  }
  SendMessage($chat_id,"Your message was sent to admins successfully .");
}
if ($reply != null) {
  SendMessage($reply,"[$name](tg://user?id=$from_id) : ".$textmessage);
  SendMessage($chat_id,"Answer was sent successfully .");
}
 ?>
