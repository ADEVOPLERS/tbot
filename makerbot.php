<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#000000">
<link rel="apple-touch-icon-precomposed" href="/inc/style/img/app-icon.png">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/inc/style/style.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Хостинг, Посуточный оплата,  Мобильный Хостинг,Мобильный Хостинг,, php 7, ffmpeg, GD,(pdo) MySQL(i), sqlite, Curl,IonCube, выбор версии php"/>
<meta name="description" content="Хостинг от  – качественный веб hosting сайтов c круглосуточной поддержкой. Надежный linux хостинг в Азие []"/> 
<meta name="author" content=""/>
<meta name="copyright" content="!"/>
<meta http-equiv="content-language" content="ru"/>
<title>Менеджер Файлов</title></head><body><header>
         <table>
            <tr>
               <td class="l_bar">
<a href="/"><img src="/inc/style/img/home.png" width="23"  alt="home"></a>
               </td>
               <td class="c_bar">
                  <h1 id="logo"><b>BigTurn.Ru - Менеджер сайтов</b></h1>
               </td>
               <td class="r_bar">
<a href="https://BigTurn.Ru/user/menu" title="Кабинет"><img width="25" src="/img/us2.png" alt="Кабинет"></a>
</td> </tr>
         </table>
      </header><div class="mOm"><div class="block first"><?php

define('API_KEY',"API_TOKEN"); 

$admin = "ADMIN_ID";

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

function joinchat($chatid){
    global $name, $cmid;
    $ch1 = file_get_contents("ch1.txt");
    $result = bot('getChatMember',[
    'chat_id'=>"@".$ch1."",
    'user_id'=>$chatid
    ])->result->status;
    if($result == "creator" or $result == "administrator" or $result == "member"){
        return true;
    } else {
        bot('deleteMessage',[
        'chat_id'=>"-100",        'message_id'=>$cmid
        ]); 
        bot('sendMessage',[
        'chat_id'=>$chatid,
        'text'=>"☑️ Xurmatli foydalanuvchi botda ishlashda muommolar bo'lmasligi uchun @$ch1 kanaliga A'zo bo'lishingiz kerak! Shundan so'ng Botni toʻliq ishlatishingiz mumkin!",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
         [['text'=>"➕Bot News",'url'=>"https://t.me/$ch1"],],
        [['text'=>"➕Loyiha Dasturchilari",'url'=>"https://t.me/KomilovOffical"],],
        [['text'=>"✅ Tekshirish",'callback_data'=>"tekshir"]]
        ]
        ])
        ]);
        return false;
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$cid = $message->chat->id;
$tx = $message->text;
$from_id = $update->message->from->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$fid = $message->from->id;
$callback = $update->callback_query;
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$cqid = $update->callback_query->id;

$photo = $update->message->photo;
$gif = $update->message->animation;
$video = $update->message->video;
$music = $update->message->audio;
$voice = $update->message->voice;
$sticker = $update->message->sticker;
$document = $update->message->document;
$for = $message->forward_from;
$forc = $message->forward_from_chat;
$data = $callback->data;
$callid = $callback->id;
$cname = $calback->message->from->first_name;
$ccid = $callback->message->chat->id;
$cmid = $callback->message->message_id;
$cfid = $callback->message->from->id;
$user = $message->from->username;
$botname = bot('getme',['bot'])->result->username; // @ belgisiz yozing
$inlinequery = $update->inline_query;
$inline_id = $inlinequery->id;
$inlineid = $inlinequery->from->id;
$inline_query = $inlinequery->query;
$adminuser = "@KOMILOVo1";
$time=date('H:i',strtotime('2 hour'));
$soat = date("H:i",strtotime("2 hour"));
$sana = date('d.m.Y',strtotime("2 hour"));
$user = file_get_contents("Unknown_Blogger.ids");
$guruh = file_get_contents("pul/guruh.db");
$blocklar = file_get_contents("block.dat");
mkdir("referal");
mkdir("stat");
mkdir("step");
mkdir("user");
mkdir("prouser");
mkdir("user/$fid");
mkdir("prouser/$fid");
mkdir("ban");
if(!file_exists("referal/$fid.txt")){  
    file_put_contents("referal/$fid.txt","0");
}

if(file_get_contents("stat/stat.txt")){
} else{
file_put_contents("stat/stat.txt", "0");
}

$referalsum = file_get_contents("referal/$fid.txt");
$referalid = file_get_contents("referal/$fid.referal");
$referalcid = file_get_contents("referal/$ccid.referal");
$userstep = file_get_contents("step/$fid.txt");

$soni = file_get_contents("soni/$idi.soni");
if(!$soni) $soni = 0;

$stat = file_get_contents("stat/usid.txt");

$panel = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
    [['text'=>"💸 Pul berish"],['text'=>"💸 Pul ayirish"]],
    [["text"=>"🛠 Kanal parametrlari"],],
    [['text'=>"❌ OFF"],['text'=>"✅ ON"]],
    [['text'=>"🔒 Bloklash"],['text'=>"🔓 Blokdan olish"]],
    [['text'=>"↗️ Xabar yuborish"],['text'=>"📋 Userga Xabar"]],
    [['text'=>"📊 Statistika"]],
    [['text'=>"🎫 Promokod yaratish"],['text'=>"🔙Ortga qaytish"]],
    ]
    ]);
    
    $kanal_menu = json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"🛠 Majburiy obuna"],["text"=>"🛠 Yangiliklar kanali"]],
[["text"=>"🔙Ortga qaytish"]],
]
]);

$main_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🛠Bot yaratish"],['text'=>"2️⃣-Bo'lim"]],
[['text'=>"💸 Pul ishlash"],['text'=>"💰Balans"]],
[['text'=>"📊 Statistika"],['text'=>"🆘️Yordam"]],
[['text'=>"💎Botlar Bo'limi"],['text'=>"🔰Bot ulash"]],
]
]);

$pul_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"👥 Takliflar"],['text'=>"💰 Xarid qilish"]],
    [['text'=>"🔙Ortga qaytish"]],
]
]);

$bot_menu = json_encode([
    'resize_keyboard'=>true,
     'keyboard'=>[
[['text'=>"🆓️ Bepul bot"],['text'=>"🔥Maxsus bo'lim"]],
[['text'=>"🔙Ortga qaytish"]]
]
]);

$kup_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌟GooMakerBot"],['text'=>"🌟PayMakerBot"]],
[['text'=>"🔙 Orqaga"]],
]
]);

$paybot_menu = json_encode([
    'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➕Nakrutka bot"]],
    [['text'=>"💰Pul bot (rubl)"],['text'=>"💰Pul bot (so'm)"]],
    [['text'=>"📦Uc bot"],['text'=>"🇺🇸Usa bot"]],
    [['text'=>"📦BC bot"],['text'=>"📦MB bot"]],
[['text'=>"🥳Konkurs bot"]],
    [['text'=>"🔙 Orqaga"]],
    ]
    ]);

$yordam_menu = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
   [['text'=>"📞Murojaat"],['text'=>"⚡Tizim yangiliklari"]],
      [['text'=>"ℹ️Bot haqida"],['text'=>"📽️Video qoʻllanma"]],
      [['text'=>"🔙Ortga qaytish"]],
      ]
      ]);
      
$akbarxon_menu = json_encode([    
        'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"📚Isimlar ma'nosi"],['text'=>"🅰️Harfga video"]],
    [['text'=>"📥FaylEdit"],['text'=>"🔢Misol yechish"]],
    [['text'=>"🎄 Yangi Yil"],['text'=>"📝 Telegram tillari"]],
    [['text'=>"👨‍💻Dasturchi"],['text'=>"🔐Random Parol"]],
    [['text'=>"🗃 Muchallar"],['text'=>"💽Dasturlar"]],
[['text'=>"🔙 Orqaga"]],
]
]); 

$xost_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📂Fayl ulash"]],
[['text'=>"🔙 Orqaga"]],
]
]); 
      
$apk_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔍Dastur qidirish"]],
[['text'=>"🔰Simulator"],['text'=>"😺Tom"],['text'=>"🚍Truck"]],
[['text'=>"🟣Helix jump"],['text'=>"⚪Hit & Knock down"]],
[['text'=>"🎮Special forges group2"]],
[['text'=>"🚘Beach Buggy Racing 2"]],
[['text'=>"🔙 Orqaga"]],
]
]);
      
$muchal_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🐓Xo'roz"],['text'=>"🐀Sichqon"]],
[['text'=>"🐄Ho'kiz"],['text'=>"🐅Yo'lbars"]],
[['text'=>"🐒Maymun"],['text'=>"🐖To'ng'iz"]],
[['text'=>"🐇Quyon"],['text'=>"🐠Baliq"],['text'=>"🐕It"]],
[['text'=>"🐍Ilon"],['text'=>"🐎Ot"],['text'=>"🐑Qo'y"]],
[['text'=>"⬅️ Orqaga"]],
]
]);

$harf_menu = json_encode([
    'inline_keyboard'=>[
    [['text'=>"A"],['text'=>"B"],['text'=>"D"]],
    [['text'=>"E"],['text'=>"F"],['text'=>"G"]],
    [['text'=>"H"],['text'=>"I"],['text'=>"J"]],
    [['text'=>"K"],['text'=>"L"],['text'=>"M"]],
    [['text'=>"N"],['text'=>"O"],['text'=>"P"]],
    [['text'=>"Q"],['text'=>"R"],['text'=>"S"]],
    [['text'=>"T"],['text'=>"U"],['text'=>"V"]],
    [['text'=>"X"],['text'=>"Y"],['text'=>"Z"]],
    [['text'=>"SH"],['text'=>"CH"]],
[['text'=>"🔙 Orqaga"]],
    ]
    ]);
     
$boshqar_menu = json_encode([
  'resize_keyboard'=>true,
  'keyboard'=>[
    [['text'=>"➕ Bot qo'shish"],['text'=>"⚙️ Botni sozlash"]],
    [['text'=>"🔙Ortga qaytish"]],
    ]
    ]);
    
  $bots_menu = json_encode([
        'resize_keyboard'=>true,
'keyboard'=>[
     [['text'=>"👮‍♂️ Posbon bot"],['text'=>"❤️ Channel like"]],
    [['text'=>"🕋Quron bot"],['text'=>"⚡Webhook bot"]],
    [['text'=>"📽️Gif bot"],['text'=>"💰 Pul bot (som)"]],
    [['text'=>"🖼️Logo bot"],['text'=>"👨‍👨‍👧‍👦Go'zalik test bot"]],
[['text'=>"📥FaylEdit bot"],['text'=>"🎤Music bot"]],
[['text'=>"🟣Pechat bot"],['text'=>"✅XaYoki❌Yoq"]],
[['text'=>"🔍Qidir bot"],['text'=>"📨Konvertor bot"]],
[['text'=>"⤴️Tarjimon bot"],['text'=>"📥Down"]],
    [['text'=>"🔙 Orqaga"]],
    ]
    ]);

$maxsus_menu = json_encode([
    'resize_keyboard'=>true,
'keyboard'=>[
    [['text'=>"🔵Uzmobile"],['text'=>"🍉Tarvuz bot"]],
    [['text'=>"©️Vunder bot"],['text'=>"🌌Back Ground"]],
    [['text'=>"🎤Vkm bot"],['text'=>"🗃Mukammal bot"]],
    [['text'=>"🖲Majbur bot"],['text'=>"🤡Suhbatchi bot"]],
    [['text'=>"🌐OnlineTest bot"],['text'=>"🗄ZArchiver bot"]],
   [['text'=>"🌐UrlUpload"],['text'=>"📙Pr Bot"]],
   [['text'=>"🟣XarfgaVideo"],['text'=>"🌟Supper nick"]],
    [['text'=>"🔙 Orqaga"]],
    ]
    ]);

$sozlash_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
      [['text'=>"📋 Mening botim"],['text'=>"🗑️ Botni o'chirish"]],
      [['text'=>"⬅️Orqaga"]],
      ]
      ]);
      
$back_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Ortga qaytish"]],
]
]);

$bek_menu = json_encode([
      'resize_keyboard'=>true,
      'keyboard'=>[
          [['text'=>"⬅️Orqaga"]],
          ]
          ]);
       
       $ketik_menu = json_encode([
         'resize_keyboard'=>true,
         'keyboard'=>[
           [['text'=>"🔙 Orqaga"]],
           ]
           ]);
           
$chiq_menu = json_encode([
     'resize_keyboard'=>true,
     'keyboard'=>[
          [['text'=>"⬅️ ortga"]],
          ]
          ]);
          
  $keyin_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
      [['text'=>"⬅️ Orqaga"]],
      ]
      ]);
      
  $ka_menu = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
      [['text'=>"⬅️Orqaga"]],
      ]
      ]);
      
$bekor_menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Ortga qaytish"]],
]
]);

$getss = file_get_contents("ban/banid.txt");
if(mb_stripos($getss, $tx)!==false){
bot('sendMessage',[
'chat_id' => $cid,
'text' => "Kechirasiz <b>$name</b> siz 🚫bloklangansiz!",
'parse_mode'=>'html',
]); 
return false;
}

if(isset($message)){
    $get = file_get_contents("stat/usid.txt");
    if(mb_stripos($get,$fid)==false){
        file_put_contents("stat/usid.txt", "$get\n$fid");
        bot('sendMessage',[
          'chat_id'=>"@$ch4",
          'text'=>"😄 Yangi aʼzo\n👤 Ismi: $name\n🆔 raqami: $fid\n✳️ Usernamesi: @$username\n💡 Lichka: <a href='tg://user?id=$fid'>$name</a>",
 'parse_mode'=>'html',
           'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"🛠️Bot ochish",'url'=>"https://t.me/$botname"]],
              ]
              ])
          ]);
    }
}

