<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/api/libs/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/libs/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/api/libs/PHPMailer/src/SMTP.php';




function send_confirm_email($email, $ref_code)
{
    $domain = $_SERVER['HTTP_HOST'];
    $domain_info = get_info_domain($domain);
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';

    $subject = "Confirm registration";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    $mail->Host = $domain_info['stmp_host'];
    $mail->Port = 465;
    $mail->Username = $domain_info['stmp_email'];
    $mail->Password = $domain_info['stmp_password'];
    $title = $domain_info['title'];
    $mail->setFrom($domain_info['stmp_email'], $title);


    $mail->addAddress($email, $title);


    $mail->Subject = $subject;

    $body = '<table border="0"  height="100%" style="max-width:600px;  margin: auto;  max-height: 960px;width:100%; height:100%; "
    background="https://i.ibb.co/Fqywt5N/Group-61.png" cellpadding="0" cellspacing="0" style="margin:0; padding:0">

    <tr>
        <td>
            <center>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 64px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    ">
                        '.$title.'
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 12px;font-style: normal;font-weight: 300;line-height: normal;">
                        YOUR EXPERIENCE IS VERY IMPORTANT
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 32px;font-style: normal;font-weight: 600;line-height: normal;">
                        Welcome to the innovative<br> crypto platform of the future
                    </td>
                </table>
                <table height="50px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        Thank you for registering with '.$title.'.<br>
                        Please follow the <a style="color: #FFF;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: 300;
line-height: normal;
text-decoration-line: underline;">link</a> or click the button below to confirm your registration.
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td>
                        <a href="http://'.$domain.'/api/ajax/confirm_email.php?ref_code='.$ref_code.'" style="border-radius: 10px;
                        background: #30ACFF; padding: 10px 100px; 
                        color: #FFF;
text-align: center;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: 900;
text-decoration: none;
line-height: normal;
                        " width="50%">CONFIRM</a>
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="10px">
                    <td>
                    </td>
                </table>
                <table >
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        You received this email because your mailing address was <br>
provided when you registered at '.$domain.'
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
            </center>
        </td>

    </tr>


</table>';
    $mail->msgHTML($body);



    $mail->send();
}

function send_active_2fa($email, $code)
{
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $domain = $_SERVER['HTTP_HOST'];
    $domain_info = get_info_domain($domain);
    $subject = "Confirm code for activation 2FA";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    $mail->Host = $domain_info['stmp_host'];
    $mail->Port = 465;
    $mail->Username = $domain_info['stmp_email'];
    $mail->Password = $domain_info['stmp_password'];
    $title = $domain_info['title'];
    $mail->setFrom($domain_info['stmp_email'], $title);


    $mail->addAddress($email, $title);


    $mail->Subject = $subject;

    $body = '<table border="0" height="100%" style="max-width:600px;  margin: auto;  max-height: 960px;width:100%; height:100%; "
    background="https://i.ibb.co/Fqywt5N/Group-61.png" cellpadding="0" cellspacing="0" style="margin:0; padding:0">

    <tr>
        <td>
            <center>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 64px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    ">
                        '.$title.'
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 12px;font-style: normal;font-weight: 300;line-height: normal;">
                        YOUR EXPERIENCE IS VERY IMPORTANT
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 32px;font-style: normal;font-weight: 600;line-height: normal;">
                        Welcome to the innovative<br> crypto platform of the future
                    </td>
                </table>
                <table height="50px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        Your confirmation code: <b>'.$code.'</b>
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td>
                        <a style="border-radius: 10px;
                        background: #30ACFF; padding: 10px 100px; 
                        color: #FFF;
text-align: center;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: 900;
text-decoration: none;
line-height: normal;
                        " width="50%">GO BACK</a>
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="10px">
                    <td>
                    </td>
                </table>
                <table >
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        You received this email because your mailing address was <br>
provided when you registered at '.$domain.'
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
            </center>
        </td>

    </tr>


</table>';
    $mail->msgHTML($body);


    $mail->send();
}

