<?php
 /* Здесь проверяется существование переменных */
if (isset($_POST['name'])) {$name = $_POST['name'];}// имя
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}//эмаил
if (isset($_POST['text'])) {$text = $_POST['text'];}//Текст
$address = "123131@gmail.com"; // На какую почту отправлять
$mes = "\nИмя: $name\Эмаил: $phone\Текст: $text";
$sub='Новый заказ!!! ЗАРЯДКА КУБ'; //сабж
$email="Какой-то там сайт.com.ua"; // от кого
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
ini_set('short_open_tag', 'On');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width,initial-scale=1'>
  <base href="meldonium/">
  <link rel="shortcut icon" href="assets/thankyou-favicon.ico">
  <title>Ваша заявка принята</title>
  <style>
    body{margin: 0;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;line-height: 1.5;background-color: rgb(238, 241, 243);}
    .thankyou{overflow: hidden;box-sizing: border-box;min-height: 100vh;background: url(assets/thankyou-bg.jpg) center bottom no-repeat #fdfdff;text-align: center;position: relative;padding: 10px;font-size: 16px;}
    .thankyou__title{color: rgb(10, 161, 80);font-size: 36px;}
    .thankyou__title--error{color: #da0000;}
    .thankyou__divider{max-width: 100%;}
    .thankyou__image{position: absolute;bottom: 0;left: 5%;}
    .thankyou__notice{font-size: 13px;}
    /*.thankyou--full{min-height: 100vh;}*/
    .button{background: transparent linear-gradient(to bottom, rgb(13, 181, 57) 0%, rgb(0, 144, 67) 100%) repeat scroll 0 0;border: none;border-bottom: 2px solid rgb(21, 90, 53);outline: 0 none;padding: 15px 25px;text-transform: uppercase;color: #fff;font-weight: bold;border-radius: 4px;cursor: pointer;}
    .button:hover{-webkit-transform: translateY(-1px);-moz-transform: translateY(-1px);-ms-transform: translateY(-1px);-o-transform: translateY(-1px);transform: translateY(-1px);}
    .button--added{background: transparent linear-gradient(to bottom, rgb(234, 179, 13) 0%, rgb(236, 129, 13) 100%) repeat scroll 0 0;border-bottom: 2px solid rgb(180, 80, 11);}
    .offer{text-transform: uppercase;background: url(assets/thankyou-offerbg.jpg) repeat;color: #fff;padding: 20px 10px;text-align: center;}
    .upsell{margin: 50px auto;width: 92%;max-width: 800px;display: flex;background-color: #fff;border-bottom: 2px solid rgb(222, 225, 227);border-radius: 2px;padding: 10px;color: rgba(0, 0, 0, .8);position: relative;}
    .upsell__text{flex-basis: 50%;max-width:50%;display: flex;flex-direction: column;justify-content: space-between;padding: 10px;}
    .upsell__title{margin: 0;font-weight: normal;font-size: 28px;line-height: 1.2;}
    .upsell__rating{display: block;margin: 10px 0;}
    .upsell__old-price{font-size: 20px;display: inline-block;margin-right: 10px;}
    .upsell__new-price{font-size: 32px;color: rgb(10, 161, 80);}
    .upsell__description{white-space: pre-wrap;word-wrap: break-word;}
    .upsell__image-container{flex-basis: 50%;padding: 10px;}
    .upsell__image{width: 100%;}
    .upsell__discount{background: url(assets/thankyou-sale.png) center no-repeat;width: 109px;height: 43px;position: absolute;left: -10px;top: 20px;color: #fff;font-weight: bold;font-size: 22px;box-sizing: border-box;display: block;padding-left: 10px;line-height: 34px;}
    @media all and (max-width: 600px) {
      .thankyou__title{font-size: 30px;}
      .upsell{flex-wrap: wrap;width: 87%;}
      .upsell__text{flex-basis: 100%; max-width:100%;}
      .upsell__title, .upsell__price {text-align: center;}
      .upsell__rating{margin-left: auto;margin-right: auto;}
      .upsell__image-container{flex-basis: 100%;}
      .upsell__button-container{text-align: center;}
      .thankyou__image{display: none;}
      .thankyou--full .thankyou__image{display: inline;}
    }
    @media all and (max-height: 500px) {
      .thankyou__image{width: 130px;height: auto;}
    }
  </style>
</head>
<body>
<main>
  <div class='thankyou'>

    <h1 class="thankyou__title">Спасибо, заявка принята!</h1>
    <p>
      Оператор свяжется с Вами в ближайшее время.
    </p>
    <img class="thankyou__divider" src="assets/thankyou-divider.png">
    <p class="thankyou__notice">Если вы допустили ошибку, вернитесь на страницу заказа и отправьте форму еще раз</p>

    <button class=" button thankyou__button" onclick="history.go(-1);">Вернуться</button>
    <img class="thankyou__image" src="assets/thankyou-girl.png">
  </div>

</main>
</body>
</html>