
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
</style><table width="75%" border="1" bordercolor="#ffffff" bgcolor="#FFFFFF" align="center" cellspacing="0" cellpadding="0">
  <tr bordercolor="#000000"> 
    <td colspan="2"><strong>Option</strong></td>
  </tr>
  <form name="form1" method="post" action="step2.php">
    <tr bordercolor="#000000"> 
      <td width="75%"><font size="2">Game Servers</font></td>
      <td width="75%"><font size="2"> 
        <label> 
        <input type="radio" name="gametype" value="gs">
        Game Server</label>
      </font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td><font size="2">Webpage Hosting</font></td>
      <td><font size="2"> 
        <label> 
        <input type="radio" name="gametype" value="ws">
        Webpage Server</label>
      </font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td><font size="2">Voice Hosting</font></td>
      <td><font size="2"> 
        <label> 
        <input type="radio" name="gametype" value="vh">
        Voice Hosting</label>
      </font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td><font size="2">Dedicated Servers</font></td>
      <td><font size="2"> 
        <label> 
        <input type="radio" name="gametype" value="ded">
        Dedciated</label>
      </font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19"><font size="2">Co Location </font></td>
      <td> <font size="2"> 
        <label> Coming Soon</label>
      </font></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">Payment Type</td>
      <td><select id="paymenttype" name="paymenttype">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Check">Check</option>
          <option value="Money Order">Money Order</option>
          <option value="Paypal">Paypal</option>
      </select></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">Paypal Email</td>
      <td><input id="paypalemail" type="text" value="" name="paypalemail"></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">&nbsp;</td>
      <td bgcolor="#FF0000"> <p><font color="#FFFFFF"><strong>Below please Put 
          who was your sales person so we can credit him with the sale. </strong></font></p>
        <p><font color="#FFFFFF"><strong>This basicly Keeps track of sales and 
      such. if no one Did Refer you please leave it blank.</strong></font></p></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">Referd By </td>
      <td><select name="referedby">
          <option value="" selected="selected">&nbsp;</option>
          <option value="Marshall 'WhiteDragon' Radziwilko">Marshall "WhiteDragon" 
          Radziwilko</option>
          <option value="Steve Lu">Steve Lu</option>
          <option value="Rasta">Rasta</option>
      </select></td>
    </tr>
    <tr bordercolor="#000000"> 
      <td height="19">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bordercolor="#000000"> 
      <td colspan="2"><input type="submit" name="Submit" value="Continue ->>>" width="100%" style="width:100%;border:#000000;background-color:#FFFFFF;"></td>
    </tr>
  </form>
</table>
