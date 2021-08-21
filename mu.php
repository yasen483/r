<?php

ob_start();
define('API_KEY','607127121:AAHaK406bHSG_ej6ZtluUNFCkwBSG7gBRTk');
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



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$admin = 541039199;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@XDQDX&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@XDQDX&user_id=$from_id");
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('makee/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

$inlineqt = $update->inline_query->query;
bot('answerInlineQuery',[
        'inline_query_id'=>$update->inline_query->id,    
        'results' => json_encode([[
            'type'=>'article',
            'id'=>base64_encode(rand(5,555)),
            'title'=>'مشاركة مع اصدقائك',
            'input_message_content'=>['parse_mode'=>'HTML','message_text'=>"
            📍 ¦ اهلا وسهلا #عزيزي/تي في بوت

📍 ¦ صناعه بوتات زغرفة متميز في الاداء

📍 ¦ البوت يعمل با العربي + الانكليزي

📍 ¦ يمكنك صناعه بوت واحد فقط 

📍 ¦ لتغير البوت الى حقوقك او حقوق قناتك راسل المطور للتفاوض ✒️
"],
            'reply_markup'=>['inline_keyboard'=>[
                [

                ['text'=>'💎 - اصنع بوتك الخاص - 💎️','url'=>'https://telegram.me/Potat_Factorybot?start']
                ],
                [['text'=>'♻️ - شارك المنشور - ♻️', 'switch_inline_query'=>"$from_id"]],
             ]]
        ]])
    ]);

if (strpos($ch1 , '"status":"left"') !== false){
if (strpos($ch2 , '"status":"left"') !== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'parse_mode'=>'Markdown',
'text'=>"المعذرة ❌ يجب عليك الاشتراك 🚹✨ في هاذه القنوات لكي يمكنك استخدام البوت 📢",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [['text'=>"• MUSIC ¦¦ MUSTAFA •",'url'=>'https://t.me/joinchat/AAAAAFDgGRcfbCcaOvDIyw']],
        [
          ['text'=>'📍مصطفى عبد الرحمن📍', 'url'=>"https://t.me/joinchat/AAAAAE04RSZNv4-GMKwbTg"]
        ],
]

])
]);
}
}

        $f = explode("\n", file_get_contents("botatusers.txt"));
        $sudo = 541039199;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username; 
        if ($update and !in_array($chat_id, $f)) {
            file_put_contents("botatusers.txt", $chat_id."\n",FILE_APPEND);
        } 
        if ($text == "/us" and $chat_id == 541039199) {
            bot("sendMessage",[
                "chat_id"=>$chat_id,
                "text"=>count($f)
            ]);
        }



        
if($text == '/start' and !in_array($from_id, $getid) and !strpos($ch1 , '"status":"left"') !== false){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'
📍 ¦ اهلا وسهلا #عزيزي/تي في بوت

📍 ¦ صناعه بوتات زغرفة متميز في الاداء

📍 ¦ البوت يعمل با العربي + الانكليزي

📍 ¦ يمكنك صناعه بوت واحد فقط 

📍 ¦ لتغير البوت الى حقوقك او حقوق قناتك راسل المطور للتفاوض ✒️
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'انشاء بوت💎','callback_data'=>'dss']],
[['text'=>'حذف بوت🗑','callback_data'=>'dsd']],
[['text'=>'كيفية جلب توكن البوت 🤖','callback_data'=>'help']],
[['text'=>'شكر خاص لقسم التطوير ♦️','callback_data'=>'channel']],
]
])
]);
}
////////////////////////////////////////////////////////////////////
if($data=="home"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
📍 ¦ اهلا وسهلا #عزيزي/تي في بوت

📍 ¦ صناعه بوتات زغرفة متميز في الاداء

📍 ¦ البوت يعمل با العربي + الانكليزي

📍 ¦ يمكنك صناعه بوت واحد فقط 

📍 ¦ لتغير البوت الى حقوقك او حقوق قناتك راسل المطور للتفاوض ✒️
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'انشاء بوت💎','callback_data'=>'dss']],
[['text'=>'حذف بوت🗑','callback_data'=>'dsd']],
[['text'=>'كيفية جلب توكن البوت 🤖','callback_data'=>'help']],
[['text'=>'شكر خاص لقسم التطوير ♦️','callback_data'=>'channel']],
]
])
]);
}

////////////////////////////////////////////////////////////////////
 $update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_tokenn = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file1 = file_get_contents('zkref.php');
$get_done = file_get_contents('make1/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make1/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka2' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make1/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'قم بأرسال 💭 توكن البوت الان ✅',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka2' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت زخرفة واحد💎',
 'show_alert'=>true
 ]);      
}


if($text and in_array($from_id, $getid) and $check->ok == "true"){

for($i = $mid - 3; $i < $mid; $i++){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$i
]);
}

$str = str_replace($from_id, '', $get_id);    

file_put_contents('make1/make.txt', $str);    

