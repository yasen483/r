////////////
 <?php
ob_start();
define('API_KEY','1929061394:AAHNL0he7jXdanWSKcqKQdoG9oLirmhi5wI');
$sudo = 1189284654;
$admin = "1189284654";
$bot_id       = 1648316477;
$botid = $bot_id;
$idbot = $bot_id;
echo "https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME'];
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/"
     .$method;
     $linkhelp = "https://t.me/thtss";
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
//»»»»»»»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
$SAIEDZip14 = "";
$name = $message->from->first_name;
$from_id = $message->from->id;
date_default_timezone_set('Asia/Riyadh');
$date = date('h:i:s'); $d = date('A');
 $aa =preg_replace('/AM/', 'ص', $d);$aa =preg_replace('/PM/', 'م', $d);
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i a');
$year = date('Y');
$month = date('n');
$day = date('j');
$text = $message->text;
$name = $message->from->first_name;
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$ch = file_get_contents("ch.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$hkok = file_get_contents("hkok.txt");
$g = file_get_contents('server.txt');
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$sting = file_get_contents("sting.txt");
$start = file_get_contents("start.txt") ;
$onstart = file_get_contents("onstart.txt");
$tv = file_get_contents("tv.txt");
$reply = file_get_contents("reply.txt");
$send = file_get_contents("send.txt");
$members = explode("\n",file_get_contents("members.txt"));
$band_id = explode("\n",file_get_contents("band_id.txt"));
$memberscount = count($members);
$band_user = explode("\n",file_get_contents("band_user.txt"));
$tw = file_get_contents("tw.txt");
$photo = $update->message->photo;
$video = $update->message->video;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@jeccc&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@jeccc&user_id=$from_id");
$sticker = $update->message->sticker;
$file = $update->message->document;
$music = $update->message->audio;
$voice = $update->message->voice;
$caption = $message->caption;
$photo_id = $update->message->photo[0]->file_id;
$video_id= $update->message->video->file_id;
$sticker_id = $update->message->sticker->file_id;
$file_id = $update->message->document->file_id;
$music_id = $update->message->audio->file_id;
$voice_id = $update->message->voice->file_id;
 $ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ch&user_id=".$from_id);
$tv1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=$from_id");
$tv2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$tv&user_id=".$from_id);
#$export1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$tv"));
#$linkchannel1 = $export1->result;
#$export2 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=$ch"));
#$linkchannel2 = $export2->result;
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
$tvp = str_replace('@','',$tv);
if($message && (strpos($tv1,'"status":"left"') or strpos($tv1,'"Bad Request: USER_ID_INVALID"') or strpos($tv1,'"status":"kicked"') or strpos($tv2,'"status":"left"') or strpos($tv2,'"Bad Request: USER_ID_INVALID"') or strpos($tv2,'"status":"kicked"'))!== false){
$linktv=file_get_contents("linktv.txt");
if($linktv==null){
$linktv="https://t.me/$tvp";
}
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linktv)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك¹ ✅','url'=>"$linktv"]
],
]])
]);return false;}
$chp = str_replace('@','',$ch);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$linkch=file_get_contents("linkch.txt");
if($linkch==null){
$linkch="https://t.me/$chp";
}
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ *[اضغط هنا للإشتراك في القناة]($linkch)* ،

- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message->message_id, 
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'٠ اضغط هنا للاشتراك² ✅' ,'url'=>"$linkch"]
],
]])
]);return false;}
if($user == null){}else{$user5 = $user;}
if ($message && !in_array($from_id, $members)) {
    file_put_contents("members.txt", $from_id."\n",FILE_APPEND);
  }
//»»»»»»»»»»»»
$baageel = file_get_contents("baageel.txt");
if($text == "〽️┇› تفعيل البوت" and $chat_id == $admin){
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮¦ تم تفعيل البوت بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
file_put_contents("baageel.txt","on");
}
if($text == "⚠️┇› تعطيل البوت" and $chat_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦ تم بنجاح تعطيل البوت ✓",
]);
file_put_contents("baageel.txt","off");
} 
if($message and $baageel =="off" and $chat_id != $admin ){
 bot("sendmessage",[
 "chat_id"=>$from_id,
 "text"=>"👨🏻‍💻 ¦ مرحبا بك عزيزي 
⚠️ ¦ #نعتذر عن التوقف للبوت
⚙ ¦ فقط تحت الصيانة والتحديث
⏰ ¦ سيتم اعادته للخدمة الساعات القادمة",
 ]);return false;
}
$Ali = "1135411851:AAE9mv6yUgBdJuivNxeB5TX8JhyM9xPWskg";
$channel ="@TH3NK@THTSS"; 
$ch=explode("@",$channel); 
for($i=1;$i<=count($ch);$i++){
$join = file_get_contents("https://api.telegram.org/bot".$Ali."/getChatMember?chat_id=@$ch[$i]&user_id=".$from_id);
if($message && (strpos($join,'"status":"left"') or strpos($join,'"Bad Request: USER_ID_INVALID"') or strpos($join,'"status":"kicked"'))!== false){
bot('sendMessage',[
'chat_id'=>$from_id,
'text'=>"*👨‍✈️ ¦ مرحبا بگ عزيزي 🦁،
👾 ¦ لا يمڪنـك استخدام البوت ،
™ ¦ عليك الإشتراگ في قناة البوت ،
🔘 ¦ القناة ~⪼ ❪ @$ch[$i] ❫️ ؛
---------------------------
- بعد الاشتراك اضغط { /start }*
",'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);return false;}}
//»»»»»»»»»»»»»»»»»»
$update=json_decode(file_get_contents('php://input'));
$message=$update->message;
$chat_id=$message->chat->id;
$name=$message->from->first_name; 
$sub=substr($name,0,10)." ..."; 
if($text == '/start' or $text == '🏡┇› الصفحة الرئيسية'){
	$start = str_replace('الاسم',$name,$start);
bot('sendMessage',[
        'chat_id'=>$from_id,
        'text'=>$start,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗒┇› التعـليمات"]
],
[
['text'=>"👨🏻‍💻┇› المطور الرسمي"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "🗒┇› التعـليمات"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$hkok,
'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🏡┇› الصفحة الرئيسية"] 
],
],
'resize_keyboard'=>true
])
]);
}
if($text == "👨🏻‍💻┇› المطور الرسمي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"*🎭¦ مرحبا بك في معلومات البوت :-
ـ┄─━━━━━━━─┄
👨‍✈️¦ المطور الرسمي للبوت» *[علي محمد](t.me/th3ss)*
🏠️¦ القناة التابعة للمطور» *[THTSS](t.me/thtss)*
📡¦ قناة الدعم » *[بيع وتمويل](t.me/BOT700K)*
🛠*
",'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🏡┇› الصفحة الرئيسية"]
],
],
'resize_keyboard'=>true
])
]);
}
//»»»»»»»»»»»»»»»»»»

