
<LINK href="images/amxbans.css" type=text/css  rel=stylesheet>
<LINK href="images/default.css" type=text/css  rel=stylesheet>
<LINK href="images/hl2.css" type=text/css rel=stylesheet>

<style type="text/css"><!--

body {
	background-color: #101415;
}
--></style>
<?


error_reporting('E_ERROR, E_PHRASE');
if(empty($_GET['ip'])) { $_GET['ip'] = "67.18.228.36"; }
include('madquery.php');
$serverip = $_GET['ip'];
$serverport = "27015";
$myserver=new madQuery("$serverip",$serverport);
$myserver->getdetails();
$myserver->getplayers();
?>
<TABLE class=listtable cellSpacing=1 width="90%" align="center">
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 width=26%><div align="left"><font color="#333333" size="2"><strong> 
        IP</strong></font></div></td>
    <td class=listtable_1 width=74%><font color="#333333" size="3">&nbsp; 
      <?= $serverip; ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td><div align="left"><font color="#333333" size="2"><strong> Name</strong></font></div></td>
    <td><font color="#333333" size="3">&nbsp; 
      <?=  $myserver->mHostname(); ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong> 
        Mod</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?=  $myserver->mModName(); ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Map</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?= $myserver->mMap(); ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Ping</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?= $myserver->mPing(); ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Type</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?
						  if($myserver->mSvrType() == "d") {
						  echo "Dedicated";
						  }else{ 
						  echo "Not Dedciated";
						  }
						  ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Os</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?
						  if($myserver->mSvrOS() == "w") {
						  echo "Windows";
						  }else if($myserver->mSvrOS() == "l") { 
						  echo "Linux";
						  }
						  ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Pub 
        - Priv?</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?
						  if($myserver->mPass() == "0") {
						  echo "Public";
						  }else if($myserver->mPass() == "1") { 
						  echo "Private";
						  }
						  ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Modification</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?
						  if($myserver->mIsMod() == "0") {
						  echo "Counter-Strike";
						  }else if($myserver->mIsMod() == "1") { 
						  echo "Half-Life or Other Mod";
						  }
						  ?>
      </font></td>
  </tr>
  <tr bgColor=#d3d8dc> 
    <td class=listtable_1 ><div align="left"><a href="index.php"><IMG src="images/nav_m_dark.gif" border=0></a></div></td>
    <td class=listtable_1 ><div align="left"><font color="#333333" size="2"><strong>Players</strong></font></div></td>
    <td class=listtable_1 ><font color="#333333" size="3">&nbsp; 
      <?= $myserver->mActive(); ?>
      out of 
      <?= $myserver->mMax(); ?>
      </font></td>
  </tr>
</table>
<TABLE class=listtable cellSpacing=1 width="90%" align="center">
  <TBODY>
    <TR> 
      <TD class=listtable_top width="3%" height=16><b>ID</b></TD>
      <TD class=listtable_top width="64%" height=16><b>Player</b></TD>
      <TD class=listtable_top width="15%" height=16><b>Frags</b></TD>
      <TD class=listtable_top width="13%" height=16><b>Time</b></TD>
    </TR>
    <?
$array = $myserver->mPlayerData(); 
foreach ($array as $key => $value){
?>
    <TR onmouseover="this.style.backgroundColor='#C7CCD2'" 
              style="CURSOR: hand" 
              onmouseout="this.style.backgroundColor='#D3D8DC'" 
                bgColor=#d3d8dc> 
      <?

foreach ($array[$key] as $key => $value){
?>
      <td width=3% class=listtable_1 ><font color="#000000"> 
        <?= $value; ?>
        </font></td>
      <?			
								
					

}
?>
    </tr>
    <?
}
    


?>
  </TBODY>
</TABLE>
<br>
