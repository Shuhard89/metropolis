<?php
    $to = 'shuhard89@gmail.com';

    $subject = 'Заявка на консультацию - Metropolis';

    $headers = "From: metropolis.com.ua\r\n";
    $headers .= "Reply-To: metropolis.com.ua\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #eee; border-radius: 2px; margin: 10px;" cellpadding="10">';
    $message .= "<tr><td style='background: #404041; color: #fff; border-radius: 2px; padding: 15px 20px; font-size: 15px;' colspan='2'><strong>Заявка на консультацию - Metropolis</strong></td></tr>";
    $message .= "<tr style='background: #fefefe;'><td><strong>Источник</strong> </td><td>" . $_SERVER['HTTP_REFERER'] . "</td></tr>";
    if ( isset($_POST['user-name']) ) {
        $message .= "<tr style='background: #fefefe;'><td><strong>Имя</strong> </td><td>" . strip_tags($_POST['user-name']) . "</td></tr>";
    }
    if ( isset($_POST['user-tel']) ) {
        $message .= "<tr style='background: #fefefe;'><td><strong>Телефон</strong> </td><td>" . strip_tags($_POST['user-tel']) . "</td></tr>";
    }
    if ( isset($_POST['user-email']) ) {
        $message .= "<tr style='background: #fefefe;'><td><strong>Email</strong> </td><td>" . strip_tags($_POST['user-email']) . "</td></tr>";
    }
    $message .= "</table>";
    $message .= '</body></html>';

    mail($to, $subject, $message, $headers);
    
?>