if($user == null){}else{$user5 = $user;}
if($message and in_array($user5, $band_user) and $user != null) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
  if($message && in_array($from_id, $band_id)) {
	bot('sendmessage',['chat_id'=>$chat_id,'text'=>'عذرا انت محظور 😓']);return false;}
//»»»»»»»»»»»»»»»»»»
if($text == "/admin" or $text == "back 🔙" or $text == "❌┇› الغاء الامر"  or $text == 'رجوع 🔙' or $text =="/ADMIN"){
if($from_id == $admin)
	bot('sendmessage',[
	'chat_id'=>$from_id, 
	'text' =>"🙋🏻‍♂️ ¦› أهلا بك عزيزي الأدمن 🔱
⚙️ ¦› هذه الاعدادات الخاصة بك 🌚
",'reply_to_message_id'=>$message_id,
 'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"🗃┇› تعيين رسالة /start"]
],
[
['text'=>"🚸┇› وضع قناة الاشتراك¹"],['text'=>"🚸┇› وضع قناة الاشتراك²"]
],
[
['text'=>"🗑┇› حذف قناة الاشتراك¹"],['text'=>"🗑┇› حذف قناة الاشتراك²"]
],
[
['text'=>"🔱┇› تفعيل التنبيه"],['text'=>"⚠️┇› تعطيل التنبيه"]
], 
[
['text'=>"〽️┇› تفعيل البوت"],['text'=>"⚠️┇› تعطيل البوت"]
],
[
['text'=>"🔂┇› تفعيل التوجية"],['text'=>"🔁┇› تعطيل التوجية"]
], 
[
['text'=>"🚷┇› حظر خاص"],['text'=>"🚫┇› الغاء حظر الخاص"]
],
[
['text'=>"🎯┇› قسم الاذاعة"]
],
[
['text'=>"💤┇› حظر بالمعرف"],['text'=>"🌀┇› الغاء الحظر بالمعرف"]
],
[
['text'=>"📊┇› الاحصائيات"],['text'=>"🔍┇› وضع تعليمات"]
],
[
['text'=>"💬┇› تفعيل التواصل"],['text'=>"💬┇› تعطيل التواصل"]
],
[
['text'=>"📮┇› المشتركين"],['text' =>"📁┇› جلب نسخة"]
],
[
['text'=>"〽️┇› الاوامر الاضافية"]
],
], 
])
]);} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚸┇› وضع قناة الاشتراك¹" and $from_id == $admin){
	file_put_contents("sting.txt","knat");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🔰¦ أرسل معرف القناة العام الان
