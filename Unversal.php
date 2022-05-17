<?php
ob_start();
define('API_KEY', 'TOKEN');
$bot = "Bot nomi";
//===========@PhPKodUzb=============//
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
//===========@PhPKodUzb=============//
function bot($method,$datas=[]){
$data = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$data";
$data = file_get_contents($url);
return json_decode($data);
}
//===========@PhPKodUzb=============//
$update = json_decode(file_get_contents('php://input'));
if(isset($update->message)){
$message =$update->message;
$text =$message->text;
$tc =$message->chat->type;
$chat_id =$message->chat->id;
$from_id =$message->from->id;
$message_id =$message->message_id;
$first_name=$message->from->first_name;
$last_name =$message->from->last_name;
$user_name =$message->from->username;
}
//===========@PhPKodUzb=============//
if($text == "/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✊ Assalomu alaykum va rahmatullohi va barokatuh aziz birodarlar.\n 🖇️ Bu bot orqali Instagram, TikTok, Likee dan video yuklashingiz mumkin boʻladi.\n 📌 Buning uchun qaysi ijtimoiy tarmoqdan yuklashingizni belgilab qoʻying.",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>
[['text'=>"TikTok video"]]
[['text'=>"Instagram video"]]
[['text'=>"Likee video"]]
])
]);
}
//===========@PhPKodUzb=============//
$get=json_decode(file_get_contents("http://fakhriddinov.uz/api/index.php?type=tiktok&url=$tiktok"),true);
$url = $get["url"];
$tiktok=file_get_contents("tik.txt");
if($text == "TikTok video"){
file_put_contents("tik.txt",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌 Yuklaydigon tiktok urlni jonating",
'parse_mode'=>'html',
]);  
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$url,
'caption'=>"✅ Bu video bizning botimiz orqali yuklab berildi.\n #By_bot => @$bot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[['text'=>"Admin 🗣️",'url'=>"https://t.me/RShukurullo"]]
])
]);
unlink("tik.txt");
}
//===========@PhPKodUzb=============//
$get = json_decode(file_get_contents("http://fakhriddinov.uz/api/index.php?type=likee&url=$likee"),true);
$url = $get["url"];
$likee =file_get_contents("like.txt");
if($text == "Likee video"){
file_put_contents("like.txt",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌 Yuklaydigon likee urlni jonating",
'parse_mode'=>'html',
]);  
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$url,
'caption'=>"✅ Bu video bizning botimiz orqali yuklab berildi.\n #By_bot => @$bot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[['text'=>"Admin 🗣️",'url'=>"https://t.me/RShukurullo"]]
])
]);
unlink("like.txt");
}
//===========@PhPKodUzb=============//
$get = json_decode(file_get_contents("http://fakhriddinov.uz/api/index.php?type=instagram&url=$inta"),true);
$inta =file_get_contents("inst.txt");
$url = $get["url"];
if($text == "Instagram video"){
file_put_contents("inst.txt",$text);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌 Yuklaydigon Instagram urlni jonating",
'parse_mode'=>'html',
]);  
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$url,
'caption'=>"✅ Bu video bizning botimiz orqali yuklab berildi.\n #By_bot => @$bot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[['text'=>"Admin 🗣️",'url'=>"https://t.me/RShukurullo"]]
])
]);
unlink("inst.txt");
}
//===========@PhPKodUzb=============//
$get=json_decode(file_get_contents("http://fakhriddinov.uz/api/youtube.php?quality=$mp&url=$you"),true);
$videourl = $get["url"];
$rasmi = $get["picture"];
$davomiylik = $get["duration"];
$nomi = $get["title"];
$step = file_get_contents("step.txt");
$mp = file_get_contents("sift.txt");
$you = file_get_contents("you.txt");
//===========@PhPKodUzb=============//
if($text == "YouTube video"){
file_put_contents("you.txt",$text);
file_put_contents("step.txt","bot");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌 Yuklaydigon YouTube urlni jonating",
'parse_mode'=>'html',
]);
if($step == "bot"){
file_put_contents("sift.txt",$text);  
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📌 Yuklaydigon YouTubedagi video sufati yoki mp3 buni misol tariqasida faqat => `360` yoki `480` yoki `MP3`",
'parse_mode'=>"markdown",
]);  
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$rasmi,
'caption'=>"📌 YouTube url : $videourl\n📎 Video nomi : $nomi\n🥫 Videoni sifati : $mp\n🗣️ Davomiyligi: $davomiylik\n",
'parse_mode'=>'html',
]);  
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>$url,
'caption'=>"✅ Bu video bizning botimiz orqali yuklab berildi.\n #By_bot => @$bot",
'reply_markup'=>json_encode([
'inline_keyboard'=>[['text'=>"Admin 🗣️",'url'=>"https://t.me/RShukurullo"]]
])
]);
unlink("you.txt");
}
}