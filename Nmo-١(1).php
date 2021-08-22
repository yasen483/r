<?php
/*aba-Zzz*//*@Armof*/
ob_start();
$ARMOF = "1603077131:AAERj_EE9uShpCdQmYeyz-zS6K5Vg3lqyh0";
define('API_KEY',$ARMOF);
echo file_get_contents("https://api.telegram.org/bot$ARMOF/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
/*aba-Zzz*//*@ARMOF*/
function bot($method,$datas=[]){
$ggggw = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ggggw";
$ggggw = file_get_contents($url);
return json_decode($ggggw);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$username = $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$admin = "1189284654"; /*ايديك*/
$from_id = $message->from->id;
$user_id = $message->from->id;
mkdir("ggggw");/*لاتلعب*/
mkdir("zkref");
$useree = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$ARMOF = file_get_contents("ARMOF.txt");
$ARMOF0 = file_get_contents("ARMOF0.txt");
$ARMOF1= file_get_contents("ARMOF1.txt");
$ARMOF5 = file_get_contents("ARMOF2.txt");
$ARMOF6 = file_get_contents("ARMOF3.txt");
$ARMOF20 = json_decode(file_get_contents('php://input'));
$ARMOF18 = $update->message;
$ARMOF13 = $ARMOF18->chat->id;
$ARMOF17 = $ARMOF18->text;
$ARMOF19 = $ARMOF20->callback_query->data;
$ARMOF12 = $ARMOF20->callback_query->message->chat->id;
$ARMOF14 =  $ARMOF20->callback_query->message->message_id;
$ARMOF15 = $ARMOF18->from->first_name;
$ARMOF16 = $ARMOF18->from->username;
$ARMOF11 = $ARMOF18->from->id;
$ARMOF2 = explode("\n",file_get_contents("ARMOF4.txt"));
$ARMOF3 = count($ARMOF2)-1;
if ($ARMOF18 && !in_array($ARMOF11, $ARMOF2)) {
    file_put_contents("ARMOF4.txt", $ARMOF11."\n",FILE_APPEND);
  }
$ARMOF9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF0&user_id=".$ARMOF11);
$ARMOF10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$ARMOF1&user_id=".$ARMOF11);
if($ARMOF18 && (strpos($ARMOF9,'"status":"left"') or strpos($ARMOF9,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF9,'"status":"kicked"') or strpos($ARMOF10,'"status":"left"') or strpos($ARMOF10,'"Bad Request: USER_ID_INVALID"') or strpos($ARMOF10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$ARMOF13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في القناة  أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$ARMOF0.'
'.$ARMOF1,
]);return false;}
if($ARMOF17 == "/admin" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
}
if($O19 == "ARMOF" ){
bot('EditMessageText',[
'chat_id'=>$ARMOF12,
'message_id'=>$ARMOF14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"ARMOF0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"ARMOF"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"ARMOF2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"ARMOF4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"ARMOF"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"ARMOF5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"ARMOF6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"ARMOF7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"ARMOF9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"ARMOF10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"ARMOF"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"ARMOF11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"ARMOF12"]],
   ] 
   ])
]);
unlink("ARMOF.txt");
}
if($ARMOF19 == "ARMOF0"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@ii12',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF0");
}
if($ARMOF17 and $ARMOF == "ARMOF0" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF0.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($ARMOF19 == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF1'],
]    
]])
]);    
}
if($ARMOF19 == "ARMOF1"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF0.txt");
}
if($ARMOF19 == "ARMOF2"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@ARMOF',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF1");
}
if($ARMOF17 and $ARMOF == "ARMOF1" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF1.txt","$ARMOF17");
unlink("ARMOF.txt");
}
if($ARMOF19 == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'ARMOF'],
['text'=>'• نعم ، ✅','callback_data'=>'ARMOF3'],
]    
]])
]);    
}
if($ARMOF19 == "ARMOF3"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF1.txt");
}
if($ARMOF19 == "ARMOF4"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $ARMOF0 📢 
- القناة الثانية ،  $ARMOF1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($ARMOF19 == "ARMOF5"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $ARMOF3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF2");
}
if($ARMOF18 and $ARMOF == "ARMOF2" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('forwardMessage', [
'chat_id'=>$ARMOF2[$i],
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
unlink("ARMOF.txt");
}
}
if($ARMOF19 == "ARMOF6"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $ARMOF3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF.txt","ARMOF3");
}
if($ARMOF17 and $ARMOF == "ARMOF3" and $ARMOF11 == $admin){
bot("sendmessage",[
"chat_id"=>$ARMOF13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
for($i=0;$i<count($ARMOF2); $i++){
bot('sendMessage', [
'chat_id'=>$ARMOF2[$i],
'text'=>$ARMOF17
]);
unlink("ARMOF.txt");
}
}
if($ARMOF19 == "ARMOF7"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>"- عدد مشتركين البوت  [ $ARMOF3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
}
if($ARMOF19 == "ARMOF9"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF2.txt","ARMOF");
}
if($ARMOF17 == "/start" and $ARMOF5 == "ARMOF" and $ARMOF11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$ARMOF15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$ARMOF16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$ARMOF11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $ARMOF3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($ARMOF19 == "ARMOF10"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF2.txt");
}
if($ARMOF19 == "ARMOF11"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
file_put_contents("ARMOF3.txt","ARMOF");
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$ARMOF11,
'message_id'=>$ARMOF18->message_id
]);
}
if($ARMOF18 and $ARMOF6 == "ARMOF" and $ARMOF11 == $admin){
bot('sendMessage',[
'chat_id'=>$ARMOF18->reply_to_message->forward_from->id,
    'text'=>$ARMOF17,
    ]);
}
if($ARMOF19 == "ARMOF12"){
bot('EditMessageText',[
    'chat_id'=>$ARMOF12,
    'message_id'=>$ARMOF14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"ARMOF"]],
]])
]);
unlink("ARMOF.txt");
unlink("ARMOF3.txt");
}


if($text == '/start'){
mkdir("zkref/$user_id");
mkdir("LOrDARMOF/$user_id");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>" [$fn](tg://user?id=$chat_id)
📮☑:مرحبا بك
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"زخرفة أسماء ¦🧸", 'callback_data'=>'ZARMOF']],
[['text'=>"بايوهات قنوات تلي¦🧸", 'callback_data'=>'bio']],
[['text'=>" رموز تمبلر ¦🧸", 'callback_data'=>'med'],['text'=>"نبذات جاهزة ¦🧸", 'callback_data'=>'mem']],
[['text'=>"أسماء جاهزة ¦🧸", 'callback_data'=>'mido']],
[['text'=>"المطور ¦🧸", 'callback_data'=>'dev'],['text'=>"قناتي ¦🧸",'url'=>'T.m/jeccc']],
]
])]);
}