function send_reset_password($email, $code, $user_id)
{
    $domain_titleINIT = get_domain_title();
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';

    $subject = "Reset password for account";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'jopik2424@gmail.com';
    $mail->Password = 'vjfm hrxj gghw xniw';

    $mail->setFrom('mail@snipp.ru', 'Snipp.ru');


    $mail->addAddress($email, $domain_titleINIT);


    $mail->Subject = $subject;

    $body = '<table border="0" height="100%" style="max-width:600px;margin: auto;    max-height: 960px;width:100%; height:100%; "
    background="https://i.ibb.co/Fqywt5N/Group-61.png" cellpadding="0" cellspacing="0" style="margin:0; padding:0">

    <tr>
        <td>
            <center>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 64px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    ">
                        '.$domain_titleINIT.'
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 12px;font-style: normal;font-weight: 300;line-height: normal;">
                        YOUR EXPERIENCE IS VERY IMPORTANT
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 32px;font-style: normal;font-weight: 600;line-height: normal;">
                        Welcome to the innovative<br> crypto platform of the future
                    </td>
                </table>
                <table height="50px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        Your request for password recovery has been accepted!<br> To change your password for your user@gmail.com account,<br> please follow the <a style="color: #FFF;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: 300;
line-height: normal;
text-decoration-line: underline;">link</a> or click the button below.
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td>
                        <a href="https://'.$_SERVER['HTTP_HOST'].'/change-password?code='.$code.'&user_id='.$user_id.'" style="border-radius: 10px;
                        background: #30ACFF; padding: 10px 100px; 
                        color: #FFF;
text-align: center;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
text-decoration: none;
font-weight: 900;
line-height: normal;
                        " width="50%">Reset password</a>
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="10px">
                    <td>
                    </td>
                </table>
                <table >
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        You received this email because your mailing address was <br>
provided when you registered at '.$domain_titleINIT.'
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
            </center>
        </td>

    </tr>


</table>';
    $mail->msgHTML($body);


    $mail->send();
    
}

function confirm_login_from_account()
{
    $mail = new PHPMailer;
    $mail->CharSet = 'UTF-8';
    $domain_titleINIT = get_domain_title();
    $subject = "Confirm login from account";
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPDebug = 0;

    $mail->Host = 'ssl://smtp.gmail.com';
    $mail->Port = 465;
    $mail->Username = 'Логин';
    $mail->Password = 'Пароль';

    $mail->setFrom('mail@snipp.ru', 'Snipp.ru');


    $mail->addAddress('mail@site.com', 'Иван Петров');


    $mail->Subject = $subject;

    $body = '<table border="0" height="100%" style="max-width:600px;  margin: auto;  max-height: 960px;width:100%; height:100%; "
    background="https://i.ibb.co/Fqywt5N/Group-61.png" cellpadding="0" cellspacing="0" style="margin:0; padding:0">

    <tr>
        <td>
            <center>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 64px;
                    font-style: normal;
                    font-weight: 700;
                    line-height: normal;
                    ">
                        '.$domain_titleINIT.'
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 12px;font-style: normal;font-weight: 300;line-height: normal;">
                        YOUR EXPERIENCE IS VERY IMPORTANT
                    </td>
                </table>
                <table>
                    <td
                        style="color: #FFF;text-align: center;font-family: Tahoma, Geneva, sans-serif;font-size: 32px;font-style: normal;font-weight: 600;line-height: normal;">
                        Welcome to the innovative<br> crypto platform of the future
                    </td>
                </table>
                <table height="50px">
                    <td>
                    </td>
                </table>
                <table>
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        Confirm login from your user@gmail.com account at 
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table>
                    <td>
                        <a style="border-radius: 10px;
                        background: #30ACFF; padding: 10px 100px; 
                        color: #FFF;
text-align: center;
font-family: Tahoma, Geneva, sans-serif;
font-size: 15px;
font-style: normal;
font-weight: 900;
text-decoration: none;
line-height: normal;
                        " width="50%">CONFIRM</a>
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
                <table style="width: 70%; height: 1px;" >
                    <td  >
                    <hr height="1px">
                    </td>
                </table>
                <table height="10px">
                    <td>
                    </td>
                </table>
                <table >
                    <td style="color: #FFF;
                    text-align: center;
                    font-family: Tahoma, Geneva, sans-serif;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 300;
                    line-height: normal;">
                        You received this email because your mailing address was <br>
provided when you registered at '.$domain_titleINIT.'
                    </td>
                </table>
                <table height="100px">
                    <td>
                    </td>
                </table>
            </center>
        </td>

    </tr>


</table>';
    $mail->msgHTML($body);



    $mail->send();
}