if($inlineid !== NULL){
bot('answerInlineQuery',[
    'inline_query_id'=>$inline_id,
    'cache_time'=>1,
    'results'=>json_encode([
    ['type'=>'article',
    'id'=>1,
    'title'=>"✅Referal havolangizni yuborish uchun bosing",
    'input_message_content'=>[
    'disable_web_page_preview'=>true,
    'parse_mode'=>'MarkDown',
    'message_text'=>"⚡️ Bir necha daqiqada o'z Telegram botingizga ega bo'ling!

⬇️ Buning uchun quyidagi botga kirish tugmasi orqali botimizga otib bot yarating!",
    ],
    'reply_markup'=>[
     'inline_keyboard'=>[
     [['text'=>"➕ Botga kirish",'url'=>"https://t.me/$botname?start=$inlineid"]]
     ]
     ]
     ],
])
]);
}

if ($tx == "/start"){
    if(joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id' => $cid,
    'text' => "☇ Salom $name

Sizni botda ko‘rib turganimdan xursandman!
  @$botname  orqali siz o‘zingizning shaxsiy botlaringizni hech qanday qiyinchiliklarsiz yaratishingiz mumkin!

<b>⬇ Ishni boshlash uchun quyidagi tugmalardan foydalaning!</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$main_menu
    ]);
}
} elseif (mb_stripos($tx, "/start")!==false) {
    if(joinchat($fid)=="true"){
        bot('sendMessage',[
        'chat_id' => $cid,
        'text' => "☇ Salom $name

Sizni botda ko‘rib turganimdan xursandman!
@$botname orqali siz o‘zingizning shaxsiy botlaringizni hech qanday qiyinchiliklarsiz yaratishingiz mumkin!

<b>⬇ Ishni boshlash uchun quyidagi tugmalardan foydalaning!</b>",
        'parse_mode'=>'html',
        'reply_markup'=>$main_menu
        ]);
        
        if(mb_stripos($stat, $fid)==false){
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        $olmos = file_get_contents("referal/$ex[1].txt");
        $olmoslar = $olmos + 5;
        file_put_contents("referal/$ex[1].txt", $olmoslar);
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>Tabriklaymiz siz botimizga do'stingizni taklif qildingiz va do'stingiz kanalimizga a'zo bo'ldi buning uchun sizga 5 ta olmos berildi</i>!",
        'parse_mode'=>'html'
        ]);
        }
        }

    }else{
        if(mb_stripos($stat, $fid)==false){      
        $ex = explode(" ", $tx);
        if($ex[1] == $cid){
        }else{
        bot('sendMessage',[
        'chat_id'=>$ex[1],
        'text'=>"📡<i>Tabriklaymiz siz botimizga do'stingizni taklif qildingiz! Ammo do'stingiz kanalimizga hali a'zo bo'lmadi. Do'stingiz kanalimizga a'zo bo'lsa sizga 5 olmos beriladi!</i>",
        'parse_mode'=>'html'
        ]);
        file_put_contents("referal/$fid.referal", $ex[1]);
    }
    }else{
        unlink("referal/$fid.referal");
    }
    }
}


if($data == "tekshir"){
    if(joinchat($ccid) == "true"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid
        ]); 

        if($referalcid == true){
        $olmos = file_get_contents("referal/$referalcid.txt");
        $olmoslar = $olmos + 5;
        file_put_contents("referal/$referalcid.txt", $olmoslar);
         bot('sendMessage',[
        'chat_id'=>$referalcid,
        'text'=>"🔔<i>Tabriklaymiz do'stingiz kanalimizga a'zo bo'ldi va sizga 5 ta olmos berildi!</i> ",
        'parse_mode'=>'html'
        ]);
         unlink("referal/$ccid.referal");
     }

        bot('sendMessage',[
        'chat_id'=>$ccid,
        'text'=>"<b>Yaxshi siz bizning kanalimizga a'zo bo'ldingiz!</b>\n\n<b>⬇️Ishni boshlash uchun quyidagi tugmalardan foydalaning</b>",
        'parse_mode'=>"html",
        'reply_markup'=>$main_menu
        ]);
    }else{
        bot("answerCallbackQuery",[
        "callback_query_id"=>$callid,
        "text"=>"❌Siz hali kanalimizga aʼzo boʻlmadingiz!",
        "show_alert"=>true,
        ]);
    }
}

if($tx == "🔙Ortga qaytish" and joinchat($fid)=="true"){
    unlink("step/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❌ <b>Bekor qilindi!</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx == "📚Isimlar ma'nosi" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
        'text'=>"<b>📙Ismingiz ma'nosini bilish uchun:\nBotimizga /ism va Ism\nMasalan: /ism Oybek\n----------------------------------\nShunday ko'rinishda yuborasiz!</b>",
   'parse_mode' => 'html',
'reply_markup'=>$back,
]);
}
if(mb_stripos($text,"/ism") !== false){
    sleep("0.5");
$ex=explode(" ",$text);
$ism = file_get_contents("https://ismlar.com/search/$ex[1]");
$exp = explode('<p class="text-size-5">',$ism);
$expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
$im = str_replace($expl[1],' ',$exp[1]);
$ims = str_replace('</p>',' ',$im);
$isms = str_replace('</div>',' ',$ims);
$ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
$ismk = str_replace('&#039;','`',$ismn);
$ismm = trim("$ismk");
bot('sendmessage',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"📙<b>Ismlar Ma'nosi

🔖Ismingiz: $ex[1]

📑Ma'nosi:</b> <i>$ismm</i>

$by",
'parse_mode'=>'html',
'reply_markup'=>$back,
    ]);
    sleep("0.5");
   }

if($tx == "⬅️Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Quyidagi menyudan foydalaning👇",
        'parse_mode'=>"html",
        'reply_markup'=>$boshqar_menu,
        ]);
}

if($tx == "🔙 Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Quyidagi menyudan foydalaning👇",
        'parse_mode'=>"html",
        'reply_markup'=>$bot_menu,
        ]);
}


if($tx == "⬅️ ortga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Quyidagi menyudan foydalaning 👇",
    'parse_mode'=>"html",
    'reply_markup'=>$boshqar_menu
    ]);
}

if($tx == "⬅️ Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Quyidagi botlardan foydalaning 👇",
    'parse_mode'=>"html",
    'reply_markup'=>$bots_menu
    ]);
}

if($tx == "⬅️Orqaga" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Quyidagi botlardan foydalaning 👇",
    'parse_mode'=>"html",
    'reply_markup'=>$pro_menu
    ]);
}

if($tx == "🔙Ortga qaytish" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🖥 Bosh sahifaga qaytdingiz",
    'parse_mode'=>"html",
    'reply_markup'=>$main_menu
    ]);
}

if($tx=="A"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/277",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="B"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/278",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="D"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/279",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname  Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="E"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/280",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botne Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="F"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/281",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="G"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/282",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botne Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="H"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/283",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="I"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/284",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="J"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/285",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="K"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/286",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="L"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/287",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="M"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/288",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="N"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/289",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="O"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/290",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="P"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/291",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botne Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="Q"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/292",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="R"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/293",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="S"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/294",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="T"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/295",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="U"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/296",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="V"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/297",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="X"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/298",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="Y"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/299",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @ KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="Z"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/300",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="SH"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/301",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$boname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

if($tx=="CH"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/Mod_Gamer/302",
        'caption'=>"Siz Soragan Xarfga Video Tayyor boldi 😉
➖➖➖➖➖
@$botname Tomonidan Yasab Berildi!
Boshqa harfga yozish uchun shunchaki istalgan harfingizni yuboring!
➖➖➖➖➖
👨‍💻Dasturchi @KomilovOffical
📡Kanalimiz @KomilovOffical", 
        'reply_markup'=>$key,
]); 
}

     if($text =="📥FaylEdit"){
bot('sendPhoto',[
'chat_id'=>$cid,
'photo'=>"https://t.me/SoatSoz_Channel/115",
'caption'=>"Faylni edit qilish uchun rasmni ko'ring",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
            'keyboard'=>[
                [['text'=>"🔙Orqaga"]],
            ]
        ]),
    ]);
}
$sreplyd = $message->reply_to_message->document;
$doc=$message->document;
$doc=$message->document;
$doc_id=$sreplyd->file_id;       
 if(isset($sreplyd)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("$text.$type",file_get_contents($file));
if($okey){
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"*👌Tayyor*",
'parse_mode'=>"markdown",
]);  
bot('sendDocument',[
'chat_id'=>$cid,          
'document'=>new CURLFile("$text.$type"),
'thumb'=>$fileid,
'caption'=>"$text.$type",
]);
del("$text.$type");
}
}
     
     if($text == "🔰Simulator"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/16252",
     'caption'=>"🔰Simulator dasturi
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text == "😺Tom"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/16267",
     'caption'=>"🔰Tom dasturi
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
          if($text == "🎮Special forges group2"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/15930",
     'caption'=>"✍O'yin nomi: Special Forces Group 2
🆚Versiya: 4.2
♻️Yangilanish: Jan 27, 2021
📲Hajmi: 343.72MB
✅Tekshirildi @tekshiruv_pmbot
📕Ulanish: #offline #online 
🎮 Tur:  #jangovar #otishma #bellashuvli_multiplayer 
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text == "🚘Beach Buggy Racing 2"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/15820",
     'caption'=>"✍O'yin nomi: Beach Buggy Racing 2
🆚Versiya: 2021.12.16
⚙ Kerakli Android Versiyasi: 4.4+
♻️Yangilanish: Dec 16, 2021
📲Hajmi: 148.89 MB
📕Ulanish: #offline 
🎮 Tur: #poyga #uslubiy_grafika 
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text == "🚍Truck"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/16265",
     'caption'=>"Truck Simulator : Ultimate dasturi
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text == "🟣Helix Jump"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/16259",
     'caption'=>" 🟣Helix Jump dasturi
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text == "⚪Hit & Knock down"){
     	bot('sendDocument',[
     'chat_id'=>$cid,
     'document'=>"https://t.me/oyinlar_play_market_dasturlar/16257",
     'caption'=>" ✍O'yin nomi: Hit & Knock down
🆚Versiyasi: 1.3.8
⚙ Kerakli Android Versiyasi: 5.0+
♻️Yangilanish: Jan 20, 2021
📲Hajmi: 67.16 MB
🏆Reyting (Play Store): 4.4
📕Ulanish: #offline 
🎮Tur #sport #ekshn #kazual
     📡Kanalimiz @KomilovOffical",
     ]);
}
     
     if($text=="🎄 Yangi Yil"){   
$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;
  bot('SendMessage',[   
   'chat_id'=>$cid,
'reply_to_message_id'=>$mid,  
   'text'=>"😃 Urra!\n🎄Yangi yilga
├📆 *$b* Kun 
├⏰ *$b2* Soat 
├⌛ *$b3* Minut 
└⏱ *$b4* Sekund Qoldi\n🎅Kirib Kelayotgan Yangi yil Bilan!\n😎 By: @$ulashgr\n\n📆: $sana | ⏰: $soat",
'parse_mode'=>"markdown", 
]);   
}
     
     if($text=="🔢Misol yechish"){
bot('SendMessage',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"● Misolni kiriting!\n\n● Namuna: 5*5 | 5/5\n● Namuna: 5+5 | 5-5",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Orqaga"]],
]
])
]);
}
$text1 = $update->message->text;
if(isset($text1)){
$calc = urlencode($text1);
$url = file_get_contents("http://api.mathjs.org/v1/?expr=$calc");
bot('sendChatAction',['chat_id'=>$cid,
 'action'=>"typing"]);
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"$url",
'parse_mode'=>"html",
]);
}
     
     if($text=="📝 Telegram tillari"){
bot('SendMessage',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"💫 <i>Telegramingiz tilini osongina o'zgartirish uchun quyidagi tillardan birini tanlang </i>👇",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🇺🇿 Крил тили",'url'=>"tg://setlanguage?lang=uzbekcyr"],['text'=>"🇺🇿O'zbek tili",'url'=>"tg://setlanguage?lang=uz-beta"]],
[['text'=>"🇷🇺Руский язик",'url'=>"tg://setlanguage?lang=ru"],['text'=>"🇵🇷English Languge",'url'=>"tg://setlanguage?lang=en"]],
[['text'=>"💠 Arab tili",'url'=>"tg://setlanguage?lang=ar-beta"],['text'=>"💠 Koreys tili",'url'=>"tg://setlanguage?lang=ko"]],
[['text'=>"💠 Turk tili",'url'=>"tg://setlanguage?lang=tk-beta"],['text'=>"💠 Ispan tili",'url'=>"tg://setlanguage?lang=es"]],
[['text'=>"💠 Belarussiya tili",'url'=>"tg://setlanguage?lang=be-beta"],['text'=>"💠 Azerbayjan tili",'url'=>"tg://setlanguage?lang=az-beta"]],
[['text'=>"👨‍💻Adminstrator",'url'=>"t.me/KomilovOffical"],['text'=>"🔙Orqaga","callback_data"=>"back"]],
]
])
]);
}
     
     if($text == "👨‍💻Dasturchi"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'reply_to_message_id'=>$mid,
	'text'=>"<i><b>● Assalomu Alaykum $fname 
● Biz bilan aloqa qilmoqchimisiz? 
● Yoki savoliz bormi, 
● Biz barchasiga javob beramiz. 
● Marxamat pastdagi tugmani bosing! </b></i>

○ Dasturchi 👉 <a href = 'tg://user?id=5050337711'>Komilov Muhammadakbarxon</a>

@KomilovOffical
Kanalimizga obuna bõling!",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard' => [
[['text'=>"⭕Taklifim Bor"],['text'=>"❓Savolim Bor"]],
[['text'=>"⬅️ Orqaga"]],
]
])
]);
}