if($data == "ZARMOF"){
file_put_contents("zkref/$useree/zeakef.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'- حـسنـاً ارسـل اسـمكك 🧸🏃‍♂️
- W𝒆𝒍𝒍 𝒔𝒆𝒏𝒅 𝒚𝒐𝒖𝒓 𝒏𝒂𝒎𝒆  ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}

if($data == "bio"){
mkdir("zkref/$useree");
file_put_contents("LOrDARMOF/$useree/LOrDdARMOF.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'- قـم بـارسـال مـعرفـك فـقط 
- O𝒏𝒍𝒚 𝒔𝒆𝒏𝒅 𝒚𝒐𝒖𝒓 𝒂𝒄𝒒𝒖𝒂𝒊𝒏𝒕𝒂𝒏𝒄𝒆 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "dev"){
mkdir("zkref/$useree");
file_put_contents("LOrDARMOF/$useree/LOrDdARMOF.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'   
𓂐『 𝒊𝒕’𝒔 ⌯𝗬𝗔𝗦𝗘𝗡』♱..࿅ 𓈪
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
  ➤  @P6xXx ➤ @jeccc  ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "mido"){
mkdir("zkref/$useree");
file_put_contents("LOrDARMOF/$useree/LOrDdARMOF.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'- W𝒆𝒍𝒍 𝒔𝒆𝒏𝒅 𝒚𝒐𝒖𝒓 𝒏𝒂𝒎𝒆 💞

, 〞𓆩†مـينلاي𓆪〝

,〞𓆩†سيندۉرا𓆪〝

,〞𓆩†ﭑستيفن 𓆪〝 

,〞𓆩†سـيفدا𓆪〝

,〞𓆩†ۿايلايف𓆪〝
داملاﭑ 💗.
ديلارﭑ 💗 .
نارفين 💗 .
ۿازال 💗 .
نيلۉفر 💗.
 ‏ٖ ٖتبوٰ ༗.
ٖ ٖړنوٰ ༗.
ٖ ٖتبآركہٰ ༗.
ٖ ٖآيمانہٰ ༗.
ٖ ٖملآكہٰ ༗.
ٖ ٖنډى ༗.
ٖ ٖطيبۿہٰ ༗.
‹ 𓄼ᙆʱᵒ.
‹ 𓄼ᶬᵉᶬ.
‹ 𓄼ᴬᵞᴬ.
‹  𓄼ᴮᶯᵒ.
‹  𓄼ᙆᶯᵒ.
‹  𓄼ᴬˢᵒ.
‹ 𓄼ʰᵈᵒ.
‹  𓄼ᶠᵒˢ.
‹  𓄼ᴬᶯᵒ.
‹ 𓄼ˢᵉᶮ.
𓄼 sᴏᴍᴀ  𖨬
𓄼 ᴀʟɪ  𖨬
𓄼 нαsαη 𖨬
𓄼 sᴊᴀᴅ 𖨬
𓄼 ɴᴀᴅᴀ 𖨬
𓄼 ᴢᴀʜʀᴀ 𖨬
𓄼 ғᴏғᴀ 𖨬
𓄼 ᴋᴀʀᴀʀ 𖨬
𓄼 нυssειη 𖨬
𓄼 ᴀʏᴏ 𖨬
𓄼 zησ 𖨬
𓄼 ᴢʜᴏ 𖨬
𓄼 sʜᴀʜᴀᴅ 𖨬
𓄼 вαqεя 𖨬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
- @JECCC',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "mem"){
mkdir("zkref/$useree");
file_put_contents("LOrDARMOF/$useree/LOrDdARMOF.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'نبذ ! 
→→→→→→→→→→→→→→
- ע ﺂﺂقـِٓبل بالهز͡يمهہ وأنّ ڪٓدتُ ﺂﺂسقُـ࣮ٓط
→→→→→→→→→→→→→→
- لا أحد يِهتمّ لٲمرك ✨!
→→→→→→→→→→→→→→
- آذآ مكدڕت آسنَدک ـآطيَح ويآک ✨!
→→→→→→→→→→→→→→
آالمتآحح للجميعع لا يتآحح لي ..🖤
→→→→→→→→→→→→→→
‏تواضعت لهم فظنو  آني بحاجتهم🥀✨
→→→→→→→→→→→→→→
- قلدني ، لڪن بطريقهۂ جيده !
→→→→→→→→→→→→→→
- عش الحياه لنفسك ليس لأحد آخر ♡
→→→→→→→→→→→→→→
_ وهِيٓ هآي ﭑلمآيلوحَكك لآزم يشٓمر ععليكك🖤
→→→→→→→→→→→→→→
- انا ضايِعه وأنت الأمان ماودُك تلمّني؟
→→→→→→→→→→→→→→
•تددري بغغـيبتـڪڪ ششنوو صصـار ؟ 
→→→→→→→→→→→→→→
صصـار ٱٱلشـححن مـيخخلص بسرعةه ..ֆ☻💦
→→→→→→→→→→→→→→
مٖثڵ ﭑݪجَبّڵ مٖآيٰطَيٰحٰنيٰ بۤـٖسٰ ﭑݪݪۿٰ
→→→→→→→→→→→→→→
- آﻟججفآ ﺑآلجفآ ﻟﯢ صآروآ آللهہ
→→→→→→→→→→→→→→
مكتئب ك عاهره خانتها 
دورتها الشهريه مع أغنى زبائنها🥀🚶‍♀
→→→→→→→→→→→→→→
• ‏୪ ټـَرآﭰـبنـِﯤ ۏإنټ ﺂبټعدټ ﺂِﻧﹷٰـٰا ‏୪ اټأﺛﺮ
→→→→→→→→→→→→→→
 ؋يَ ﻏـياﭒ احـدَ ،"فـَ ﺂسِتمرِ ؋يِ رححـيلڪـٰ 🌝  ء
→→→→→→→→→→→→→→
‏خسـارة البعـض ، مڪسب لصحتڪ النفسيـہۦة 🚶‍♂✨
→→→→→→→→→→→→→→
- آخسر آشيائكك وآنَت مبتَسم يزق㋡
→→→→→→→→→→→→→→
- ـآنـٓا ، لـنفسـٰ۫ي ولـننٓ ـآككـِٰونٓ لآححِد آبدآ 
→→→→→→→→→→→→→→
- خخلاص ءنا ! مو مهمم ععد ءححد :) ♡
→→→→→→→→→→→→→→
« لاۦ ﭑۿزم ، لاۦﭑميَلۦولاۦﭑنحَنَي ||ۦ🔥🚶🏿‍♂
→→→→→→→→→→→→→→
- ازۿرِ ﭰـݪبيَ ﭘﻌﮉ ڕﺣـٰيلڪُمَ ــِلا ټـﻌﯚدﯛآ ؟💙!
→→→→→→→→→→→→→→
آنا جبل والججبال لا تسقط يا عزيزي
→→→→→→→→→→→→→→
كلآمي يمثلني وفهمك يمثلك !
→→→→→→→→→→→→→→
- جبل ما تهزني ﻋعاهره :)
→→→→→→→→→→→→→→
ـ آصنع لـ نفسسك يوم ججميل مححد فاضي لك ياححبيبي !
→→→→→→→→→→→→→→
ـ ينتقدوني ، وبدقه 370H يقلدوني 
→→→→→→→→→→→→→→
• ‌‏- أعمق مِما تظُن ، وأعقدُ مِما ترئ . 
→→→→→→→→→→→→→→
• ـ ‏لا تغيب بعدين ترجع تدور الشعور اللـي جان الك !  🏹💛.
→→→→→→→→→→→→→→
• ـ تظاهر بأنك تقاوم لكن لا تسقط .  ♥️🖇 )
→→→→→→→→→→→→→→
- لآ تُقلد احَداً ، دَع الآخِرين يقلدوكَ 🖤
→→→→→→→→→→→→→→',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}
if($data == "med"){
mkdir("zkref/$useree");
file_put_contents("LOrDARMOF/$useree/LOrDdARMOF.txt","ARMOF0");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>'𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅾 𓅿 𓆀 𓆁 𓆂 𓏾 𓏿 𓐀 
‏𓀀 𓀁 𓀂 𓀃 𓀄 𓀅 𓀆 𓀇 𓀈 𓀉 𓀊 𓀋 𓀌 𓀍 𓀎 𓀏 𓀐 𓀑 𓀒 𓀓 𓀔 𓀕 𓀖 𓀗 𓀘 𓀙 𓀚 𓀛 𓀜 𓀝 𓀞 𓀟 𓀠 𓀡 𓀢 𓀣 𓀤 𓀥 𓀦 𓀧 𓀨 𓀩 𓀪 𓀫 𓀬 𓀭 𓀮 𓀯 𓀰 𓀱 𓀲 𓀳 𓀴 𓀵 𓀶 𓀷 𓀸 𓀹 𓀺 𓀻 𓀼 𓀽 𓀾 𓀿 𓁀 𓁁 𓁂 𓁃 𓁄 𓁅 𓁆 𓁇 𓁈 𓁉 𓁊 𓁋 𓁌 𓁍 𓁎 𓁏 𓁐 𓁑 𓁒 𓁓 𓁔 𓁕 𓁖 𓁗 𓁘 𓁙 𓁚 𓁛 𓁜 𓁝 𓁞 𓁟 𓁠 𓁡 𓁢 𓁣 𓁤 𓁥 𓁦 𓁧 𓁨 𓁩 𓁪 𓁫 𓁬 𓁭 𓁮 𓁯 𓁰 𓁱 𓁲 𓁳 𓁴 𓁵 𓁶 𓁷 𓁸 𓁹 𓁺 𓁻 𓁼 𓁽 𓁾 𓁿 𓂀𓂅 𓂆 𓂇 𓂈 𓂉 𓂊 𓂋 𓂌 𓂍 𓂎 𓂏 𓂐 𓂑 𓂒 𓂓 𓂔 𓂕 𓂖 𓂗 𓂘 𓂙 𓂚 𓂛 𓂜 𓂝 𓂞 𓂟 𓂠 𓂡 𓂢 𓂣 𓂤 𓂥 𓂦 𓂧 𓂨 𓂩 𓂪 𓂫 𓂬 𓂭 𓂮 𓂯 𓂰 𓂱 𓂲 𓂳 𓂴 𓂵 𓂶 𓂷 𓂸 𓂹 𓂺 𓂻 𓂼 𓂽 𓂾 𓂿 𓃀 𓃁 𓃂 𓃃 𓃅 𓃆 𓃇 𓃈 𓃉 𓃊 𓃋 𓃌 𓃍 𓃎 𓃏 𓃐 𓃑 𓃒 𓃓 𓃔 𓃕 𓃖 𓃗 𓃘 𓃙 𓃚 𓃛 𓃜 𓃝 𓃞 𓃟 𓃠 𓃡 𓃢 𓃣 𓃤 𓃥 𓃦 𓃧 𓃨 𓃩 𓃪 𓃫 𓃬 𓃭 𓃮 𓃯 𓃰 𓃱 𓃲 𓃳 𓃴 𓃵 𓃶 𓃷 𓃸 𓃹 𓃺 𓃻 𓃼 𓃽 𓃾 𓃿 𓄀 𓄁 𓄂 𓄃 𓄄 𓄅 𓄆 𓄇 𓄈 𓄉 𓄊 𓄋 𓄌 𓄍 𓄎 𓄏 𓄐 𓄑 𓄒 𓄓 𓄔 𓄕 𓄖 𓄙 𓄚 𓄛 𓄜 𓄝 𓄞 𓄟 𓄠 𓄡 𓄢 𓄣 𓄤 𓄥 𓄦 𓄧 𓄨 𓄩 𓄪 𓄫 𓄬 𓄭 𓄮 𓄯 𓄰 𓄱 𓄲 𓄳 𓄴 𓄵 𓄶 𓄷 𓄸 𓄹 𓄼 𓄽 𓄾 𓄿 𓅀 𓅁 𓅂 𓅃 𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔 𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅪 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅼 𓅽 𓅾 𓅿 𓆀 𓆁 𓆂 𓆃 𓆄 𓆅 𓆆 𓆇 𓆈 𓆉 𓆊 𓆋 𓆌 𓆍 𓆎 𓆐 𓆑 𓆒 𓆓 𓆔 𓆕 𓆖 𓆗 𓆘 𓆙 𓆚 𓆛 𓆜 𓆝 𓆞 𓆟 𓆠 𓆡 𓆢 𓆣 𓆤 𓆥 𓆦 𓆧 𓆨 𓆩𓆪 𓆫 𓆬 𓆮 𓆯 𓆰 𓆱 𓆲 𓆳 𓆴 𓆵 𓆶 𓆷 𓆸 𓆹 𓆺 𓆻 𓆼 𓆽 𓆾 𓆿 𓇀 𓇁 𓇂 𓇃 𓇄 𓇅 𓇆 𓇇 𓇈 𓇉 𓇊 𓇋 𓇌 𓇍 𓇎 𓇏 𓇐 𓇑 𓇒 𓇓 𓇔 𓇕 𓇖 𓇗 𓇘 𓇙 𓇚 𓇛 𓇜 𓇝 𓇞 𓇟 𓇠 𓇡 𓇢 𓇣 𓇤 𓇥 𓇦 𓇧 𓇨 𓇩 𓇪 𓇫 𓇬 𓇭 𓇮 𓇯 𓇰 𓇱 𓇲 𓇳 𓇴 𓇵 𓇶 𓇷 𓇸 𓇹 𓇺 𓇻 𓇼 𓇾 𓇿 𓈀 𓈁 𓈂 𓈃 𓈄 𓈅 𓈆 𓈇 𓈈 𓈉 𓈊 𓈋 𓈌 𓈍 𓈎 𓈏 𓈐 𓈑 𓈒 𓈓 𓈔 𓈕 𓈖 𓈗 𓈘 𓈙 𓈚 𓈛 𓈜 𓈝 𓈞 𓈟 𓈠 𓈡 𓈢 𓈣 𓈤 𓈥 𓈦 𓈧 𓈨 𓈩 𓈪 𓈫 𓈬 𓈭 𓈮 𓈯 𓈰 𓈱 𓈲 𓈳 𓈴 𓈵 𓈶 𓈷 𓈸 𓈹 𓈺 𓈻 𓈼 𓈽 𓈾 𓈿 𓉀 𓉁 𓉂 𓉃 𓉄 𓉅 𓉆 𓉇 𓉈 𓉉 𓉊 𓉋 𓉌 𓉍 𓉎 𓉏 𓉐 𓉑 𓉒 𓉓 𓉔 𓉕 𓉖 𓉗 𓉘 𓉙 𓉚 𓉛 𓉜 𓉝 𓉞 𓉟 𓉠 𓉡 𓉢 𓉣 𓉤 𓉥 𓉦 𓉧 𓉨 𓉩 𓉪 𓉫 𓉬 𓉭 𓉮 𓉯 𓉰 𓉱 𓉲 𓉳 𓉴 𓉵 𓉶 𓉷 𓉸 𓉹 𓉺 𓉻 𓉼 𓉽 𓉾 𓉿 𓊀 𓊁 𓊂 𓊃 𓊄 𓊅 𓊈 𓊉 𓊊 𓊋 𓊌 𓊍 𓊎 𓊏 𓊐 𓊑 𓊒 𓊓 𓊔 𓊕 𓊖 𓊗 𓊘 𓊙 𓊚 𓊛 𓊜 𓊝 𓊞 𓊟 𓊠 𓊡 𓊢 𓊣 𓊤 𓊥 𓊦 𓊧 𓊨 𓊩 𓊪 𓊫 𓊬 𓊭 𓊮 𓊯 𓊰 𓊱 𓊲 𓊳 𓊴 𓊵 𓊶 𓊷 𓊸 𓊹 𓊺 𓊻 𓊼 𓊽 𓊾 𓊿 𓋀 𓋁 𓋂 𓋃 𓋄 𓋅 𓋆 𓋇 𓋈 𓋉 𓋊 𓋋 𓋌 𓋍 𓋎 𓋏 𓋐 𓋑 𓋒 𓋓 𓋔 𓋕 𓋖 𓋗 𓋘 𓋙 𓋚 𓋛 𓋜 𓋝 𓋞 𓋟 𓋠 𓋡 𓋢 𓋣 𓋤 𓋥 𓋦 𓋧 𓋨 𓋩 𓋪 𓋫 𓋬 𓋭 𓋮 𓋯 𓋰 𓋱 𓋲 𓋳 𓋴 𓋵 𓋶 𓋷 𓋸 𓋹 𓋺 𓋻 𓋼 𓋽 𓋾 𓋿 𓌀 𓌁 𓌂 𓌃 𓌄 𓌅 𓌆 𓌇 𓌈 𓌉 𓌊 𓌋 𓌌 𓌍 𓌎 𓌏 𓌐 𓌑 𓌒 𓌓 𓌔 𓌕 𓌖 𓌗 𓌘 𓌙 𓌚 𓌛 𓌜 𓌝 𓌞 𓌟 𓌠 𓌡 𓌢 𓌣 𓌤 𓌥 𓌦 𓌧 𓌨 𓌩 𓌪 𓌫 𓌬 𓌭 𓌮 𓌯 𓌰 𓌱 𓌲 𓌳 𓌴 𓌵 𓌶 𓌷 𓌸 𓌹 𓌺 𓌻 𓌼 𓌽 𓌾 𓌿 𓍀 𓍁 𓍂 𓍃 𓍄 𓍅 𓍆 𓍇 𓍈 𓍉 𓍊 𓍋 𓍌 𓍍 𓍎 𓍏 𓍐 𓍑 𓍒 𓍓 𓍔 𓍕 𓍖 𓍗 𓍘 𓍙 𓍚 𓍛 𓍜 𓍝 𓍞 𓍟 𓍠 𓍡 𓍢 𓍣 𓍤 𓍥 𓍦 𓍧 𓍨 𓍩 𓍪 𓍫 𓍬 𓍭 𓍮 𓍯 𓍰 𓍱 𓍲 𓍳 𓍴 𓍵 𓍶 𓍷 𓍸 𓍹 𓍺 𓍻 𓍼 𓍽 𓍾 𓍿 𓎀 𓎁 𓎂 𓎃 𓎄 𓎅 𓎆 𓎇 𓎈 𓎉 𓎊 𓎋 𓎌 𓎍 𓎎 𓎏 𓎐 𓎑 𓎒 𓎓 𓎔 𓎕 𓎖 𓎗 𓎘 𓎙 𓎚 𓎛 𓎜 𓎝 𓎞 𓎟 𓎠 𓎡 𓏋 𓏌 𓏍 𓏎 𓏏 𓏐 𓏑 𓏒 𓏓 𓏕 𓏖 𓏗 𓏘 𓏙 𓏚 𓏛 𓏜 𓏝 𓏞 𓏟 𓏠 𓏡 𓏢 𓏣 𓏤 𓏥 𓏦 𓏧 𓏨 𓏩 𓏪 𓏫 𓏬 𓏭 𓏮 𓏯 𓏰 𓏱 𓏲 𓏳 𓏴 𓏶 𓏷 𓏸 𓏹 𓏺 𓏻 .
————————————————
@ARMOF',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}




$insta= file_get_contents("LOrDARMOF/$user_id/LOrDdARMOF.txt");
$bio = array("
- T𝗛𝗘 𝗦𝗘𝗖𝗥𝗘𝗧 𝗢𝗙 𝗖𝗛𝗮𝗡𝗚𝗘 𝗜𝗦 𝗧𝗢
 𝗙𝗢𝗖𝗨𝗦 𝗮𝗟𝗟 𝗢𝗙 𝗬𝗢𝗨𝗥 𝗘𝗡𝗘𝗥𝗚𝗬  𝗡𝗢𝗧 𝗢𝗡 𝗙𝗜𝗚𝗛𝗧𝗜𝗡𝗚 𝗧𝗛𝗘 𝗢𝗟𝗗 𝗕𝗨𝗧 𝗢𝗡 𝗕𝗨𝗜𝗟𝗗𝗜𝗡𝗚 𝗧𝗛𝗘 𝗡𝗘𝗪
___________
♡ : ᴹᴬᴺᴳᴱᴿ ➤ $text
","⠀
- 𝗹 𝗡𝗱 𝘀𝗼𝗺𝗲𝗼𝗻𝗲 𝘁𝗼 𝗛𝗼𝗹𝗱 𝗠𝘆 𝗔𝗿𝗺𝘁 𝘀𝗮𝘃𝗲𝘀 𝗠𝗲 
 𝗳𝗿𝗼𝗺 𝗺𝘆 𝗱𝗲𝗽𝗿𝗲𝘀𝘀𝗶𝗼𝗻 𝗳𝗿𝗼𝗺 𝗣𝗮𝗹𝗻 𝗹 𝗳𝗲𝗲𝗹 𝗮𝗹𝗹 𝘁𝗵𝗲 𝘁𝗶𝗺𝗲
_____________
 𖤐ᴍᴀɴɢᴇʀ ➤  $text
⠀");
$bior = array_rand($bio, 1);
if($text && file_get_contents("LOrDARMOF/$user_id/LOrDdARMOF.txt")=="ARMOF0"){
bot('sendMessage',[
'chat_id'=>$chat_id,
 'parse_mode'=>"Markdown",
'text'=>"`$bio[$bior]`",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'➤ M𝐴𝐾𝐼𝑁𝐺 𝐵𝐼𝑂 𝑇𝑌𝑃𝐸 2' ,'callback_data'=>"bio"]],
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
unlink("LOrDARMOF/$user_id/LOrDdARMOF.txt");
}

/*$zeztf= file_get_contents("zkref/$useree/zeakef.txt");*/
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
$A = str_replace('a','🅐',$A); 
$A = str_replace("b","🅑",$A); 
$A = str_replace("c","🅒",$A); 
$A = str_replace("d","🅓",$A); 
$A = str_replace("e","🅔",$A); 
$A = str_replace("f","🅕",$A); 
$A = str_replace("g","🅖",$A); 
$A = str_replace("h","🅗",$A); 
$A = str_replace("i","🅘",$A); 
$A = str_replace("j","🅙",$A); 
$A = str_replace("k","🅚",$A); 
$A = str_replace("l","🅛",$A); 
$A = str_replace("m","🅜",$A); 
$A = str_replace("n","🅝",$A); 
$A = str_replace("o","🅞",$A); 
$A = str_replace("p","🅟",$A); 
$A = str_replace("q","🅠",$A); 
$A = str_replace("r","🅡",$A); 
$A = str_replace("s","🅢",$A); 
$A = str_replace("t","🅣",$A); 
$A = str_replace("u"," 🅤",$A); 
$A = str_replace("v","🅥",$A); 
$A = str_replace("w","🅦",$A); 
$A = str_replace("x","🅧",$A); 
$A = str_replace("y","🅨",$A); 
$A = str_replace("z","🅩",$A); 
 
$A = str_replace('ض','ضً',$A); 
$A = str_replace('ص','صً',$A); 
$A = str_replace('ث','ثہ',$A); 
$A = str_replace('ق','قہً',$A); 
$A = str_replace('ف','فُہ',$A); 
$A = str_replace('غ','غہ',$A); 
$A = str_replace('ع','عہُ',$A); 
$A = str_replace('ه','ه',$A); 
$A = str_replace('خ','خہ',$A); 
$A = str_replace('ح','حہ',$A); 
$A = str_replace('ج','جہ',$A); 
$A = str_replace('ش','شہ',$A); 
$A = str_replace('س','سہ',$A); 
$A = str_replace('ي','يہ',$A); 
$A = str_replace('ب',' ٻً',$A);
$A = str_replace('ل','لہ',$A); 
$A = str_replace('ا',' ٳ',$A); 
$A = str_replace('ت','تہ',$A); 
$A = str_replace('ن','نٍ',$A); 
$A = str_replace('ك','كُہ',$A); 
$A = str_replace('م','مْ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظً',$A); 
$A = str_replace('ط','طہ',$A); 
 $A = str_replace('ذ','ذً',$A); 
$A = str_replace('د','دِ',$A); 
$A = str_replace('ز','زً',$A); 
$A = str_replace('ر','ڒٍ',$A); 
$A = str_replace('و','وٌ',$A); 
 $A = str_replace('ى','ىّ',$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
$A = str_replace('a','𝗔',$A); 
$A = str_replace("b","𝗕",$A); 
$A = str_replace("c","𝗖",$A); 
$A = str_replace("d","𝗗",$A); 
$A = str_replace("e","𝗘",$A); 
$A = str_replace("f","𝗙",$A); 
$A = str_replace("g","𝗚",$A); 
$A = str_replace("h","𝗛",$A); 
$A = str_replace("i","𝗜",$A); 
$A = str_replace("j","𝗝",$A); 
$A = str_replace("k","𝗞",$A); 
$A = str_replace("l","𝗟",$A); 
$A = str_replace("m","𝗠",$A); 
$A = str_replace("n","𝗡",$A); 
$A = str_replace("o","𝗢",$A); 
$A = str_replace("p","𝗣",$A); 
$A = str_replace("q","𝗤",$A); 
$A = str_replace("r","𝗥",$A); 
$A = str_replace("s","𝗦",$A); 
$A = str_replace("t","𝗧",$A); 
$A = str_replace("u","𝗨",$A); 
$A = str_replace("v","𝗩",$A); 
$A = str_replace("w","𝗪",$A); 
$A = str_replace("x","𝗫",$A); 
$A = str_replace("y","𝗬",$A); 
$A = str_replace("z","𝗭",$A); 
      
$A = str_replace('ض','ضـٰ̲ـہ',$A); 
$A = str_replace('ص','صـٰ̲ـہ',$A); 
$A = str_replace('ث','ثـٰ̲ـہ',$A); 
$A = str_replace('ق','قـٰ̲ـہ',$A); 
$A = str_replace('ف','فـٰ̲ـہ',$A); 
$A = str_replace('غ','غـٰ̲ـہ',$A); 
$A = str_replace('ع','عـٰ̲ـہ',$A); 
$A = str_replace('ه','هـٰ̲ـہ',$A); 
$A = str_replace('خ','خـٰ̲ـہ',$A); 
$A = str_replace('ح','حـٰ̲ـہ',$A); 
$A = str_replace('ج','جـٰ̲ـہ',$A); 
$A = str_replace('ش','شـٰ̲ـہ',$A); 
$A = str_replace('س','سـٰ̲ـہ',$A); 
$A = str_replace('ي','يـٰ̲ـہ',$A); 
$A = str_replace('ب','بـٰ̲ـہ',$A);
$A = str_replace('ل','لـٰ̲ـہ',$A); 
$A = str_replace('ا','اٰ',$A); 
$A = str_replace('ت','تـٰ̲ـہ',$A); 
$A = str_replace('ن','نـٰ̲ـہ',$A); 
$A = str_replace('م','مـٰ̲ـہ',$A); 
$A = str_replace('ك','كـٰ̲ـہ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظـٰ̲ـہ',$A); 
$A = str_replace('ط','طـٰ̲ـہ',$A); 
$A = str_replace('ذ','ذٰ',$A); 
$A = str_replace('د','دٰ',$A); 
$A = str_replace('ز','زٰ',$A); 
$A = str_replace('ر','رٰ',$A); 
$A = str_replace('و','وٰ',$A); 
$A = str_replace('ى','ىَ',$A); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
}
 
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('a','𝐀',$text); 
$A = str_replace('a','𝐀',$A); 
$A = str_replace("b","𝐁",$A); 
$A = str_replace("c","𝐂",$A); 
$A = str_replace("d","𝐃",$A); 
$A = str_replace("e","𝐄",$A); 
$A = str_replace("f","𝐅",$A); 
$A = str_replace("g","𝐆",$A); 
$A = str_replace("h","𝐇",$A); 
$A = str_replace("i","𝐈",$A); 
$A = str_replace("j","𝐉",$A); 
$A = str_replace("k","𝐊",$A); 
$A = str_replace("l","𝐋",$A); 
$A = str_replace("m","𝐌",$A); 
$A = str_replace("n","𝐍",$A); 
$A = str_replace("o","𝐎",$A); 
$A = str_replace("p","𝐏",$A); 
$A = str_replace("q","𝐐",$A); 
$A = str_replace("r","𝐑",$A); 
$A = str_replace("s","𝐒",$A); 
$A = str_replace("t","𝐓",$A); 
$A = str_replace("u"," 𝐔",$A); 
$A = str_replace("v","𝐕",$A); 
$A = str_replace("w","𝐖",$A); 
$A = str_replace("x","𝐗",$A); 
$A = str_replace("y","𝐘",$A); 
$A = str_replace("z","𝐙",$A);
 
$A = str_replace('ض','ضـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ص','صـ๋͜‏ـﮧ',$A); 
$A = str_replace('ث','ثـ๋͜‏ـﮧ',$A); 
$A = str_replace('ق','قـ๋͜‏ـﮧ',$A); 
$A = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$A); 
$A = str_replace('غ','غـ๋͜‏ـﮧ',$A); 
$A = str_replace('ع','عـ๋͜‏ـﮧ',$A); 
$A = str_replace('ه','ۿۿہ',$A); 
$A = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ح','حـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ج','جـ๋͜‏ـﮧ ',$A); 
$A = str_replace('ش','شـ๋͜‏ـﮧ ',$A); 
$A = str_replace('س','سـ๋͜‏ـﮧ',$A); 
$A = str_replace('ي',' يـ๋͜‏ـﮧ',$A); 
$A = str_replace('ب','  بـ๋͜‏ـﮧ',$A);
$A = str_replace('ل',' لـ๋͜‏ـﮧ',$A); 
$A = str_replace('ا','آ',$A); 
$A = str_replace('ت','  تـ๋͜‏ـﮧ',$A); 
$A = str_replace('ن','نـ๋͜‏ـﮧ',$A); 
$A = str_replace('م','مـ๋͜‏ـﮧ',$A); 
$A = str_replace('ك','ڪـ๋͜‏ـﮧ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظـ๋͜‏ـﮧ',$A); 
$A = str_replace('ط','طـ๋͜‏ـﮧ',$A); 
 $A = str_replace('ذ','ذِ',$A); 
$A = str_replace('د','دٰ',$A); 
$A = str_replace('ز','زً',$A); 
$A = str_replace('ر','ر',$A); 
$A = str_replace('و','ﯛ̲୭',$A); 
 $A = str_replace('ى','ىٰ',$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('a','̶a̶',$text); 
$A = str_replace('b','b̶',$A); 
$A = str_replace('c','c̶',$A); 
$A = str_replace('d','d̶',$A); 
$A = str_replace('e','e̶',$A); 
$A = str_replace('f','f̶',$A); 
$A = str_replace('g','g̶',$A); 
$A = str_replace('h','h̶',$A); 
$A = str_replace('i','i̶',$A); 
$A = str_replace('j','j̶',$A); 
$A = str_replace('k','k̶',$A); 
$A = str_replace('l','l̶',$A); 
$A = str_replace('m','m̶',$A); 
$A = str_replace('n','n̶',$A); 
$A = str_replace('o','o̶',$A); 
$A = str_replace('p','p̶',$A); 
$A = str_replace('q','q̶',$A); 
$A = str_replace('r','r̶',$A); 
$A = str_replace('s','s̶',$A); 
$A = str_replace('t','t̶',$A); 
$A = str_replace('u','ᵘ̶ ',$A); 
$A = str_replace('v','v̶',$A); 
$A = str_replace('w','w̶',$A); 
$A = str_replace('x','x̶',$A); 
$A = str_replace('y','y̶',$A); 
$A = str_replace('z','z̶',$A); 

 $A = str_replace('ض','ضۜہٰٰ',$A); 
$A = str_replace('ص','صۛہٰٰ',$A); 
$A = str_replace('ث','ثہٰٰ',$A); 
$A = str_replace('ق','قྀ̲ہٰٰٰ',$A); 
$A = str_replace('ف','ف͒ہٰٰ',$A); 
$A = str_replace('غ','غہٰٰ',$A); 
$A = str_replace('ع','ۤ؏ـ',$A); 
$A = str_replace('ه','ھہ',$A); 
$A = str_replace('خ','خٰ̐ہ',$A); 
$A = str_replace('ح','حہٰٰ',$A); 
$A = str_replace('ج','جْۧ ',$A); 
$A = str_replace('ش','شِٰہٰٰ',$A); 
$A = str_replace('س','سٰٰٓ',$A); 
$A = str_replace('ي','يِٰہ',$A); 
$A = str_replace('ب','بّہ',$A);
$A = str_replace('ل','ل',$A); 
$A = str_replace('ا','آ',$A); 
$A = str_replace('ت',' تَہَٰ',$A); 
$A = str_replace('ن','نَِٰہ',$A); 
$A = str_replace('ك','ڪٰྀہٰٰٖ',$A); 
$A = str_replace('م','مـ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظۗـہٰٰ',$A); 
$A = str_replace('ط','طۨہٰٰ',$A); 
 $A = str_replace('ذ','ذِ',$A); 
$A = str_replace('د','دُ',$A); 
$A = str_replace('ز','ژ',$A); 
$A = str_replace('ر','رٰ',$A); 
$A = str_replace('و','وً',$A); 
 $A = str_replace('ى','ى',$A);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text; 
$A = str_replace('a','⧼α⧽',$A); 
$A = str_replace('b','⧼в⧽',$A); 
$A = str_replace('c','⧼c⧽',$A); 
$A = str_replace('d','⧼ɒ⧽',$A); 
$A = str_replace('e','⧼є⧽',$A); 
$A = str_replace('f','⧼f⧽',$A); 
$A = str_replace('g','⧼ɢ⧽',$A); 
$A = str_replace('h','⧼н⧽',$A); 
$A = str_replace('i','⧼ɪ⧽',$A); 
$A = str_replace('j','⧼ᴊ⧽',$A); 
$A = str_replace('k','⧼ĸ⧽',$A); 
$A = str_replace('l','⧼ℓ⧽',$A); 
$A = str_replace('m','⧼м⧽',$A); 
$A = str_replace('n','⧼и⧽',$A); 
$A = str_replace('o','⧼σ⧽',$A); 
$A = str_replace('p','⧼ρ⧽',$A); 
$A = str_replace('q','⧼q⧽',$A); 
$A = str_replace('r','⧼я⧽',$A); 
$A = str_replace('s','⧼s⧽',$A); 
$A = str_replace('t','⧼τ⧽',$A); 
$A = str_replace('u','⧼υ⧽',$A); 
$A = str_replace('v','⧼v⧽',$A); 
$A = str_replace('w','⧼ω⧽',$A); 
$A = str_replace('x','⧼x⧽',$A); 
$A = str_replace('y','⧼y⧽',$A); 
$A = str_replace('z','⧼z⧽',$A); 

$A = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$A); 
$A = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$A); 
$A = str_replace('ث','ث̲ꫭـﮧ',$A); 
$A = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$A); 
$A = str_replace('ف','',$A); 
$A = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$A); 
$A = str_replace('ع','غـّٰ̐ہٰٰ',$A); 
$A = str_replace('ه','ٰ̲ھہ',$A); 
$A = str_replace('خ','خ̲ﮧ',$A); 
$A = str_replace('ح','ح̲ꪳـﮧ',$A); 
$A = str_replace('ج','ج̲ꪸـﮧ',$A); 
$A = str_replace('ش','ش̲ꪾـﮧ',$A); 
$A = str_replace('س','سـ̷ٰٰﮧْ',$A); 
$A = str_replace('ي','يـِٰ̲ﮧ',$A); 
$A = str_replace('ب','ب̲ꪰـﮧ',$A);
$A = str_replace('ل','لٍُـّٰ̐ہ',$A); 
$A = str_replace('ا',' ཻا ',$A); 
$A = str_replace('ت','تـٰۧﮧ',$A); 
$A = str_replace('ن','نٰ̲̐ـﮧْ',$A); 
$A = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$A); 
$A = str_replace('ك','كـِّﮧْٰٖ',$A); 
$A = str_replace('ة','ةً',$A); 
$A = str_replace('ء','ء',$A); 
$A = str_replace('ظ','ظَـ๋͜ﮧْ',$A); 
$A = str_replace('ط','ط̲꫁ـﮧ',$A); 
 $A = str_replace('ذ','ذٖ',$A); 
