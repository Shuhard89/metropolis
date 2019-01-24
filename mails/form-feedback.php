<?php
    $to = 'shuhard89@gmail.com';

    $subject = 'Метрополіс - заявка';

    $headers = "From: Метрополіс\r\n";
    $headers .= "Reply-To: Метрополоіс\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #eee; border-radius: 2px; margin: 10px;" cellpadding="10">';
    $message .= "<tr><td style='background: #12284C; color: #fff; border-radius: 2px; padding: 15px 20px; font-size: 15px;' colspan='2'><strong>Метрополіс - заявка</strong></td></tr>";
    $message .= "<tr style='background: #fefefe;'><td><strong>Ім'я</strong> </td><td>" . strip_tags($_POST['client-name']) . "</td></tr>";
    $message .= "<tr style='background: #fefefe;'><td><strong>Телефон</strong> </td><td>" . strip_tags($_POST['client-phone']) . "</td></tr>";
    $message .= "<tr style='background: #fefefe;'><td><strong>Повідомлення</strong> </td><td>" . strip_tags($_POST['client-mssg']) . "</td></tr>";         
    $message .= "</table>";
    $message .= '</body></html>';
                
    if ( $_POST["required"] == '' ){
                $sentMail = @mail($to, $subject, $message, $headers);
            }
?>