if($text == "⭕Taklifim Bor"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"Taklifingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Taklifingizni kiriting!"){
			bot('SendMessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Taklif keldi!</b>
      
🧒Yuboruvchi: $fname

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Taklif: <i>$text</i>

⌚Soat-<b>$soat</b> Bugun-<b>$sana</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nTaklifingiz adminlarga yoqsa 24 soat ichida siz bilan bog'lanishadi.",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}
    
    if($text == "❓Savolim Bor"){
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"Savolingizni kiriting!",
	'reply_markup'=>$rpl,
		]);
		}
		if($reply=="Savolingizni kiriting!"){
			bot('SendMessage',[
			'chat_id'=>$admin,
			'text'=>"<b>Savol keldi!</b>
      
🧒Yuboruvchi: $fname

🔷Login: @$user

🔢Id raqami: <code>$cid</code>

🗒️Savol: <i>$text</i>

⌚Soat-<b>$soat</b> Bugun-<b>$sana</b>",
'parse_mode'=>"html",
]);
sleep(2);
bot('SendMessage',[
'chat_id'=>$cid,
'text'=>"*Yaxshi adminga xabar yetkazildi!*\nSavolingiz adminlarga yoqsa 24 soat ichida kanalda javobini yozib yuboradilar!",
'parse_mode'=>"markdown",
'reply_markup'=>$key,
]);
}

if(mb_stripos($text,"/sms") !== false){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('SendMessage',[
'chat_id'=>$ex[1],
'text'=>"🔔ADMINDAN SIZGA XABAR KELDI🔔
➖➖➖➖➖➖➖➖➖➖➖
👁‍🗨 YOZGAN XABARI: $sms",
'parse_mode'=>"html", 
]);
bot('SendMessage',[
'chat_id'=>$admin,
'text'=>"▶️ [Foydalanuvchi]($egasi) *ga xabaringiz yuborildi* ◀️",
'parse_mode'=>"markdown", 
]);
}
     
     if($text == "🔐Random Parol"){
$kodish = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz12345689807'),1,8);
bot('SendMessage',[
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"● Ishonchli parol: $kodish\n😎 By: @UzBotsBuilder_Bot",
]);
}
     
     if($text == "🗃 Muchallar"){
    bot('SendMessage',[
        'chat_id'=>$cid,
        'reply_to_message_id'=>$mid,
        'text'=>"● Tanlang 👇",
        'parse_mode'=>"html",
        'reply_markup'=>$muchal_menu,
]);
}

