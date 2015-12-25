
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

if($_POST['gametype'] == "Game Hosting") { $gametype = "Game Hosting"; }else 
if($_POST['gametype'] == "Web Hosting") { $gametype = "Web Hosting";  }else 
if($_POST['gametype'] == "Voice Hosting") { $gametype = "Voice Hosting";  }else 
if($_POST['gametype'] == "Dedicated Server") {  $gametype = "Dedicated Server"; }else
if($_POST['gametype'] == "Co Location") { $gametype = "Co Location"; } else {
$gametype = "EMPTY ERROR"; }
if($gametype == "EMPTY ERROR") {
die('Error Please go back you didnt select a option');
}

$referedby = $_POST['referedby'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zipcode'];
$payment = $_POST['paymenttype'];
$ppemail = $_POST['paypalemail'];
if($payment == "Paypal") {
if(empty($ppemail)) { die('Paypal email Not Spesifyed');
}
}
?> 
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Order Information</font></strong></td>
  </tr>
  <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Type 
       </font></strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $gametype; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Payment 
       </font></strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $payment; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Paypal 
        Email</font></strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $ppemail; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Refered 
        Person</font></strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $referedby; ?></label>
        </font></strong></td>
    </tr>
</table>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Client Information</font></strong></td>
  </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Full Name 
       </font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $name; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2"> 
        Email Address</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $email; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Phone Number</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $phone; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Address</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $address; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">City</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $city; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">State</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $state; ?></label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Zip Code</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label><? echo $zip; ?></label>
        </font></strong></td>
    </tr>
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
      <td width="31%" bgcolor="#666666"><font color="#FFFFFF">Server Name</font></td>
      <td width="69%" bgcolor="#999999"><font size="1"> 
        <input id="servername2" type="text" value="" name="servername">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Server Location</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <select id="select7" name="serverlocation">
          <option value="" selected="selected">&nbsp;</option>
          <option value="tx">Dallas, TX</option>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Starting Map</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="startmap2" type="text" value="" name="startmap">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Rcon Password</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="rconpassword2" type="text" value="" name="rconpassword">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Server Password</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="serverpassword2" type="text" value="" name="serverpassword">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Username</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="controlusername2" type="text" value="" name="controlusername">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Password</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="controlpassword2" type="text" value="" name="controlpassword">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Game Type</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <select id="select6" name="gt">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Cstrike">Counter-Strike</option>
          <option value="HL">Half-Life</option>
          <option value="tfc">Team Fortress Classic</option>
          <option value="dod">Day Of Defeat</option>
          <option value="czero">Condition Zero</option>
          <option value="ts">The Specialists</option>
          <option value="hi">Hostile Intent</option>
          <option value="ns">Natural Selection</option>
          <option value="css">Counter-Strike: Source</option>
          <option value="hl2dm">HL2: DeathMatch</option>
          <option value="hls">Half-Life: Source</option>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Modifications</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <select id="select" name="mods">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Install">Install Mods</option>
          <option value="Do not Install">Do not Install Mods</option>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Slots</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <select id="slots" name="slots">
          <option value="" selected="selected">&nbsp;</option>
          <option value="12">12</option>
          <option value="14">14</option>
          <option value="16">16</option>
          <option value="18">18</option>
          <option value="20">20</option>
          <option value="22">22</option>
          <option value="24">24</option>
          <option value="26">26</option>
          <option value="28">28</option>
          <option value="30">30</option>
          <option value="32">32</option>
        </select>
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Server Type</font></td>
      <td bgcolor="#999999"><label> 
        <input type="radio" name="stype" value="public">
        Public</label> <br> <label> 
        <input type="radio" name="stype" value="private">
        Private</label> </td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit2" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
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
      <td bgcolor="#666666"><font color="#FFFFFF">Starter Package</font></td>
      <td bgcolor="#999999"><input type="radio" name="packageweb" value="Starter"> 
      </td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Silver Package</font></td>
      <td bgcolor="#999999"><input type="radio" name="packageweb" value="Silver"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Gold Package</font></td>
      <td bgcolor="#999999"><input type="radio" name="packageweb" value="Gold"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Platnum package</font></td>
      <td bgcolor="#999999"><input type="radio" name="packageweb" value="platnum"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Domain Name</font></td>
      <td bgcolor="#999999"><font size="1"> 
        <input id="controlusername3" type="text" value="" name="domainname">
        </font></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">Buy Domain?</font></td>
      <td bgcolor="#999999"><input type="radio" name="buyd" value="Buy">
        Yes 
        <input type="radio" name="stype" value="public">
        No (Extra $10)</td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit24" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Voice Hosting") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Options : Voice Hosting</font></strong></td>
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
      <td width="34%" bgcolor="#666666"><font color="#FFFFFF">10 Man</font></td>
      <td width="66%" bgcolor="#999999"><input type="radio" name="packageweb" value="10 Man"> 
      </td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF"> 25 Man</font></td>
      <td bgcolor="#999999"><input type="radio" name="vslots" value="25 man"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF"> 50 Man</font></td>
      <td bgcolor="#999999"><input type="radio" name="vslots" value="50 Man"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF"> 100 Man</font></td>
      <td bgcolor="#999999"><input type="radio" name="vslots" value="100 Man"></td>
    </tr>
    <tr> 
      <td bgcolor="#666666"><font color="#FFFFFF">200 Man</font></td>
      <td bgcolor="#999999"><input type="radio" name="vslots" value="200 Man"></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit22" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Dedicated Server") { 
?><?
} else if($gametype == "Co Location") { 
?>
<?
}
?>
