<?php
$to = 'info@ivanna.zp.ua'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$headers = "From: noreply@ivanna.zp.ua\n";
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$headers .= "Reply-To: $email_address";


if($_POST['form_type'] == 3){
	if(
   empty($_POST['email'])     ||
      !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }


$email_subject = "subscription form";
$email_body = "You have received a new message from your website subscription form.\n\n"."Here are the details:\n\nEmail: $email_address";
}elseif($_POST['form_type'] == 2){
		if(
	empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

}else {
    if (
        empty($_POST['name']) ||
        empty($_POST['email']) ||
        empty($_POST['phone']) ||
        empty($_POST['time']) ||
        empty($_POST['date']) ||
        !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "No arguments Provided!";
        return false;
    }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email_address = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $time = strip_tags(htmlspecialchars($_POST['time']));
    $date = strip_tags(htmlspecialchars($_POST['date']));

   $email_subject = "Website Contact Form:  $name";
   $email_body = "You have received a new message from your website contact form.\n\n" .  "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";


// ==================================
    $array = array(
        "1000" => "* ПАРИКМАХЕРСКИЕ УСЛУГИ&nbsp;&gt; ДЛЯ МУЖЧИН *",
        "1001" => "стрижка • 50-120 грн",
        "1002" => "окрашивание • от 150 грн",
        "1003" => "окрашивание бороды • от 100 грн",
        "1004" => "стрижка бороды • 50-100 грн",
        "1005" => "* НОГТЕВОЙ СЕРВИС&nbsp;&gt; ДЛЯ МУЖЧИН *",
        "1006" => "маникюр • 110 грн",
        "1007" => "педикюр • 150-200 грн",
        "1008" => "* ЭСТЕТИЧЕСКАЯ КОСМЕТОЛОГИЯ&nbsp;&gt; ДЛЯ МУЖЧИН *",
        "1009" => "Чистка лица • 400-600 грн",
        "1010" => "* МАССАЖ&nbsp;&gt; ДЛЯ МУЖЧИН *",
        "1011" => "шейно-воротниковая зона - 25 мин • 90 грн",
        "1012" => "массаж спины - 40 мин • 140 грн",
        "1013" => "общий массаж - 60 мин • 200 грн",
        "1014" => "стоун массаж спины - 60 мин • 250 грн",
        "1015" => "стоун массаж общий - 90 мин • 400 грн",
        "1016" => "* КОНСУЛЬТАЦИЯ ВРАЧЕЙ &gt; ДЛЯ МУЖЧИН - 30 МИНУТ *",
        "1017" => "дерматолог • 250 грн",
        "1018" => "трихолог • 300 грн",
        "1019" => "эндокринолог • 140 грн",
        "1020" => "кардиолог • 140 грн",
        "1021" => "психолог • 350 грн",
        "1022" => "* ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ &gt; ДЛЯ МУЖЧИН *",
        "1023" => "удаление папиллом • 15-50 грн",
        "1024" => "удаление бородавок • 15-50 грн",
        "2000" => "* ПАРИКМАХЕРСКИЕ УСЛУГИ &gt; ДЛЯ ЖЕНЩИН *",
        "2001" => "стрижка • 120-200 грн",
        "2002" => "полировка волос • 150-250 грн",
        "2003" => "термокератин • 180-500 грн&nbsp",
        "2004" => "укладка • 150-500 грн",
        "2005" => "прическа • 300-700 грн",
        "2006" => "окрашивание • от 300 грн",
        "2007" => "кератиновое выпрямление • от 1000 грн",
        "2008" => "моделирование бровей • от 40 грн",
        "2009" => "окрашивание бровей • от 45 грн",
        "2010" => "* НОГТЕВОЙ СЕРВИС &gt; ДЛЯ ЖЕНЩИН *",
        "2011" => "маникюр • 90-110 грн&nbsp",
        "2012" => "покрытие гель-лаком • от 100 грн",
        "2013" => "педикюр • 150-170 грн",
        "2014" => "* ЛАЗЕРНАЯ ЭПИЛЯЦИЯ &gt; ДЛЯ ЖЕНЩИН  *",
        "2015" => "подмышки • 350 грн",
        "2016" => "голень • 700 грн",
        "2017" => "бикини глубокое • 550 грн",
        "2018" => "* ЭСТЕТИЧЕСКАЯ  КОСМЕТОЛОГИЯ &gt; ДЛЯ ЖЕНЩИН *",
        "2019" => "чистка лица • 400-600 грн",
        "2020" => "экспресс-уход • 300 грн",
        "2021" => "массаж лица • 450 грн",
        "2022" => "миндальный пилинг • 350 грн",
        "2023" => "энзимный пилинг • 350 грн",
        "2024" => "карбокситерапия&nbsp;• 600 грн",
        "2025" => "* ЛАЗЕРНОЕ УДАЛЕНИЕ ТАТУ &gt; ДЛЯ ЖЕНЩИН *",
        "2026" => "глаза, брови, губы • от 400 грн",
        "2027" => "татуировка - 1 выстрел • 2.50 грн",
        "2028" => "* МАССАЖ &gt; ДЛЯ ЖЕНЩИН *",
        "2029" => "шейно-воротниковая зона - 25 мин • 90 грн",
        "2030" => "классический массаж спины - 40 мин • 140 грн",
        "2031" => "классический общий массаж - 60 мин • 200 грн",
        "2032" => "фитнес-массаж живота - 30 мин • 100 грн",
        "2033" => "антицеллюлитный массаж - 60-90 мин • от 220 грн",
        "2034" => "стоун массаж спины - 60-90 мин • от 250 грн",
        "2035" => "* ВАКСИНГ &gt; ДЛЯ ЖЕНЩИН *",
        "2036" => "подмышки • 80 грн",
        "2037" => "голень • 70 грн",
        "2038" => "бикини глубокое • 150 грн",
        "2039" => "* ШУГАРИНГ &gt; ДЛЯ ЖЕНЩИН *",
        "2040" => "подмышки • 80 грн&nbsp",
        "2041" => "голень • 170 грн",
        "2042" => "бикини глубокое • 210 грн",
        "2043" => "* КОНСУЛЬТАЦИЯ ВРАЧЕЙ &gt; ДЛЯ ЖЕНЩИН - 30 МИНУТ *",
        "2044" => "дерматолог • 250 грн",
        "2045" => "трихолог • 300 грн",
        "2046" => "эндокринолог • 140 грн",
        "2047" => "кардиолог • 140 грн",
        "2048" => "психолог • 350 грн&nbsp",
        "2049" => "* ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ &gt; ДЛЯ ЖЕНЩИН *" ,
        "2050" => "макияж • 300-400 грн",
        "2051" => "пирсинг • 200 грн",
        "2052" => "татуаж • 1000 грн",
        "2053" => "ламинирование ресниц • 450 грн",
        "2054" => "инъекционная косметология • от 2500 грн",
        "2055" => "удаление папиллом • 15-50 грн",
        "2056" => "удаление бородавок • 15-50 грн",
        "3000" => "* ПАРИКМАХЕРСКИЕ УСЛУГИ &gt; ДЕВОЧКИ &gt; ДО 10 ЛЕТ *",
        "3001" => "чëлка • 30 грн",
        "3002" => "стрижка кончиков • 50 грн",
        "3003" => "стрижка • 60-80 грн",
        "3004" => "укладка • 100-200 грн",
        "3005" => "причëска • 200-400 грн",
        "3006" => "* ПАРИКМАХЕРСКИЕ УСЛУГИ &gt; МАЛЬЧИКИ &gt; ДО 10 ЛЕТ *",
        "3007" => "cтрижка классическая • 50 грн",
        "3008" => "стрижка ножницами • 60 грн",
        "3009" => "стрижка модельная • 70-120 грн",
        "3010" => "* ДЕТСКИЙ МАССАЖ &gt; ДО 5 ЛЕТ *",
        "3011" => "профилактический массаж • 100-140 грн",
        "3012" => "реабилитационный массаж • 130-200 грн",
        "3013" => "* КОНСУЛЬТАЦИЯ ВРАЧЕЙ &gt; ДЛЯ ДЕТЕЙ - 30 МИНУТ *",
        "3014" => "дерматолог • 250 грн",
        "3015" => "трихолог • 300 грн",
        "3016" => "эндокринолог • 140 грн",
        "3017" => "психолог • 350 грн",
        "3018" => "удаление папиллом • 15-50 грн",
        "3019" => "удаление бородавок • 15-50 грн",



    );

    if (!empty($_POST['face'])) {
        foreach ($_POST['face'] as $item) {
            foreach ($array as $key => $value) {
                if ($item == $key) {
                    $details[] = $value;
                }
            }
        }
    }

// ==================================

    $email_subject = "Online Appointment Form:  $name";
    $email_body = "You have received a new order from your website online appointment form.\n\n" . "Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\ntime: $time\n\nDate: $date";
    foreach ($details as $item) {
        $email_body .= "\n\nDetails: $item";
    }


}

mail($to,$email_subject,$email_body,$headers);

echo '
<form id="myform" action="/" method="post"
<input type="hidden" name="success" value="success" />
<script>
 document.getElementById("myform").submit();
</script>
</form>
';
return true;
?>