👨🏻‍💻¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode'=>"MarkDown",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="knat" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="knat" and $from_id == $admin){
file_put_contents("sting.txt","link1");
$idchannel= $message->forward_from_chat->id;
file_put_contents("tv.txt","$idchannel"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link1" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linktv.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text!=null and $text != "إلغاء ❌" and $sting =="knat" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("tv.txt","$text"); 
unlink("linktv.txt"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" =>"*- مرحبا بك عزيزي 💁‍♂
🌀 ¦ تم حفظ معرف القناة بنجاح √
🔘 ¦ فضلا تأكد ان البوت أدمن في القناة *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
//********♥*****//
if($text == "🗑┇› حذف قناة الاشتراك¹" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tv.txt");}
//»»»»»»»»»»»»»»»»»»
if ($text == "🚸┇› وضع قناة الاشتراك²" and $from_id == $admin) {
file_put_contents("sting.txt","sting");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"إلغاء ❌"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text == "إلغاء ❌" and $sting =="sting" and  $from_id == $admin) {
	bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"❌¦تم إلغاء الأمر بنجاح 🗳️" 
]) ;
unlink("sting.txt");} 
if($message->forward_from_chat and $sting =="sting" and $from_id == $admin){
unlink("sting.txt");
$idchannel= $message->forward_from_chat->id;
file_put_contents("ch.txt","$idchannel"); 
file_put_contents("sting.txt","link2"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*🎫 ¦ تم حفظ ايدي القناة بنجاح √
🎟 ¦ ايدي القناة : *$idchannel*
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ قم بارسال الرابط الخاص بالقناة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
}
if($text!=null and $text != "إلغاء ❌" and $sting =="link2" and $from_id == $admin and !$message->forward_from_chat){
file_put_contents("linkch.txt","$text"); 
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "- مرحبا بك عزيزي 💁‍♂
🎫 ¦ تم حفظ رابط القناة بنجاح √
👾 ¦ تأكد ان البوت أدمن في القناة

🖇 ¦ الرابط الخاص بك $text
",'disable_web_page_preview' =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if( $text !=null and $text != "إلغاء ❌" and $sting =="sting" and $from_id == $admin and !$message->forward_from_chat ){
file_put_contents("ch.txt","$text"); 
unlink("linkch.txt");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "*- مرحبا بك عزيزي↯
🌀 ¦ أرسل معرف القناة العام الان
♻️ ¦ اذكانت خاصة قم بتوجيه منشور .*
",'parse_mode' =>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);
unlink("sting.txt");}
if($text =="🗑┇› حذف قناة الاشتراك²" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🖥️¦ تم حذف القناة بنجاح ☑️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("ch.txt") ;
} 
//»»»»»»»»»»»»»»»»»»
if($text == "💤┇› حظر بالمعرف" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💤¦› حسنا ارسل المعرف العضو الذي تريد حظرة من البوت 
"]) ;
file_put_contents("sting.txt","bandu");
} 
if(preg_match('/^(@)(\S{5,32})/i',$text) and $sting == "bandu" and $from_id == $admin){
$tf = str_replace("@","",$text);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🚷 ¦› تم حظر العضو بنجاح
[$text](https://t.me/$tf) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>"$text", 
'text'=>"🚸 ¦› عذرا عزيزي
📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي
"]);$tf = str_replace("@","",$text);
file_put_contents("band_user.txt",$tf."\n",FILE_APPEND);
unlink("sting.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text =="🌀┇› الغاء الحظر بالمعرف" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر
"]);file_put_contents("sting.txt","unkband1");} 

if($text =="$text" and $sting == "unkband1" and $from_id == $admin) {
$tf = str_replace("@","",$text);
	$a = str_replace("$tf","",file_get_contents("band_user.txt"));
        file_put_contents("band_user.txt",$a);
$tf = str_replace("@","",$text);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](https://t.me/$tf) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت
",]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
$rt = $update->message->reply_to_message;
$id = $message->reply_to_message->forward_from->id;
if($tw == "tw" and $from_id != $admin){
	if($text != "/start"){
	bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
	}
	if($tw == "tw" and $rt and $from_id == $admin){
		bot("sendMessage",[
"chat_id"=>$id,
"text"=>"
$text
"
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📮¦› تم الارسال بنجاح √
"]);}
if($text == "💬┇› تعطيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"❎ ¦› تم تعطيل التواصل بنجاح
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("tw.txt") ;
	}
if($text == "💬┇› تفعيل التواصل" and $from_id == $admin){
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💬 ¦› تم تفعيل التواصل بنجاح 
",'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents('tw.txt','tw');	}
if($text == "📮┇› المشتركين" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>" *📊¦› عدد مشتركين البوت هو $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);} 
if($text == "عدد البوتات 🔰" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id' =>$chat_id, 
	'text'=>count($ok)
	, 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);}
if($text =="🔱┇› تفعيل التنبيه" and $from_id == $admin) {
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔔¦› تم تفعيل التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("onstart.txt","start");
} 
if($text =="⚠️┇› تعطيل التنبيه" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔕¦› تم تعطيل ❎ التنبيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])
]);
unlink("onstart.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🎯┇› قسم الاذاعة" and $chat_id == $admin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"📝┇› نشر رسالة"],['text'=>"📸┇› نشر صورة"]
],
[
['text'=>"📹┇› نشر فيديو"],['text'=>"🏧┇› نشر ملصق"]
],
[
['text'=>"📂┇› نشر ملف"],['text'=>"🎙┇› نشر صوت"]
],
[
['text'=>"Ⓜ️┇› نشر ماركدوان"],['text'=>"⚜┇› نشر HTML"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text' =>"®┇› اذاعة في القنوات"],['text'=>"↩️┇› اذاعة خاص بالتوجيه"]
],
[
['text'=>"رجوع 🔙"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($text == "❌┇› الغاء الامر"){
	unlink("send.txt");
	}
if($text == "❌┇› الغاء الامر" and $send != null){
	unlink('send.txt');
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*❎ ¦› تم الإلغاء بنجاح 💯
🔙 ¦› سيتم الرجوع للقائمة الرئيسة بعد 5 ثواني*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
]);
sleep(4);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂ ¦› أهلا بك عزيزي في قسم الاذاعة
🔘 ¦› إستخدم الأزرار للتحكم بنوع الاذاعة*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"نشر رسالة 💌"],['text'=>"نشر صورة 🎑"]
],
[
['text'=>"نشر فيديو 🎥"],['text'=>"نشر ملصق 🎐"]
],
[
['text'=>"نشر ملف 📁"],['text'=>"نشر صوت 🎧"]
],
[
['text'=>"نشر ماركدون 🎐"],['text'=>"نشر HTML 📮"]
],
[
['text'=>"🔄┇› اذاعة عام بالتوجية"],['text'=>"📢┇› اذاعة عام للكل"]
],
[
['text'=>"رجوع 🔙"],['text'=>"نشر اعلان في القنوات 💥"]
],
],
])
]);}
//»»»»»»»»»»»»»»»»»»
if($text == "📝┇› نشر رسالة" and $from_id == $admin){
	file_put_contents('send.txt','txt');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي شيء لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "📸┇› نشر صورة" and $from_id == $admin){
	file_put_contents('send.txt','photo');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌 ¦› الان ارسل اي صورة لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == '📹┇› نشر فيديو' and $from_id == $admin){
		file_put_contents('send.txt','video');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🌌¦› الان ارسل اي فيديو لارسلها ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
	}
	if($text == "🏧┇› نشر ملصق" and $from_id == $admin){
	file_put_contents('send.txt','sticker');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملصق لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "📂┇› نشر ملف" and $from_id == $admin){
	file_put_contents('send.txt','file');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف او صورة gif لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "🎙┇› نشر صوت" and $from_id == $admin){
		file_put_contents('send.txt','music');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي ملف صوتي 🎧 لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
	if($text == "Ⓜ️┇› نشر ماركدوان" and $from_id == $admin){
		file_put_contents('send.txt','Markdown');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص وسيدعم الماركدون لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
if($text == "⚜┇› نشر HTML" and $from_id == $admin){
		file_put_contents('send.txt','HTML');
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*💬 ¦› الان ارسل اي نص  وسيدعم الHTML لارسله ل $memberscount*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"❌┇› الغاء الامر"]
],
],
])
]);
}
//»»»»»»»»»»»»»»»»»»
if($from_id == $admin and $text != "❌┇› الغاء الامر"){
if($text != '❌┇› الغاء الامر' and $send == "txt" and $from_id == $admin){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'photo'){
	for($i=0;$i<count($members); $i++){
bot('sendphoto', [
'chat_id'=>$members[$i],
'photo'=>$photo_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'video'){
	for($i=0;$i<count($members); $i++){
bot('Sendvideo',[
'chat_id'=>$members[$i],
'video'=>$video_id,
'caption'=>$caption,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'sticker'){
	for($i=0;$i<count($members); $i++){
bot('Sendsticker',[
'chat_id'=>$members[$i],
'sticker'=>$sticker_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'file'){
	for($i=0;$i<count($members); $i++){
 bot('SendDocument',[
'chat_id'=>$members[$i],
'document'=>$file_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $music){
	for($i=0;$i<count($members); $i++){
 bot('Sendaudio',[
'chat_id'=>$members[$i],
'audio'=>$music_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'music' and $voice){
	for($i=0;$i<count($members); $i++){
 bot('Sendvoice',[
'chat_id'=>$members[$i],
'voice'=>$voice_id,
'parse_mode'=>"MARKDOWN",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'Markdown'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
if($text != 'إلغاء ' and $send == 'HTML'){
	for($i=0;$i<count($members); $i++){
bot('sendMessage', [
'chat_id'=>$members[$i],
'text'=>"$text",
'parse_mode'=>"HTML",
'disable_web_page_preview'=>true,
]);
unlink('send.txt');
}
}
}
if($text == "❌┇› الغاء الامر" and $from_id == $admin){
unlink("sting.txt") ;
unlink('send.txt');
}
if($text =="🔂┇› تفعيل التوجية" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔄 ¦› تم تفعيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
file_put_contents("reply.txt","yhya");
} 
if($from_id == $admin){}else{
if($message and $reply == "yhya" ){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}}
	if($text == "🔁┇› تعطيل التوجية" and $from_id == $admin) {
		bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"*🔒¦› تم تعطيل التوجيه بنجاح ✔️*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) 
]);
unlink("reply.txt");
} 
//»»»»»»»»»»»»»»»»»»
if($text == "🚷┇› حظر خاص" and $from_id == $admin) {
	bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لحظره من البوت"]) ;
file_put_contents("sting.txt","band");} 

if(preg_match('/^()(\S{5,32})/i',$text) and $sting == "band" and $from_id == $admin ){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
🔊 ¦› تم حظره  بنجاح ✔️
[$text](tg://user?id=$text) 
",'reply_to_message_id'=>$message_id, 
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
'text'=>"🚸 ¦› عذرا عزيزي📛 ¦› لقد تم حظرك من البوت
👨‍✈️ ¦› بواسطة المطور الاساسي"]) ;
file_put_contents("band_id.txt",$text."\n",FILE_APPEND);
unlink("sting.txt");
} 

/*end siting admin ⚙️ */
if($text =="🚫┇› الغاء حظر الخاص" and $from_id == $admin) {
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي المطور
🚫 ¦› ارسل ايدي العضو لالغاء الحظر"]) ;
file_put_contents("sting.txt","unkband");} 
if($text =="$text" and $sting == "unkband" and $from_id == $admin) {
	$a = str_replace("$text","",file_get_contents("band_id.txt"));
        file_put_contents("band_id.txt",$a);
	bot('sendMessage',[
	'chat_id'=>$chat_id, 
	'text'=>"🚫 ¦› تم الغاء الحظر بنجاح √
[$text](tg://user?id=$text) 
",'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]),'disable_web_page_preview'=>'true',
  'parse_mode'=>"MarkDown",
]);
bot('sendMessage',[
	'chat_id'=>$text, 
	'text'=>"👨‍✈️ ¦› مرحبا عزيزي العضو
🚫 ¦› لقد تم رفع القيود عنك
🤖 ¦› يمكنك الان استخدام البوت", 
]);unlink("sting.txt");
}
//»»»»»»»»»»»»»»»»»»
if ($text =="🗃┇› تعيين رسالة /start" and $from_id == $admin) {
file_put_contents("sting.txt","start1");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"📝¦ أرسل نص البدء { /start } 🙋🏻‍♂️
يمكنك وضع الاسم بشرط ان تضعه بين { }
هكذا {الاسم}
"]);
}
if($text and $sting =="start1" and $from_id == $admin ){
file_put_contents("start.txt","$text"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص الترحيب هو 
/start
{ $text }*
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
//»»»»»»»»»»»»»»»»»»
if ($text =="🔍┇› وضع تعليمات" and $from_id == $admin) {
file_put_contents("sting.txt","help");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔰¦ أرسل نص التعليمات 🙋🏻‍♂️
يمكنك وضع اسم المرسل بشرط ان تضعه بين {}
هكذا {الاسم}
"]);
file_put_contents("sting.txt","help");}
if($text and $sting =="help" and $from_id == $admin ){
file_put_contents("help","txt"); 
unlink("sting.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*🙋🏻‍♂️¦تم حفط نص التعليمات بنجاح
/help
{ $hkok } *
",'parse_mode' =>"MARKDOWN",
'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);unlink('sting.txt');file_put_contents('hkok.txt',$text);}
//»»»»»»»»»»»»»»»»»»
$update     = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->message_id;
$text           = $message->text;
$chat_id     = $message->chat->id;
$user          = $update->message->from->username;

$from_id     = $message->from->id;
$first_name = $message->from->first_name;
$type       = $update->message->chat->type;
mkdir("Fri3nd_s");
$message_id = $message->message_id;
$gp_get = file_get_contents("Fri3nd_s/groups.txt");
$groups = explode("\n", $gp_get);
$GG1ZZ = file_get_contents("Fri3nd_s/iBadlz.txt");
$pirvate = explode("\n",file_get_contents("Fri3nd_s/pirvate.txt"));
$forward = $update->message->forward_from;
$MOhaMMed = count($pirvate)-1;
$MoHaMMedd = count($groups)-1;

if($text == "اذاعه بالتوجيه" || $text == "اذاعه عام بالتوجيه" || $text == "اذاعه للكل بالتوجيه" || $text =="🔄┇› اذاعة عام بالتوجية" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","iBadlz");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "iBadlz" and $from_id == $sudo ){
  for($i=0;$i<count($groups);$i++){
bot('ForwardMessage',[
 'chat_id'=>$groups[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id,
 ]);
} 
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}
if($text and $type == "private" and !in_array($from_id, $pirvate)){
file_put_contents("Fri3nd_s/pirvate.txt", "$from_id\n",FILE_APPEND);
}
if($text and $type == "supergroup" and !in_array($chat_id, $groups)) {
file_put_contents("Fri3nd_s/groups.txt", "$chat_id\n",FILE_APPEND);
}
if($text == "اذاعه خاص" || $text =="⌛️¦ اذاعه خاص" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","JJ119");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MarkDown",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "JJ119" and $from_id == $sudo ){
    for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 file_put_contents("Fri3nd_s/iBadlz.txt","MMoHaMMeD");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو ،💗ء*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
     'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if ($text == "اذاعه للكل" || $text == "اذاعه عام" || $text == "اذاعه"  ||$text == "📆⎮ اذاعه •" || $text =="📢┇› اذاعة عام للكل" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","LE_C4_KR");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بأرسال رسالتك
📥• ملاحظةهہ : يمكنك استعمال الماركداون ،! *",
'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id,
   'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($message and $GG1ZZ == "LE_C4_KR" and $from_id == $sudo ){
    for ($i=0; $i<count($groups); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$groups[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
} 
for ($i=0; $i<count($pirvate); $i++) { 
        bot('sendMessage',[
          'chat_id'=>$pirvate[$i],
          'text'=>"$text",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
 ⚜• تم ارسال رسالتك الى $MOhaMMed عضو و $MoHaMMedd من مجموعات البوت ،💗ء*",
 'parse_mode'=>"MarkDown",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

if($text == "اذاعه خاص بالتوجيه" || $text == "↩️┇› اذاعة خاص بالتوجيه" and $from_id == $sudo){
    file_put_contents("Fri3nd_s/iBadlz.txt","od_1j");
    bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"*📮• اهلا عزيزي الـمطور ، قم بتوجيه رسالةه*",
    'parse_mode'=>"MARKDOWN",
    'reply_to_message_id'=>$message->message_id
  ]);
  }
if($message and $GG1ZZ == "od_1j" and $from_id == $sudo ){
for($i=0;$i<count($pirvate);$i++){
bot('forwardMessage',[
 'chat_id'=>$pirvate[$i],
 'from_chat_id'=>$chat_id,
 'message_id'=>$message->message_id,
 ]);
 unlink("Fri3nd_s/iBadlz.txt");
} 
$MOhaMMed = count($pirvate)-1;
bot('sendMessage',[
          'chat_id'=>$chat_id,
          'text'=>"*📮• اهلا عزيزي الـمطور ، 
⚜• تم توجيه رسالتك الى $MOhaMMed عضو ،💗ء*",
'parse_mode'=>"MARKDOWN",
          'reply_to_message_id'=>$message->message_id,
          'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}

//»»»»»»»»»»»»»»»»»»
          $f = explode("\n", file_get_contents("botatusers.txt"));
        if ($update and !in_array($chat_id, $f)) {
            file_put_contents("botatusers.txt", $chat_id."\n",FILE_APPEND);
        } 

if($from_id == $sudo){
if($text == "الاحصائيات" || $text == "📊┇› الاحصائيات"){
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"الاحصائيات : 🔰 
┄─━━━━━━━─┄
*📡 ¦ عدد المجموعات المفعله ◄ *[non](tg://user?id=$id)*
🤖 ¦ عدد البوتات المصنوعة ◄ $f
👥 ¦ عدد المشترڪين ◄ *[$MOhaMMed](t.me/TH3NK)* ،
⏰ ¦ الوقت ◄ *[$date $aa](t.me/TH3NK)* ،
√*
",'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
]) ]);}}
//»»»»»»»»»»»»
$g = str_replace('http://','',$SAIEDZip14);
function SAIEDZip($SAIEDZip1, $SAIEDZip2){
$SAIEDZip4 = realpath($SAIEDZip1);
$SAIEDZip = new ZipArchive();
$SAIEDZip->open($SAIEDZip2, ZipArchive::CREATE | ZipArchive::OVERWRITE);
$SAIEDZip3 = new RecursiveIteratorIterator(
new RecursiveDirectoryIterator($SAIEDZip4),
RecursiveIteratorIterator::LEAVES_ONLY);
foreach($SAIEDZip3 as $SAIEDZip5 => $SAIEDZip6){
if(!$SAIEDZip6->isDir()){
$SAIEDZip7 = $SAIEDZip6->getRealPath();
$SAIEDZip8 = substr($SAIEDZip7, strlen($SAIEDZip4) + 1);
$SAIEDZip->addFile($SAIEDZip7, $SAIEDZip8);
}}
$SAIEDZip->close();
}
function SAIEDZip1($SAIEDZip9, $SAIEDZip10 = 2){
$SAIEDZip11=array(' B', ' KB', ' MB', ' GB', ' TB', ' PB', ' EB', ' ZB', ' YB');
$SAIEDZip12=floor((strlen($SAIEDZip9) - 1) / 3);
return sprintf("%.{$SAIEDZip10}f", $SAIEDZip9 / pow(1024, $SAIEDZip12)) . @$SAIEDZip11[$SAIEDZip12];
}
$SAIEDZip15 = json_decode(file_get_contents('php://input'));
$SAIEDZip16 = $SAIEDZip15->message;
$SAIEDZip17 = $SAIEDZip16->text;
$SAIEDZip18 = $SAIEDZip16->message_id;
if($SAIEDZip17 == "📁┇› جلب نسخة" and $from_id = $admin){
$RSAIED = "$admin";
date_default_timezone_set("Asia/Damascus");
$SAIEDZip13 = date("{h-i-s}");
SAIEDZip('',"Backup-$SAIEDZip13.zip");
bot('senddocument',[
'chat_id'=>$RSAIED,
'document'=>"https://$g/Backup-$SAIEDZip13.zip",
'caption'=>"Backup. 📦
Today's date : ".date('Y/m/d')." 📆
The Time is : ".date('h:i A')." ⏰
Team Yemen : ". @THTSS ." ♥
File size : ".SAIEDZip1(filesize("Backup-$SAIEDZip13.zip"))." 🏷",
'reply_to_message_id'=>$SAIEDZip18,
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"back 🔙"]
], 
], 
'resize_keyboard'=>true
])]);
unlink("Backup-$SAIEDZip13.zip");
}

//»»»»»»»»»»»»»»»»»»
if($text =="/start" and $onstart == "start" and $from_id != $admin) {
	bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"👨‍✈️┊مرحبا بك مطوري 🙋🏽‍♂
⚙┊شخص قام بالدخول الى البوت !
🗃┊معلومات حسابه الشخصي ↯
ـ┄─━━━━━━━─┄
*🎭 ⁞ اسم العضو : ❪ *[$name](tg://user?id=$from_id)* ❫
🎟 ⁞ ايدي معلوماته : ❪ *$from_id* ❫
💤 ⁞ معرف حسابه : ❪ *@$user* ❫
📟 ⁞ عدد المشترڪين : ❪ *$MOhaMMed* ❫
ـ *[$date $aa](t.me/thtss)*
➺ *",
'parse_mode'=>"MARKDOWN",
'disable_web_page_preview'   =>true,

  ]);
  }
//////////////////////
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;





/////////////////////
mkdir("bots");
mkdir("bots1");
mkdir("bots2");
mkdir("bots3");
mkdir("bots4");
mkdir("bots5");
mkdir("bots6");
mkdir("bots7");
mkdir("bots8");
mkdir("botss");
mkdir("make");
mkdir("make1");
mkdir("make2");
mkdir("make3");
mkdir("make4");
mkdir("make5");
mkdir("make6");
mkdir("make7");
mkdir("make8");
mkdir("makee");
$inlineqt = $update->inline_query->query;        
if($text == '/start' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*
- اهلا بك عزيزي .
- في بوت مصنع البوتات المتميز.
- يمكنك صناعة مجموعة من البوتات مجانا.
------------------------------
*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'صنع بوت ','callback_data'=>'dss'],
['text'=>'حذف بوت ','callback_data'=>'dsd']],
[['text'=>'المساعدة','callback_data'=>'help'],
['text'=>'الترند ','callback_data'=>'trend']],
[['text'=>'المطور','url'=>'T.me/p6xxx']],

]
])
]);
}
if($data == 'cancle' and in_array($from_id, $getid)){

$str = str_replace($chat_id2, "", $get_id) ;
file_put_contents('makee/make.txt', $str);
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id, 
'text'=>"*
- اهلا بك عزيزي .
- في بوت مصنع البوتات المتميز.
- يمكنك صناعة مجموعة من البوتات مجانا.
------------------------------
*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'صنع بوت ','callback_data'=>'dss'],
['text'=>'حذف بوت ','callback_data'=>'dsd']],
[['text'=>'المساعدة','callback_data'=>'help'],
['text'=>'الترند ','callback_data'=>'trend']],
[['text'=>'المطور','url'=>'T.me/p6xxx']],

]
])
]);
}
if($data == 'home'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"*
- اهلا بك عزيزي .
- في بوت مصنع البوتات المتميز.
- يمكنك صناعة مجموعة من البوتات مجانا.
------------------------------
*
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'صنع بوت ','callback_data'=>'dss'],
['text'=>'حذف بوت ','callback_data'=>'dsd']],
[['text'=>'المساعدة','callback_data'=>'help'],
['text'=>'الترند ','callback_data'=>'trend']],
[['text'=>'المطور','url'=>'T.me/p6xxx']],

]
])
]);
}
//━━━━━━━━━━ × ━━━━━━━━━━━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ × ━━━━━━━━━━━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ × ━━━━━━━━━━━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ × ━━━━━━━━━━━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ 0 bot ━━━━━━━━━━ تواصل
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_filee = file_get_contents('twasl.php');
$get_done = file_get_contents('makee/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('makee/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id; 
if($data == 'maka' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('makee/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت تواصل واحد💎',
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

file_put_contents('makee/make.txt', $str);    

file_put_contents('makee/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت تواصل
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [@$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)

➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text]
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("botss/$from_id");

file_put_contents("botss/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("botss/$from_id/bot.php", $get_filee);

file_put_contents("botss/$from_id/chat.txt", $from_id . "\n");

file_put_contents("botss/$from_id/welcome.txt", 'اهلا بك في بوت التواصل المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/botss/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    
if($data == 'delete' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesdel'],
]    
]])
]);    
}

