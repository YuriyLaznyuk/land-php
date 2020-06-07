<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="МП МАРТА цветной металлопрокат и сплавы,
	купить в Киеве : медь, латунь, бронза, припой ПОС, алюминий, свинец, цинк, олово, никель, баббит">
    <meta name="keywords" content="цветной металлопрокат и сплавы,
	купить в Киеве , медь, латунь, бронза, припой ПОС, алюминий, свинец, цинк, олово, никель, баббит">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Super Marta">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="carusel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carusel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>МП КП МАРТА | контакты</title>
</head>
<header>
    <?php require_once 'header.php' ?>
    <div class="wrap-contacts">
        <div class="contacts-tel">
            <h3><img class="ico-adr" src="img/icon/Adress.jpg" alt="">г.
                Киев ул. Семьи Сосниных, 9-Б </h3>
            (Электротехнический завод)
            <div class="tel-namb"><img class="ico-tel" src="img/icon/Phone.jpg" alt="">
                <div class="tel">+38(044)599-11-44</div>
                <img class="ico-oper" src="img/icon/in.png" alt=""></div>
            <div class="tel-namb"><img class="ico-tel" src="img/icon/Phone.jpg" alt="">
                <div class="tel">+38(067)401-85-72</div>
                <img class="ico-oper" src="img/icon/ks.png" alt=""></div>
            <div class="tel-namb"><img class="ico-tel" src="img/icon/Phone.jpg" alt="">
                <div class="tel">+38(050)844-61-69</div>
                <img class="ico-oper" src="img/icon/vodaf.png" alt=""></div>
            <div class="tel-namb"><img class="ico-tel" src="img/icon/Phone.jpg" alt="">
                <div class="tel">+38(067)220-33-29</div>
                <img class="ico-oper" src="img/icon/ks.png" alt=""></div>
            <div class="tel-namb"><img class="ico-tel" src="img/icon/Phone.jpg" alt="">
                <div class="tel">+38(050)946-03-29</div>
                <img class="ico-oper" src="img/icon/vodaf.png" alt=""></div>
            <div class="tel-namb email"><img class="ico-tel" src="img/icon/email.jpg" alt="">marta2000@ukr.net</div>

        </div>

    </div>
    <section class="forma">

        <div class="forma-container">
            <form action="/contacts" method="post" class="form">
                <div class="form-input"><input type="text" name="email" placeholder="Email"></div>
                <div class="form-textare"><textarea name="message" placeholder="Message"></textarea></div>
                <div class="form-submit">
                    <button type="submit" name="submitbtn">ОТПРАВИТЬ</button>
                </div>
            </form>

            <?php
            //        print_r($_POST);
            $email = $_POST['email'];
            $message = $_POST['message'];
            $error = '';
            if (trim($email) == '') {
                $error = 'Введите email';
            } elseif (trim($message) == '') {
                $error = 'Введите message';
            } elseif (strlen($message) < 10) {
                $error = 'Сообщение должно быть больше 10 символов';
            }
            if ($error != '') {
//    echo $error;
//            exit;
            }
            $subject = "=?utf-8?B?" . base64_encode('Сообщение') . "?=";
            $headers = "From:$email\r\nReply-to: $email\r\nContent-type:text/html;charset=utf-8\r\n";
            mail('martametals@gmail.com', $subject, $message, $headers);
            //        header('Location: /form.php');
            ?>

            <!--        <div class="inf">--><?php //echo  $error?><!--</div>-->
        </div>

    </section>


    <div class="contacts-map">
        <!--        <img src="img/map.png" alt="map">-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.028389154282!2d30.39591331554597!3d50.42194269729994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cbf270b03ff3%3A0x8a7d5abd981142ed!2z0YPQuy4g0KHQtdC80YzQuCDQodC-0YHQvdC40L3Ri9GFLCA5LCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1591273729908!5m2!1sru!2sua"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
    </div>

    <?php require_once 'footer.php' ?>
