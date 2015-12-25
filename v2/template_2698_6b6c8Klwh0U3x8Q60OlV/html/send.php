<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>Untitled Document</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css"><!--

body,td,th {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: 10px;

	color: #FFFFFF;

}

body {

	background-color: #101415;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}

.style2 {

	font-family: 'Verdana Ref', sans-serif;

	font-size: x-small;

}

--></style>

</head>

<body>
<?
if(empty($_POST['privatepolicy'])) {
die('Error : You didnt Accept! Please go back');
}
if(empty($_POST['termsofservice'])) {
die('Error : You didnt Accept! Please go back');
}
if(empty($_POST['legalinfo'])) {
die('Error : You didnt Accept! Please go back');
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$paymenttype = $_POST['paymenttype'];
$paypalemail = $_POST['paypalemail'];
$servername = $_POST['servername'];
$serverlocation = $_POST['serverlocation'];
$startmap = $_POST['startmap'];
$rconpassword = $_POST['rconpassword'];
$serverpassword = $_POST['serverpassword'];
$controlusername = $_POST['controlusername'];
$controlpassword = $_POST['controlpassword'];
$gametype = $_POST['gametype'];
$mods = $_POST['mods'];
$slots = $_POST['slots'];
$stype = $_POST['stype'];
?><?
/* recipients */
$to  = "accountsetup@networkgenerations.net" . ", " ; // note the comma
$to .= "tacticalazn@gmail.com";

/* subject */
$subject = "Server Setup";

/* message */
$message = "<table width=100% border=0>
  <tbody>
    <tr> 
      <td width=27%>Full Name: </td>
      <td width=73%> ". $name ."</td>
    </tr>
    <tr> 
      <td>Email Address: </td>
      <td> ". $email ."
      </td>
    </tr>
    <tr> 
      <td>Phone: </td>
      <td> ". $phone ."
      </td>
    </tr>
    <tr> 
      <td>Address: </td>
      <td> ". $address ."
      </td>
    </tr>
    <tr> 
      <td>City: </td>
      <td> ". $city ."
      </td>
    </tr>
    <tr> 
      <td>State: </td>
      <td> ". $state ."
      </td>
    </tr>
    <tr> 
      <td>Zip Code: </td>
      <td> ". $zipcode ."
      </td>
    </tr>
    <tr> 
      <td>Payment Type: </td>
      <td> ". $paymenttype ."
      </td>
    </tr>
    <tr> 
      <td>Paypal Email Address: </td>
      <td> ". $paypalemail ."
      </td>
    </tr>
  <tbody>
    <tr> 
      <td>Server Name:</td>
      <td> ". $servername ."
      </td>
    </tr>
    <tr> 
      <td>Server Location: </td>
      <td> ". $serverlocation ."
      </td>
    </tr>
    <tr> 
      <td>Starting Map: </td>
      <td> ". $startmap ."
      </td>
    </tr>
    <tr> 
      <td>Rcon Password: </td>
      <td> ". $rconpassword ."
      </td>
    </tr>
    <tr> 
      <td>Server Password: </td>
      <td> ". $serverpassword ."
      </td>
    </tr>
    <tr> 
      <td>FTP / Cpanel Username: </td>
      <td> ". $controlusername ."
      </td>
    </tr>
    <tr> 
      <td>FTP / Cpanel Password: </td>
      <td> ". $controlpassword ."
      </td>
    </tr>
    <tr> 
      <td>Game Type: </td>
      <td> ". $gametype ."
      </td>
    </tr>
    <tr> 
      <td>Modulations:</td>
      <td> ". $mods ."
      </td>
    </tr>
    <tr> 
      <td>Slots: </td>
      <td> ". $slots ."</td>
    </tr>
    <tr> 
      <td>Type: </td>
      <td> ". $stype ." </td>
    </tr>
  </tbody>
</table>
";

/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "To: Sales <accountsetup@networkgenerations.net>, Steve <tacticalazn@gmail.com>\r\n";
$headers .= "From: Website < $email >\r\n";
$headers .= "Cc: accountsetup@networkgenerations.net\r\n";
$headers .= "Bcc: tacticalazn@gmail.com\r\n";

/* and now mail it */
mail($to, $subject, $message, $headers);
?> 
Your Information :
<table width=100% border=0>
  <tbody>
    <tr> 
      <td width="27%">Full Name: </td>
      <td width="73%"><?= $name; ?></td>
    </tr>
    <tr> 
      <td>Email Address: </td>
      <td>
        <?= $email; ?>
      </td>
    </tr>
    <tr> 
      <td>Phone: </td>
      <td>
        <?= $phone; ?>
      </td>
    </tr>
    <tr> 
      <td>Address: </td>
      <td>
        <?= $address; ?>
      </td>
    </tr>
    <tr> 
      <td>City: </td>
      <td>
        <?= $city; ?>
      </td>
    </tr>
    <tr> 
      <td>State: </td>
      <td>
        <?= $state; ?>
      </td>
    </tr>
    <tr> 
      <td>Zip Code: </td>
      <td>
        <?= $zipcode; ?>
      </td>
    </tr>
    <tr> 
      <td>Payment Type: </td>
      <td>
        <?= $paymenttype; ?>
      </td>
    </tr>
    <tr> 
      <td>Paypal Email Address: </td>
      <td>
        <?= $paypalemail; ?>
      </td>
    </tr>
  <tbody>
    <tr> 
      <td>Server Name:</td>
      <td>
        <?= $servername; ?>
      </td>
    </tr>
    <tr> 
      <td>Server Location: </td>
      <td>
        <?= $serverlocation; ?>
      </td>
    </tr>
    <tr> 
      <td>Starting Map: </td>
      <td>
        <?= $startmap; ?>
      </td>
    </tr>
    <tr> 
      <td>Rcon Password: </td>
      <td>
        <?= $rconpassword; ?>
      </td>
    </tr>
    <tr> 
      <td>Server Password: </td>
      <td>
        <?= $serverpassword; ?>
      </td>
    </tr>
    <tr> 
      <td>FTP / Cpanel Username: </td>
      <td>
        <?= $controlusername; ?>
      </td>
    </tr>
    <tr> 
      <td>FTP / Cpanel Password: </td>
      <td>
        <?= $controlpassword; ?>
      </td>
    </tr>
    <tr> 
      <td>Game Type: </td>
      <td>
        <?= $gametype; ?>
      </td>
    </tr>
    <tr> 
      <td>Modulations:</td>
      <td>
        <?= $mods; ?>
      </td>
    </tr>
    <tr> 
      <td>Slots: </td>
      <td> <div>
          <?= $slots; ?>
        </div></td>
    </tr>
    <tr> 
      <td>Type: </td>
      <td> <div>
          <?= $stype; ?>
        </div></td>
    </tr>
  </tbody>
</table>
<br>
This has been forwared to our sales department and you will recive a notice shortly on payment. <br>
Thanks for dealing with Network Generations.
<p style="line-height: 100%; text-align: justify;"> 
</body>

</html>