if($text=="🐓Xo'roz"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐓Xo‘roz (Tovuq) muchali — 1921, 1933, 1945, 1957, 1969, 1981, 1993, 2005, 2017, 2029, 2041, 2053 yil

Bu yilda tug‘ilgan odamlarga jurʼat, dovyuraklik xos. Bular chuqur fikrlovchi va isteʼdodli shaxslardir. Mehnatsevar va o‘z ishlariga jon dillari bilan berilishadi. Qurblari yetmasa ham, har qanday majburiyatni bajarishga kirishadi. mabodo muvaffaqiyatsizlikka uchrashsa, dillari juda ham siyoh bo‘ladi. Nima o‘ylasalar, shuni ro‘y-rost gapiradilar. Bu esa, ko‘pincha, ularning haddan tashqari to‘g‘ri so‘zligidan o‘zini chetga tortuvchilar bilan to‘qnashuvga olib boradi. Savlat to‘kib yurishni yaxshi ko‘rishadi, yon-atrofdagilar eʼtibor berishi uchun did bilan kiyinadilar. Ammo, aslini olganda, ular o‘zlariga zarar yetkazishlariga qaramay, mutaassibdirlar. Odatda, o‘zlarini mutlaqo laqma, deb o‘ylashadi, ayni paytda qilayotgan ishlarining mohiyatini yaxshi bilishadi. O‘zlariga bino qo‘yishlarining sababi ham shunda. Haqiqatdan ham, ko‘pincha haq bo‘lib chiqishadi. Aql-zakovatlari tevarak-atrofdagi odamlarda ularga nisbatan qiziqish uyg‘otadi. Biroq ularning ko‘pchiligi maqtanchoqligi bilan darrov ixlosni qaytaradi. Qo‘lidan keladigan ishdan ko‘ra ko‘proq gapiradilar. Aksariyat hollarda, ishqiy dilkashliklariga nisbatan, ko‘proq yoqimli qiyofalari bilan ko‘zga tashlanishadi. Baʼzan dangasalikka moyillik bildirishadi. Lekin aslida, ularning faol bo‘lishi uchun hamma asos bor. Pul ularga o‘z-o‘zidan kelavermaydi, o‘zini taʼminlashi uchun ishlashi lozim. Agar ular qatʼiyat ko‘rsatib, o‘z dangasaliklarini yenga olsalar, mol-dunyo bilan taʼminlanishadi. Ammo ular mabodo dangasalik va orzu-xayollariga berilishni o‘zlariga ep ko‘rsalar, bu ularning xonavayron bo‘lishlariga, obro‘-eʼtiborlarini yo‘qotishlariga, boshlagan hamma ishlarini puchga chiqishiga olib keladi. Ishq-muhabbat bobida hayotlari ancha mashaqqatli kechadi, sevgan kishilarini qo‘lga olmoq va qo‘ldan chiqarmaslik uchun ko‘pdan-ko‘p kuch-g‘ayrat sarflashadi. Ular kambag‘allikdan boylikgacha, yuksak muhabbatdan tubanlikgacha bo‘lgan yo‘lni bosib o‘tishadi. Keksayganlarida baxtli yashashadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐀Sichqon"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐀Sichqon muchali — 1912, 1924, 1936, 1948, 1960, 1972, 1984, 1996, 2008, 2020, 2032, 2044 yil

Ushbu muchalda tug‘ilganlar tashqi qiyofasidan yoqimli, jozibador, sobitqadam, mehnatsevardirlar. Bir qarashda xotirjam va bosiq ko‘rinsalarda, unga ishonmaslik kerak. Chunki ular asabiyligi va tajovuzkorliklarini yashirib turishadi. Bu yilda tug‘ilganlar tejamkor, boylik yig‘ishga ixlosmand kishilardir. O‘zlari yoqtirgan odamlargagina qo‘llari ochiq. Chaqmachaqarlikni xush ko‘rishadi, fisqu-fujurdan hazar qilishmaydi, shu bois haqiqiy do‘stlaridan ko‘ra tanish-bilishlari ko‘p. Hech qachon hech kimga ishonishmaydi, g‘am-tashvishlarini tanholikda o‘zlari tortadilar. Ular kelajaklaridan tashvishlanib, keksayganda birovga qaram bo‘lmaslik uchun, tejab-tergashni hamisha orzu qilishadi. Jismoniy ishlardan ko‘ra aqliy mehnat bilan bog‘liq ishlarni bajonidil bajarishadi. Baxtga qarshi yig‘gan pullarini orqa-oldiga qaramay shu zahoti sarf qilishadi. Ular keksayganda tinch hayot kechirishadi\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐄Ho'kiz"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐄Ho‘kiz (Sigir) muchali — 1913, 1925, 1937, 1949, 1961, 1973, 1985, 1997, 2009, 2021, 2033, 2045 yil

Bular sabr-toqatli kamgap, ishonchga loyiq, vazmin, imillagan, yaxshi feʼl-atvorli kishilardir. Aksar hollarda sodda qiyofada bo‘lishsada, aql-zakovat sohibi hamda chuqur mulohaza yurita olish qobiliyatiga ega shaxslardir. Odatda kamgap, biroq ilhom kelganda gapdon bo‘lib ketishadi. Ular jismoniy jihatdan baquvvat, hayotning achchiq-chuchugini totishga bardoshlidir. Turmushlarida oila katta ahamiyat kasb etadi. Bolalarini yaxshi ko‘rib, ular bilan faxrlanishadi. Biroq buyruq berishga o‘rganganliklari sababli ularga ham tez-tez qo‘pollik qilib turishadi. Ho‘kiz yilida tug‘ilganlar o‘z oilasiga baxt-saodat keltiruvchi, haqiqiy mehnatkash kishilardir. Ushbu muchal ayollari xonanishin bo‘lib, o‘z oilalari uchun juda jon kuydirishadi. Oila ravnaqi uchun uni qattiqqo‘llik bilan boshqarib borishadi. Erlarini ko‘pincha o‘z izmlariga tushirishadi. Ushbu yilda tug‘ilgan aksariyat er-xotinlar xushmuomala, sadoqatli va hissiyotli bo‘lishi mumkin. Lekin xayolparast ham bo‘lishi mumkin. Keksayganlarida mushkul ahvolga tushib qolishlari mumkin, ammo buni bartaraf eta olishsa qarilik gashtini xotirjam suraveradilar.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐅Yo'lbars"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐅Yo‘lbars muchali — 1914, 1926, 1938, 1950, 1962, 1974, 1986, 1998, 2010, 2022, 2034, 2046 yil

Bu muchalda tug‘ilganlar hissiyotga beriluvchan, jahli tez va tartib-intizomga rioya qilmaydigan kishilardir. Ular katta yoshdagilar yoki rahbarlar bilan tez-tez janjallashib turishadi, hatto o‘zlarining haq emasliklarini fahmlasalarda, baribir bahslashishga tayyordirlar. Ulardan ko‘pincha inqilobchilar, rahnamolar chiqadi. Itoat etishni yoqtirishmaydi, ammo boshqalarga aytganini qildirishadi. Shu bilan birga, ko‘pincha, yaxshi o‘ylab ko‘rmasdan qaror qabul qilishadi yoki to‘g‘ri xulosani juda kech chiqarishadi. Agar biror ishni boshlashdan oldin yaxshilab o‘ylab ko‘rish va dono maslahatlarga quloq solishni uddasidan chiqa olishsa, katta-katta muvaffaqiyatlarga erishishi mumkin. Tabiatan kurashuvchang, qo‘rs va jizzaki bo‘lib, ko‘zlagan ishlari uchun o‘zlarini qurbon qilishga ham qodir. Ulardan yaxshi lashkarboshilar yoki korxonalarning rahbarlari chiqadi. Lekin xavfli jinoyatchi ham bo‘lishi mumkin, chunki tavakkalchilik bilan qilinadigan har qanday faoliyatni yaxshi ko‘rishadi. Ular juda ham jo‘shqin va kuchli sevgi sohibidirlar. Ammo ehtirosli bo‘la turib, kamdan-kamlari ishq-muhabbat bobida baxtga erishadi. Dastlabki hayotlari osuda va halovatli o‘tadi, biroq keyinchalik kuchli va shiddatli kechinmalarni boshdan kechirishadi. Shunga qaramay, keksayguncha yashay olsalar, qolgan umrlarini tinch va xotirjamlik bilan o‘tkazishadi. Bular odatda omadli odamlardir.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐒Maymun"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐒Maymun muchali — 1920, 1932, 1944, 1956, 1968, 1980, 1992, 2004, 2016, 2028, 2040, 2052 yil

Bu muchalda tug‘ilganlar ko‘ngilga kelgan ishni qiluvchi, ishonchga sazovor bo‘lmagan va ters odamlardir. Biroq ular epchil, aqlli, topqir bo‘lib, eng qiyin muammolarni ham osonlik bilan hal etishadi. Ayni paytlarda ular quv va makkordir, shu bois ular bilan doim hushyor bo‘lib muomala qilish kerak. Ularning kirishimliklari va hatto har qanday xizmatga bel bog‘lab turishlari ham munofiqonadir, aslida esa o‘z manfaatini o‘ylab shunday qilishadi. Shuningdek, ular xushchaqchaq va iltifotli bo‘lib, boshqalar to‘g‘risidagi yurakni ezadigan fikr-mulohazalarini soxta xushmuomalaliklari bilan yashiradilar. Ular o‘z faoliyatlarini avj oldira olmaydigan deyarli birorta soha yo‘q. Bo‘layotgan voqealardan hamisha xabardor. Xotiralari juda ham kuchli bo‘lib, ko‘rgan yoki eshitgan narsalarining mayda-chuydasigacha unutishmaydi. Barcha ishlari betartibligi uchun ularga xotira zarur. Ular juda hovliqma bo‘lib, hamma ishni shu zahoti amalga oshirib qo‘ya qolishni xohlashadi. Arzimas to‘siq ham ularning dilini xira qilib, rejalarini buzib yuborishi mumkin. Biror ishni boshlamasdan turib, shu zahoti uning bahridan o‘tishlari mumkin, ko‘pchiligi qatʼiyatsizligi va hatto qo‘rqoqligi bilan ajralib turishadi. Ularning har qanday mushkul ahvolga tushib qolganlarida ham, unga chap berib qutilib ketishlarini munosib baholash darkor. Ular o‘z xohishlarini amalga oshiradilar. Amalparastlik qonlarida bor. Hech ikkilanmay, hatto vijdonsizlik bilan bo‘lsada, o‘z niyatlariga erishishga qodirlar. O‘z hafsalalariga qarab ish qilishsa, ko‘pincha nom chiqarishadi. Faqat ular odamlarga malol kelishi mumkin bo‘lgan mahmadonagarchiliklardan o‘zini tiyishi lozim. Garchi baʼzi qiyinchiliklar bo‘lib yursa, umuman olganda, iqtisodiy jihatdan yaxshi yashashadi. Ishq-muhabbat bobida baxtga erishishlari qiyin. Chunki ular ehtirosli bo‘lib, juda tez oshiq bo‘lib, ko‘p maʼshuqalaridan ko‘ngillari sovib, boshqasini qidirishga tushishi mumkin.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐖To'ng'iz"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐖To‘ng‘iz muchali — 1923, 1935, 1947, 1959, 1971, 1983, 1995, 2007, 2019, 2031, 2043, 2055 yil

Bu muchalda tug‘ilganlarni mardonavor feʼl-atvori, odob-nazokat, xizmatga shaylik, nozik tabiatlilik xulqlari bor. Ularga hech ikkilanmay ishonish mumkin. Ular faqat to‘g‘ri yo‘lni tanlashadi. Ular vijdonli va mard kishilardir. Boshqa kishilar bilan til topishishi qiyin. Lekin do‘stlarini hurmat qiladi. To‘ng‘iz yilida tug‘ilganlar kundalik xarajatlari uchun kerakli mablag‘ni topa olishadi. Ammo beg‘amliklari tufayli ishlari yomon tus olishi mumkin. Ular beg‘am ko‘rinsalarda, aslida irodali va o‘jardirlar. O‘ylagan niyatlariga erishish uchun bor kuchini ishga solishadi. Tabiatan baquvvatlar, ularning kuchiga hech kim bas kela olmaydi. Biroq biror qarorga kelishdan oldin uning yaxshi va yomon tomonlarini uzoq qiyoslashadi, shunday kezlarda yon-beridagi kishilar nazarida ular nima qilishni bilmayotgandek tuyulishadi. Haqiqatda esa bunday emas, ular o‘z ishini juda yaxshi bilishadi, faqat ishni murakkablashtirmaslik, gohida unga zarar yetkazmaslik uchun uzoq vaqt mulohaza yuritishadi. Ushbu yilda tug‘ilgan ayollar sovg‘a-salom qilishni, shod-xursandchilikni xush ko‘rishadi. Ular yaxshi ona va oqilona uy bekasidirlar.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐇Quyon"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐇Quyon muchali — 1915, 1927, 1939, 1951, 1963, 1975, 1987, 1999, 2011, 2023, 2035, 2047 yil

Ushbu yilda tavallud topganlar o‘ziga xos xislatlarga ega bo‘lib, qobiliyatli, izzattalab, kamtarin, bosiq va saxovatli kishilardir. Benuqson didlari bilan ajralib turadilar, hammaning tahsiniga va ishonchiga sazovor bo‘ladilar. Biroq jiddiy kamchiligi yengiltaklik bo‘lib, hatto eng yaxshi xislatlari ham yuzakidir. Bundan tashqari, g‘iybat qilishni, gap tashishni yaxshi ko‘rishadi, lekin buni kishi bilmas holda, xushmuomalalik va ehtiyotlik bilan amalga oshirishadi. Odatda, vazmin va tepsa-tebranmas bo‘lganligidan, ular tinchini buzish qiyin. Ularda haqiqiy hissiyotdan ko‘ra, tantiqlik kuchli. Arzimas bahona bilan yig‘lashlari mumkin, lekin shu zahoti ovunib qolishadi. Odatda, ularning hammasi mutaassib bo‘lib, hayot tarzlariga putur yetkazadigan, uni qiyinlashtiradigan har qanday yangilikka toqatlari yo‘q. Eng avval badastir xavf-xatarsiz yashashga intiladi. Oldindan yaxshi va yomon tomonlarini jamlab ko‘rmaguncha, hech bir ishga qo‘l urishmaydi. Ajoyib ishchanlik qobiliyatiga ega kishilardir. Garchi, baʼzan o‘taketgan rasmiyatchi bo‘lishsada, halol va o‘z so‘zlarining ustidan chiqishadi. Iqtisodiy jihatdan hamisha omadlari yurishadi, o‘ylagan ishlarini amalga oshirishda epchillik ko‘rsatishadi. Ulardan ajoyib ishbilarmon kishilar yetishib chiqadi. Hayotlari tahlika ostida qolmasa, isteʼdodli huquqshunos yoki diplomat ham bo‘lishlari mumkin. Bu muchalda tug‘ilgan ayollar did, mehmondo‘stlik va yaxshi vakillik talab qilinadigan har qanday sohada o‘zini ko‘rsatishi mumkin. Umuman, ushbu yilda tavallud topganlar o‘zlari yoqtirgan odamlarga nisbatan juda xushmuomala va xizmatiga shaydirlar, lekin do‘stlar manfaatiga xizmat qilaman deb, eng yaqin kishilaridan judo bo‘lishlari oson. Agar ular favqulodda hodisalarga, fojiali voqealarga, yengib o‘tib bo‘lmas to‘siqlarga duch kelishmasa, butun umr osoyishta yashashadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐠Baliq"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐠Baliq muchali — 1916, 1928, 1940, 1952, 1964, 1976, 1988, 2000, 2012, 2024, 2036, 2048 yil

Kimda-kim ushbu yilda tug‘ilgan bo‘lsa, juda yaxshi sihat-salomatlikka ega bo‘lib, serg‘ayrat va beg‘ubordir. Pastkashlik, tilyog‘lamalik va g‘iybat ularga begona. Ular ishonuvchan va rostgo‘ylar. Ko‘pincha yolg‘on-yashiq gaplar tufayli o‘z tinchligini yo‘qotadi. Barkamollikka intilish ularni o‘ziga ham, boshqalarga ham talabchan qilib qo‘yadi. Ular ko‘p narsani talab qilishadi, lekin talablaridan ko‘ra ko‘proq ishni o‘zlari amalga oshirishadi. Vijdonli, taʼsirchan va dovyurak kishilar bo‘lib, ularga bemalol ishonish mumkin. Samimiy kishi bo‘lib, odatda bildirgan fikr mulohazalari hamisha asosli bo‘ladi. Soddalarcha ishonuvchanliklari tufayli, ularni hamisha aldash mumkin. Shu bilan birga, ular serzarda bo‘lib, baʼzan tillariga erk berib yuborishadi. Biroq ularni fikr-mulohazasi bilan hisoblashish kerak, chunki yaxshi maslahat berishadi. Qiziqib, darrov ishga berilib ketishadi. Isteʼdodli, o‘qimishli va irodali kishilardir. Butun umr hech narsadan zoriqishmaydi, har qanaqangi ishda ham muvaffaqiyat qozonishlari mumkin. Qaysi kasbni tanlashmasin, doimo g‘alaba qozonishadi. Ular ko‘pincha, hamma uchun sevimlidirlar, biroq o‘zlari boshqalarni kamdan-kam hollardagina yoqtirishadi. Hech qachon muhabbat umidsizligi yoki dog‘u-alam ularning boshidan kechmaydi. Ammo o‘zlari muhabbat mojarosiga sababchi bo‘lishi mumkin. Bu muchalda tug‘ilganlar kamdan-kam hollardagina yoshligida oila qurishadi, baʼzilari hatto umr bo‘yi tanho yashashadi, biroq bu ular ko‘nglini cho‘ktirmaydi, aksincha, yolg‘iz yashaganidan ko‘proq baxtiyor sezishadi. Qarz olishni va uzundan-uzun gapirishni yoqtirmaydi. Rahmdillikka moyil bo‘lib baʼzan qisqa muddatga bo‘lsada, bundan boshqalarning foydalanib qo‘yishga yo‘l qo‘yishadi. Ularni ko‘pchiligining muammosi og‘ir, jinsiy qoniqmaslikdan qiynalib yurishadi. Shoirtabiat jo‘shqinliklari tufayli butun umr ko‘plab muammolarga sababchi bo‘lishadi. Biroq keksayganida baxt-saodatga va barcha istaklarini amalga oshirishga erishadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐕It"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐕It muchali — 1922, 1934, 1946, 1958, 1970, 1982, 1994, 2006, 2018, 2030, 2042, 2054 yil

Ushbu yilda tug‘ilgan odamlarga eng yaxshi insoniy xislatlar xos. Ular sodiq va sofdilligi, sir saqlay olishi bilan o‘zlariga nisbatan ishonch uyg‘otishadi. Bundan tashqari ular hazil-mutoyiba tuyg‘usiga ega, mayda gaplardan uzoq. Haddan tashqari o‘jar va tez-tez surbetlik darajasigacha borishadi. Ularning sovuq gaplar bilan fikr bildirishga, o‘rinli va o‘rinsiz tanqid qilishga, hamma narsadan kamchilik topishi sezilib turadi. Har qanday nohaqlik ularda norozilik uyg‘otadi va to uni bartaraf etmaguncha tinchishmaydi. Boshqalar uchun qo‘llaridan kelgan ezgu ishni qilishadi. Atrofidagi kishilar ularni munosib ravishda hurmat qilishadi. Ular faqirlikda yashaydilarmi, farovon hayot kechirishadimi, bundan qatʼiy nazar, aqlga qarab ish tutadilar. Moddiy jihatdan to‘kin yashamasalar ham qanoatlidirlar. Biroq ularga pul zarur bo‘lib qolsa, uni osongina topisha oladi. Odatda, ulardan ajoyib rahbarlar va faol jamoat arboblari yetishib chiqadi. Ular ko‘pincha gapga no‘noq, baʼzan o‘z fikr-mulohazalarini qiynalib bayon etishadi. Lekin aqllari raso, ziyraklik bilan gapga quloq solib turadilar. Sevgi-muhabbat bobida pok va farosatlidir. Ularni adolat uchun kurashda katta sarguzasht va qizg‘in olishuvlar kutadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐍Ilon"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐍 Ilon muchali — 1917, 1929, 1941, 1953, 1965, 1977, 1989, 2001, 2013, 2025, 2037, 2049 yil

Ushbu muchalda tug‘ilganlarda donolik va ziyraklik ato etilgan. Ular vaysaqi emas. Ko‘p va xo‘p fikr-mulohaza yuritishadi. Boshlagan ishni qatʼiyat bilan oxirigacha yetkazishadi, muvaffaqiyatsizlikni juda yomon ko‘rishadi. Tabiatan xotirjam bo‘lsalar ham, ishning ko‘zini bilib, tez xulosa chiqarishadi. Juda ham omadli kishilardir, lekin ko‘pincha ziqnalik qilishadi. Gohida xudbin va maqtanchoq bo‘lishadi. Qarz berishni yomon ko‘rishadi. Ammo xushlariga kelib qolsa, yordam berishdan bo‘yin tovlamaydigan paytlari ham bo‘lib turadi. Bo‘rttirishga moyillik ularga xos xususiyat, mabodo birovga yordam berguday bo‘lishsa, jonlarini berishga ham tayyor, ayni paytda tortinchoq bo‘lib qolishadi, natijada zarar ko‘rishi mumkin. Bunday odamlardan yordam so‘rashdan oldin o‘ylab ko‘rish kerak. Aks holda, pushaymon bo‘lasiz. Yostiqdoshlarini o‘zlari tanlashadi, rashkchi va injiqdirlar. Agar ular o‘zlarining eng yaxshi his-tuyg‘ularini oilasiga bag‘ishlay olsalar edi, umrlari g‘am-tashvishsiz o‘tar edi. Hayotlarining dastlabki davri tinch o‘tadi. Umrlarining ikkinchi yarimida esa ortiqcha sertakallufligi, ehtiroslarning kuchliligi, sarguzashtlarga ishtiyoqmandligi mushkulliklarga duchor etishi mumkin.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐎Ot"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐎Ot muchali — 1918, 1930, 1942, 1954, 1966, 1978, 1990, 2002, 2014, 2026, 2038, 2050 yil

Bu muchalda tug‘ilganlar dongdor, moʻtabar, xushfeʼl va pulni tejab-tergab ishlatuvchi kishilardir. Yaxshi kiyinishadi, ommaviy yig‘inlarni yoqtirishadi. Ko‘p gapirsalar ham, aqlli va sezgirdirlar. Ko‘pincha yaxshi natijalarga erishuv-chi ajoyib sportchi bo‘lib yetishadi. Hamma sohada ishlari yurishadi, ko‘zga tashlanib turishadi, boshqalar fikrini tez uqib olishadi. Tabiatan mustaqil feʼl-atvorga ega bo‘lib, maslahatlarga quloq solishmaydi. O‘zlariga ishonishadi, qadrlarini bilishadi. Shu yilda tug‘ilgan erkaklar ayollarga befarq bo‘lishmaydi. Muhabbat onlarida hamma narsani unutishadi. Xizmat vazifalarini ado etganda, boshqa hamma sohada bor kuch va ehtiroslarini kuchga solishga harakat qilishadi. Ishq-muhabbat yo‘lida hamma narsadan voz kechishlari mumkin. Shu bois boshlab qo‘ygan ishlarida muvaffaqiyatsizlikka uchraydi, agar bularni yengsa baxtli bo‘lishi mumkin. Oila qurgach, uyda doimo diqqat markazida bo‘lishadi. Ular ko‘zdan g‘oyib bo‘lishlari bilanoq, oilaning baxt-saodati puchga chiqadi. Baʼzilari oilani yoshlikdan tashlab ketishlari mumkin. His-tuyg‘ular sohasida ularning hayoti jo‘shqindir. Keksaygan chog‘larida tinch-xotirjam kun kechirishadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}
if($text=="🐑Qo'y"){
bot ('SendMessage', [
'chat_id'=>$cid,
'reply_to_message_id'=>$mid,
'text'=>"🐑Qo‘y muchali — 1919, 1931, 1943, 1955, 1967, 1979, 1991, 2003, 2015, 2027,2039, 2051 yil

Ushbu yilda tug‘ilganlar nafis sanʼat sohibidirlar. Ularning qaddi-qomati kelishgan, istarasi issiq va tabiat shaydolaridir. Xulq-atvori yoqimli, gap-so‘zi, o‘zini tutishi oqilona, shunday bo‘lsada tabiatan injiq, hardamxayol bo‘lib, hamisha nimadandir zorlanib yashashadi. Odatda xudojo‘y bo‘lib, turli xayoliy va o‘ta tabiiy narsalarga qiziqishadi. Bular rahmdil va muhtojlarga yordam beruvchi yaxshi kishilardir. Ammo baham ko‘rmoqchi bo‘lgan narsalari o‘zlariga tegishli bo‘lmaydi. Ularda xususiy mol-mulkka hech qanday havas yo‘q. Hayot kechirishlari ko‘pincha omadlariga bog‘liq bo‘ladi. Javobgarlik hissi ularga begona, tashabbus ko‘rsatishni yomon ko‘rishadi. Ularda did va isteʼdod bor. Ammo rahbarlikni eplay olishmaydi. Bir paytning o‘zida texnik va artistlik mahorati qo‘shib borib olinadigan ishlarni qoyil qilib bajarishadi. Lekin hech qachon asosiy vazifani bajarishmaydi. Gaplari ko‘pincha poyma-poy bo‘lib, o‘z fikrlarini qiynalib tushuntirishadi, goh tez, goh sekin baʼzan duduqlanib gapirishadi. Hayotlari davomida ko‘plab ishq-muhabbat muammolariga duch kelishadi. Ulardan biri fojia bilan tugashi mumkin. Yetuklik davri yoshlik va keksayganlariga qaraganda yaxshi kechadi. Shuni esda tutish kerakki, moddiy jihatdan g‘am-tashvishi yo‘q, maslahatgo‘ylari bor bo‘lgan quling o‘rgilsin o‘tloqda. Qo‘yning omadi yurishadi.\n😎 By: @$ulashgr",
'parse_mode' =>"html",
]);
}

