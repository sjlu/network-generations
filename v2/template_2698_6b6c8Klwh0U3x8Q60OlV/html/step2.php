
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

if($_POST['gametype'] == "gs") { $gametype = "Game Hosting"; }else 
if($_POST['gametype'] == "ws") { $gametype = "Web Hosting";  }else 
if($_POST['gametype'] == "vh") { $gametype = "Voice Hosting";  }else 
if($_POST['gametype'] == "ded") {  $gametype = "Dedicated Server"; }else
if($_POST['gametype'] == "colo") { $gametype = "Co Location"; } else {
$gametype = "EMPTY ERROR"; }
if($gametype == "EMPTY ERROR") {
die('Error Please go back you didnt select a option');
}
$payment = $_POST['paymenttype'];
$ppemail = $_POST['paypalemail'];
if($payment == "Paypal") {
if(empty($ppemail)) { die('Paypal email Not Spesifyed'); }
}
$referedby = $_POST['referedby'];
?> 
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Information</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step2.php">
    <tr> 
      <td width="23%" bgcolor="#666666"><strong><font color="#FFFFFF" size="2">Type 
        :</font></strong></td>
      <td width="77%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
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
  </form>
</table>
<p align="center">EVERYTHING IS REQUIRED.....</p>
<p>&nbsp;</p>
<?
if($gametype == "Game Hosting") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Options : Game Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step3.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Full Name</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="name" type="text" value="" name="name">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Email Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="email" type="text" value="" name="email">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Phone</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="phone" type="text" value="" name="phone">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="address" type="text" value="" name="address">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>City</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="city" type="text" value="" name="city">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>State</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <select id="select" name="state">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Zip Code</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label>
        <input id="zipcode" type="text" value="" name="zipcode">
        </label>
        </font></strong></td>
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
    <td colspan="2"><strong><font color="#FFFFFF">Options : Web Hosting</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step3.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Full Name</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="name" type="text" value="" name="name">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Email Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="email" type="text" value="" name="email">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Phone</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="phone" type="text" value="" name="phone">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="address" type="text" value="" name="address">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>City</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="city" type="text" value="" name="city">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>State</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <select  id="select" name="state">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Zip Code</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="zipcode" type="text" value="" name="zipcode">
        </label>
        </font></strong></td>
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
  <form name="form1" method="post" action="step3.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Full Name</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="name" type="text" value="" name="name">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Email Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="email" type="text" value="" name="email">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Phone</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="phone" type="text" value="" name="phone">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="address" type="text" value="" name="address">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>City</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="city" type="text" value="" name="city">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>State</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <select  id="select" name="state">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Zip Code</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="zipcode" type="text" value="" name="zipcode">
        </label>
        </font></strong></td>
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
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Options : Dedicated Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step3.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Full Name</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="name" type="text" value="" name="name">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Email Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="email" type="text" value="" name="email">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Phone</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="phone" type="text" value="" name="phone">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="address" type="text" value="" name="address">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>City</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="city" type="text" value="" name="city">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>State</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <select  id="select" name="state">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Zip Code</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="zipcode" type="text" value="" name="zipcode">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit23" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
    </tr>
  </form>
</table>
<?
} else if($gametype == "Co Location") { 
?>
<table width="75%" border="0" align="center" cellspacing="0" cellpadding="3">
  <tr bgcolor="#333333"> 
    <td colspan="2"><strong><font color="#FFFFFF">Options : Co Location Server</font></strong></td>
  </tr>
  <form name="form1" method="post" action="step3.php">
    <input type="hidden" value="<? echo $gametype; ?>" name="gametype">
    <input type="hidden" value="<? echo $payment; ?>" name="paymenttype">
    <input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $ppemail; ?>" name="paypalemail">
<input type="hidden" value="<? echo $referedby; ?>" name="referedby">
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Full Name</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="name" type="text" value="" name="name">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Email Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="email" type="text" value="" name="email">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Phone</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="phone" type="text" value="" name="phone">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Address</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="address" type="text" value="" name="address">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>City</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="city" type="text" value="" name="city">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>State</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <select  id="select" name="state">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td width="22%" bgcolor="#666666"><strong>Zip Code</strong></td>
      <td width="78%" bgcolor="#999999"><strong><font color="#FFFFFF" size="2"> 
        <label> 
        <input id="zipcode" type="text" value="" name="zipcode">
        </label>
        </font></strong></td>
    </tr>
    <tr> 
      <td colspan="2" bgcolor="#CCCCCC"><strong> 
        <input type="submit" name="Submit25" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#CCCCCC;">
        </strong></td>
    </tr>
  </form>
</table>
<?
}
?>
