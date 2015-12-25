
<style type="text/css">
<!--
body,td,th {
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
body {
	background-color: #FFFFFF;
}
-->
</style><?
$accept1 = $_POST['privatepolicy'];
$accept2 = $_POST['termsofservice'];
$accept3 = $_POST['legalinfo'];
if(empty($accept1)){
echo "Error Private Policy Not Accepted : Must Accept befor we can procide";
} else if(empty($accept2)){
echo "Error Terms of Service Not Accepted : Must Accept befor we can procide";
} else if(empty($accept3)){
echo "Error Legal Info Not Accepted : Must Accept befor we can procide";
} else {
if($_POST['gametype'] == "Game Hosting") { $gametype = "Game Hosting"; }else 
if($_POST['gametype'] == "Web Hosting") { $gametype = "Web Hosting";  }else 
if($_POST['gametype'] == "Voice Hosting") { $gametype = "Voice Hosting";  }else 
if($_POST['gametype'] == "Dedicated Server") {  $gametype = "Dedicated Server"; }else
if($_POST['gametype'] == "Co Location") { $gametype = "Co Location"; } else {
$gametype = "EMPTY ERROR"; }
if($gametype == "EMPTY ERROR") {
die('Error Please go back you didnt select a option');
}

$payment = $_POST['paymenttype'];
$ppemail = $_POST['paypalemail'];
if($payment == "Paypal") {
if(empty($ppemail)) { die('Paypal email Not Spesifyed');
}
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$referedby = $_POST['referedby'];
$sname = $_POST['servername'];
$sloc = $_POST['serverlocation'];
$smap = $_POST['startmap'];
$srcon = $_POST['rconpassword'];
$spass = $_POST['serverpassword'];
$suser = $_POST['controlusername'];
$spassw = $_POST['controlpassword'];
$sgt = $_POST['gt'];
$smod = $_POST['mods'];
$sslots = $_POST['slots'];
$stype = $_POST['stype'];
$hpack = $_POST['packageweb'];
$hdomain = $_POST['domainname'];
$hbuy = $_POST['buyd'];
$vpack = $_POST['vslots'];
$dloc = $_POST['location'];
$dproces = $_POST['processor'];
$dram = $_POST['ram'];
$dspeed = $_POST['speed'];







$message = "<table width=50% border=0 align=center cellspacing=0 cellpadding=3>
  <tr bgcolor=#333333> 
    <td colspan=2><strong><font color=#FFFFFF>Information</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><strong><font color=#FFFFFF size=2>Type :</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $gametype . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><strong><font color=#FFFFFF size=2>Payment :</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $payment . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><strong><font color=#FFFFFF size=2>Paypal Email 
      :</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $ppemail . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><strong><font color=#FFFFFF size=2>Referd Person 
      :</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $referedby . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>Full Name</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  $name  . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>Email Address</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  
      $email  . " </font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>Phone</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  
      $phone  . " </font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>Address</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  
      $address  . "</font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>City</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  
      $city . " </font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>State</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>".  
      $state  . " </font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><font color=#FFFFFF><strong>Zip Code</strong></font></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $zip . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td width=31% bgcolor=#666666><strong><font color=#FFFFFF>Server Name</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $sname  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Server Location</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $sloc  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Starting Map</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $smap  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Rcon Password</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $srcon  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Server Password</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $spass  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Username</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $suser  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Password</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $spassw  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Game Type</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $sgt . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Modifications</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $smod . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Slots</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $sslots  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Server Type</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $stype  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Package</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $hpack  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Domain Name</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $hdomain  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Buy Domain?</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $hbuy  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Package</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $vpack  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Location</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $dloc  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Processor</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $dproces  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Ram</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $dram  . " 
       
      </font></strong></td>
  </tr>
  <tr> 
    <td bgcolor=#666666><strong><font color=#FFFFFF>Speed</font></strong></td>
    <td width=78% bgcolor=#999999><strong><font color=#FFFFFF size=2>". $dspeed  . " 
       
      </font></strong></td>
  </tr>
</table>
";

/* recipients */
$to  = "whitedragon@thexnetworks.net" . ", " ; // note the comma
$to .= "tacticalazn@gmail.com";

/* subject */
$subject = "Server Setup";

/* To send HTML mail, you can set the Content-type header. */
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

/* additional headers */
$headers .= "To: Sales <accountsetup@networkgenerations.net>, Steve <tacticalazn@gmail.com>\r\n";
$headers .= "From: Website < $email >\r\n";
$headers .= "Cc: whitedragon@thexnetworks.net\r\n";
$headers .= "Bcc: tacticalazn@gmail.com\r\n";

/* and now mail it */
mail($to, $subject, $message, $headers);





?> 
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Information</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step2.php">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Type 
        :</font></strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $gametype; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Payment 
        :</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $payment; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Paypal 
        Email :</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $ppemail; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Referd 
        Person :</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $referedby; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>Full Name</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $name; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>Email Address</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $email; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>Phone</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $phone; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>Address</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $address; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>City</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $city; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>State</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"><? echo $state; ?></font></strong></td>
    </tr>
    <tr> 
      <td width="28%" bgcolor="#666666"><font color="#FFFFFF"><strong>Zip Code</strong></font></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $zip; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	if($gametype == "Game Hosting") {
	?>
    <tr> 
      <td width="31%" bgcolor="#666666"><strong><font color="#FFFFFF">Server Name</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $sname; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Server Location</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $sloc; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Starting Map</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $smap; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Rcon Password</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $srcon; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Server Password</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $spass; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Username</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $suser; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Password</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $spassw; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Game Type</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $sgt; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Modifications</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $smod; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Slots</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $sslots; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Server Type</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $stype; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	}else if($gametype == "Web Hosting") {
	
	?>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Package</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $hpack; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Domain Name</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $hdomain; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Buy Domain?</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $hbuy; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	}else if($gametype == "Voice Hosting") {
	
	?>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Package</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $vpack; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	}else if($gametype == "Dedicated Server") {
	
	?>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Location</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $dloc; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Processor</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $dproces; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Ram</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $dram; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><strong><font color="#FFFFFF">Speed</font></strong></td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $dspeed; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	}else if($gametype == "Co Location") {
	
	?>
    <tr> 
      <td width="28%" bgcolor="#666666">&nbsp;</td>
      <td width="72%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <? echo $cloc; ?> 
        <label> </label>
        </font></strong></td>
    </tr>
    <?
	}
	
	?>
  </form>
</table>
<p align="center">EVERYTHING IS REQUIRED.....</p>
<?
if($gametype == "Game Hosting") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Options : Game Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step4.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
    <input type="hidden" value="<? echo $name; ?>" name="name">
    <input type="hidden" value="<? echo $email; ?>" name="email">
    <input type="hidden" value="<? echo $phone; ?>" name="phone">
    <input type="hidden" value="<? echo $address; ?>" name="address">
    <input type="hidden" value="<? echo $city; ?>" name="city">
    <input type="hidden" value="<? echo $state; ?>" name="state">
    <input type="hidden" value="<? echo $zip; ?>" name="zipcode">
    <tr> 
      <td width="31%" bgcolor="#666666">Status</td>
      <td width="69%" bgcolor="#999999">Sending Request</td>
    </tr>    <tr> 
      <td width="31%" bgcolor="#666666"></td>
      <td width="69%" bgcolor="#999999">One of our Sales Agents will contact you soon.</td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Web Hosting") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td width="100" colspan="2"><strong><font color="#FFFFFF">Options : Web Hosting</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step4.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
    <input type="hidden" value="<? echo $name; ?>" name="name">
    <input type="hidden" value="<? echo $email; ?>" name="email">
    <input type="hidden" value="<? echo $phone; ?>" name="phone">
    <input type="hidden" value="<? echo $address; ?>" name="address">
    <input type="hidden" value="<? echo $city; ?>" name="city">
    <input type="hidden" value="<? echo $state; ?>" name="state">
    <input type="hidden" value="<? echo $zip; ?>" name="zipcode">
    <tr> 
      <td width="31%" bgcolor="#666666">Status</td>
      <td width="69%" bgcolor="#999999">Sending Request</td>
    </tr>    <tr> 
      <td width="31%" bgcolor="#666666"></td>
      <td width="69%" bgcolor="#999999">One of our Sales Agents will contact you soon.</td>
    </tr>
    <tr> 
      
    </tr>
  </form>
</table>
<?
} else if($gametype == "Voice Hosting") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td width="100%" colspan="2"><strong><font color="#FFFFFF">Options : Voice 
      Hosting</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step4.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
    <input type="hidden" value="<? echo $name; ?>" name="name">
    <input type="hidden" value="<? echo $email; ?>" name="email">
    <input type="hidden" value="<? echo $phone; ?>" name="phone">
    <input type="hidden" value="<? echo $address; ?>" name="address">
    <input type="hidden" value="<? echo $city; ?>" name="city">
    <input type="hidden" value="<? echo $state; ?>" name="state">
    <input type="hidden" value="<? echo $zip; ?>" name="zipcode">
      <tr> 
      <td width="31%" bgcolor="#666666">Status</td>
      <td width="69%" bgcolor="#999999">Sending Request</td>
    </tr>    <tr> 
      <td width="31%" bgcolor="#666666"></td>
      <td width="69%" bgcolor="#999999">One of our Sales Agents will contact you soon.</td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Dedicated Server") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td width="100" colspan="2"><strong><font color="#FFFFFF">Options : Dedicated 
      Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step4.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
    <input type="hidden" value="<? echo $name; ?>" name="name">
    <input type="hidden" value="<? echo $email; ?>" name="email">
    <input type="hidden" value="<? echo $phone; ?>" name="phone">
    <input type="hidden" value="<? echo $address; ?>" name="address">
    <input type="hidden" value="<? echo $city; ?>" name="city">
    <input type="hidden" value="<? echo $state; ?>" name="state">
    <input type="hidden" value="<? echo $zip; ?>" name="zipcode">
      <tr> 
      <td width="31%" bgcolor="#666666">Status</td>
      <td width="69%" bgcolor="#999999">Sending Request</td>
    </tr>    <tr> 
      <td width="31%" bgcolor="#666666"></td>
      <td width="69%" bgcolor="#999999">One of our Sales Agents will contact you soon.</td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Co Location") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td width="100%" colspan="2"><strong><font color="#FFFFFF">Options : Co Location 
      Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step4.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype5">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td bgcolor="#666666">&nbsp;</td>
      <td bgcolor="#999999">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit25" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
    </tr>
  </form>
</table>
<?
}}
?>