if($tx == "🛠Bot yaratish" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"ℹ️ Yangi bot yaratish uchun quyidagi menulardan foydlaning",
    'parse_mode'=>'html',
    'reply_markup'=>$bot_menu
    ]);
}

if($tx == "2️⃣-Bo'lim" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Ikkinchi bo'limga xush kelibsiz",
    'reply_markup'=>$akbarxon_menu,
    ]);
}

if($tx == "⏰Soat Bo'limi"){
bot('sendMessage',[
'chat_id'=>$cid,
   'text'=>"<b>🔰Kechirasiz ushbu bo'lim yopiq:</b>",
    'parse_mode'=>'html',
'reply_markup'=>$main_menu
]);
}

if($tx == "🔥Maxsus bo'lim" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🏗Yaxshi demak Maxsus botlarni yaratamiz botlardan birini tanlang👇",
    'reply_markup'=>$maxsus_menu,
    ]);
}

if($tx == "💎Botlar Bo'limi" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🏗Siz xurmatli $name botlar menusiga kirdingiz marhamat tanlang👇",
    'reply_markup'=>$kup_menu,
    ]);
}

if($tx == "🌟GooMakerBot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"⛔Tez kunda...",
    'reply_markup'=>$main_menu,
    ]);
}

if($tx == "🌟PayMakerBot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"PullikBotlardan birini tanlang",
    'reply_markup'=>$paybot_menu,
    ]);
}

if($tx == "🆓️ Bepul bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🏗Yaxshi demak Beepul botlarni yaratamiz botlardan birini tanlang👇",
    'reply_markup'=>$bots_menu,
    ]);
}

if($tx == "🅰️Harfga video" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Tanlang👇..",
    'reply_markup'=>$harf_menu,
    ]);
}
if($tx == "💽Dasturlar" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Dasturlardan birini tanlang",
    'reply_markup'=>$apk_menu,
    ]);
}

if($tx == "📂Fayl ulash" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Tez kunda....",
    'reply_markup'=>$main_menu,
    ]);
}

if($tx == "🔰Bot ulash" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Kerakli menuni tanlang:",
    'reply_markup'=>$xost_menu,
    ]);
}

if($tx == "🔍Dastur qidirish" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🔍Dastur qidirish bo'limi tez orada ishga tushadi:",
    'reply_markup'=>$main_menu,
    ]);
}

if($tx == "💰Balans" and joinchat($fid)=="true"){
    $get = file_get_contents("referal/$fid.txt");
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<i>🗄 Kabinetingizga xush kelibsiz!

💵 Sizning balansingiz: $get olmos
👥 Sizning takliflaringiz: $soni ta

❗❗Bot hisobingizni Qiwi orqali to‘ldiryotgangizda izoh qoldirishni unutmang!</i>",
     'parse_mode'=>"html",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"],['text'=>"🔄 Almashish",'callback_data'=>"almashish"]],
            ]
        ])
]);
}

if($data == "almashish"){
	bot('deleteMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
]);
bot('sendmessage',[
'chat_id'=>$ccid,
'text'=>"<i>⚠️ Yodingizda tuting, almashilgan pullaringizni avvalgi holatga qaytara olmaysiz!</i>

<b>🧮 Qancha pulingizni almashmoqchisiz?
Quyidagi tartibda yozing!</b>

<code>/almashish
$cfid
1000</code>

<b>@$botname</b>",
'parse_mode'=>'html',
'reply_markup'=>$back_menu,
]);
}

if(mb_stripos($tx,"/almashish")!==false){
$id = explode("\n", $text);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
$olmos = file_get_contents("referal/$cid.txt");
$odam = file_get_contents("odam/$cid.dat");
if($olmos>=$id2){
$olmos = file_get_contents("referal/$cid.txt");
$mm=$olmos-$id2;
file_put_contents("referal/$cid.txt","$mm");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"💳<b>Hisobingizdan $id2 olmos ayirildi!</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"<b>📨 Yangi xabarnoma:
🎯Sizning hisobingiz to‘ldirildi!
💰Miqdor: $id2 olmos
♻️Holat: Muvaffaqiyatli 
🗓Vaqti: ⏰ $soat 📆$sana</b>.",
'parse_mode'=>'html',
'reply_markup'=>$main_menu,
]);
}else{
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"<b>⚠️ Almashish uchun balansingizda ushbu summa mavjud emas! Qayta urinib ko'ring:</b>",
'parse_mode'=>'html',
]);
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
]);
}
}

if($data == "toldir"){
        bot('deleteMessage',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
]);
     bot('SendMessage',[
        'chat_id'=>$ccid,
        'text'=>"📋 Quyidagilardan birini tanlang:",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"💠 Click ",'callback_data'=>"qiwi"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
[['text'=>"🥝 Qiwi",'callback_data'=>"click"]],
]
])
]);
}


if($data == "orqa"){
        bot('editMessageText',[
        'chat_id'=>$ccid,
        'message_id'=>$cmid,
        'text'=>"📋 Quyidagilardan birini tanlang:",
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>"💠 Click",'callback_data'=>"qiwi"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
[['text'=>"🥝 Qiwi",'callback_data'=>"click"]],
]
])
]);
}


if($data == "qiwi"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"📋 To'lov tizimi: Click
💡 Avto to'lov holati: OF

💳 Hamyon ( yoki karta ): Admin
📝 Izoh: $ccid

Qo'shimcha: Diqqat! izoh kiritishni unutsangiz yoki noto'g'ri kiritsangiz hisobingizga pul tushmaydi! Bu kabi holatlarda, biz bilan bog'lanishingiz mumkin.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/ADMIN_USER"]],
[['text'=>"◀️Ortga",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "paynet"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"📋 To'lov tizimi: PAYNET
💡 Avto to'lov holati: OF

💳 Hamyon ( yoki karta ) -> admin
📝 Izoh: $ccid
📊 B. V. Kursi: 155

Qo'shimcha: To'lovni amalga oshirgach biz bilan bog'laning.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/ADMIN_USER"]],
[['text'=>"◀️Ortga",'callback_data'=>"orqa"]],
]
])
]);
}

if($data == "click"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"📋 To'lov tizimi: Qiwi
💡 Avto to'lov holati: OF

💳 Hamyon ( yoki karta ): Admin
📝 Izoh: $ccid

Qo'shimcha: Diqqat! izoh kiritishni unutsangiz yoki noto'g'ri kiritsangiz hisobingizga pul tushmaydi! Bu kabi holatlarda, biz bilan bog'lanishingiz mumkin.",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️ Tex. Yordam",'url'=>"https://t.me/ADMIN_USER"]],
[['text'=>"◀️Ortga",'callback_data'=>"orqa"]],
]
])
]);
}

if($tx == "💸 Pul ishlash"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"💸 Qanday usulda pul ishlashni hohlaysiz?

‼️ Bot orqali yig'gan pullaringizni yechib olomaysiz. Mablag'laringizni botimizdagi har qanday xaridlar uchun sarflashingiz mumkin.",
    'reply_markup'=>$pul_menu
   ]);
}
if($tx == "👥 Takliflar" and joinchat($fid)=="true"){ 
    bot('sendMessage',[ 
    'chat_id'=>$cid, 
    'text'=>"📌Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!✅", 
    'parse_mode'=>"html", 
    'disable_web_page_preview'=>true, 
    'reply_markup'=>$pul_menu
    ]); 
} 

if($tx == "💰 Xarid qilish" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"💵 Hisobni toʻldirish usulini tanlang:",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
           [['text'=>"💠 Click ",'callback_data'=>"qiwi"],['text'=>"🔥 Paynet",'callback_data'=>"paynet"]],
[['text'=>"🥝 Qiwi",'callback_data'=>"click"]],
]
])
]);
}

############# Free Bots #############
#############
if($tx == "📽️Gif bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","gifbot&token");
}

if($userstep == "gifbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/gif.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/gif");
    if(file_get_contents("user/$fid/gif/gif.php")){
        $files = glob("user/$fid/gif/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/gif/channel");
    }
    file_put_contents("user/$fid/gif/gif.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/gif/gif.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Gif bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Gif bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🌐OnlineTest bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","onlinetest&token");
}

if($userstep == "onlinetest&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/onlinetest.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/onlinetest");
    if(file_get_contents("user/$fid/onlinetest/onlinetest.php")){
        $files = glob("user/$fid/onlinetest/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/onlinetestchannel");
    }
    file_put_contents("user/$fid/onlinetest/onlinetest.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/onlinetest/onlinetest.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌐OnlineTest bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🌐UrlUpload" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","urlbot&token");
}

if($userstep == "urlbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/urlbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/urlbot");
    if(file_get_contents("user/$fid/urlbot/urlbot.php")){
        $files = glob("user/$fid/urlbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/urlbot/channel");
    }
    file_put_contents("user/$fid/urlbot/urlbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/urlbot/urlbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌐UrlUpload bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🟣XarfgaVideo" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","xarf&token");
}

if($userstep == "xarf&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/xarf.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/xarf");
    if(file_get_contents("user/$fid/xarf/xarf.php")){
        $files = glob("user/$fid/xarf/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/xarf/channel");
    }
    file_put_contents("user/$fid/xarf/xarf.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/user/$fid/xarf/xarf.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🟣XarfgaVideo bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📥Down" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","video&token");
}

if($userstep == "video&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/video.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/video");
    if(file_get_contents("user/$fid/video/video.php")){
        $files = glob("user/$fid/video/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/video/channel");
    }
    file_put_contents("user/$fid/video/video.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/video/video.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌐video bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📙Pr Bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","prbot&token");
}

if($userstep == "prbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/prbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/prbot");
    if(file_get_contents("user/$fid/prbot/prbot.php")){
        $files = glob("user/$fid/prbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/prbot/channel");
    }
    file_put_contents("user/$fid/prbot/prbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/prbot/prbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌐Prishlash bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🌟Supper nick" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","supernick&token");
}

if($userstep == "supernick&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/supernick");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/supernick");
    if(file_get_contents("user/$fid/supernick/supernick.php")){
        $files = glob("user/$fid/supernick/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/supernick/channel");
    }
    file_put_contents("user/$fid/supernick/supernick.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/supernick/supernick.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌟Supper nick bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🌐OnlineTest bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🟣Pechat bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","pechat&token");
}

if($userstep == "pechat&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/pechat.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/pechat");
    if(file_get_contents("user/$fid/pechat/pechat.php")){
        $files = glob("user/$fid/pechat/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/pechat/channel");
    }
    file_put_contents("user/$fid/pechat/pechat.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pechat/pechat.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🟣Pechat bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🟣Pechat bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "✅XaYoki❌Yoq" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","XaYokiYoq&token");
}

if($userstep == "XaYokiYoq&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/XaYokiYoq.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/XaYokiYoq");
    if(file_get_contents("user/$fid/XaYokiYoq/XaYokiYoq.php")){
        $files = glob("user/$fid/gif/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/XaYokiYoq/channel");
    }
    file_put_contents("user/$fid/XaYokiYoq/XaYokiYoq.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/XaYokiYoq/XaYokiYoq.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: XaYokiYoq bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: XaYokiYoq\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🔍Qidir bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","qidir&token");
}

if($userstep == "qidir&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/qidir.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/qidir");
    if(file_get_contents("user/$fid/qidir/qidir.php")){
        $files = glob("user/$fid/gif/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/gif/channel");
    }
    file_put_contents("user/$fid/qidir/qidir.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/qidir/qidir.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🔍Qidir bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Qidir bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🎤Music bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","music&token");
}

if($userstep == "music&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/Music.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/music");
    if(file_get_contents("user/$fid/music/music.php")){
        $files = glob("user/$fid/gif/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/music/channel");
    }
    file_put_contents("user/$fid/music/music.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/music/music.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🎤Music bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Music bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "©️Vunder bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","vunnder&token");
}

if($userstep == "vunnder&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/vunnder.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/vunnder");
    if(file_get_contents("user/$fid/vunnder/vunnder.php")){
        $files = glob("user/$fid/vunnder/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/vunnder/channel");
    }
    file_put_contents("user/$fid/vunnder/vunnder.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/vunnder/vunnder.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ©️Vunnder bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: VunnderBot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🍉Tarvuz bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","tarvuz&token");
}

if($userstep == "tarvuz&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/tarvuz.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/tarvuz");
    if(file_get_contents("user/$fid/tarvuz/tarvuz.php")){
        $files = glob("user/$fid/tarvuz/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/tarvuz/channel");
    }
    file_put_contents("user/$fid/tarvuz/tarvuz.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/tarvuz/tarvuz.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🍉Tarvuz bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Tarvuz bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🌌Back Ground" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","back&token");
}

if($userstep == "back&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/back.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/back");
    if(file_get_contents("user/$fid/back/back.php")){
        $files = glob("user/$fid/back/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/back/channel");
    }
    file_put_contents("user/$fid/back/back.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/back/back.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🌌BACK GROUND bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: BackGround\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🎤Vkm bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","vkmbot&token");
}

if($userstep == "vkmbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/vkmbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/vkmbot");
    if(file_get_contents("user/$fid/vkmbot/vkmbot.php")){
        $files = glob("user/$fid/vkmbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/vkmbot/channel");
    }
    file_put_contents("user/$fid/vkm/vkmbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/vkmbot/vkmbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🎤VKM bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Vkm bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🗄ZArchiver bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","zip&token");
}