if($data == 'yesdel' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('makee/ex.txt', $str1);

$get_token = file_get_contents("botss/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("botss/$chat_id2/bot.php");
unlink("botss/$chat_id2/info.txt");

}


if($data == 'delete' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}




   
//━━━━━━━━━━ 1 bot━━━━━━━━━━━━━━━━━━متجر  ━━━━━━━━━━


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
$get_file = file_get_contents('mtgr.php');
$get_done = file_get_contents('make/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka1' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka1' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت ردود واحد💎',
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

file_put_contents('make/make.txt', $str);    

file_put_contents('make/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت متجر
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);



mkdir("bots/$from_id");

file_put_contents("bots/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots/$from_id/bot.php", $get_file);

file_put_contents("bots/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots/$from_id/welcome.txt", 'اهلا بك في بوت المتجر' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    


if($data == 'delete1' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde1'],
]    
]])
]);    
}

if($data == 'yesde1' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make/ex.txt', $str1);

$get_token = file_get_contents("bots/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots/$chat_id2/bot.php");
unlink("bots/$chat_id2/info.txt");

}


if($data == 'delete1' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}


//━━━━━━━━━━ 2 bot ━━━━━━━━━━ زخرفة
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
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
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
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت زخرفة
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
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


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots1/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
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
['text'=>'رجوع️' , 'callback_data'=>"home"]
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
//━━━━━━━━━━ 3 bot ━━━━━━━━━━ سايت


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
$get_file1 = file_get_contents('sayat.php');
$get_done = file_get_contents('make2/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make2/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka3' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make2/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka3' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت سايت واحد💎',
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

file_put_contents('make2/make.txt', $str);    

file_put_contents('make2/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت سايت
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots2/$from_id");

file_put_contents("bots2/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots2/$from_id/bot.php", $get_file1);

file_put_contents("bots2/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots2/$from_id/welcome.txt", 'اهلا بك في بوت السايت المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots2/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    

if($data == 'delete3' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde3'],
]    
]])
]);    
}

