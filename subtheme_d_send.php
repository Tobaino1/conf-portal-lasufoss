<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 8/28/2019
 * Time: 1:30 PM
 */
?>
<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "temitayo.adewuyi@lasufoss.com";
//$webmaster_email = "temitayo.adewuyi@lasu.edu.ng";
//subtheme d email address


/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$feedback_page = "subthemed.html";
$error_page = "error_message.html";
$thankyou_page = "thank_you_subthemeabcde.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['email_address'];
$comments = $_REQUEST['comments'];
$first_name = $_REQUEST['first_name'];
$msg =
    "Name of Author: " . $first_name . "\r\n" .
    "Email: " . $email_address . "\r\n" .
    "Abstract: " . $comments;

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str)
{
    $injections = array('(\n+)',
        '(\r+)',
        '(\t+)',
        '(%0A+)',
        '(%0D+)',
        '(%08+)',
        '(%09+)'
    );
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    if (preg_match($inject, $str)) {
        return true;
    } else {
        return false;
    }
}

// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_REQUEST['email_address'])) {
    header("Location: $feedback_page");
} // If the form fields are empty, redirect to the error page.
elseif (empty($first_name) || empty($email_address)) {
    header("Location: $error_page");
} /*
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
*/
elseif (isInjected($email_address) || isInjected($first_name) || isInjected($comments)) {
    header("Location: $error_page");
} // If we passed all previous tests, send the email then redirect to the thank you page.
else {

    mail("$webmaster_email", "Abstract", $msg);

    header("Location: $thankyou_page");
}
?>