if($userstep == "zip&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/zip.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/zip");
    if(file_get_contents("user/$fid/zip/zip.php")){
        $files = glob("user/$fid/zip/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/zip/channel");
    }
    file_put_contents("user/$fid/vkm/zip.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/zip/zip.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🗄ZArchiver bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Vkm bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🗃Mukammal bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","mukammal&token");
}

if($userstep == "mukammal&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/mukammal.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/mukammal");
    if(file_get_contents("user/$fid/mukammal/mukammal.php")){
        $files = glob("user/$fid/mukammal/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/mukammal/channel");
    }
    file_put_contents("user/$fid/mukammal/mukammal.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/mukammal/mukammal.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🗃Mukammal bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id 🖥 $botname -Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: MukammalBot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📥Mega" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","mega&token");
}

if($userstep == "mega&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/mega");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/mega");
    if(file_get_contents("user/$fid/mega/mega.php")){
        $files = glob("user/$fid/mega/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/mega/channel");
    }
    file_put_contents("user/$fid/mega/mega.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/mega/mega.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🗃Mega bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id 🖥 $botname -Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: MukammalBot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

    if($tx == "🖲Majbur bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","majbur&token");
}

if($userstep == "majbur&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/majbur.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
        $kod = str_replace("BOT_NAME", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/majbur");
    if(file_get_contents("user/$fid/majbur/majbur.php")){
        $files = glob("user/$fid/majbur/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/majbur/channel");
    }
    file_put_contents("user/$fid/majbur/majbur.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/majbur/majbur.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🖲Majbur bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id 🖥 $botname -Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: 🖲Majbur bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🤡Suhbatchi bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","suhbat&token");
}

if($userstep == "suhbat&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/suhbat.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
        $kod = str_replace("BOT_NAME", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/suhbat");
    if(file_get_contents("user/$fid/suhbat/suhbat.php")){
        $files = glob("user/$fid/suhbat/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/suhbat/channel");
    }
    file_put_contents("user/$fid/suhbat/suhbat.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/suhbat/suhbat.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🤡Suhbat bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id 🖥 $botname -Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Suhbat bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🔵Uzmobile" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","uzmobile&token");
}

if($userstep == "uzmobile&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/uzmobile.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/uzmobile");
    if(file_get_contents("user/$fid/uzmobile/uzmobile.php")){
        $files = glob("user/$fid/uzmobile/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/uzmobile/channel");
    }
    file_put_contents("user/$fid/uzmobile/uzmobile.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/uzmobile/uzmobile.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🔵Uzmobile bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>:Uzmobile bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🖼️Logo bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating.

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","logo&token");
}

if($userstep == "logo&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/logo.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/logo");
    if(file_get_contents("user/$fid/logo/logo.php")){
        $files = glob("user/$fid/logo/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/logo/channel");
    }
    file_put_contents("user/$fid/logo/logo.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/logo/logo.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Logo bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Logo bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
//--
//---------
if($tx == "👮‍♂️ Posbon bot"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","posbon&token");
}

if($userstep == "posbon&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/posbon.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/posbon");
    if(file_get_contents("user/$fid/posbon/posbon.php")){
        $files = glob("user/$fid/posbon/warn/*");
        foreach ($files as $value) {
            $file = glob("$value/*");
            foreach ($file as $key) {
                unlink($key);
            }
            rmdir($value);
        }
        rmdir("user/$fid/posbon/warn");

        $files2 = glob("user/$fid/posbon/new/*");
        foreach ($files2 as $value2) {
            $file2 = glob("$value2/*");
            foreach ($file2 as $key2) {
                unlink($key2);
            }
            rmdir($value2);
        }
        rmdir("user/$fid/posbon/new");

        $files3 = glob("user/$fid/posbon/channel/*");
        foreach ($files3 as $value3) {
            unlink($value3);
        }
        rmdir("user/$fid/posbon/channel");

        $files4 = glob("user/$fid/posbon/sozlama/*");
        foreach ($files4 as $value4) {
            unlink($value4);
        }
        rmdir("user/$fid/posbon/sozlama");

        $files5 = glob("user/$fid/posbon/stat/*");
        foreach ($files5 as $value5) {
            unlink($value5);
        }
        rmdir("user/$fid/posbon/stat");

        
    }
    file_put_contents("user/$fid/posbon/posbon.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/posbon/posbon.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Posbon bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Posbon bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

###

//---------
if($tx == "❤️ Channel like"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","channel&token");
}

if($userstep == "channel&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/like.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/like");
    if(file_get_contents("user/$fid/like/like.php")){
        $files = glob("user/$fid/like/like/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/like/like");
        $files = glob("user/$fid/like/baza/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("user/$fid/like/baza");
    }
    file_put_contents("user/$fid/like/like.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/like/like.php"))->result;

    if($get==true){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Channel like bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Channel Like bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

#######
if($tx == "⚡Webhook bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","webbot&token");
}

if($userstep == "webbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/web.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/web");
    if(file_get_contents("user/$fid/web/web.php")){
        unlink("user/$fid/web/web.php");
    }
    file_put_contents("user/$fid/web/web.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/web/web.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Webhook bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Webhook bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "👨‍👨‍👧‍👦Go'zalik test bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","testbot&token");
}

if($userstep == "testbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/test.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/test");
    if(file_get_contents("user/$fid/test/test.php")){
        unlink("user/$fid/test/test.php");
    }
    file_put_contents("user/$fid/test/test.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/user/test/test.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Go'zalik test bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Go'zallik test bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🕋Quron bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","quronbot&token");
}

if($userstep == "quronbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/quron.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/quron");
    if(file_get_contents("user/$fid/quron/quron.php")){
        unlink("user/$fid/quron/quron.php");
    }
    file_put_contents("user/$fid/quron/quron.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/quron/quron.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Quron bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Quron bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📥FaylEdit bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","FaylEdit&token");
}

if($userstep == "FaylEdit&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/FaylEdit.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/FaylEdit");
    if(file_get_contents("user/$fid/FaylEdit/FaylEdit.php")){
        unlink("user/$fid/FaylEdit/FaylEdit.php");
    }
    file_put_contents("user/$fid/FaylEdit/FaylEdit.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/FaylEdit/FaylEdit.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: FaylEdit bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: FaylEdit bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📨Konvertor bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","konvertor&token");
}

if($userstep == "konvertor&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/konvertor.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/konvertor");
    if(file_get_contents("user/$fid/konvertor/konvertor.php")){
        unlink("user/$fid/konvertor/konvertor.php");
    }
    file_put_contents("user/$fid/konvertor/konvertor.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/user/konvertor/konvertor.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 📨Konvertor bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Konvertor bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "⤴️Tarjimon bot" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","tarjimon&token");
}

if($userstep == "tarjimon&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/tarjimon.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/tarjimom");
    if(file_get_contents("user/$fid/tarjimon/tarjimon.php")){
        unlink("user/$fid/tarjimon/tarjimon.php");
    }
    file_put_contents("user/$fid/tarjimon/tarjimon.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/user/tarjimon/tarjimon.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ⤴️Tarjimon bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Tarjimon bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "💰 Pul bot (som)" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.
2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.
3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.
4️⃣ @UzBotsBuilder_Bot -ga qaytib, nusxalangan API tokenini shu botga yuboring.
💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$kar_menu
    ]);
    file_put_contents("step/$fid.txt","pulsom&token");
}

if($userstep == "pulsom&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"⚔️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pulsom.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("user/$fid/pulsom");
    if(file_get_contents("user/$fid/pulsom/pulsom.php")){
        unlink("user/$fid/pulsom/pulsom.php");
    }
    file_put_contents("user/$fid/pulsom/pulsom.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pulsom/pulsom.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (som)\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel orqali botingizni sozlang!",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Pul som bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $getssss = file_get_contents("stat/stat.txt");
        $getssss += 1;
        file_put_contents("stat/stat.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

############# PRO_BOTS #############
//--------------------------------------
if($tx == "➕Nakrutka bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 80){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Nakrutka bot yaratish uchun 80 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","nakrutka&token");
    }
}

if($userstep == "nakrutka&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"🛠️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/nak.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/nak");
    if(file_get_contents("prouser/$fid/nak/nak.php")){
        unlink("prouser/$fid/nak/nak.php");
        unlink("prouser/$fid/nak/usid.txt");
        unlink("prouser/$fid/nak/grid.txt");
        $files = glob("prouser/$fid/nak/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/nak/baza");
    }
    file_put_contents("prouser/$fid/nak/nak.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/nak/nak.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Nakrutka pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Nakrutka bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 80;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🛠Maker bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 120){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"🛠Maker  bot yaratish uchun 120 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","maker&token");
    }
}

if($userstep == "maker&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"🛠️Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/maker.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/maker");
    if(file_get_contents("prouser/$fid/maker/maker.php")){
        unlink("prouser/$fid/maker/maker.php");
        unlink("prouser/$fid/maker/usid.txt");
        unlink("prouser/$fid/maker/grid.txt");
        $files = glob("prouser/$fid/maker/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/maker/baza");
    }
    file_put_contents("prouser/$fid/maker/maker.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/prouser/$fid/maker/maker.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: 🛠Maker Bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Maker bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 120;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

///////////////////

if($tx == "❤Like bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 50){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Like bot yaratish uchun 50 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","Like&token");
    }
}

if($userstep == "Like&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/Like.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/rubl");
    if(file_get_contents("prouser/$fid/Like/Like.php")){
        unlink("prouser/$fid/rubl/Like.php");
        unlink("prouser/$fid/rubl/usid.txt");
        unlink("prouser/$fid/rubl/grid.txt");
        $files = glob("prouser/$fid/Like/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/Like/baza");
    }
    file_put_contents("prouser/$fid/rubl/Like.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/Like/Like.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (rubl) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Pul bot rubl\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 50;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "💰Pul bot (rubl)"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 50){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (rubl) bot yaratish uchun 50 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","rubl&token");
    }
}

if($userstep == "rubl&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/rubl.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/rubl");
    if(file_get_contents("prouser/$fid/rubl/rubl.php")){
        unlink("prouser/$fid/rubl/rubl.php");
        unlink("prouser/$fid/rubl/usid.txt");
        unlink("prouser/$fid/rubl/grid.txt");
        $files = glob("prouser/$fid/rubl/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/rubl/baza");
    }
    file_put_contents("prouser/$fid/rubl/rubl.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/rubl/rubl.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (rubl) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Pul bot rubl\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 50;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

////////////////

if($tx == "💰Pul bot (so'm)"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 50){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Pul bot (som) bot yaratish uchun 50 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","sombot&token");
    }
}

if($userstep == "sombot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/som.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/som");
    if(file_get_contents("prouser/$fid/som/som.php")){
        unlink("prouser/$fid/som/strtotime.php");
        unlink("prouser/$fid/som/usid.txt");
        unlink("prouser/$fid/som/grid.txt");
        $files = glob("prouser/$fid/som/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/som/baza");
    }
    file_put_contents("prouser/$fid/som/som.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/som/som.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Pul bot (so'm) pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Pul bot so'm\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 50;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}
if($tx == "📦Uc bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 60){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Uc bot yaratish uchun 60 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","ucpro&token");
    }
}

if($userstep == "ucpro&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/ucbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/ucbot");
    if(file_get_contents("prouser/$fid/ucbot/ucbot.php")){
        unlink("prouser/$fid/ucbot/strtotime.php");
        unlink("prouser/$fid/ucbot/usid.txt");
        unlink("prouser/$fid/ucbot/grid.txt");
        $files = glob("prouser/$fid/ucbot/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/ucbot/baza");
    }
    file_put_contents("prouser/$fid/ucbot/ucbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/ucbot/ucbot.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Uc bot pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: BC bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 60;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📦BC bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 65){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"BC bot yaratish uchun 65ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","bcbot&token");
    }
}

if($userstep == "bcbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/pro/bcbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/bcbot");
    if(file_get_contents("prouser/$fid/bcbot/bcbot.php")){
    	unlink("prouser/$fid/bcbot/bcbot.php");
    	unlink("prouser/$fid/bcbot/usid.txt");
    	unlink("prouser/$fid/bcbot/grid.txt");    	
        $files = glob("prouser/$fid/bcbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("prouser/$fid/bcbot/channel");
    }
    file_put_contents("prouser/$fid/bcbot/bcbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/prouser/bcbot/bcbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: BC bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: BC bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id
🔰 - $botname Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 65;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "📦MB bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 70){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Mb bot yaratish uchun 70 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","mbbot&token");
    }
}

if($userstep == "mbbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/pro/mbbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/mbbot");
    if(file_get_contents("prouser/$fid/mbbot/mbbot.php")){
    	unlink("prouser/$fid/mbbot/mbbot.php");
    	unlink("prouser/$fid/mbbot/usid.txt");
    	unlink("prouser/$fid/mbbot/grid.txt");    	
        $files = glob("prouser/$fid/mbbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("prouser/$fid/mbbot/channel");
    }
    file_put_contents("prouser/$fid/mbbot/mbbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/mbbot/mbbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: MB bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Mb bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 70;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🥳Konkurs bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 70){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Konkurs bot yaratish uchun 70 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","konkursbot&token");
    }
}

if($userstep == "konkursbot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
    $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id; 
    $kod = file_get_contents("bots/pro/konkursbot.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/konkursbot");
    if(file_get_contents("prouser/$fid/konkursbot/konkursbot.php")){
    	unlink("prouser/$fid/konkursbot/konkurdbot.php");
    	unlink("prouser/$fid/konkursbot/usid.txt");
    	unlink("prouser/$fid/konkursbot/grid.txt");    	
        $files = glob("prouser/$fid/konkursbot/channel/*");
        foreach ($files as $value) {
            unlink($value);
        }
        rmdir("prouser/$fid/konkursbot/channel");
    }
    file_put_contents("prouser/$fid/konkursbot/konkursbot.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/konkursbot/konkursbot.php"))->result;

    if($get){
         $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Konkurs bot\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Konkurs bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 70;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]); 
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html"
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🇺🇸Usa bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 55){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Usa bot yaratish uchun 55ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini chiqaring

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","usabot&token");
    }
}

