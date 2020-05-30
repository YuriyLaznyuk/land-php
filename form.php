<?php require_once 'header.php'?>
<section class="forma">
    <div class="forma-container">
<form action="/form" method="post" class="form">
   <div class="form-input"><input type="text" name="email" placeholder="Email"></div>
    <div class="form-textare"><textarea name="message"></textarea></div>
    <div class="form-submit"><button type="submit" name="submitbtn">SEND</button></div>
</form>

        <?php
//        print_r($_POST);
        $email=$_POST['email'];
        $message=$_POST['message'];
        $error='';
        if(trim($email)==''){
            $error='Введите email';
        }
        elseif (trim($message)==''){
            $error='Введите message';
        }
        elseif (strlen($message)<10){
            $error='Сообщение должно быть больше 10 символов';
        }
        if($error!=''){
//    echo $error;
//            exit;
        }
        $subject="=?utf-8?B?".base64_encode('Сообщение')."?=";
        $headers="From:$email\r\nReply-to: $email\r\nContent-type:text/html;charset=utf-8\r\n";
        mail('marta2000@ukr.net',$subject, $message, $headers);
//        header('Location: /form.php');
        ?>

        <div class="inf"><?php echo  $error?></div>
    </div>

</section>
<?php require_once  'footer.php'?>