if($data == 'yesde3' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make2/ex.txt', $str1);

$get_token = file_get_contents("bots2/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots2/$chat_id2/bot.php");
unlink("bots2/$chat_id2/info.txt");

}


if($data == 'delete3' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}


//━━━━━━━━━━ 4 bot ━━━━━━━━━━  سمسمي
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
$get_file1 = file_get_contents('smsm.php');
$get_done = file_get_contents('make3/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make3/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka4' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make3/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka4' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت حماية واحد💎',
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

file_put_contents('make3/make.txt', $str);    

file_put_contents('make3/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])
]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت سمسمي
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots3/$from_id");

file_put_contents("bots3/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots3/$from_id/bot.php", $get_file1);

file_put_contents("bots3/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots3/$from_id/welcome.txt", 'اهلا بك في بوت الحماية المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots3/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    

if($data == 'delete4' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}



if($data == 'delete4' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde4'],
]    
]])
]);    
}

if($data == 'yesder4' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make3/ex.txt', $str1);

$get_token = file_get_contents("bots3/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots3/$chat_id2/bot.php");
unlink("bots3/$chat_id2/info.txt");

}









//━━━━━━━━━━ 5 bot ━━━━━━━━━━ شكلك حسب شهر ميلادك


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
$get_file1 = file_get_contents('xme.php');
$get_done = file_get_contents('make4/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make4/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka5' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make4/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka5' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت لستة واحد💎',
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

file_put_contents('make4/make.txt', $str);    

file_put_contents('make4/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت 
$check ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت ليستة
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots4/$from_id");

file_put_contents("bots4/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots4/$from_id/bot.php", $get_file1);

file_put_contents("bots4/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots4/$from_id/welcome.txt", 'اهلا بك في بوت اللستة المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots4/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}   



if($data == 'delete5' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
} 
if($data == 'delete5' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde5'],
]    
]])
]);    
}