if($userstep == "usabot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/usa.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/usa");
    if(file_get_contents("prouser/$fid/usa/usa.php")){
        unlink("prouser/$fid/usa/usa.php");
        unlink("prouser/$fid/usa/usid.txt");
        unlink("prouser/$fid/usa/grid.txt");
        $files = glob("prouser/$fid/usa/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/usa/baza");
    }
    file_put_contents("prouser/$fid/usa/usa.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://codderlar.bigturn.ru/robot/bots/pro/usa/usa.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Usa bot  pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Usa bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 55;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "⏰Soat bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 120){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Usa bot yaratish uchun 120ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini chiqaring

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","soat&token");
    }
}

if($userstep == "soat&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/soat.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
$kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/soat");
    if(file_get_contents("prouser/$fid/soat/soat.php")){
        unlink("prouser/$fid/soat/soat.php");
        unlink("prouser/$fid/soat/usid.txt");
        unlink("prouser/$fid/soat/grid.txt");
        $files = glob("prouser/$fid/soat/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/soat/baza");
    }
    file_put_contents("prouser/$fid/usa/soat.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/prouser/$fid/soat/soat.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: ⏰Soat bot  pro\n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        bot('sendMessage',[
        'chat_id'=>"-1001716526763",
        'message_id'=>$getid,
        'text'=>"🆕 Serverga yangi bot ulandi!</b>\n<i>⚔ Bot turi</i>: Soat bot\n<i>🏷 Bot nomi</i>: $nomi\n<i>💌 Bot useri</i>: @$user\n<i>🆔 Bot idinfikatori</i>: $id\n\n🤖 @$botname
🔰$botname - Kelajak bizniki",
        'parse_mode'=>"html",
        'reply_markup'=>$kar_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 120;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

if($tx == "🕋Islomiy bot"){
	$get = file_get_contents("referal/$fid.txt");
	if($get < 100){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"Islomiy bot yaratish uchun 100 ta olmos kerak. Quyidagi havolani do'stlaringizga tarqatib olmos yig'ing:\n<code>https://t.me/$botname?start=$cid</code>\n\nEslatib o'tamiz har bir do'stingiz sizga <b>5</b> ta olmos beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga olmos berilmaydi!\nYoki $adminuser'ga murojaat qilib olmos sotib oling!",
    'parse_mode'=>"html",
    'disable_web_page_preview'=>true,
    'reply_markup'=>json_encode([
    'inline_keyboard'=>[
    [['text'=>"Referalni tarqatish",'switch_inline_query'=>"$fid"],['text'=>"💳Hisobni to'ldirish",'callback_data'=>"toldir"]],
    ]
    ])
    ]);
	}else{
	bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"1️⃣ @BotFather-ga o'ting.  Botingiz tokenini jo‘nating

💥Taxminiy API Token:
 126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA",
    'reply_markup'=>$ka_menu
    ]);
    file_put_contents("step/$fid.txt","islombot&token");
    }
}

if($userstep == "islombot&token" and $tx !== "⬅️ Bekor qilish" and joinchat($fid)=="true"){
    if(mb_stripos($tx, ":")!==false){
        $getid = bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"Tayyorlanmoqda..."
        ])->result->message_id;
    $kod = file_get_contents("bots/pro/islom.php");
    $kod = str_replace("API_TOKEN", "$tx", $kod);
    $kod = str_replace("ADMIN_ID", "$fid", $kod);
    $kod = str_replace("ADMIN_USER", "$user", $kod);
    
    mkdir("prouser/$fid/nakrutka");
    if(file_get_contents("prouser/$fid/islom/islom.php")){
        unlink("prouser/$fid/islom/islom.php");
        unlink("prouser/$fid/islom/usid.txt");
        unlink("prouser/$fid/islom/grid.txt");
        $files = glob("prouser/$fid/islom/baza/*");
        foreach ($files as $key) {
        	unlink($key);
        }
        rmdir("prouser/$fid/islom/baza");
    }
    file_put_contents("prouser/$fid/islom/islom.php", $kod);

    $get = json_decode(file_get_contents("https://api.telegram.org/bot$tx/setwebhook?url=https://".$_SERVER['SERVER_NAME']."/robot/prouser/$fid/islom/islom.php"))->result;

    if($get){
        $user = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->username;
        $nomi = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->first_name;
        $id = json_decode(file_get_contents("https://api.telegram.org/bot$tx/getme"))->result->id;
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);
        bot('sendMessage',[
        'chat_id'=>$cid,
        'message_id'=>$getid,
        'text'=>"✅ Bot tayyor!\n\n💡 Bot turi: Islomiy bot \n👤 Bot nomi: $nomi\n✳️ Useri: @$user\n🆔 raqami: $id\n\n/panel - admin panel",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
        $gett = file_get_contents("referal/$fid.txt");
        $gett -= 100;
        file_put_contents("referal/$fid.txt", $gett);
        $getssss = file_get_contents("stat/statpro.txt");
        $getssss += 1;
        file_put_contents("stat/statpro.txt", $getssss);
    } else {        
        bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$getid]);        
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Noma'lum xatolik",
        'parse_mode'=>"html",
        'reply_markup'=>$ka_menu
        ]);
    }

    unlink("step/$fid.txt");
   }else{
        bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>"📛 Menimcha siz tokenni yuborishda xatolikk yo'l qo'ydingiz!\nToken to'g'riligiga ishonch hosil qilib, qayta yuboring!",
        'parse_mode'=>"html"
        ]);
   }
}

#######
#############################################-END-###########################

if($tx == "📚 Qo'llanma" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"💡 <b>@KomilovOffical jamoasi:</b>
	
<i>Telegram tarmog‘idagi eng yangi loyiha 
@$botname siz bu bot orqali php dasturlash tillarini bilmasdan turib ham bot yaratish imkoniyatiga egasiz!</i>

⚙<b> Tizim versiyasi: v0.4.2</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📋 Ma'lumot",'callback_data'=>"noma"],['text'=>"⚠️ Qoidalar",'callback_data'=>"qoida"]],
[['text'=>"📹 Video qo'llanma",'url'=>"qol"]],
]
])
]);
}


if($data == "malumot"){
	bot('editMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"💡 <b> @KomilovOffical jamoasi:</b>
	
<i>Telegram tarmog‘idagi eng yangi loyiha 
@$botname siz bu bot orqali php dasturlash tillarini bilmasdan turib ham bot yaratish imkoniyatiga egasiz!</i>

⚙<b>Tizim versiyasi: v0.8.0</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"📋 Ma'lumot",'callback_data'=>"noma"],['text'=>"⚠️ Qoidalar",'callback_data'=>"qoida"]],
[['text'=>"📹 Video qo'llanma",'url'=>"qol"]],
]
])
]);
}


if($data=="noma"){
bot('editMessageText',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
'text'=>"🤖 <b>Bot yaratish qo'llanmasi!

1. Telegram dasturingizdan @BotFather deb qidiring va START tugmasini bosing!

2. @BotFather ga /newbot buyrug'ini yozing.

3. Yaratmoqchi bo'lgan botingiz NOMINI yozing.

4. Botingiz BOTNAMEsini yozing (botname oxiri  bot  yoki robot bilan tugashi kerak).

5. Agar amallarni to'g'ri bajargan bo'lsangiz sizga @BotFather botingiz Tokenini yuboradi uni saqlab qo'ying!

6. Bot yaratayotganingizda botimiz Token so'raganida @BotFather yuborgan tokeni yuborasiz.

➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖

❗ESLATMA: </b>

⚠️<i>Qoidalarga rioya qilmagan foydalanuvchi botdan blocklarnishi mumkin.</i>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"◀️ Ortga",'callback_data'=>"malumot"]],
]
])
]);
}

if($data == "qoida"){
	bot('EditMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>⚠️ Qoidalar:</b>
    
<i>1. Ushbu robot maker bot adminstratorlari va bot  dasturchisi foydalanuvchilardan quydagilarni o'z zimmasiga olmasligi haqida sizga eslatib o'tadi:
1.1 ushbu botdan foydalangan holda ochilgan barcha botlar sizga pul to'lashi yoki to'lamasligj bu bizga bog'liq emas va biz sizga pul to'lamaymiz!
1.2 agar sizga ushbu botlar server orqali pul to'laydi deyishsa ishonmang yoki o'zingizda shunday xayol bo'lsa buni uniting chunki bu aqilsiz gap!
1.3 ushbu robot orqali bot ochgan zahotingiz barcha shart va qoidalar bilan tanishganingizni va rozi ekanligingizni o'z zimangizga olasiz!</i>

<b>2. ⚠️Ogohlantiramiz:</b>
<i>2.1 Taniqli shaxslar, mashxur savdo belgilari, kampaniya tashkilot nomlari, telegram kanal va veb-saytlar nomidan soxta bot ochib ish yuritish taqiqlanadi bunga ko'ra sizga tashkilot tomonidan ogohlantirish berilmaydi va ish sud tartibida ko'rib chiqiladi.
2.2 Foydalanuvchi tomonidan kiritilgan xar qanday ma'lumot va manbalar uchinchi shaxsga oshkor etilmaydi.
2.3 Foydalanuvchi tomonidan yasalagan botlarda quydagilar qatiyan taqiqlanadi!
+18 manba kanal va guruhlarga obunachi yig'ishda foydalanish.
Diniy aqidaparastlik kanalarda foydalanish.
Davlat siyosatiga zid yoki yolg'on manbalar tarqatuvchi kanalarga ulash va boshqlar...</i>

<b>3. ❗Eslatib o'tamiz:</b>
<i>√ botlar 100% xafsiz va faqat O'zbekistondagi telegram foydalanuvchilari foydalana oladi
√ barcha raqamlar barcha xisoblar o'chirilishidan avval sizni ogohlantiramiz.
√ qo'llab - quvvatlash xizmati sizga 24/7 soat davomida xizmat ko'rsatadi.
√ Sizning ma'lumotlaringiz xech kim tomonidan qayta ko'rib chiqilmaydi (2.1 dan tashqari hollarda)</i>",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ Ortga",'callback_data'=>"malumot"]],
]
])
]);
}

if($tx=="qol"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/UzBotsBuilderNews/313",
        'caption'=>"🤖Botimizning qo'lash videosi bu video bizning yotube kanalimizga hamda botimmizga ham joylanadi.✅

🛠Bot : @$botname

🎥Video mualifi : ADMIN_USER

🛠Qanday mumao bolsa : ADMIN_USER ga murojaat qing!", 
        'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[['text'=>"◀️ Ortga",'callback_data'=>"malumot"]],
]
])
]); 
}

if($tx == "📊 Statistika" and joinchat($fid)=="true"){
    $us = file_get_contents("stat/usid.txt");
    $uscount = substr_count($us, "\n");
    $bot = file_get_contents("stat/stat.txt");
    $botpro = file_get_contents("stat/statpro.txt");
    $all = $bot + $botpro;
    bot('sendMessage',[
    'chat_id' => $cid,
    'text'=>"📊 Statistika\nBot a'zolari soni: *$uscount* ta\nJami yasalgan oddiy botlar: *$bot* ta\nJami yasalgan pro botlar: *$botpro* ta\nJami yasalgan botlar: *$all* ta\n\n⏰$time  📆$sana",
    'parse_mode'=>"markdown",
    'reply_markup'=>$back_menu
    ]);
}

if($tx == "🆘️Yordam" and joinchat($fid)=="true"){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"❓Siz Yordam menusidasiz.\n\n📋 Yordam olish uchun buyruqlardan foydalaning:",
    'reply_markup'=>$yordam_menu
    ]);
}
if($tx=="📞Murojaat" and joinchat($fid)=="true"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"📞 Sizda biror gʻoya, taklif yoki murojaat boʻlsa bizga murojaat qiling:
@KOMILOVo1

📂 Texnik qoʻllab-quvvatlash uchun guruhimizga qoʻshiling:
@KOMILOVo1Bot",

	'parse_mode'=>'html',
	'reply_markup'=>$yordam_menu
	]);
}
if($tx=="⚡Tizim yangiliklari"and joinchat($fid)=="true"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"📂 Bot yuzasidagi barcha yangiliklar @KomilovOffical kanalida yetkazib boriladi.

🗄 Kanalga obuna boʻlishingizni soʻraymiz! Bu siz uchun muhim!",

	'parse_mode'=>'html',
	'reply_markup'=>$yordam_menu
	]);
}
if($tx=="ℹ️Bot haqida"and joinchat($fid)=="true"){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"ℹ️ Ushbu bot orqali siz hech qanday dasturlash tillarini bilmasdan turib va hech qanday hostinglarsiz oson bot yasay olasiz.

✅ Imkoniyatlar
👉 Bepul hostingdan bot yarating
👉 Do'stlarni taklif qiling
👉 Har kunlik bonus oling
👉 Dasturlangan bot yarating.

🇺🇿 Hamma botlar soni: 10 ta

♻️ Bot versiyasi: 4.0

🛠 Dasturchi: Unkown",

	'parse_mode'=>'html',
	'reply_markup'=>$yordam_menu,
	]);
}

if($tx=="📽️Video qoʻllanma"){ 
      bot('sendVideo',[ 
        'chat_id'=>$cid,
        'video'=>"https://t.me/UzBotsBuilderNews/313",
        'caption'=>"🤖Botimizning qo'lash videosi bu video bizning yotube kanalimizga hamda botimmizga ham joylanadi.✅

🛠Bot : @UzBotsBuilder_Bot

🎥Video mualifi : @KOMILOVo1

🛠Qanday muamo bolsa : @KOMILOVo1 murojaat qing!", 
        'reply_markup'=>$yordam_menu,
]); 
}

//panel