file_put_contents('make1/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء بوت زخرفة🔖 ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'الصفحة الرئيسية 🏠️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت زخرفة
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$user_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$user_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$user_id](tg://user?id=$user_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$user_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);



mkdir("bots1/$from_id");

file_put_contents("bots1/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots1/$from_id/bot.php", $get_file1);

file_put_contents("bots1/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots1/$from_id/welcome.txt", 'اهلا بك في بوت الزخرفة المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://bostar.000webhostapp.com/mu_1bot/bots1/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'📍 ¦ عذرا ❗️هاذا التوكن غير صالح ♻️

📍 ¦ عد الى القائمه الرئيسية  ⛓📍',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    


if($data == 'delete2' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde2'],
]    
]])
]);    
}

if($data == 'yesde2' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'الصفحة الرئيسية 🏠️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make1/ex.txt', $str1);

$get_token = file_get_contents("bots1/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots1/$chat_id2/bot.php");
unlink("bots1/$chat_id2/info.txt");

}


if($data == 'delete2' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}


if($data == 'help'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🤷♂┊كيف تصنع توكن خاص بك ؟؟ 

💞┊اليك الشرح المفصل تابع الى الاخير

1⃣┊الذهاب الى بوت > @BotFather

2⃣┊ارسال له امر /start

3⃣┊ثم ارسال له امر التالي /newbot

4⃣┊ثم ارسال له اسم البوت الذي تريده كمثال حماية ابن الدولة

5⃣┊ثم اليوزر/المعرف بدون @ ويجب ان ينتهي بكلمة bot او bot_ مثلا Potat_Factorybot

6⃣┊هنا سيظهر لك توكن البوت هاكذا ↙️
515951039:AAE8owVjVJksvoX3UimXEQFdbtGnlviolog

اجلبه الى البوت وارسله💖",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الصفحة الرئيسية 🏠️' , 'callback_data'=>"home"]]
]])
]);
}

if($data=="dss"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'📍اهلا بك #عزيزي\تي في صناعه بوت زخرفه

📍صنع بوتك الان ويمكنك تغير الى حقوق قناتك',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'✅ انشاء بوت زخرفة🔖','callback_data'=>'maka2']],
[
['text'=>'عودة 🏠 ', 'callback_data'=>"home"]
],
]
])
]);
}


if($data=="dsd"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'📍اهلا بك في قسم حذب  البوت زخرفه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'حذف بوت الزخرفة🗑','callback_data'=>'delete2']],
[
['text'=>'عودة 🏠 ', 'callback_data'=>"home"]
],
]
])
]);
}


if($data=="channel"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'تابعنا عبر الروابط للتالية 📩',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
         [['text'=>"• MUSIC ¦¦ MUSTAFA •",'url'=>'https://t.me/joinchat/AAAAAFDgGRcfbCcaOvDIyw']],
        [
          ['text'=>'📍مصطفى عبد الرحمن📍', 'url'=>"https://t.me/joinchat/AAAAAE04RSZNv4-GMKwbTg"]
],
[
['text'=>'عودة 🏠 ', 'callback_data'=>"home"]
],
]
])
]);
}
$u = explode("\n",file_get_contents("memb.txt"));
$c = count($u)-1;
$modxe = file_get_contents("usr.txt");
$admin = "541039199";
if ($update && !in_array($chat_id, $u)) {
    file_put_contents("memb.txt", $chat_id."\n",FILE_APPEND);
  }
#                   القوائم                   #
if ($text == "/admin" and $chat_id == $admin ) {
    bot('sendMessage',[
        'chat_id'=>$chat_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
        ]);
}
if($data == 'off'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
      'text'=>"
☑️￤اهلا عزيزي :- المطور .
▫️￤اليك الاوامر الان حدد ماتريده 📩
-
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
[['text'=>'رسالة للكل ','callback_data'=>'ce']],
[['text'=>'عدد الاعضاء ','callback_data'=>'co']],
            ]
            ])
]);
file_put_contents('usr.txt', '');
}
#                   المشتركين                   #
if($data == "co" and $update->callback_query->message->chat->id == $admin ){ 
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"
        عدد مشتركين البوت📢 :- [ $c ] .
        ",
        'show_alert'=>true,
]);
}
#                   رسالة للكل                   #
if($data == "ce" and $update->callback_query->message->chat->id == $admin){ 
    file_put_contents("usr.txt","yas");
    bot('EditMessageText',[
    'chat_id'=>$update->callback_query->message->chat->id,
    'message_id'=>$update->callback_query->message->message_id,
    'text'=>"▪️ ارسل رسالتك الان 📩 وسيتم نشرها لـ [ $c ] مشترك . 
   ",
    'reply_markup'=>json_encode([
        'inline_keyboard'=>[
[['text'=>' الغاء 🚫 •','callback_data'=>'off']]    
        ]
    ])
    ]);
}
if($text and $modxe == "yas" and $chat_id == $admin ){
    for ($i=0; $i < count($u); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$u[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,

]);
    file_put_contents("usr.txt","no");

} 
} 