<?php
/*
تم نشر الملف بواسطة
■□■□■□■□■□■□■□■□■
BY : @OO1OOO                                  □
BY : @RSAIED                                     ■
Channel : @TeamSyria                      □
Channel : @@TeamSyria                  ■
■□■□■□■□■□■□■□■□■
*/
ob_start();
define('API_KEY', '904220841:AAEh2yiJ4kO8ZELF16ANm0Q6FUySFi9pr7g' ); 
$gid = "-1001379506880"; 

function bot($method,$MustafaShihabs=[]){$BOT_SYRIA = http_build_query($MustafaShihabs);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$BOT_SYRIA";
$Mustafa_Shihab  = file_get_contents($url); return json_decode($Mustafa_Shihab );}



$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$mtext = $message->text;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");

$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;

$new_chat_members = $message->new_chat_member->id;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$inifo = description;

    if(stripos($mtext,"/start") !== false){
  $text = "الطقس والوقت والتاريخ في القناة ";
  $a=json_encode(bot(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$text,
   'reply_markup'=>json_encode([
   'inline_keyboard'=>[
   
          [['text'=>'Mustafa Shihab','url'=>'https://telegram.me/Andkuj']],
          
          [['text'=>'قناتنا عـ تيليجرام ','url'=>'https://telegram.me/teknoolugya']]
          
]
    ])
  ])));
}
       while(true){
       if(true){
$soat = date('H:i', strtotime('1 hour'));
$kun = date ('d.m.Y', strtotime('1 hour'));
$kun3 = date('N',strtotime('1 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$anb8 = file_get_contents('http://obhavo.uz/nukus'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/karakalpakstan/nukus/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[78]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr);
 $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr);
 $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr);
bot('setChatDescription',[
'chat_id'=>"@teknoologea", 
'description'=>"
📅 التاريخ اليوم : $kun
⏰ الساعة الآن : $soat
⛅ درجة الحرارة الآن : $obhavo °C
",
  ]);
}
     
  }
    
     while(true){
       $soat = date('H:i', strtotime('1 hour'));
       $kun = date ('d.m.Y', strtotime('1 hour'));
   $inifo = "⏰Soat: $soat\n📆Sana: $kun";
   bot('setChatDescription',[
'chat_id'=>$gid,
    'description'=>$inifo,
  ]);
     
  }

/*
■□■□■□■□■□■□■□■□■
BY : @OO1OOO                                  □
BY : @RSAIED                                     ■
Channel : @TeamSyria                      □
Channel : @@TeamSyria                  ■
■□■□■□■□■□■□■□■□■
*/