if($text=="🎫 Promokod yaratish"){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>" 🎫 Promokod yasash uchun
/promo promokod
masalan
<code>/promo 79j585h67ht</code>",
'parse_mode'=>'html',
'reply_markup'=>$back4_menu,
]);
}
$promo = file_get_contents("ch1.txt");
$ball = file_get_contents("ch2.txt");
$aa = "-1001716526763";  //promokod yuboriladigan kanal id raqami
$ab = "-1001716526763"; //promokod ishlatilganligi haqida yuboriladigan kanalid raqami
if(mb_stripos($text, "/promo")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch1.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🎫 Promokod $promo
qancha olmos berilsin
/ball olmos miqdori yozing
Masalan
<code>/ball 250</code>",
'parse_mode'=>'html',
]);
}
}

if(mb_stripos($text, "/ball")!==false){
if($cid == $admin){
	$m1 = explode(" ",$text);
 $m2 = $m1[1];
 file_put_contents("ch2.txt","$m2");
 bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"🎫<b> Promokod kanalga yuborildi ✅</b> ",
'parse_mode'=>'html',
'reply_markup'=>$panel,
 ]);
 bot("sendmessage",[
 'chat_id'=>$aa,
 'text'=>"<i>🎫 Yangi Promokod.

🤖 Botga kirish -> @$botname 
🔽 Ishlatish uchun pastdagi tugmani bosing.</i>

<b>🎫 Promokod tashlangan vaqt: $soat</b>",
 'parse_mode'=>'html',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🎫 Promokodni ishlatish", "url"=>"https://t.me/$botname?start=$promo"]],
]
])
]);
}
}

if($text=="/start $promo"){
$olmos = file_get_contents("referal/$cid.txt");
$miqdor = $olmos + $ball;
file_put_contents("referal/$cid.txt","$miqdor");
bot("sendmessage",[
'chat_id'=>$cid,
'text'=>"<i>✅ Promo kod to'g'ri sizga $ball olmos berildi!</i>",
'parse_mode'=>"html",
]);
unlink("ch1.txt");
bot('sendMessage',[
'chat_id'=>$ab,
'text'=>"<i>⚠️ Diqqat tepadagi promokod ishlatildi.
Endi undan qayta foydalanib bo'lmaydi!
Promokoddan @$username foydalandi 
va unga $ball olmos taqdim etildi ✅</i>

<b>🎫 Promokod ishlatilgan vaqt: $soat</b>",
'parse_mode'=>'html',
]);
unlink("ch2.txt");
}



//<------- admin-------> 

if(($tx == "/panel") and $cid == $admin){
    bot('deleteMessage',['chat_id'=>$cid,'message_id'=>$mid]);
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"<b>👨‍💻Admin panelga xush kelibsiz.</b>",
    'parse_mode'=>"html",
    'reply_markup'=>$panel,
]);
}

if($text=="🛠 Kanal parametrlari" and $cid==$admin){
	typing($chatid);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>🛠 Kanal parametrlari</b>",
'parse_mode'=>"html",
'reply_markup'=>$kanal_menu,
]);
}

if($text=="🛠 Majburiy obuna" and $cid==$admin){
  typing($chatid);
  bot('sendMessage',[
  'chat_id'=>$cid,
  'text'=>"<b>Majburiy azolik kanallarni o'zgartirish uchun 
  /ch1-kanaluseri @ belgisini qoymasdan!</b>",
  'parse_mode'=>"html",
  'reply_markup'=>$panel,
  ]);
  }

  if(mb_stripos($text, "/ch1-")!==false){
    $m1 = explode("-",$text);
   $m2 = $m1[1];
   file_put_contents("ch1.txt","$m2");
   bot('sendMessage',[
  'chat_id'=>$admin,
  'text'=>"1-kanal @$m2 ga o'zgardi!",
   ]);
  }

  if($text=="🛠 Yangiliklar kanali" and $cid==$admin){
    bot('sendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>Yangiliklar kanalini o'zgartirish uchun 
    kanal id raqamini yozing 
    Masalan!
    /set-1234567899</b>",
    "parse_mode"=>"html",
    "reply_markup"=>$panel,
    ]);
    }

    if(mb_stripos($text, "/set-")!==false){
      $m1 = explode("-",$text);
     $m2 = $m1[1];
     file_put_contents("ch4.txt","$m2");
     bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"To'lovlar kanali ID raqami -100$m2 ga o'zgardi!",
     ]);
    }

if($tx == "⬅️ Bekor"){
    unlink("step/admin.txt");
    bot('sendMessage',[
        'text'=>"<b>👨‍💻Admin panelga qaytdingiz.</b>",
        'chat_id'=>$admin,
        'parse_mode'=>"html",
        'reply_markup'=>$panel,
]);
}
    
$rpl = json_encode([
  'resize_keyboard'=>false,
  'force_reply'=>true,
  'selective'=>true,
]);
//blockdan olish
 if($type=="private"){
if($text == "🔓 Blokdan olish" and $cid==$admin){
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "🚫Blockdan Olinadigan 🆔️ni Yozing!" ,
       'parse_mode'=>'markdown',  
       'reply_markup'=>$rpl,
       ]);
       }}
       if($reply == "🚫Blockdan Olinadigan 🆔️ni Yozing!"){  
$fayl = file_get_contents("block.db");
$fayl2 = "$text";
$fayl3 = str_replace($fayl2," ",$fayl);
file_put_contents("block.db","$fayl3");
$fayl = file_get_contents("block.db");
bot('sendmessage', [
      'chat_id' =>$cid,
       'text' => "[$text](tg://user?id=$text)  Bandan olindi" ,
       'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
      ]); 
      bot('sendmessage', [
      'chat_id' =>$sd,
       'text' => "🖐*Salom*  [$name](tg://user?id=$uid)  
😊Sizga Xush Xabar Bor!
Siz [👨‍💻Adminimiz](tg://user?id=$admin) Tomonidan Bandan Olindingiz!
Endi Botni Ishlatishingiz mumkin ✅
🔃Qayta /start Bosing!" ,
       'parse_mode'=>'markdown', 
       ]);
}

//Blocklash
if($text=="🔒 Bloklash"){
if($cid==$admin){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Ban Qilinadigan 🆔ni Yuboring!",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="Ban Qilinadigan 🆔ni Yuboring!"){
file_put_contents("block.db","$blocks\n$text");
bot('SendMessage',[
   'chat_id'=>$admin,
        'text'=>"✅[$text](tg://user?id=$text) *Banlandi!*", 
        'parse_mode'=>'markdown', 
'reply_markup'=>$panel,
        ]);
        bot('SendMessage',[
   'chat_id'=>$text,
        'text'=>"<b>⚠️Sizni bu botda bloklashdi. 
🚫Endi botimizdan foydalana olmaysiz!
❗ Agar bu anglashilmovchilik bo'lda admin bilan bog'laning</b>", 
        'parse_mode'=>'html', 
        'reply_markup'=>json_encode([
        'inline_keyboard'=>[
   [["text"=>'👨‍💻Asminstrator', 'url'=>"https://t.me/ADMIN_USER"]],
]
]),
]);
}


$blocks=file_get_contents("block.db");
if(mb_stripos($blocks,"$uid")!==false){
bot('sendMessage', [
'chat_id'=>$cid,
'parse_mode'=>"html",
'text'=>"<b>🖐Salom <a href='tg:user?id=$cid'>$name</a> 
Siz  Botimizdan foydalana olmaysiz, chunki Bot sizni bloklangan!
Blokdan chiqish uchun 👨‍💻Admin ga yozing! Blokdan chiqmaguncha bot siz uchun ishlamaydi!🚫</b> " ,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"Admin👨‍💻", "url"=>"https://t.me/ADMIN_USER"]],
]
])
]);return false;}

//Bitta userga xabar yuborish
if($text == "📋 Userga Xabar"){
if($cid == $admin){
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"✔ Userga Xabar yuborish uchun
/sms 🆔️ Xabar 
shu tarzda yuboring!

👨‍💻Admin: $adminuser",
'reply_markup'=>$back4_menu,
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men @$userR ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if(mb_stripos($text,"/sms") !== false){
if($cid == $admin){
$ex = explode(" ",$text);
$sms = str_replace("/sms $ex[1]","",$text);
$ismi = $message->from->first_name;

if(mb_stripos($ex[1],"@") !== false){
$ssl = str_replace("@","",$ex[1]);
$egasi = "t.me/$ssl";
}else{
$egasi = "tg://user?id=$ex[1]";
$eegasi = "$ex[1]";
}
bot('sendmessage',[
'chat_id'=>$ex[1],
'text'=>"📨*Yangi Xabar*

👤 [$ismi](tg://user?id=$uid)

*📨 Xabar: $sms

❄ @$botname*",
'parse_mode'=>"markdown", 
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"👤[Foydalanuvchi]($egasi) ga Habaringiz Yuborildi📩",
'parse_mode'=>"markdown", 
'reply_markup'=>$panel
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men $adminuser ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
$lichka=file_get_contents("shekih.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("shekih.db","$lichka\n$cid");
}
}
//statistika
if($text == "📊 Sitatistika"){
if($cid == $admin){
$lichka=file_get_contents("shekih.db");
$lich=substr_count($lichka,"\n");
$time=date('H:i:s',strtotime('2 hour'));

bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "<b>Bot statatistikasi:</b>    
├▶A'zolar: <b>$lich</b>",
'parse_mode'=>'html',
]);
}
}
//oddiy xabar yuborish
$xabar = file_get_contents("send.txt");
if($text == "↗️ Xabar yuborish"){
if($cid == $admin){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"*Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing.*",
'parse_mode'=>"markdown",
'reply_markup'=>$back4_menu,
]); file_put_contents("send.txt","user");
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men $adminuser ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Bekor qilindi!",
'parse_mode'=>"html",
]); unlink("send.txt");
}else{
$lich = file_get_contents("shekih.db");
$lichka = explode("\n",$lich);
foreach($lichka as $lichkalar){
$okuser=bot("sendmessage",[
'chat_id'=>$lichkalar,
'text'=>$text,
'parse_mode'=>'HTML'
]);
}
}
}
if($okuser){
bot("sendmessage",[
'chat_id'=>$admin,
'text'=>"<b>Hamma userlarga yuborildi</b>✅",
'parse_mode'=>'html',
'reply_markup'=>$panel,
]); unlink("send.txt");
}

//Xabar
if((mb_stripos($text, "/xabar")!==false) and $cid == $admin){
$id = explode(" ",$text);
$id1 = $id[1];
$id2 = $id[2];
$finish = bot('SendMessage', [
'chat_id'=>$id1,
'parse_mode'=>"markdown",
'text'=>"$id2

By: [@$bot]",
'disable_web_page_preview'=>true,
]);
}
if($finish){
bot('SendMessage', [
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✔️ [$id1](tg://user?id=$id1) *Ga Xabar Yuborildi!✅*",
'parse_mode'=>'html',
'reply_markup'=>$panel
]);
}

$on = file_get_contents("on.txt");
if ($on == "off" && $cid = "$admin"){
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>@$botname dam olish rejimida iltimos bezovta qilmang.\n\nHozir tamirda.📛</b>",
        'parse_mode'=>'html',
]);
}
//o'chirish
if($text == "❌ OFF" && $cid == $admin){
file_put_contents("on.txt","off");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Ofline.</b>",
  'parse_mode'=>'html',
]);
}
//yoqish
if($text == "✅ ON" && $cid == $admin){
file_put_contents("on.txt","on");
bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"⚠️<b>Online</b>",
  'parse_mode'=>'html',
]);
}

//pul berish
if(mb_stripos($tx, "💸 Pul berish")!==false){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul berish uchun quyidagi buyruqni bajaring!
Bir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!
Masalan:</b>
<code>/plus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$back4_menu,
]);
}elseif(mb_stripos($tx, "/plus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos+$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobi to'ldirildi.
🆔 Id raqami : $id1
💳 To'ldirildi : $id2 olmos</b>",
'parse_mode' => 'html',
'reply_markup'=>$panel,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingiz $id2 olmos ga to'ldirildi.*",
'parse_mode'=>'Markdown',
]);
}else{
bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "<b>Bu bo‘limni faqat bot administratori ishlata oladi!</b>",
'parse_mode'=>'Markdown',
]);
}
}

//pul ayirish
if($text == "💸 Pul ayirish"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>✅Pul ayrish Uchun Quyidagi Buyruqni bajaring!
Bir qator pasga tushib id raqamni yozing, yana bur qator tushib pulni yozing!
Masalan:</b>
<code>/minus
$admin
1000</code>",
'parse_mode' => 'html',
'reply_markup'=>$back4_menu,
]);
}elseif(mb_stripos($text, "/minus")!==false){
if($cid == $admin){
$id = explode("\n", $tx);
$id1 = $id[1]; $id2 = $id[2];
$olmos = file_get_contents("referal/$id1.txt");
$miqdor = $olmos-$id2;
file_put_contents("referal/$id1.txt","$miqdor");
bot('sendmessage',[
'chat_id'=>$cid,
'text'=> "<b>🛠 Hisobdan yechib olindi.
🆔 Id raqami : $id1
💳 Yechildi : $id2 olmos</b>",
'parse_mode' => 'html',
'reply_markup'=>$panel,
]);
bot("sendmessage",[
'chat_id'=>$id1,
'text'=> "*🛠 Hisobingizdan $id2 olmos ayirdi.*",
'parse_mode'=>'Markdown',
]);
}else{
	bot("sendmessage",[
'chat_id'=>$cid,
'text'=> "*🤪😂 Bu funksiyani Faqat men $adminuser ishlata olaman.*",
'parse_mode'=>'Markdown',
]);
}
}

//bot kodi
if($tx == "📂 Skript" and $cid == $admin){
bot('sendDocument',[
'chat_id'=>$admin,
'document'=>new CURLFile(__FILE__),
'caption'=>"$botname kodi",
]);
}

?>