if($data == 'yesde5' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make4/ex.txt', $str1);

$get_token = file_get_contents("bots4/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots4/$chat_id2/bot.php");
unlink("bots4/$chat_id2/info.txt");

}

//━━━━━━━━━━ 6 bot ━━━━━━━━━━ اختصار روابط
/*

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
$get_file1 = file_get_contents('mtgr.php');
$get_done = file_get_contents('make5/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make5/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka6' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make5/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka6' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت الكتابة بالجكليت واحد💎',
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

file_put_contents('make5/make.txt', $str);    

file_put_contents('make5/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت اختصار روابط
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots5/$from_id");

file_put_contents("bots5/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots5/$from_id/bot.php", $get_file1);

file_put_contents("bots5/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots5/$from_id/welcome.txt", 'اهلا بك في بوت الكتابة بالجكليت المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots5/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    

if($data == 'delete6' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}
if($data == 'delete6' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde6'],
]    
]])
]);    
}

if($data == 'yesde6' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make5/ex.txt', $str1);

$get_token = file_get_contents("bots5/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots5/$chat_id2/bot.php");
unlink("bots5/$chat_id2/info.txt");

}



//━━━━━━━━━━ 7 bot ━━━━━━━━━━

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
$get_file1 = file_get_contents('mtgr.php');
$get_done = file_get_contents('make6/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make6/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka7' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make6/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka7' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت الكتابة بالنار واحد💎',
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

file_put_contents('make6/make.txt', $str);    

file_put_contents('make6/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت الكتابة بالنار
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots6/$from_id");

file_put_contents("bots6/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots6/$from_id/bot.php", $get_file1);

file_put_contents("bots6/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots6/$from_id/welcome.txt", 'اهلا بك في بوت الكتابة بالجكليت المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots6/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}    
if($data == 'yesde7' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make6/ex.txt', $str1);

$get_token = file_get_contents("bots6/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots6/$chat_id2/bot.php");
unlink("bots6/$chat_id2/info.txt");

}


if($data == 'delete7' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}



if($data == 'delete8' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde8'],
]    
]])
]);    
}


//━━━━━━━━━━ 8 bot ━━━━━━━━━━


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
$get_file1 = file_get_contents('mtgr.php');
$get_done = file_get_contents('make7/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make7/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka8' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make7/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka8' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت الكتابة بالشمع واحد💎',
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

file_put_contents('make7/make.txt', $str);    

file_put_contents('make7/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت الكتابة بالشمع
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots7/$from_id");

file_put_contents("bots7/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots7/$from_id/bot.php", $get_file1);

file_put_contents("bots7/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots7/$from_id/welcome.txt", 'اهلا بك في بوت الكتابة بالشمع المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots7/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}  

if($data == 'delete7' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde7'],
]    
]])
]);    
}  

if($data == 'yesde8' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make7/ex.txt', $str1);

$get_token = file_get_contents("bots7/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots7/$chat_id2/bot.php");
unlink("bots7/$chat_id2/info.txt");

}


if($data == 'delete8' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}




//━━━━━━━━━━ × ━━━━━━━━━━



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
$get_file1 = file_get_contents('mtgr.php');
$get_done = file_get_contents('make8/ex.txt');
$done = explode("\n", $get_done);
$get_id = file_get_contents('make8/make.txt');
$getid = explode("\n", $get_id);
$mid = $message->message_id;

if($data == 'maka9' and !in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){
file_put_contents('make8/make.txt', "\n" . $chat_id2 . "\n",FILE_APPEND);    
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"قم بأرسال توكن البوت يمكنك الحصول عليه من خلال
او قم بتوجيه الرسالة من بوت فاذر 💘
@BOTFATHER 🛠 ✅
—————",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
}

if($data == 'maka9' and in_array($chat_id2,$done) and !strpos($ch1 , '"status":"left"') !== false){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'عذرا صديقي لا يمكنك ❌ انشاء اكثر من بوت الكتابة بالحجر واحد💎',
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

file_put_contents('make8/make.txt', $str);    

file_put_contents('make8/ex.txt', $from_id . "\n", FILE_APPEND);
    
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'تم ✅ انشاء البوت ✨',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
],
]
])

]); 
bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"ℓ 💟 - هناك عضو صنع بوت الكتابة بالحجر
➖➖➖
ℓ 💠 - اسم العضو
ℓ 🔡 - [$name](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - معرف العضو
ℓ 🔡 - [$username](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - ايدي العضو
ℓ 🆔 - [$from_id](tg://user?id=$from_id)
➖➖➖
ℓ 💠 - توكن البوت
ℓ 🤖 - [$text](tg://user?id=$from_id)
➖➖➖
",
'disable_web_page_preview'=>'true',
'parse_mode'=>"Markdown",
]);


mkdir("bots8/$from_id");

file_put_contents("bots8/$from_id/info.txt",$text . "\n" . $from_id);

file_put_contents("bots8/$from_id/bot.php", $get_file1);

file_put_contents("bots8/$from_id/chat.txt", $from_id . "\n");

file_put_contents("bots8/$from_id/welcome.txt", 'اهلا بك في بوت الكتابة بالحجر المتميز' . "\n");


file_get_contents("https://api.telegram.org/bot$text/setwebhook?url=https://iop6xx.000webhostapp.com/BOTAT/bots8/$from_id/bot.php");


}


if($text and in_array($from_id, $getid) and $check->ok != "true" and !strpos($ch1 , '"status":"left"') !== false){

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'عذرا ❗️هاذا التوكن غير صالح ♻️',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'الغاء ❌','callback_data'=>'cancle']]
]
])
]);
} 
if($data == 'delete9' and in_array($chat_id2,$done)){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هل انت متأكد ⁉️ من انك تريد حذف البوت 🗑',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'لا ❌', 'callback_data'=>'home'],
['text'=>'نعم ✅','callback_data'=>'yesde9'],
]    
]])
]);    
}

if($data == 'yesde9' and in_array($chat_id2, $done)){


bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"تم ✅  حذف البوت بنجاح 🗑",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'رجوع️' , 'callback_data'=>"home"]
]
]
])
]);



$str1 = str_replace($chat_id2, '', $get_done);

file_put_contents('make8/ex.txt', $str1);

$get_token = file_get_contents("bots8/$chat_id2/info.txt");

$get_url = file_get_contents("https://api.telegram.org/bot$get_token/getWebhookInfo");

$json = json_decode($get_url);

$url = $json->result->url;

file_get_contents("https://https://api.telegram.org/bot$get_token/deletewebhook?url=$url");

unlink("bots8/$chat_id2/bot.php");
unlink("bots8/$chat_id2/info.txt");

}


if($data == 'delete9' and !in_array($chat_id2,$done)){

bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'قم ♻️ بأنشاء بوت اولا ~💟',
 'show_alert'=>true
 ]);  
 
}
   
 */