$A = str_replace('د','دُ',$A); 
$A = str_replace('ز','ژٰ',$A); 
$A = str_replace('ر','',$A); 
$A = str_replace('و','ﯛ૭',$A); 
 $A = str_replace('ى','ىِ',$A); 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$A."".$smile
   ]);
   }
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = str_replace('ض', 'ضٰـــ֧֯͝ۦـ', $text);
   $A = str_replace('ص', 'صٖصـــ֧֯͝ۦـ', $A);
   $A = str_replace('ث', 'ثـــ֧֯͝ۦـ', $A);
   $A = str_replace('ق', 'قـــ֧֯͝ۦـ', $A);
   $A = str_replace('ف', 'فٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('غ', 'غٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ع', '؏ـــ֧֯͝ۦـ', $A);
   $A = str_replace('خ', 'خٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ح', 'حَحـــ֧֯͝ۦـ', $A);
   $A = str_replace('ج', 'جـــ֧֯͝ۦـ', $A);
   $A = str_replace('ش', 'شٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('س', 'س͜ـ̠س', $A);
   $A = str_replace('ي', 'يٰۧـــ֧֯͝ۦـ', $A);
   $A = str_replace('ب', 'بـــ֧֯͝ۦـ', $A);
   $A = str_replace('ل', 'لٖـــ֧֯͝ۦـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـــ֧֯͝ۦـ', $A);
   $A = str_replace('ن', 'نِـــ֧֯͝ۦـ', $A);
   $A = str_replace('م', 'مِـٰٚـــ֧֯͝ۦـ', $A);
   $A = str_replace('ك', 'ڰ̠̤ڪ', $A);
   $A = str_replace('ط', 'طـــ֧֯͝ۦـ', $A);
   $A = str_replace('ذ', 'ذِ', $A);
   $A = str_replace('ظ', 'ظـــ֧֯͝ۦـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('ظ', 'ظـــ֧֯͝ۦـ', $A);
   $A = str_replace('و', 'ﯛ̲', $A);
   $A = str_replace("ه", "هٰ̐ہ", $A);
   
   $A = str_replace('a',"ᵃ",$A);
$A = str_replace("b","ᵇ",$A);
$A = str_replace("c","ᶜ",$A);
$A = str_replace("d","ᵈ",$A);
$A = str_replace("e","ᵉ",$A);
$A = str_replace("f","ᶠ",$A);
$A = str_replace("g","ᵍ",$A);
$A = str_replace("h","ʰ",$A);
$A = str_replace("i","ᶤ",$A);
$A = str_replace("j","ʲ",$A);
$A = str_replace("k","ᵏ",$A);
$A = str_replace("l","ˡ",$A);
$A = str_replace("m","ᵐ",$A);
$A = str_replace("n","ᶰ",$A);
$A = str_replace("o","ᵒ",$A);
$A = str_replace("p","ᵖ",$A);
$A = str_replace("q","ᵠ",$A);
$A = str_replace("r","ʳ",$A);
$A = str_replace("s","ˢ",$A);
$A = str_replace("t","ᵗ",$A);
$A = str_replace("u","ᵘ",$A);
$A = str_replace("v","ᵛ",$A);
$A = str_replace("w","ʷ",$A);
$A = str_replace("x","ˣ",$A);
$A = str_replace("y","ʸ",$A);
$A = str_replace("z","ᶻ",$A);

   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$A = $text;
   $A = str_replace('ض', 'ض͜ــ๋͜ـ', $A);
   $A = str_replace('ص', 'ص͜ــ๋͜ـ', $A);
   $A = str_replace('ث', 'ث͜ــ๋͜ـ͜ــ๋͜ـ', $A);
   $A = str_replace('ق', 'ق͜ــ๋͜ـ', $A);
   $A = str_replace('ف', 'ف͒͜ــ๋͜ـ', $A);
   $A = str_replace('غ', 'غ͜ــ๋͜ـ', $A);
   $A = str_replace('ع', 'ع͜ــ๋͜ـ', $A);
   $A = str_replace('خ', 'خ̐͜ــ๋͜ـ', $A);
   $A = str_replace('ح', 'ح͜ــ๋͜ـ', $A);
   $A = str_replace('ج', 'ج͜ــ๋͜ـ', $A);
   $A = str_replace('ش', 'ش͜ــ๋͜ـ', $A);
   $A = str_replace('س', 'س͜ــ๋͜ـ', $A);
   $A = str_replace('ي', 'ي͜ــ๋͜ـ', $A);
   $A = str_replace('ب', 'ب͜ــ๋͜ـ', $A);
   $A = str_replace('ل', 'ل͜ــ๋͜ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'ت͜ــ๋͜ـ', $A);
   $A = str_replace('ن', 'ن͜ــ๋͜ـ', $A);
   $A = str_replace('م', 'م͜ــ๋͜ـ', $A);
   $A = str_replace('ك', 'ڪ͜ــ๋͜ـ', $A);
   $A = str_replace('ط', 'ط͜ــ๋͜ـ', $A);
   $A = str_replace('ظ', 'ظ͜ــ๋͜ـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('ظ', 'ظــ๋͜ـ', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Θ' , $A);
  	 $A = str_replace('w', 'ẁ' , $A);
	 $A = str_replace('e', 'ë' , $A);
  	 $A = str_replace('r', 'я' , $A);
	 $A = str_replace('t', 'ť' , $A);
  	 $A = str_replace('y', 'y' , $A);
	 $A = str_replace('u', 'ע' , $A);
  	 $A = str_replace('i', 'į' , $A);
	 $A = str_replace('o', 'ð' , $A);
  	 $A = str_replace('p', 'ρ' , $A);
	 $A = str_replace('a', 'à' , $A);
  	 $A = str_replace('s', 'ś' , $A);
	 $A = str_replace('d', 'ď' , $A);
  	 $A = str_replace('f', '∫' , $A);
	 $A = str_replace('g', 'ĝ' , $A);
  	 $A = str_replace('h', 'ŋ' , $A);
	 $A = str_replace('j', 'Ј' , $A);
  	 $A = str_replace('k', 'қ' , $A);
	 $A = str_replace('l', 'Ŀ' , $A);
  	 $A = str_replace('z', 'ź' , $A);
	 $A = str_replace('x', 'א' , $A);
  	 $A = str_replace('c', 'ć' , $A);
	 $A = str_replace('v', 'V' , $A);
  	 $A = str_replace('b', 'Ђ' , $A);
  	 $A = str_replace('n', 'ŋ' , $A);
	 $A = str_replace('m', 'm' , $A);
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِــٖٖـ', $A);
   $A = str_replace('ص', 'صـٖٖـ', $A);
   $A = str_replace('ث', 'ثِــٖٖـ', $A);
   $A = str_replace('ق', 'قِـٖٖـ', $A);
   $A = str_replace('ف', 'فِ͒ــٖٖـ', $A);
   $A = str_replace('غ', 'غِــٖٖـ', $A);
   $A = str_replace('ع', 'عِـٖٖـ', $A);
   $A = str_replace('خ', 'خِ̐ـٖٖـ', $A);
   $A = str_replace('ح', 'حِــٖٖـ', $A);
   $A = str_replace('ج', 'جِــٖٖـ', $A);
   $A = str_replace('ش', 'شِــٖٖـ', $A);
   $A = str_replace('س', 'سِــٖٖـ', $A);
   $A = str_replace('ي', 'يِــٖٖـ', $A);
   $A = str_replace('ب', 'بِــٖٖـ', $A);
   $A = str_replace('ل', 'لِــٖٖـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِــٖٖـ', $A);
   $A = str_replace('ن', 'نِــٖٖـ', $A);
   $A = str_replace('م', 'مِــٖٖـ', $A);
   $A = str_replace('ك', 'ڪِــٖٖـ', $A);
   $A = str_replace('ط', 'طِـٖٖـ', $A);
   $A = str_replace('ظ', 'ظِــٖٖـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Ҩ' , $A);
  	 $A = str_replace('w', 'Щ' , $A);
	 $A = str_replace('e', 'Є' , $A);
  	 $A = str_replace('r', 'R' , $A);
	 $A = str_replace('t', 'ƚ' , $A);
  	 $A = str_replace('y', '￥' , $A);
	 $A = str_replace('u', 'Ц' , $A);
  	 $A = str_replace('i', 'Ī' , $A);
	 $A = str_replace('o', 'Ø' , $A);
  	 $A = str_replace('p', 'P' , $A);
	 $A = str_replace('a', 'Â' , $A);
  	 $A = str_replace('s', '$' , $A);
	 $A = str_replace('d', 'Ð' , $A);
  	 $A = str_replace('f', 'Ŧ' , $A);
	 $A = str_replace('g', 'Ǥ' , $A);
  	 $A = str_replace('h', 'Ħ' , $A);
	 $A = str_replace('j', 'ʖ' , $A);
  	 $A = str_replace('k', 'Қ' , $A);
	 $A = str_replace('l', 'Ŀ' , $A);
  	 $A = str_replace('z', 'Ẕ' , $A);
	 $A = str_replace('x', 'X' , $A);
  	 $A = str_replace('c', 'Ĉ' , $A);
	 $A = str_replace('v', 'V' , $A);
  	 $A = str_replace('b', 'ß' , $A);
  	 $A = str_replace('n', 'И' , $A);
	 $A = str_replace('m', 'ⴅ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}

 if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضـ๋͜‏ـ', $text);
   $A = str_replace('ص', 'صـ๋͜‏ـ', $A);
   $A = str_replace('ث', 'ثـ๋͜‏ـ', $A);
   $A = str_replace('ق', 'قـ๋͜‏ـ', $A);
   $A = str_replace('ف', 'ف͒ـ๋͜‏ـ', $A);
   $A = str_replace('غ', 'غـ๋͜‏ـ', $A);
   $A = str_replace('ع', 'عـ๋͜‏ـ', $A);
   $A = str_replace('خ', 'خ̐ـ๋͜‏ـ', $A);
   $A = str_replace('ح', 'حـ๋͜‏ـ', $A);
   $A = str_replace('ج', 'جـ๋͜‏ـ', $A);
   $A = str_replace('ش', 'شـ๋͜‏ـ', $A);
   $A = str_replace('س', 'سـ๋͜‏ـ', $A);
   $A = str_replace('ي', 'يـ๋͜‏ـ', $A);
   $A = str_replace('ب', 'بـ๋͜‏ـ', $A);
   $A = str_replace('ل', 'لـ๋͜‏ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـ๋͜‏ـ', $A);
   $A = str_replace('ن', 'نـ๋͜‏ـ', $A);
   $A = str_replace('م', 'مـ๋͜‏ـ', $A);
   $A = str_replace('ك', 'ڪـ๋͜‏ـ', $A);
   $A = str_replace('ط', 'طـ๋͜‏ـ', $A);
   $A = str_replace('ظ', 'ظـ๋͜‏ـ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A= str_replace('q', '•🇶', $A);
   $A= str_replace('w', '•🇼', $A);
   $A= str_replace('e', '•🇪', $A);
   $A= str_replace('r', '•🇷', $A);
   $A= str_replace('t', '•🇹', $A);
   $A= str_replace('y', '•🇾', $A);
   $A= str_replace('u', '•🇻', $A);
   $A= str_replace('i', '•🇮', $A);
   $A= str_replace('o', '•🇴', $A);
   $A= str_replace('p', '•🇵', $A);
   $A= str_replace('a', '•🇦', $A);
   $A= str_replace('s', '•🇸', $A);
   $A= str_replace('d', '•🇩', $A);
   $A= str_replace('f', '•🇫', $A);
   $A= str_replace('g', '•🇬', $A);
   $A= str_replace('h', '•🇭', $A);
   $A= str_replace('j', '•🇯', $A);
   $A= str_replace('k', '•🇰', $A);
   $A= str_replace('l', '•🇱', $A);
   $A= str_replace('z', '•🇿', $A);
   $A= str_replace('x', '•🇽', $A);
   $A= str_replace('c', '•🇨', $A);
   $A= str_replace('v', '•🇺', $A);
   $A= str_replace('b', '•🇧', $A);
   $A= str_replace('n', '•🇳', $A);
   $A= str_replace('m', '•🇲', $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِٰـِۢ', $A);
   $A = str_replace('ص', 'صِٰـِۢ', $A);
   $A = str_replace('ث', 'ثِٰـِۢ', $A);
   $A = str_replace('ق', 'قِٰـِۢ', $A);
   $A = str_replace('ف', 'فِٰ͒ـِۢ', $A);
   $A = str_replace('غ', 'غِٰـِۢ', $A);
   $A = str_replace('ع', 'عِٰـِۢ', $A);
   $A = str_replace('خ', 'خِٰ̐ـِۢ', $A);
   $A = str_replace('ح', 'حِٰـِۢ', $A);
   $A = str_replace('ج', 'جِٰـِۢ', $A);
   $A = str_replace('ش', 'شِٰـِۢ', $A);
   $A = str_replace('س', 'سِٰـِۢ', $A);
   $A = str_replace('ي', 'يِٰـِۢ', $A);
   $A = str_replace('ب', 'بِٰـِۢ', $A);
   $A = str_replace('ل', 'لِٰـِۢ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِٰـِۢ', $A);
   $A = str_replace('ن', 'نِٰـِۢ', $A);
   $A = str_replace('م', 'مِٰـِۢ', $A);
   $A = str_replace('ك', 'ڪِٰـِۢ', $A);
   $A = str_replace('ط', 'طِٰـِۢ', $A);
   $A = str_replace('ظ', 'ظِٰـِۢ', $A);
   $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "ۿۿہ", $A);
   
   $A = str_replace('q', 'Ⴓ' , $A);
     $A = str_replace('w', 'ᗯ' , $A);
	 $A = str_replace('e', 'ᕮ' , $A);
     $A = str_replace('r', 'ᖇ' , $A);
	 $A = str_replace('t', 'ͳ' , $A);
 	$A = str_replace('y', 'ϒ' , $A);
	 $A = str_replace('u', 'ᘮ' , $A);
	 $A = str_replace('i', 'ᓰ' , $A);
	 $A = str_replace('o', '〇' , $A);
	 $A = str_replace('p', 'ᖘ' , $A);
	 $A = str_replace('a', 'ᗩ' , $A);
	 $A = str_replace('s', 'ᔕ' , $A);
	 $A = str_replace('d', 'ᗪ' , $A);
	 $A = str_replace('f', 'Բ' , $A);
	 $A = str_replace('g', 'ᘐ' , $A);
	 $A = str_replace('h', 'ᕼ' , $A);
	 $A = str_replace('j', 'ᒎ' , $A);
	 $A = str_replace('k', 'Ḱ' , $A);
	 $A = str_replace('l', 'ᒪ' , $A);
	 $A = str_replace('z', 'Ꙁ' , $A);
	 $A = str_replace('x', 'Ꮖ' , $A);
	 $A = str_replace('c', 'ᑕ' , $A);
	 $A = str_replace('v', 'ᐯ' , $A);
	 $A = str_replace('b', 'ᙖ' , $A);
	 $A = str_replace('n', 'ᘉ' , $A);
	 $A = str_replace('m', 'ᙢ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ض֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ص', 'ص֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ث', 'ث֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ق', 'ق֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ف', 'ف͒֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('غ', 'غ֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ع', 'ع֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('خ', 'خ̐֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ح', 'ح֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ج', 'ج֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ش', 'ش֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('س', 'س֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ي', 'ي֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ب', 'ب֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ل', 'ل֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'ت֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ن', 'ن֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('م', 'م֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ك', 'ڪ֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ط', 'ط֠ــۢ͜ـٰ̲ـ', $A);
   $A = str_replace('ظ', 'ظ֠ــۢ͜ـٰ̲ـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'q' , $A);
  	 $A = str_replace('w', 'ω' , $A);
	 $A = str_replace('e', 'ε' , $A);
  	 $A = str_replace('r', 'я' , $A);
	 $A = str_replace('t', 'т' , $A);
  	 $A = str_replace('y', 'ү' , $A);
	 $A = str_replace('u', 'υ' , $A);
  	 $A = str_replace('i', 'ι' , $A);
	 $A = str_replace('o', 'σ' , $A);
  	 $A = str_replace('p', 'ρ' , $A);
	 $A = str_replace('a', 'α' , $A);
  	 $A = str_replace('s', 's' , $A);
	 $A = str_replace('d', '∂' , $A);
  	 $A = str_replace('f', 'ғ' , $A);
	 $A = str_replace('g', 'g' , $A);
  	 $A = str_replace('h', 'н' , $A);
	 $A = str_replace('j', 'נ' , $A);
  	 $A = str_replace('k', 'к' , $A);
	 $A = str_replace('l', 'ℓ' , $A);
  	 $A = str_replace('z', 'z' , $A);
	 $A = str_replace('x', 'x' , $A);
  	 $A = str_replace('c', 'c' , $A);
	 $A = str_replace('v', 'v' , $A);
  	 $A = str_replace('b', 'в' , $A);
  	 $A = str_replace('n', 'η' , $A);
	 $A = str_replace('m', 'м' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼??) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀🎼 ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضِٰـۛৣـ', $A);
   $A = str_replace('ص', 'صِٰـۛৣـ', $A);
   $A = str_replace('ث', 'ثِٰـۛৣـ', $A);
   $A = str_replace('ق', 'قِٰـۛৣـ', $A);
   $A = str_replace('ف', 'فِٰ͒ـۛৣـ', $A);
   $A = str_replace('غ', 'غِٰـۛৣـ', $A);
   $A = str_replace('ع', 'عِٰـۛৣـ', $A);
   $A = str_replace('خ', 'خِٰ̐ـۛৣـ', $A);
   $A = str_replace('ح', 'حِٰـۛৣـ', $A);
   $A = str_replace('ج', 'جِٰـۛৣـ', $A);
   $A = str_replace('ش', 'شِٰـۛৣـ', $A);
   $A = str_replace('س', 'سِٰـۛৣـ', $A);
   $A = str_replace('ي', 'يِٰـۛৣـ', $A);
   $A = str_replace('ب', 'بِٰـۛৣـ', $A);
   $A = str_replace('ل', 'لِٰـۛৣـ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تِٰـۛৣـ', $A);
   $A = str_replace('ن', 'نِٰـۛৣـ', $A);
   $A = str_replace('م', 'مِٰـۛৣـ', $A);
   $A = str_replace('ك', 'ڪِٰـۛৣـ', $A);
   $A = str_replace('ط', 'طِٰـۛৣـ', $A);
   $A = str_replace('ظ', 'ظِٰـۛৣـ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'Ｑ' , $A);
  	 $A = str_replace('w', 'Ｗ' , $A);
	 $A = str_replace('e', 'Ｅ' , $A);
  	 $A = str_replace('r', 'Ｒ' , $A);
	 $A = str_replace('t', 'Ｔ' , $A);
  	 $A = str_replace('y', 'Ｙ' , $A);
	 $A = str_replace('u', 'Ｕ' , $A);
  	 $A = str_replace('i', 'Ｉ' , $A);
	 $A = str_replace('o', 'Ｏ' , $A);
  	 $A = str_replace('p', 'Ｐ' , $A);
	 $A = str_replace('a', 'Ａ' , $A);
  	 $A = str_replace('s', 'Ｓ' , $A);
	 $A = str_replace('d', 'Ｄ' , $A);
  	 $A = str_replace('f', 'Բ' , $A);
	 $A = str_replace('g', 'Ｇ' , $A);
  	 $A = str_replace('h', 'Ｈ' , $A);
	 $A = str_replace('j', 'Ｊ' , $A);
  	 $A = str_replace('k', 'Ｋ' , $A);
	 $A = str_replace('l', 'Ｌ' , $A);
  	 $A = str_replace('z', 'Ｚ' , $A);
	 $A = str_replace('x', 'Ｘ' , $A);
  	 $A = str_replace('c', 'С' , $A);
	 $A = str_replace('v', 'Ｖ' , $A);
  	 $A = str_replace('b', 'Ｂ' , $A);
  	 $A = str_replace('n', 'Ｎ' , $A);
	 $A = str_replace('m', 'Ⅿ' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $A = $text;
   $A = str_replace('ض', 'ضـۘ❈ـۘ', $A);
   $A = str_replace('ص', 'صـۘ❈ـۘ', $A);
   $A = str_replace('ث', 'ثـۘ❈ـۘ', $A);
   $A = str_replace('ق', 'قـۘ❈ـۘ', $A);
   $A = str_replace('ف', 'ف͒ـۘ❈ـۘ', $A);
   $A = str_replace('غ', 'غـۘ❈ـۘ', $A);
   $A = str_replace('ع', 'عـۘ❈ـۘ', $A);
   $A = str_replace('خ', 'خ̐ـۘ❈ـۘ', $A);
   $A = str_replace('ح', 'حـۘ❈ـۘ', $A);
   $A = str_replace('ج', 'جـۘ❈ـۘ', $A);
   $A = str_replace('ش', 'شـۘ❈ـۘ', $A);
   $A = str_replace('س', 'سـۘ❈ـۘ', $A);
   $A = str_replace('ي', 'يـۘ❈ـۘ', $A);
   $A = str_replace('ب', 'بـۘ❈ـۘ', $A);
   $A = str_replace('ل', 'لـۘ❈ـۘ', $A);
   $A = str_replace('ا', 'آ', $A);
   $A = str_replace('ت', 'تـۘ❈ـۘ', $A);
   $A = str_replace('ن', 'نـۘ❈ـۘ', $A);
   $A = str_replace('م', 'م', $A);
   $A = str_replace('ك', 'ڪـۘ❈ـۘ', $A);
   $A = str_replace('ط', 'طـۘ❈ـۘ', $A);
   $A = str_replace('ظ', 'ظـۘ❈ـۘ', $A);
  $A = str_replace('ء', 'ء', $A);
   $A = str_replace('ؤ', 'ؤ', $A);
   $A = str_replace('ر', 'ر', $A);
   $A = str_replace('ى', 'ى', $A);
   $A = str_replace('ز', 'ز', $A);
   $A = str_replace('و', 'ﯛ̲୭', $A);
   $A = str_replace("ه", "໋۠هہؚ", $A);
   
   $A = str_replace('q', 'Ҩ' , $A);
  	 $A = str_replace('w', 'Ɯ' , $A);
	 $A = str_replace('e', 'Ɛ' , $A);
  	 $A = str_replace('r', '尺' , $A);
	 $A = str_replace('t', 'Ť' , $A);
  	 $A = str_replace('y', 'Ϥ' , $A);
	 $A = str_replace('u', 'Ц' , $A);
  	 $A = str_replace('i', 'ɪ' , $A);
	 $A = str_replace('o', 'Ø' , $A);
  	 $A = str_replace('p', 'þ' , $A);
	 $A = str_replace('a', 'Λ' , $A);
  	 $A = str_replace('s', 'ら' , $A);
	 $A = str_replace('d', 'Ð' , $A);
  	 $A = str_replace('f', 'F' , $A);
	 $A = str_replace('g', 'Ɠ' , $A);
  	 $A = str_replace('h', 'н' , $A);
	 $A = str_replace('j', 'ﾌ' , $A);
  	 $A = str_replace('k', 'Қ' , $A);
	 $A = str_replace('l', 'Ł' , $A);
  	 $A = str_replace('z', 'Ẕ' , $A);
	 $A = str_replace('x', 'χ' , $A);
  	 $A = str_replace('c', 'ㄈ' , $A);
	 $A = str_replace('v', 'Ɣ' , $A);
  	 $A = str_replace('b', 'Ϧ' , $A);
  	 $A = str_replace('n', 'Л' , $A);
	 $A = str_replace('m', '௱' , $A);
   
   bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$A." ".$smile
   ]);
}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = str_replace('ا','ٱ',$text); 
$ggggw = str_replace('ب','ﺑ',$ggggw); 
$ggggw = str_replace('ت','ﺗ̲ ',$ggggw); 
$ggggw = str_replace('ث','ثّـ',$ggggw); 
$ggggw = str_replace('ج','جّـ',$ggggw); 
$ggggw = str_replace('ح','ﺣّ͠ـ',$ggggw); 
$ggggw = str_replace('خ','ﺣ͠ ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذّ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','زْ',$ggggw); 
$ggggw = str_replace('س','ﺳ̭͠ ',$ggggw); 
$ggggw = str_replace('ش','ﺷ͠ ',$ggggw);  
$ggggw = str_replace('ص','ڝـ',$ggggw); 
$ggggw = str_replace('ض','ڞـ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','ﻋ̝̚',$ggggw); 
$ggggw = str_replace('غ','ﻏ̣̐',$ggggw); 
$ggggw = str_replace('ف','ﻓ̲̣̐ ',$ggggw); 
$ggggw = str_replace('ق','ﻗ̮ـ̃',$ggggw); 
$ggggw = str_replace('ك','ڪْ',$ggggw); 
$ggggw = str_replace('ل','لْـ',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ﻧـ',$ggggw);  
$ggggw = str_replace('ه','ھَہّ',$ggggw); 
$ggggw = str_replace('و','ۅ',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('q', 'Ⴓ' , $ggggw);
  	 $ggggw = str_replace('w', 'Ш' , $ggggw);
	 $ggggw = str_replace('e', 'Σ' , $ggggw);
  	 $ggggw = str_replace('r', 'Γ' , $ggggw);
	 $ggggw = str_replace('t', 'Ƭ' , $ggggw);
  	 $ggggw = str_replace('y', 'Ψ' , $ggggw);
	 $ggggw = str_replace('u', 'Ʊ' , $ggggw);
  	 $ggggw = str_replace('i', 'I' , $ggggw);
	 $ggggw = str_replace('o', 'Θ' , $ggggw);
  	 $ggggw = str_replace('p', 'Ƥ' , $ggggw);
	 $ggggw = str_replace('a', 'Δ' , $ggggw);
  	 $ggggw = str_replace('s', 'Ѕ' , $ggggw);
	 $ggggw = str_replace('d', 'D' , $ggggw);
  	 $ggggw = str_replace('f', 'F' , $ggggw);
	 $ggggw = str_replace('g', 'G' , $ggggw);
  	 $ggggw = str_replace('h', 'H' , $ggggw);
	 $ggggw = str_replace('j', 'J' , $ggggw);
  	 $ggggw = str_replace('k', 'Ƙ' , $ggggw);
	 $ggggw = str_replace('l', 'L' , $ggggw);
  	 $ggggw = str_replace('z', 'Z' , $ggggw);
	 $ggggw = str_replace('x', 'Ж' , $ggggw);
  	 $ggggw = str_replace('c', 'C' , $ggggw);
	 $ggggw = str_replace('v', 'Ʋ' , $ggggw);
  	 $ggggw = str_replace('b', 'Ɓ' , $ggggw);
  	 $ggggw = str_replace('n', '∏' , $ggggw);
	 $ggggw = str_replace('m', 'Μ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = ['، 🍕💕#','❥⁽🍿₎ٰ⇣ᴗ̈
','.⏳🧡:)','،🗞❤️#!','،🗞❤️#!
','، 🌼🖇"⌗
','««🍟🌿','،🌼🖤) ء','،🥀💛) ء','،📆🌼) ء','(⏰💛ء','،"(🥀💔"ء','،"(✨✊🏽"ء','،♥️🌿) ء','،"(💛🔐 ء','!،🙂💔 ء','،💤🌿،!','،🔐🌸)','،🕸💛،','،!👀💚،','،💆🏼💛) ء
','!🥀🎼 ، ⇣','!🥀?? ، ⇣','،!👅🌸) ء','،! 🚜💕 ⇣','،"(🔐💜 ء','،"(🔐💜 ء','⇡ ،💗🎧 ٰء
',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','ب',$ggggw); 
$ggggw = str_replace('ت','ت',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','جۚ ּ',$ggggw);  
$ggggw = str_replace('ح','حۡ',$ggggw); 
$ggggw = str_replace('خ','خۡ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','سۜ',$ggggw); 
$ggggw = str_replace('ش','ش',$ggggw); 
$ggggw = str_replace('ص','ص',$ggggw); 
$ggggw = str_replace('ض','ض',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظ',$ggggw); 
$ggggw = str_replace('ع','ع',$ggggw); 
$ggggw = str_replace('غ','غ',$ggggw); 
$ggggw = str_replace('ف','ف',$ggggw); 
$ggggw = str_replace('ق','ق',$ggggw); 
$ggggw = str_replace('ك','ك',$ggggw); 
$ggggw = str_replace('ل','ل',$ggggw);
$ggggw = str_replace('م','مۘ',$ggggw); 
$ggggw = str_replace('ن','نۨــہ',$ggggw);  
$ggggw = str_replace('ه','هۂَ',$ggggw); 
$ggggw = str_replace('ٰو','و',$ggggw); 
$ggggw = str_replace('ي','يۧ',$ggggw);

$ggggw = str_replace('q', 'Q' , $ggggw);
  	 $ggggw = str_replace('w', 'Щ' , $ggggw);
	 $ggggw = str_replace('e', '乇' , $ggggw);
  	 $ggggw = str_replace('r', '尺' , $ggggw);
	 $ggggw = str_replace('t', 'ｲ' , $ggggw);
  	 $ggggw = str_replace('y', 'ﾘ' , $ggggw);
	 $ggggw = str_replace('u', 'Ц' , $ggggw);
  	 $ggggw = str_replace('i', 'ﾉ' , $ggggw);
	 $ggggw = str_replace('o', 'Ծ' , $ggggw);
  	 $ggggw = str_replace('p', 'ｱ' , $ggggw);
	 $ggggw = str_replace('a', 'ﾑ' , $ggggw);
  	 $ggggw = str_replace('s', '丂' , $ggggw);
	 $ggggw = str_replace('d', 'Ð' , $ggggw);
  	 $ggggw = str_replace('f', 'ｷ' , $ggggw);
	 $ggggw = str_replace('g', 'Ǥ' , $ggggw);
  	 $ggggw = str_replace('h', 'ん' , $ggggw);
	 $ggggw = str_replace('j', 'ﾌ' , $ggggw);
  	 $ggggw = str_replace('k', 'ズ' , $ggggw);
	 $ggggw = str_replace('l', 'ﾚ' , $ggggw);
  	 $ggggw = str_replace('z', '乙' , $ggggw);
	 $ggggw = str_replace('x', 'ﾒ' , $ggggw);
  	 $ggggw = str_replace('c', 'ζ' , $ggggw);
	 $ggggw = str_replace('v', 'Џ' , $ggggw);
  	 $ggggw = str_replace('b', '乃' , $ggggw);
  	 $ggggw = str_replace('n', '刀' , $ggggw);
	 $ggggw = str_replace('m', 'ᄊ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بّـ',$ggggw); 
$ggggw = str_replace('ت','ﭥ',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw);  
$ggggw = str_replace('ح','פ',$ggggw); 
$ggggw = str_replace('خ','ڂ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ذ','ذ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','س',$ggggw); 
$ggggw = str_replace('ش','ش',$ggggw); 
$ggggw = str_replace('ص','ص',$ggggw); 
$ggggw = str_replace('ض','ضَّ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ظ',$ggggw); 
$ggggw = str_replace('ع','عّ',$ggggw); 
$ggggw = str_replace('غ','غَ ',$ggggw); 
$ggggw = str_replace('ف','ف̲ ',$ggggw); 
$ggggw = str_replace('ق','ق',$ggggw); 
$ggggw = str_replace('ك','ڪْ',$ggggw); 
$ggggw = str_replace('ل','ﻟ̣̣',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ن',$ggggw);  
$ggggw = str_replace('ه','ه',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('a', 'Á', $ggggw);
$ggggw = str_replace('b', 'ß', $ggggw);
$ggggw = str_replace('c', 'Č', $ggggw);
$ggggw = str_replace('d', 'Ď', $ggggw);
$ggggw = str_replace('e', 'Ĕ', $ggggw);
$ggggw = str_replace('f', 'Ŧ', $ggggw);
$ggggw = str_replace('g', 'Ğ', $ggggw);
$ggggw = str_replace('h', 'Ĥ', $ggggw);
$ggggw = str_replace('i', 'Ĩ', $ggggw);
$ggggw = str_replace('j', 'Ĵ', $ggggw);
$ggggw = str_replace('k', 'Ķ', $ggggw);
$ggggw = str_replace('l', 'Ĺ', $ggggw);
$ggggw = str_replace('m', 'M', $ggggw);
$ggggw = str_replace('n', 'Ń', $ggggw);
$ggggw = str_replace('o', 'Ő', $ggggw);
$ggggw = str_replace('p', 'P', $ggggw);
$ggggw = str_replace('q', 'Q', $ggggw);
$ggggw = str_replace('r', 'Ŕ', $ggggw);
$ggggw = str_replace('s', 'Ś', $ggggw);
$ggggw = str_replace('t', 'Ť', $ggggw);
$ggggw = str_replace('u', 'Ú', $ggggw);
$ggggw = str_replace('v', 'V', $ggggw);
$ggggw = str_replace('w', 'Ŵ', $ggggw);
$ggggw = str_replace('x', 'Ж', $ggggw);
$ggggw = str_replace('y', 'Ŷ', $ggggw);
$ggggw = str_replace('z', 'Ź', $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بِ',$ggggw); 
$ggggw = str_replace('ت','ت̲',$ggggw);
$ggggw = str_replace('ث','ثْ',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw);  
$ggggw = str_replace('ح','ح',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','دّ',$ggggw); 
$ggggw = str_replace('ذ','ذّ',$ggggw); 
$ggggw = str_replace('ر','رّ',$ggggw); 
$ggggw = str_replace('ز','زَ',$ggggw); 
$ggggw = str_replace('س','ﺳ̲ ',$ggggw); 
$ggggw = str_replace('ش','ﺷ̲ ',$ggggw); 
$ggggw = str_replace('ص','صـ',$ggggw); 
$ggggw = str_replace('ض','ضَ',$ggggw); 
$ggggw = str_replace('ط','طً',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','ﻋ',$ggggw); 
$ggggw = str_replace('غ','ﻏ̣̐ ',$ggggw); 
$ggggw = str_replace('ف','قّـ',$ggggw); 
$ggggw = str_replace('ق','قّـ',$ggggw); 
$ggggw = str_replace('ك','ڪ',$ggggw); 
$ggggw = str_replace('ل','ڵـ',$ggggw);
$ggggw = str_replace('م','ـمـ',$ggggw); 
$ggggw = str_replace('ن','ﻧ̲ ـ',$ggggw);  
$ggggw = str_replace('ه','ﮬ̲̌ﮧ',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('q', 'ҩ' , $ggggw);
  	 $ggggw = str_replace('w', 'ω' , $ggggw);
	 $ggggw = str_replace('e', '૯' , $ggggw);
  	 $ggggw = str_replace('r', 'Ր' , $ggggw);
	 $ggggw = str_replace('t', '੮' , $ggggw);
  	 $ggggw = str_replace('y', 'ע' , $ggggw);
	 $ggggw = str_replace('u', 'υ' , $ggggw);
  	 $ggggw = str_replace('i', 'ɿ' , $ggggw);
	 $ggggw = str_replace('o', '૦' , $ggggw);
  	 $ggggw = str_replace('p', 'ƿ' , $ggggw);
	 $ggggw = str_replace('a', 'ค' , $ggggw);
  	 $ggggw = str_replace('s', 'ς' , $ggggw);
	 $ggggw = str_replace('d', 'ძ' , $ggggw);
  	 $ggggw = str_replace('f', 'Բ' , $ggggw);
	 $ggggw = str_replace('g', '૭' , $ggggw);
  	 $ggggw = str_replace('h', 'Һ' , $ggggw);
	 $ggggw = str_replace('j', 'ʆ' , $ggggw);
  	 $ggggw = str_replace('k', 'қ' , $ggggw);
	 $ggggw = str_replace('l', 'Ն' , $ggggw);
  	 $ggggw = str_replace('z', 'ઽ' , $ggggw);
	 $ggggw = str_replace('x', '૪' , $ggggw);
  	 $ggggw = str_replace('c', '८' , $ggggw);
	 $ggggw = str_replace('v', '౮' , $ggggw);
  	 $ggggw = str_replace('b', 'ც' , $ggggw);
  	 $ggggw = str_replace('n', 'Ո' , $ggggw);
	 $ggggw = str_replace('m', 'ɱ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','بّـ',$ggggw); 
$ggggw = str_replace('ت','ت̲ ',$ggggw);
$ggggw = str_replace('ث','ثّـ',$ggggw); 
$ggggw = str_replace('ج','ﺟ',$ggggw);  
$ggggw = str_replace('ح','ﺣّ͠ـ',$ggggw); 
$ggggw = str_replace('خ','ﺣ͠ ',$ggggw); 
$ggggw = str_replace('د','دّ',$ggggw); 
$ggggw = str_replace('ذ','دّ',$ggggw); 
$ggggw = str_replace('ر','ڔ',$ggggw); 
$ggggw = str_replace('ز','زْ',$ggggw); 
$ggggw = str_replace('س','سُ',$ggggw); 
$ggggw = str_replace('ش','ﺷ͠ ',$ggggw); 
$ggggw = str_replace('ص','ﺼ',$ggggw); 
$ggggw = str_replace('ض','ضَّ',$ggggw); 
$ggggw = str_replace('ط','طً',$ggggw); 
$ggggw = str_replace('ظ','ظـ',$ggggw); 
$ggggw = str_replace('ع','عـ',$ggggw); 
$ggggw = str_replace('غ','غَ',$ggggw); 
$ggggw = str_replace('ف','ﻓ̲',$ggggw); 
$ggggw = str_replace('ق','ﻗ̮ـ̃',$ggggw); 
$ggggw = str_replace('ك','ﮖ',$ggggw); 
$ggggw = str_replace('ل','ﻟ̲ ',$ggggw);
$ggggw = str_replace('م','ﻣ̲',$ggggw); 
$ggggw = str_replace('ن','ﻧ̲',$ggggw);  
$ggggw = str_replace('ه','ﮬ̲̌ﮧ',$ggggw); 
$ggggw = str_replace('و','ﯚ',$ggggw); 
$ggggw = str_replace('ي','يَ',$ggggw);

$ggggw = str_replace('q', 'Ꝙ' ,$ggggw);
  	 $ggggw = str_replace('w', 'Ѡ' ,$ggggw);
	 $ggggw = str_replace('e', 'Ɛ' ,$ggggw);
  	 $ggggw = str_replace('r', 'Ɽ' ,$ggggw);
	 $ggggw = str_replace('t', 'Ͳ' ,$ggggw);
  	 $ggggw = str_replace('y', 'Ỿ' ,$ggggw);
	 $ggggw = str_replace('u', 'Ʊ' ,$ggggw);
  	 $ggggw = str_replace('i', 'ị' ,$ggggw);
	 $ggggw = str_replace('o', 'Ỗ' ,$ggggw);
  	 $ggggw = str_replace('p', 'Ꝓ' ,$ggggw);
	 $ggggw = str_replace('a', 'Λ' ,$ggggw);
  	 $ggggw = str_replace('s', 'Ṥ' ,$ggggw);
	 $ggggw = str_replace('d', 'δ' ,$ggggw);
  	 $ggggw = str_replace('f', 'Բ' ,$ggggw);
	 $ggggw = str_replace('g', '₲' ,$ggggw);
  	 $ggggw = str_replace('h', 'Ḩ' ,$ggggw);
	 $ggggw = str_replace('j', 'Ĵ' ,$ggggw);
  	 $ggggw = str_replace('k', 'Ҡ' ,$ggggw);
	 $ggggw = str_replace('l', 'Ⱡ' ,$ggggw);
  	 $ggggw = str_replace('z', 'Ꙃ' ,$ggggw);
	 $ggggw = str_replace('x', 'Ӿ' ,$ggggw);
  	 $ggggw = str_replace('c', 'Ƈ' ,$ggggw);
	 $ggggw = str_replace('v', 'Ѵ' ,$ggggw);
  	 $ggggw = str_replace('b', 'ß' ,$ggggw);
  	 $ggggw = str_replace('n', 'ⴂ' ,$ggggw);
	 $ggggw = str_replace('m', 'ⴅ' ,$ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
}
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = $text; 
$ggggw = str_replace('ا','ٱ',$ggggw); 
$ggggw = str_replace('ب','ﭜ',$ggggw); 
$ggggw = str_replace('ج','چ',$ggggw); 
$ggggw = str_replace('ث','ﭦ',$ggggw); 
$ggggw = str_replace('ت','ﭠ',$ggggw); 
$ggggw = str_replace('ح','ڂ',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','ﮃ',$ggggw); 
$ggggw = str_replace('ذ','ڎ',$ggggw); 
$ggggw = str_replace('ر','ر',$ggggw); 
$ggggw = str_replace('ز','ژ',$ggggw); 
$ggggw = str_replace('س','ﺳ̭͠ ',$ggggw); 
$ggggw = str_replace('ش','شَ',$ggggw); 
$ggggw = str_replace('ص','ڝ',$ggggw); 
$ggggw = str_replace('ض','ڞ',$ggggw); 
$ggggw = str_replace('ط','ط',$ggggw); 
$ggggw = str_replace('ظ','ڟ',$ggggw); 
$ggggw = str_replace('ع','؏',$ggggw); 
$ggggw = str_replace('غ','ﻏ̐ ',$ggggw); 
$ggggw = str_replace('ف','ڤ',$ggggw); 
$ggggw = str_replace('ق','ڦ',$ggggw); 
$ggggw = str_replace('ك','ڳ',$ggggw); 
$ggggw = str_replace('ل','لَ',$ggggw);
$ggggw = str_replace('م','م',$ggggw); 
$ggggw = str_replace('ن','ڻ',$ggggw);  
$ggggw = str_replace('ه','هـﮧ',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','يِّ',$ggggw); 

$ggggw = str_replace('q', 'Ǫ' , $ggggw);
  	 $ggggw = str_replace('w', 'Ш' , $ggggw);
	 $ggggw = str_replace('e', 'Ξ' , $ggggw);
  	 $ggggw = str_replace('r', 'Я' , $ggggw);
	 $ggggw = str_replace('t', '₮' , $ggggw);
  	 $ggggw = str_replace('y', 'Џ' , $ggggw);
	 $ggggw = str_replace('u', 'Ǚ' , $ggggw);
  	 $ggggw = str_replace('i', 'ł' , $ggggw);
	 $ggggw = str_replace('o', 'Ф' , $ggggw);
  	 $ggggw = str_replace('p', 'ק' , $ggggw);
	 $ggggw = str_replace('a', 'Λ' , $ggggw);
  	 $ggggw = str_replace('s', 'Ŝ' , $ggggw);
	 $ggggw = str_replace('d', 'Ð' , $ggggw);
  	 $ggggw = str_replace('f', 'Ŧ' , $ggggw);
	 $ggggw = str_replace('g', '₲' , $ggggw);
  	 $ggggw = str_replace('h', 'Ḧ' , $ggggw);
	 $ggggw = str_replace('j', 'J' , $ggggw);
  	 $ggggw = str_replace('k', 'К' , $ggggw);
	 $ggggw = str_replace('l', 'Ł' , $ggggw);
  	 $ggggw = str_replace('z', 'Ꙃ' , $ggggw);
	 $ggggw = str_replace('x', 'Ж' , $ggggw);
  	 $ggggw = str_replace('c', 'Ͼ' , $ggggw);
	 $ggggw = str_replace('v', 'Ṽ' , $ggggw);
  	 $ggggw = str_replace('b', 'Б' , $ggggw);
  	 $ggggw = str_replace('n', 'Л' , $ggggw);
	 $ggggw = str_replace('m', 'Ɱ' , $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
   }
   if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
$ggggw = str_replace('ا','آ̀',$text); 
$ggggw = str_replace('ب','ب',$ggggw); 
$ggggw = str_replace('ت','ت',$ggggw);
$ggggw = str_replace('ث','ث',$ggggw); 
$ggggw = str_replace('ج','ج',$ggggw);  
$ggggw = str_replace('ح','ح̀',$ggggw); 
$ggggw = str_replace('خ','خ',$ggggw); 
$ggggw = str_replace('د','د̀',$ggggw); 
$ggggw = str_replace('ذ','ذ̀',$ggggw); 
$ggggw = str_replace('ر','ر̀',$ggggw); 
$ggggw = str_replace('ز','ز',$ggggw); 
$ggggw = str_replace('س','س̀́',$ggggw); 
$ggggw = str_replace('ش','ش̀́',$ggggw); 
$ggggw = str_replace('ص','ص̀́',$ggggw); 
$ggggw = str_replace('ض','ض',$ggggw); 
$ggggw = str_replace('ط','ط̀́',$ggggw); 
$ggggw = str_replace('ظ','ظ̀́',$ggggw); 
$ggggw = str_replace('ع','ع̀́',$ggggw); 
$ggggw = str_replace('غ','غ',$ggggw); 
$ggggw = str_replace('ف','ف̀',$ggggw); 
$ggggw = str_replace('ق','ق̀',$ggggw); 
$ggggw = str_replace('ك','ك',$ggggw); 
$ggggw = str_replace('ل','ل',$ggggw);
$ggggw = str_replace('م','م̀',$ggggw); 
$ggggw = str_replace('ن','ن̀',$ggggw);  
$ggggw = str_replace('ه','ه̀',$ggggw); 
$ggggw = str_replace('و','و',$ggggw); 
$ggggw = str_replace('ي','ي',$ggggw);

$ggggw = str_replace('a', '𝒂', $ggggw);
$ggggw = str_replace('b', '𝒃', $ggggw);
$ggggw = str_replace('c', '𝒄', $ggggw);
$ggggw = str_replace('d', '𝒅', $ggggw);
$ggggw = str_replace('e', '𝒆', $ggggw);
$ggggw = str_replace('f', '𝒓', $ggggw);
$ggggw = str_replace('g', '𝒈', $ggggw);
$ggggw = str_replace('h', '𝒉', $ggggw);
$ggggw = str_replace('i', '𝒊', $ggggw);
$ggggw = str_replace('j', '𝒋', $ggggw);
$ggggw = str_replace('k', '𝒌', $ggggw);
$ggggw = str_replace('l', '𝒍', $ggggw);
$ggggw = str_replace('m', '𝒎', $ggggw);
$ggggw = str_replace('n', '𝒏', $ggggw);
$ggggw = str_replace('o', '𝒐', $ggggw);
$ggggw = str_replace('p', '𝒑', $ggggw);
$ggggw = str_replace('q', '𝒒', $ggggw);
$ggggw = str_replace('r', '𝒓', $ggggw);
$ggggw = str_replace('s', '𝒔', $ggggw);
$ggggw = str_replace('t', '𝒕', $ggggw);
$ggggw = str_replace('u', '𝒖', $ggggw);
$ggggw = str_replace('v', '𝒗', $ggggw);
$ggggw = str_replace('w', '𝒘', $ggggw);
$ggggw = str_replace('x', '𝒙', $ggggw);
$ggggw = str_replace('y', '𝒚', $ggggw);
$ggggw = str_replace('z', '𝒛', $ggggw);

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ggggw."".$smile
   ]);
}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $items = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐',];
  $_smile = array_rand($items,1);
  $smile = $items[$_smile];
   $count = count($text);
   $ggggw = $text;
$ggggw = str_replace('a','⎛α⎞',$ggggw); 
$ggggw = str_replace('b','⎛в⎞',$ggggw); 
$ggggw = str_replace('c','⎛c⎞',$ggggw); 
$ggggw = str_replace('d','⎛ɒ⎞',$ggggw); 
$ggggw = str_replace('e','⎛є⎞',$ggggw); 
$ggggw = str_replace('f','⎛f⎞',$ggggw); 
$ggggw = str_replace('g','⎛ɢ⎞',$ggggw); 
$ggggw = str_replace('h','⎛н⎞',$ggggw); 
$ggggw = str_replace('i','⎛ɪ⎞',$ggggw); 
$ggggw = str_replace('j','⎛ᴊ⎞',$ggggw); 
$ggggw = str_replace('s','⎛ĸ⎞',$ggggw); 
$ggggw = str_replace('l','⎛ℓ⎞',$ggggw); 
$ggggw = str_replace('m','⎛м⎞',$ggggw); 
$ggggw = str_replace('n','⎛и⎞',$ggggw); 
$ggggw = str_replace('o','⎛σ⎞',$ggggw); 
$ggggw = str_replace('p','⎛ρ⎞',$ggggw); 
$ggggw = str_replace('q','⎛q⎞',$ggggw); 
$ggggw = str_replace('r','⎛я⎞',$ggggw); 
$ggggw = str_replace('f','⎛s⎞',$ggggw); 
$ggggw = str_replace('t','⎛τ⎞ ',$ggggw); 
$ggggw = str_replace('u','⎛υ⎞ ',$ggggw); 
$ggggw = str_replace('v','⎛v⎞',$ggggw); 
$ggggw = str_replace('w','⎛ω⎞',$ggggw); 
$ggggw = str_replace('x','⎛x⎞',$ggggw); 
$ggggw = str_replace('y','⎛y⎞',$ggggw); 
$ggggw = str_replace('z','⎛z⎞',$ggggw); 
 
$ggggw = str_replace('ض','ضِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ص','صِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ث','ثِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ق','قِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ف','فِٰ͒ـِﮧۢ',$ggggw); 
$ggggw = str_replace('غ','غِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ع','عِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ه','ۿۿہ',$ggggw); 
$ggggw = str_replace('خ','خِٰ̐ـﮧِۢ',$ggggw); 
$ggggw = str_replace('ح','حِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ج','جِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ش','شِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('س','سِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ي','يِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ب','بِٰـِﮧۢ',$ggggw);
$ggggw = str_replace('ل','لِٰـِﮧۢ',$ggggw); 
$ggggw = str_replace('ا','آ',$ggggw); 
$ggggw = str_replace('ت','تِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ن','نِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('م','مِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ك','ڪِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ة','ةً',$ggggw); 
$ggggw = str_replace('ء','ء',$ggggw); 
$ggggw = str_replace('ظ','ظِٰـﮧِۢ',$ggggw); 
$ggggw = str_replace('ط','طِٰـﮧِۢ',$ggggw); 
 $ggggw = str_replace('ذ','ذٰ',$ggggw); 
$ggggw = str_replace('د','د',$ggggw); 
$ggggw = str_replace('ز','ژ',$ggggw); 
$ggggw = str_replace('ر','رٰ',$ggggw); 
$ggggw = str_replace('و','ﯛ̲୭',$ggggw); 
 $ggggw = str_replace('ى','ىٍ',$ggggw);
bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>$ggggw."".$smile
   ]);
}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','ᗩ',$text);
$ARMOF = str_replace("b","ᗷ",$ARMOF);
$ARMOF = str_replace("c","ᑕ",$ARMOF);
$ARMOF = str_replace("d","ᗪ",$ARMOF);
$ARMOF = str_replace("e","E",$ARMOF);
$ARMOF = str_replace("E","E",$ARMOF);
$ARMOF = str_replace("g","G",$ARMOF);
$ARMOF = str_replace("h","ᕼ",$ARMOF);
$ARMOF = str_replace("i","I",$ARMOF);
$ARMOF = str_replace("j","ᒍ",$ARMOF);
$ARMOF = str_replace("k","K",$ARMOF);
$ARMOF = str_replace("l","ᒪ",$ARMOF);
$ARMOF = str_replace("m","ᗰ",$ARMOF);
$ARMOF = str_replace("n","ᑎ",$ARMOF);
$ARMOF = str_replace("o","O",$ARMOF);
$ARMOF = str_replace("p","ᑭ",$ARMOF);
$ARMOF = str_replace("q","ᑫ",$ARMOF);
$ARMOF = str_replace("r","ᖇ",$ARMOF);
$ARMOF = str_replace("s","ᔕ",$ARMOF);
$ARMOF = str_replace("t","T",$ARMOF);
$ARMOF = str_replace("u","ᑌ",$ARMOF);
$ARMOF = str_replace("v","ᐯ",$ARMOF);
$ARMOF = str_replace("w","ᗯ",$ARMOF);
$ARMOF = str_replace("x","᙭",$ARMOF);
$ARMOF = str_replace("y","Y",$ARMOF);
$ARMOF = str_replace("z","ᘔ",$ARMOF);

$ARMOF = str_replace('ض','᎗ᘞ̇',$ARMOF); 
$ARMOF = str_replace('ص','᎗ᘗ',$ARMOF); 
$ARMOF = str_replace('ث','᎗̇̈ɹ',$ARMOF); 
$ARMOF = str_replace('ق','ᓆ',$ARMOF); 
$ARMOF = str_replace('ف','ᓅ',$ARMOF); 
$ARMOF = str_replace('غ','᎗ჺ',$ARMOF); 
$ARMOF = str_replace('ع','᎗ϛ',$ARMOF); 
$ARMOF = str_replace('ه','᎗බ',$ARMOF); 
$ARMOF = str_replace('خ','ᓘ',$ARMOF); 
$ARMOF = str_replace('ح','ᓗ',$ARMOF); 
$ARMOF = str_replace('ج','ᓗฺ',$ARMOF); 
$ARMOF = str_replace('ش','᎗ɹ̇̈ɹɹ',$ARMOF); 
$ARMOF = str_replace('س','᎗ɹɹɹ',$ARMOF); 
$ARMOF = str_replace('ي','᎗̤ɹ',$ARMOF); 
$ARMOF = str_replace('ب','᎗̣ɹ',$ARMOF);
$ARMOF = str_replace('ل','⅃',$ARMOF); 
$ARMOF = str_replace('ا','Ȋ',$ARMOF); 
$ARMOF = str_replace('ت','᎗̈ɹ',$ARMOF); 
$ARMOF = str_replace('ن','᎗̇ɹ',$ARMOF); 
$ARMOF = str_replace('ܭ','ك',$ARMOF); 
$ARMOF = str_replace('م','ᓄ',$ARMOF); 
$ARMOF = str_replace('ة','᎗Ꭷ',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','᎗̇Ь',$ARMOF); 
$ARMOF = str_replace('ط','᎗Ь',$ARMOF); 
 $ARMOF = str_replace('ذ','̇ↄ',$ARMOF); 
$ARMOF = str_replace('د','ↄ',$ARMOF); 
$ARMOF = str_replace('ز','j',$ARMOF); 
$ARMOF = str_replace('ر','ȷ',$ARMOF); 
$ARMOF = str_replace('و','g',$ARMOF); 
 $ARMOF = str_replace('ى','ʟɾʅ',$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','Ꭿ',$text);
$ARMOF = str_replace("b","Ᏸ",$ARMOF);
$ARMOF = str_replace("c","Ꮸ",$ARMOF);
$ARMOF = str_replace("d","Ꮷ",$ARMOF);
$ARMOF = str_replace("e","Ꮛ",$ARMOF);
$ARMOF = str_replace("f","Ꭶ",$ARMOF);
$ARMOF = str_replace("g","Ᏻ",$ARMOF);
$ARMOF = str_replace("h","Ᏺ",$ARMOF);
$ARMOF = str_replace("i","Ꭸ",$ARMOF);
$ARMOF = str_replace("j","Ꮰ",$ARMOF);
$ARMOF = str_replace("k","Ꮵ",$ARMOF);
$ARMOF = str_replace("l","Ꮭ",$ARMOF);
$ARMOF = str_replace("m","ᗰ",$ARMOF);
$ARMOF = str_replace("n","Ꮑ",$ARMOF);
$ARMOF = str_replace("o","Ꭷ",$ARMOF);
$ARMOF = str_replace("p","Ꭾ",$ARMOF);
$ARMOF = str_replace("q","Ꮕ",$ARMOF);
$ARMOF = str_replace("r","ᖇ",$ARMOF);
$ARMOF = str_replace("s","Ꮥ",$ARMOF);
$ARMOF = str_replace("t","Ꮱ",$ARMOF);
$ARMOF = str_replace("u","Ꮼ",$ARMOF);
$ARMOF = str_replace("v","Ꮙ",$ARMOF);
$ARMOF = str_replace("w","Ꮗ",$ARMOF);
$ARMOF = str_replace("x","Ꮂ",$ARMOF);
$ARMOF = str_replace("y","Ꮍ",$ARMOF);
$ARMOF = str_replace("z","ᔓ",$ARMOF);
                     
$ARMOF = str_replace('ض','ضٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ص','صٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ث','ثٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ق','قٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ف','فٰہٰٖ',$ARMOF);
$ARMOF = str_replace('غ','غٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ع','عٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ه','هٰہٰٖ',$ARMOF);
$ARMOF = str_replace('خ','خٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ح','حٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ج','جٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ش','شٰہٰٖ',$ARMOF);
$ARMOF = str_replace('س','سٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ي','يٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ب','بٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ل','لہٰٖ',$ARMOF);
$ARMOF = str_replace('ا','اٰ',$ARMOF);
$ARMOF = str_replace('ت','تٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ن','نٰہٰٖ',$ARMOF);
$ARMOF = str_replace('م','مٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ك','كٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ة','ةً',$ARMOF);
$ARMOF = str_replace('ء','ء',$ARMOF);
$ARMOF = str_replace('ظ','ظٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ط','طٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ذ','ذٖ',$ARMOF);
$ARMOF = str_replace('د','دٰ',$ARMOF);
$ARMOF = str_replace('ز','زٖ',$ARMOF);
$ARMOF = str_replace('ر','رٰ',$ARMOF);
$ARMOF = str_replace('و','وٰ',$ARMOF);
$ARMOF = str_replace('ى','ى',$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a',"ᵃ",$text);
$ARMOF = str_replace("b","ᵇ",$ARMOF);
$ARMOF = str_replace("c","ᶜ",$ARMOF);
$ARMOF = str_replace("d","ᵈ",$ARMOF);
$ARMOF = str_replace("e","ᵉ",$ARMOF);
$ARMOF = str_replace("f","ᶠ",$ARMOF);
$ARMOF = str_replace("g","ᵍ",$ARMOF);
$ARMOF = str_replace("h","ʰ",$ARMOF);
$ARMOF = str_replace("i","ᶤ",$ARMOF);
$ARMOF = str_replace("j","ʲ",$ARMOF);
$ARMOF = str_replace("k","ᵏ",$ARMOF);
$ARMOF = str_replace("l","ˡ",$ARMOF);
$ARMOF = str_replace("m","ᵐ",$ARMOF);
$ARMOF = str_replace("n","ᶰ",$ARMOF);
$ARMOF = str_replace("o","ᵒ",$ARMOF);
$ARMOF = str_replace("p","ᵖ",$ARMOF);
$ARMOF = str_replace("q","ᵠ",$ARMOF);
$ARMOF = str_replace("r","ʳ",$ARMOF);
$ARMOF = str_replace("s","ˢ",$ARMOF);
$ARMOF = str_replace("t","ᵗ",$ARMOF);
$ARMOF = str_replace("u","ᵘ",$ARMOF);
$ARMOF = str_replace("v","ᵛ",$ARMOF);
$ARMOF = str_replace("w","ʷ",$ARMOF);
$ARMOF = str_replace("x","ˣ",$ARMOF);
$ARMOF = str_replace("y","ʸ",$ARMOF);
$ARMOF = str_replace("z","ᶻ",$ARMOF);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','Ａ',$text);
$ARMOF = str_replace("b","Ｂ",$ARMOF);
$ARMOF = str_replace("c","Ｃ",$ARMOF);
$ARMOF = str_replace("d","Ｄ",$ARMOF);
$ARMOF = str_replace("e","Ｅ",$ARMOF);
$ARMOF = str_replace("E","Ｆ",$ARMOF);
$ARMOF = str_replace("g","Ｇ",$ARMOF);
$ARMOF = str_replace("h","Ｈ",$ARMOF);
$ARMOF = str_replace("i","Ｉ",$ARMOF);
$ARMOF = str_replace("j","Ｊ",$ARMOF);
$ARMOF = str_replace("k","Ｋ",$ARMOF);
$ARMOF = str_replace("l","Ｌ",$ARMOF);
$ARMOF = str_replace("m","Ｍ",$ARMOF);
$ARMOF = str_replace("n","Ｎ",$ARMOF);
$ARMOF = str_replace("o","Ｏ",$ARMOF);
$ARMOF = str_replace("p","Ｐ",$ARMOF);
$ARMOF = str_replace("q","Ｑ",$ARMOF);
$ARMOF = str_replace("r","Ｒ",$ARMOF);
$ARMOF = str_replace("s","Ｓ",$ARMOF);
$ARMOF = str_replace("t","Ｔ",$ARMOF);
$ARMOF = str_replace("u","U",$ARMOF);
$ARMOF = str_replace("v","Ｖ",$ARMOF);
$ARMOF = str_replace("w","Ｗ",$ARMOF);
$ARMOF = str_replace("x","Ｘ",$ARMOF);
$ARMOF = str_replace("y","Ｙ",$ARMOF);
$ARMOF = str_replace("z","Ｚ",$ARMOF);

$ARMOF = str_replace('ع','عٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ض','ضٰہٰٖ ',$ARMOF); 
$ARMOF = str_replace('ص','صٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ث','ثٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ق','قٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ف','فٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('غ','غٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ه','هٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('خ','خٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ح','حٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ج','جٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ش','شٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('س','سٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ب','بٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ي','يٰہٰٖ',$ARMOF);
$ARMOF = str_replace('ل','لہٰٖ',$ARMOF); 
$ARMOF = str_replace('ا','اٰ',$ARMOF); 
$ARMOF = str_replace('ت','تٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ن','نٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('م','مٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ك','كٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ظ','ظٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('ء','ءِ',$ARMOF); 
$ARMOF = str_replace('ذ','ذٖ',$ARMOF); 
$ARMOF = str_replace('ط','طٰہٰٖ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زٰ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وَٰ',$ARMOF); 
$ARMOF = str_replace('ى','ىٰ',$ARMOF); 
 
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','𝗔',$text); 
$ARMOF = str_replace("b","𝗕",$ARMOF); 
$ARMOF = str_replace("c","𝗖",$ARMOF); 
$ARMOF = str_replace("d","𝗗",$ARMOF); 
$ARMOF = str_replace("e","𝗘",$ARMOF); 
$ARMOF = str_replace("f","𝗙",$ARMOF); 
$ARMOF = str_replace("g","𝗚",$ARMOF); 
$ARMOF = str_replace("h","𝗛",$ARMOF); 
$ARMOF = str_replace("i","𝗜",$ARMOF); 
$ARMOF = str_replace("j","𝗝",$ARMOF); 
$ARMOF = str_replace("k","𝗞",$ARMOF); 
$ARMOF = str_replace("l","𝗟",$ARMOF); 
$ARMOF = str_replace("m","𝗠",$ARMOF); 
$ARMOF = str_replace("n","𝗡",$ARMOF); 
$ARMOF = str_replace("o","𝗢",$ARMOF); 
$ARMOF = str_replace("p","𝗣",$ARMOF); 
$ARMOF = str_replace("q","𝗤",$ARMOF); 
$ARMOF = str_replace("r","𝗥",$ARMOF); 
$ARMOF = str_replace("s","𝗦",$ARMOF); 
$ARMOF = str_replace("t","𝗧",$ARMOF); 
$ARMOF = str_replace("u","𝗨",$ARMOF); 
$ARMOF = str_replace("v","𝗩",$ARMOF); 
$ARMOF = str_replace("w","𝗪",$ARMOF); 
$ARMOF = str_replace("x","𝗫",$ARMOF); 
$ARMOF = str_replace("y","𝗬",$ARMOF); 
$ARMOF = str_replace("z","𝗭",$ARMOF); 
                    
$ARMOF = str_replace('ض','ضـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ص','صـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ث','ثـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ق','قـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ف','فـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('غ','غـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ع','عـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ه','هـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('خ','خـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ح','حـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ج','جـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ش','شـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('س','سـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ي','يـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ب','بـٰ̲ـہ',$ARMOF);
$ARMOF = str_replace('ل','لـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ا','اٰ',$ARMOF); 
$ARMOF = str_replace('ت','تـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ن','نـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('م','مـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ك','كـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ط','طـٰ̲ـہ',$ARMOF); 
$ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زٰ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وٰ',$ARMOF); 
$ARMOF = str_replace('ى','ىَ',$ARMOF); 

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⧼α⧽',$text); 
$ARMOF = str_replace('b','⧼в⧽',$ARMOF); 
$ARMOF = str_replace('c','⧼c⧽',$ARMOF); 
$ARMOF = str_replace('d','⧼ɒ⧽',$ARMOF); 
$ARMOF = str_replace('e','⧼є⧽',$ARMOF); 
$ARMOF = str_replace('f','⧼f⧽',$ARMOF); 
$ARMOF = str_replace('g','⧼ɢ⧽',$ARMOF); 
$ARMOF = str_replace('h','⧼н⧽',$ARMOF); 
$ARMOF = str_replace('i','⧼ɪ⧽',$ARMOF); 
$ARMOF = str_replace('j','⧼ᴊ⧽',$ARMOF); 
$ARMOF = str_replace('k','⧼ĸ⧽',$ARMOF); 
$ARMOF = str_replace('l','⧼ℓ⧽',$ARMOF); 
$ARMOF = str_replace('m','⧼м⧽',$ARMOF); 
$ARMOF = str_replace('n','⧼и⧽',$ARMOF); 
$ARMOF = str_replace('o','⧼σ⧽',$ARMOF); 
$ARMOF = str_replace('p','⧼ρ⧽',$ARMOF); 
$ARMOF = str_replace('q','⧼q⧽',$ARMOF); 
$ARMOF = str_replace('r','⧼я⧽',$ARMOF); 
$ARMOF = str_replace('s','⧼s⧽',$ARMOF); 
$ARMOF = str_replace('t','⧼τ⧽',$ARMOF); 
$ARMOF = str_replace('u','⧼υ⧽',$ARMOF); 
$ARMOF = str_replace('v','⧼v⧽',$ARMOF); 
$ARMOF = str_replace('w','⧼ω⧽',$ARMOF); 
$ARMOF = str_replace('x','⧼x⧽',$ARMOF); 
$ARMOF = str_replace('y','⧼y⧽',$ARMOF); 
$ARMOF = str_replace('z','⧼z⧽',$ARMOF); 

$ARMOF = str_replace('ض','ضـٰ๋۪͜ﮧٰ',$ARMOF); 
$ARMOF = str_replace('ص','صـٌٍ๋ۤ͜ﮧْ',$ARMOF); 
$ARMOF = str_replace('ث','ث̲ꫭـﮧ',$ARMOF); 
$ARMOF = str_replace('ق','قٰٰྀ̲ـِٰ̲ﮧْ',$ARMOF); 
$ARMOF = str_replace('ف','',$ARMOF); 
$ARMOF = str_replace('غ','فـٌٍ๋ۤ͜ﮧ',$ARMOF); 
$ARMOF = str_replace('ع','غـّٰ̐ہٰٰ',$ARMOF); 
$ARMOF = str_replace('ه','ٰ̲ھہ',$ARMOF); 
$ARMOF = str_replace('خ','خ̲ﮧ',$ARMOF); 
$ARMOF = str_replace('ح','ح̲ꪳـﮧ',$ARMOF); 
$ARMOF = str_replace('ج','ج̲ꪸـﮧ',$ARMOF); 
$ARMOF = str_replace('ش','ش̲ꪾـﮧ',$ARMOF); 
$ARMOF = str_replace('س','سـ̷ٰٰﮧْ',$ARMOF); 
$ARMOF = str_replace('ي','يـِٰ̲ﮧ',$ARMOF); 
$ARMOF = str_replace('ب','ب̲ꪰـﮧ',$ARMOF);
$ARMOF = str_replace('ل','لٍُـّٰ̐ہ',$ARMOF); 
$ARMOF = str_replace('ا',' ཻا ',$ARMOF); 
$ARMOF = str_replace('ت','تـٰۧﮧ',$ARMOF); 
$ARMOF = str_replace('ن','نٰ̲̐ـﮧْ',$ARMOF); 
$ARMOF = str_replace('م','مٰٰྀ̲ـِٰ̲ﮧْ',$ARMOF); 
$ARMOF = str_replace('ك','كـِّﮧْٰٖ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظَـ๋͜ﮧْ',$ARMOF); 
$ARMOF = str_replace('ط','ط̲꫁ـﮧ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٖ',$ARMOF); 
$ARMOF = str_replace('د','دُ',$ARMOF); 
$ARMOF = str_replace('ز','ژٰ',$ARMOF); 
$ARMOF = str_replace('ر','',$ARMOF); 
$ARMOF = str_replace('و','ﯛ૭',$ARMOF); 
 $ARMOF = str_replace('ى','ىِ',$ARMOF); 

bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ME0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','🅰',$text); 
$ARMOF = str_replace('b','🅱',$ARMOF); 
$ARMOF = str_replace('c','🅲',$ARMOF); 
$ARMOF = str_replace('d','🅳',$ARMOF); 
$ARMOF = str_replace('e','🅴',$ARMOF); 
$ARMOF = str_replace('f','🅵',$ARMOF); 
$ARMOF = str_replace('g','🅶',$ARMOF); 
$ARMOF = str_replace('h','🅷',$ARMOF); 
$ARMOF = str_replace('i','🅸',$ARMOF); 
$ARMOF = str_replace('j','🅹',$ARMOF); 
$ARMOF = str_replace('k','🅺',$ARMOF); 
$ARMOF = str_replace('l','🅻',$ARMOF); 
$ARMOF = str_replace('m','🅼',$ARMOF); 
$ARMOF = str_replace('n','🅽',$ARMOF); 
$ARMOF = str_replace('o','🅾',$ARMOF); 
$ARMOF = str_replace('p','🅿',$ARMOF); 
$ARMOF = str_replace('q','🆀',$ARMOF); 
$ARMOF = str_replace('r','🆁',$ARMOF); 
$ARMOF = str_replace('s','🆂',$ARMOF); 
$ARMOF = str_replace('t','🆃',$ARMOF); 
$ARMOF = str_replace('u',' 🆄',$ARMOF); 
$ARMOF = str_replace('v','🆅',$ARMOF); 
$ARMOF = str_replace('w','🆆',$ARMOF); 
$ARMOF = str_replace('x','🆇',$ARMOF); 
$ARMOF = str_replace('y','🆈',$ARMOF); 
$ARMOF = str_replace('z','🆉',$ARMOF); 
 
$ARMOF = str_replace('ض','ضـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ص','صـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ث','ثـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ق','قـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ف','ف͒ـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('غ','غـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ع','عـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خ̐ـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ح','حـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ج','جـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('ش','شـ๋͜‏ـﮧ ',$ARMOF); 
$ARMOF = str_replace('س','سـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ي',' يـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ب','  بـ๋͜‏ـﮧ',$ARMOF);
$ARMOF = str_replace('ل',' لـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','  تـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ن','نـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('م','مـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ك','ڪـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظـ๋͜‏ـﮧ',$ARMOF); 
$ARMOF = str_replace('ط','طـ๋͜‏ـﮧ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذِ',$ARMOF); 
$ARMOF = str_replace('د','دٰ',$ARMOF); 
$ARMOF = str_replace('ز','زً',$ARMOF); 
$ARMOF = str_replace('ر','ر',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٰ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⎛α⎞',$text); 
$ARMOF = str_replace('b','⎛в⎞',$ARMOF); 
$ARMOF = str_replace('c','⎛c⎞',$ARMOF); 
$ARMOF = str_replace('d','⎛ɒ⎞',$ARMOF); 
$ARMOF = str_replace('e','⎛є⎞',$ARMOF); 
$ARMOF = str_replace('f','⎛f⎞',$ARMOF); 
$ARMOF = str_replace('g','⎛ɢ⎞',$ARMOF); 
$ARMOF = str_replace('h','⎛н⎞',$ARMOF); 
$ARMOF = str_replace('i','⎛ɪ⎞',$ARMOF); 
$ARMOF = str_replace('j','⎛ᴊ⎞',$ARMOF); 
$ARMOF = str_replace('k','⎛ĸ⎞',$ARMOF); 
$ARMOF = str_replace('l','⎛ℓ⎞',$ARMOF); 
$ARMOF = str_replace('m','⎛м⎞',$ARMOF); 
$ARMOF = str_replace('n','⎛и⎞',$ARMOF); 
$ARMOF = str_replace('o','⎛σ⎞',$ARMOF); 
$ARMOF = str_replace('p','⎛ρ⎞',$ARMOF); 
$ARMOF = str_replace('q','⎛q⎞',$ARMOF); 
$ARMOF = str_replace('r','⎛я⎞',$ARMOF); 
$ARMOF = str_replace('s','⎛s⎞',$ARMOF); 
$ARMOF = str_replace('t','⎛τ⎞ ',$ARMOF); 
$ARMOF = str_replace('u','⎛υ⎞ ',$ARMOF); 
$ARMOF = str_replace('v','⎛v⎞',$ARMOF); 
$ARMOF = str_replace('w','⎛ω⎞',$ARMOF); 
$ARMOF = str_replace('x','⎛x⎞',$ARMOF); 
$ARMOF = str_replace('y','⎛y⎞',$ARMOF); 
$ARMOF = str_replace('z','⎛z⎞',$ARMOF); 
 
$ARMOF = str_replace('ض','ضِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ص','صِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ث','ثِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ق','قِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ف','فِٰ͒ـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('غ','غِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ع','عِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خِٰ̐ـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ح','حِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ج','جِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('س','سِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ب','بِٰـِﮧۢ',$ARMOF);
$ARMOF = str_replace('ل','لِٰـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','تِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ن','نِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('م','مِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ك','ڪِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ط','طِٰـﮧِۢ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','د',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٍ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}


if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','̶a̶',$text); 
$ARMOF = str_replace('b','b̶',$ARMOF); 
$ARMOF = str_replace('c','c̶',$ARMOF); 
$ARMOF = str_replace('d','d̶',$ARMOF); 
$ARMOF = str_replace('e','e̶',$ARMOF); 
$ARMOF = str_replace('f','f̶',$ARMOF); 
$ARMOF = str_replace('g','g̶',$ARMOF); 
$ARMOF = str_replace('h','h̶',$ARMOF); 
$ARMOF = str_replace('i','i̶',$ARMOF); 
$ARMOF = str_replace('j','j̶',$ARMOF); 
$ARMOF = str_replace('k','k̶',$ARMOF); 
$ARMOF = str_replace('l','l̶',$ARMOF); 
$ARMOF = str_replace('m','m̶',$ARMOF); 
$ARMOF = str_replace('n','n̶',$ARMOF); 
$ARMOF = str_replace('o','o̶',$ARMOF); 
$ARMOF = str_replace('p','p̶',$ARMOF); 
$ARMOF = str_replace('q','q̶',$ARMOF); 
$ARMOF = str_replace('r','r̶',$ARMOF); 
$ARMOF = str_replace('s','s̶',$ARMOF); 
$ARMOF = str_replace('t','t̶',$ARMOF); 
$ARMOF = str_replace('u','ᵘ̶ ',$ARMOF); 
$ARMOF = str_replace('v','v̶',$ARMOF); 
$ARMOF = str_replace('w','w̶',$ARMOF); 
$ARMOF = str_replace('x','x̶',$ARMOF); 
$ARMOF = str_replace('y','y̶',$ARMOF); 
$ARMOF = str_replace('z','z̶',$ARMOF); 

 $ARMOF = str_replace('ض','ضۜہٰٰ',$ARMOF); 
$ARMOF = str_replace('ص','صۛہٰٰ',$ARMOF); 
$ARMOF = str_replace('ث','ثہٰٰ',$ARMOF); 
$ARMOF = str_replace('ق','قྀ̲ہٰٰٰ',$ARMOF); 
$ARMOF = str_replace('ف','ف͒ہٰٰ',$ARMOF); 
$ARMOF = str_replace('غ','غہٰٰ',$ARMOF); 
$ARMOF = str_replace('ع','ۤ؏ـ',$ARMOF); 
$ARMOF = str_replace('ه','ھہ',$ARMOF); 
$ARMOF = str_replace('خ','خٰ̐ہ',$ARMOF); 
$ARMOF = str_replace('ح','حہٰٰ',$ARMOF); 
$ARMOF = str_replace('ج','جْۧ ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰہٰٰ',$ARMOF); 
$ARMOF = str_replace('س','سٰٰٓ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰہ',$ARMOF); 
$ARMOF = str_replace('ب','بّہ',$ARMOF);
$ARMOF = str_replace('ل','ل',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت',' تَہَٰ',$ARMOF); 
$ARMOF = str_replace('ن','نَِٰہ',$ARMOF); 
$ARMOF = str_replace('ك','ڪٰྀہٰٰٖ',$ARMOF); 
$ARMOF = str_replace('م','مـ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظۗـہٰٰ',$ARMOF); 
$ARMOF = str_replace('ط','طۨہٰٰ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذِ',$ARMOF); 
$ARMOF = str_replace('د','دُ',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','وً',$ARMOF); 
 $ARMOF = str_replace('ى','ى',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}

if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){
  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','🅐',$text); 
$ARMOF = str_replace("b","🅑",$ARMOF); 
$ARMOF = str_replace("c","🅒",$ARMOF); 
$ARMOF = str_replace("d","🅓",$ARMOF); 
$ARMOF = str_replace("e","🅔",$ARMOF); 
$ARMOF = str_replace("f","🅕",$ARMOF); 
$ARMOF = str_replace("g","🅖",$ARMOF); 
$ARMOF = str_replace("h","🅗",$ARMOF); 
$ARMOF = str_replace("i","🅘",$ARMOF); 
$ARMOF = str_replace("j","🅙",$ARMOF); 
$ARMOF = str_replace("k","🅚",$ARMOF); 
$ARMOF = str_replace("l","🅛",$ARMOF); 
$ARMOF = str_replace("m","🅜",$ARMOF); 
$ARMOF = str_replace("n","🅝",$ARMOF); 
$ARMOF = str_replace("o","🅞",$ARMOF); 
$ARMOF = str_replace("p","🅟",$ARMOF); 
$ARMOF = str_replace("q","🅠",$ARMOF); 
$ARMOF = str_replace("r","🅡",$ARMOF); 
$ARMOF = str_replace("s","🅢",$ARMOF); 
$ARMOF = str_replace("t","🅣",$ARMOF); 
$ARMOF = str_replace("u"," 🅤",$ARMOF); 
$ARMOF = str_replace("v","🅥",$ARMOF); 
$ARMOF = str_replace("w","🅦",$ARMOF); 
$ARMOF = str_replace("x","🅧",$ARMOF); 
$ARMOF = str_replace("y","🅨",$ARMOF); 
$ARMOF = str_replace("z","🅩",$ARMOF); 
 
$ARMOF = str_replace('ض','ضً',$ARMOF); 
$ARMOF = str_replace('ص','صً',$ARMOF); 
$ARMOF = str_replace('ث','ثہ',$ARMOF); 
$ARMOF = str_replace('ق','قہً',$ARMOF); 
$ARMOF = str_replace('ف','فُہ',$ARMOF); 
$ARMOF = str_replace('غ','غہ',$ARMOF); 
$ARMOF = str_replace('ع','عہُ',$ARMOF); 
$ARMOF = str_replace('ه','ه',$ARMOF); 
$ARMOF = str_replace('خ','خہ',$ARMOF); 
$ARMOF = str_replace('ح','حہ',$ARMOF); 
$ARMOF = str_replace('ج','جہ',$ARMOF); 
$ARMOF = str_replace('ش','شہ',$ARMOF); 
$ARMOF = str_replace('س','سہ',$ARMOF); 
$ARMOF = str_replace('ي','يہ',$ARMOF); 
$ARMOF = str_replace('ب',' ٻً',$ARMOF);
$ARMOF = str_replace('ل','لہ',$ARMOF); 
$ARMOF = str_replace('ا',' ٳ',$ARMOF); 
$ARMOF = str_replace('ت','تہ',$ARMOF); 
$ARMOF = str_replace('ن','نٍ',$ARMOF); 
$ARMOF = str_replace('ك','كُہ',$ARMOF); 
$ARMOF = str_replace('م','مْ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظً',$ARMOF); 
$ARMOF = str_replace('ط','طہ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذً',$ARMOF); 
$ARMOF = str_replace('د','دِ',$ARMOF); 
$ARMOF = str_replace('ز','زً',$ARMOF); 
$ARMOF = str_replace('ر','ڒٍ',$ARMOF); 
$ARMOF = str_replace('و','وٌ',$ARMOF); 
 $ARMOF = str_replace('ى','ىّ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>$ARMOF."".$ARMOFi
]);}
if($text != '/start' and $text !='/admin' and $text !='الاعضاء' and  file_get_contents("zkref/$user_id/zeakef.txt") =='ARMOF0'){

  $ss = [' .𖤐', '༗.', '༗. ', '〞𓆪†', ' ༗.', ' .𖤐', '〞𓆪† ', '.𖤐‘',
                        ' 𓆩💗𓆪', '༗.', '〞𓆪†', '〞𓆪†', '.𖤐', '.𖤐',
                        '“̯ .𖤐', '.𖤐', '.𖤐', '𓆩💗𓆪‘', '༗.', '.𖤐', '.𖤐ۦ',
                        '〞𓆪†', '〞𓆪†', '𓆩💗𓆪', '〞𓆪†“ٰۦ', '℡ ̇༗.', '༗.',
                        '.𖤐', '༗.', '.𖤐', '.𖤐', ' 〞𓆪†', '༗.', '.𖤐'];
  $zz = array_rand($ss,1);
  $ARMOFi = $ss[$zz];
   $count = count($text); 
$ARMOF = str_replace('a','⎛α⎞',$text); 
$ARMOF = str_replace('b','⎛в⎞',$ARMOF); 
$ARMOF = str_replace('c','⎛c⎞',$ARMOF); 
$ARMOF = str_replace('d','⎛ɒ⎞',$ARMOF); 
$ARMOF = str_replace('e','⎛є⎞',$ARMOF); 
$ARMOF = str_replace('f','⎛f⎞',$ARMOF); 
$ARMOF = str_replace('g','⎛ɢ⎞',$ARMOF); 
$ARMOF = str_replace('h','⎛н⎞',$ARMOF); 
$ARMOF = str_replace('i','⎛ɪ⎞',$ARMOF); 
$ARMOF = str_replace('j','⎛ᴊ⎞',$ARMOF); 
$ARMOF = str_replace('k','⎛ĸ⎞',$ARMOF); 
$ARMOF = str_replace('l','⎛ℓ⎞',$ARMOF); 
$ARMOF = str_replace('m','⎛м⎞',$ARMOF); 
$ARMOF = str_replace('n','⎛и⎞',$ARMOF); 
$ARMOF = str_replace('o','⎛σ⎞',$ARMOF); 
$ARMOF = str_replace('p','⎛ρ⎞',$ARMOF); 
$ARMOF = str_replace('q','⎛q⎞',$ARMOF); 
$ARMOF = str_replace('r','⎛я⎞',$ARMOF); 
$ARMOF = str_replace('s','⎛s⎞',$ARMOF); 
$ARMOF = str_replace('t','⎛τ⎞ ',$ARMOF); 
$ARMOF = str_replace('u','⎛υ⎞ ',$ARMOF); 
$ARMOF = str_replace('v','⎛v⎞',$ARMOF); 
$ARMOF = str_replace('w','⎛ω⎞',$ARMOF); 
$ARMOF = str_replace('x','⎛x⎞',$ARMOF); 
$ARMOF = str_replace('y','⎛y⎞',$ARMOF); 
$ARMOF = str_replace('z','⎛z⎞',$ARMOF); 
 
$ARMOF = str_replace('ض','ضِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ص','صِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ث','ثِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ق','قِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ف','فِٰ͒ـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('غ','غِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ع','عِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ه','ۿۿہ',$ARMOF); 
$ARMOF = str_replace('خ','خِٰ̐ـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ح','حِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ج','جِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ش','شِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('س','سِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ي','يِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ب','بِٰـِﮧۢ',$ARMOF);
$ARMOF = str_replace('ل','لِٰـِﮧۢ',$ARMOF); 
$ARMOF = str_replace('ا','آ',$ARMOF); 
$ARMOF = str_replace('ت','تِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ن','نِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('م','مِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ك','ڪِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ة','ةً',$ARMOF); 
$ARMOF = str_replace('ء','ء',$ARMOF); 
$ARMOF = str_replace('ظ','ظِٰـﮧِۢ',$ARMOF); 
$ARMOF = str_replace('ط','طِٰـﮧِۢ',$ARMOF); 
 $ARMOF = str_replace('ذ','ذٰ',$ARMOF); 
$ARMOF = str_replace('د','د',$ARMOF); 
$ARMOF = str_replace('ز','ژ',$ARMOF); 
$ARMOF = str_replace('ر','رٰ',$ARMOF); 
$ARMOF = str_replace('و','ﯛ̲୭',$ARMOF); 
 $ARMOF = str_replace('ى','ىٍ',$ARMOF);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'parse_mode'=>"Markdown",
'text'=>$ARMOF."".$ARMOFi 
]);
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
"text"=>' - Y𝒐𝒖𝒓 𝒏𝒂𝒎𝒆 𝒉𝒂𝒔 𝒃𝒆𝒆𝒏 𝒅𝒆𝒄𝒐𝒓𝒂𝒕𝒆𝒅 𝒕𝒐 𝒚𝒐𝒖 𝒕𝒉𝒆 𝒓𝒆𝒔𝒕 𝒐𝒇 𝒕𝒉𝒆 𝒏𝒂𝒎𝒆𝒔 💞
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
- @F_PPP  ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'رجوع،' ,'callback_data'=>"back"]],
]])
]);
}
if($data=="back"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"11
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"زخرفة أسماء ¦🧸", 'callback_data'=>'ZARMOF']],
[['text'=>"بايوهات قنوات تلي¦🧸", 'callback_data'=>'bio']],
[['text'=>" رموز تمبلر ¦🧸", 'callback_data'=>'med'],['text'=>"نبذات جاهزة ¦🧸", 'callback_data'=>'mem']],
[['text'=>"أسماء جاهزة ¦🧸", 'callback_data'=>'mido']],
[['text'=>"المطور ¦🧸", 'callback_data'=>'dev'],['text'=>"قناتي ¦🧸",'url'=>'T.m/jeccc']],
]
])]);
}
unlink("zkref/$useree/zeakef.txt");
unlink("LOrDMeDo/$useree/LOrDdMeDo.txt");
}

/*aba-Zzz*//*@ARMOF*/