//━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ × ━━━━━━━━━━
//━━━━━━━━━━ × ━━━━━━━━━━



if($data == 'help'){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
: مرحبآ بك في مصنع البوتات المتطور .

------------------
: كيفيه_صنع_توكن.
------------------
1- تدخل لبوت فاذر (@BotFather).
2- ترسل الامر  (/newbot).
3- راح يطلب منك اسم بوتك الي راح تسويه .
4- وراها معرف بوتك واجباري نهاية المعرف كلمه (bot).
5- بعدها راح تطلع كليشة بيها توكن ينسخ ويرسل للصانع.

------------------
- BOTFATHER USER ( @BOTFATHER ).
☑ CHOSE ( /newbot ).
------------------
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>' رجوع' , 'callback_data'=>"home"]]
]])
]);
}



if($data=="dss"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'*📊- اهلا بك في قائمة البوتات
✅- اختر بوت لاقوم بانشائة لك عزيزي ...
---------------------------*',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تواصل','callback_data'=>'maka'],
['text'=>'متجر ','callback_data'=>'maka1']],
[['text'=>' زخرفة ','callback_data'=>'maka2'],
['text'=>' سايت ','callback_data'=>'maka3']],
[['text'=>' سمسمي ','callback_data'=>'maka4'],
['text'=>' شكلك المستقبلي','callback_data'=>'maka5']],
/*[['text'=>' اختصار روابط ','callback_data'=>'maka6'],
['text'=>' معاني الاسماء ','callback_data'=>'maka7']],
[['text'=>' نسبة الحب','callback_data'=>'maka8'],
['text'=>'أسئلة جريئة +18 ','callback_data'=>'maka9']],*/
[['text'=>' رجوع ','callback_data'=>'home']], 
] 
])
]);
}


if($data=="dsd"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'*
📊- اهلا بك في قائمة البوتات
✅- اختر بوت لاقوم بحذفه لك عزيزي.. 
---------------------------



*',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تواصل','callback_data'=>'delete'],
['text'=>'متجر','callback_data'=>'delete1']],
[['text'=>' زخرفة ','callback_data'=>'delete2'],
['text'=>' سايت ','callback_data'=>'delete3']],
[['text'=>' سمسمي ','callback_data'=>'delete4'],
['text'=>' شكلك المستقبلي ','callback_data'=>'delete5']],
/*[['text'=>' اختصار روابط ','callback_data'=>'delete6'],
['text'=>' معاني الاسماء ','callback_data'=>'delete7']],
[['text'=>' نسبة الحب','callback_data'=>'delete8'],
['text'=>'أسئلة جريئة +18 ','callback_data'=>'delete9']],*/
[['text'=>' رجوع ','callback_data'=>'home']], 
] 
])
]);
}
$impo = "<html>
<meta HTTP-EQUIV='REFRESH' content='0; url=https://t.me/jeccc'/>
<a href='https://t.me/jeccc' <a ولي حيوان 😹😹😹>
</html>";
$index= file_put_contents("index.html",$impo);
include "اذاعة.php";