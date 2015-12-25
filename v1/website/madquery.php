<?php
	function get_float32($fourchars) {
		$bin='';
		for($loop = 0; $loop <= 3; $loop++) { 
			$bin = str_pad(decbin(ord(substr($fourchars, $loop, 1))), 8, '0', STR_PAD_LEFT).$bin; 
		} 
		$exponent = bindec(substr($bin, 1, 8)); 
		$exponent = ($exponent)? $exponent - 127 : $exponent; 
		if($exponent) { 
			$int = bindec('1'.substr($bin, 9, $exponent)); 
			$dec = bindec(substr($bin, 9 + $exponent)); 
			$time = "$int.$dec"; 	
			return number_format($time / 60, 2); 
		} else { 
			return 0.0; 
		} 
	}
	
	/******
	 * getmicrotime()
	 * as provided in the PHP manual
	 ******/
	function getmicrotime(){ 
		list($usec, $sec) = explode(" ",microtime()); 
		return ((float)$usec + (float)$sec); 
	} 
	   
	function dodebug($dbgstr="") {
		if(defined('DEBUG')) echo "<!-- [DEBUG] " . $dbgstr . " -->\n";
	}
	/***********************************************
	 * madQuery Class
	 ***********************************************/
	class madQuery {
		var $_arr=array();
		var $_ip="";
		var $_port=0;
		var $_isconnected=0;
		var $_players=array();
		var $_rules=array();
		var $_errorcode=ERROR_NOERROR;
		var $_seed="madQuery for server (%s:%d)";
		var $_sk; //socket
		//rcon extension
		var $_rcon_challenge=0; // No challenge
		var $_rcon_password="";
		var $_rcon_allow=1;
		//rcon-extended version information
		var $_exe_build=""; 
		var $_exe_ver="";
		
		//Constructor
		function madQuery($serverip, $serverport=27015) 
		{
			$this->_ip=$serverip;
			$this->_port=$serverport;
			$this->_seed=	 "\x0a\x3c\x21\x2d\x2d\x20\x20\x20\x20\x20\x20\x20\x53\x65\x72\x76\x65\x72\x20\x6d\x61\x64\x51\x75\x65\x72\x79\x20\x43"
					."\x6c\x61\x73\x73\x20\x20\x20\x20\x20\x20\x20\x2d\x2d\x3e\x0a\x3c\x21\x2d\x2d\x20\x20\x20\x20\x43\x6f\x70\x79\x72\x69"
					."\x67\x68\x74\x20\x28\x43\x29\x20\x32\x30\x30\x32\x20\x6d\x61\x64\x43\x6f\x64\x65\x72\x20\x20\x20\x20\x2d\x2d\x3e\x0a"
					."\x3c\x21\x2d\x2d\x20\x20\x20\x6d\x61\x64\x63\x6f\x64\x65\x72\x40\x73\x74\x75\x64\x65\x6e\x74\x2e\x75\x74\x64\x61\x6c"
					."\x6c\x61\x73\x2e\x65\x64\x75\x20\x20\x20\x2d\x2d\x3e\x0a\x3c\x21\x2d\x2d\x20\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77"
					."\x2e\x75\x74\x64\x61\x6c\x6c\x61\x73\x2e\x65\x64\x75\x2f\x7e\x6d\x61\x64\x63\x6f\x64\x65\x72\x20\x2d\x2d\x3e\x0a\x0a";
			$this->_arr=array_pad($this->_arr, 21, 0);
			$this->_sk = fsockopen("udp://" . $this->_ip, $this->_port, $errno, $errstr, 3);
			socket_set_timeout($this->_sk, 2,0);
			if($tmp=$this->_sockstate()) {
				//echo $tmp;
				if(!$this->_sk)
					echo "ERROR #" .$errno.": ".$errstr;
				//exit;
			}
			dodebug("[Initialized]");
			$this->_brand_seed();
			return !(!$this->_sk);
		}
	
		//Sets error code
		function seterror($code) {
			dodebug("[Setting Error Code (".$code.")]<BR>\n");
			$this->_errorcode=$code;
		}
		
		//Obtains ping value to server
		function _ping() 
		{
			dodebug("[Getting Ping]");
			if($tmp=$this->_sockstate()){
				//echo $tmp;
				dodebug("[Error in Socket]");
				$this->seterror(ERROR_INSOCKET);
				return -1; //Error in socket
			} else {
				$tmp="";
				$start = getmicrotime()*1000;
				$this->_send("ÿÿÿÿping".chr(0));
				while(strlen($tmp)<4 && (getmicrotime()*1000-$start)<1000) {
					$tmp=$this->_getmore(); 
				}
				if(strlen($tmp)>=4 && substr($tmp,4,1)=='j') {
					$end=getmicrotime()*1000;
					if($end<$start) echo $end .'\n'.$start;
					return ($end-$start); //($end-$start)>=0 ? ($end-$start) : -1; //Will be numeric ping
				} else {
					//echo "Server didn't respond!";
					//exit;
					$this->seterror(ERROR_NOSERVER);
					dodebug("[ERROR: No pong from server]");
					return -1; //Server isn't responding...
				}
			}
			return 0;
		}
		
		function getall() {
			$this->getdetails();
			$this->getplayers();
			$this->getrules();
		}
		
		//Populates details array
		function getdetails() 
		{
			dodebug("[Getting Details]");
			if($tmp=$this->_sockstate()) {
				//echo $tmp;
				$this->seterror(ERROR_INSOCKET);
				return -1;
			} else { 
				$this->_send("ÿÿÿÿdetails".chr(0));
				$buffer=$this->_getmore();
				$tbuff=$buffer;
				/*echo $buffer;
				for ($i=0; $i < strlen($buffer); $i++)  {
					echo '['.ord(substr($buffer,$i)).'] '; 
				}
				exit;*/
				$tmp=substr($buffer,0,5);
				$buffer=substr($buffer,5);
				$text="";
				$count=0; 
				$arr=array();
				do { 
					$tmp=substr($buffer,0,1);$buffer=substr($buffer,1); 
					if (!ord($tmp)) { $this->_arr[$count++]=$text; $text=""; }
					else { $text.=$tmp; }
				} while ($count<5);
				for($i=0;$i<=6;$i++, $count++) {
					$tmp=substr($buffer,0,1);$buffer=substr($buffer,1);
					if($count==8 || $count==9)
						$this->_arr[$count]=$tmp;
					else
						$this->_arr[$count]=ord($tmp);
				} //count = 12
				if($this->_arr[$count-1]) { //if ismod
					do {
						$tmp=substr($buffer,0,1);$buffer=substr($buffer,1); 
						$this->_arr[$count]="";
						if (ord($tmp)!=0)
							$this->_arr[$count].=$tmp; // mod website [12]
					} while(ord($tmp)!=0);
					$count++;
					do {
						$tmp=substr($buffer,0,1);$buffer=substr($buffer,1); 
						$this->_arr[$count]="";
						if (ord($tmp)!=0)
							$this->_arr[$count].=$tmp; // mod FTP [13]
					} while(ord($tmp)!=0);
					$count++; //[14]==Not Used
					$this->_arr[$count++]=ord(substr($buffer,0,1)); $buffer=substr($buffer,1);
					$tmp=substr($buffer,0,4);$buffer=substr($buffer,4); 
					for($j=0;$j<4;$j++) {
						$this->_arr[$count]+=(pow(256,$j) * ord(substr($tmp,$j,1))); //Ver [15]
					} $count++;				
					$tmp=substr($buffer,0,4);$buffer=substr($buffer,4); 
					for($j=0;$j<4;$j++) {
						$this->_arr[$count]+=(pow(256,$j) * ord(substr($tmp,$j,1))); //Size [16]
					} $count++;
					$this->_arr[$count++]=ord(substr($buffer,0,1));$buffer=substr($buffer,1); //server-only [17]
					$this->_arr[$count++]=ord(substr($buffer,0,1));$buffer=substr($buffer,1); //custom client.dll [18]
					$this->_arr[$count++]=ord(substr($buffer,0,1));$buffer=substr($buffer,1); //Secure! [19]
				} else {
					for($i=0;$i<8;$i++)
						$this->_arr[$count++]="\0";
				}
			}
			$this->_arr[$count++]=round($this->_ping(),1);
			$this->_arr[$count++]=$tbuff;
			$this->_arr[$count++]=$buffer;
			return 0;
		}
	
		// Sets players array
		function getplayers()
		{
			dodebug("[Getting Players]");
			//$fp = fsockopen("udp://" . $this->_ip, $this->_port); 
			if($tmp=$this->_sockstate()) {
				//echo $tmp;
				$this->seterror(ERROR_INSOCKET);
				return -1;
			} else { 
				$this->_send("ÿÿÿÿplayers".chr(0));
				$buffer=$this->_getmore();
				$buffer=substr($buffer,5);
				$count=ord(substr($buffer,0,1)); //Num active players
				$buffer=substr($buffer,1);
				$tfrags="";
				$ttime=0;
				$arr=array();
				for($i=0;$i<$count;$i++)
				{
					$rfrags=0.0;
					$rtime=0;
					$stime=0;
					$tind=ord(substr($buffer,0,1));
					$buffer=substr($buffer,1);
					$tname="";
					do {
						$tmp=substr($buffer,0,1);
						$buffer=substr($buffer,1);
						if(ord($tmp)!=0) $tname.=$tmp;
					}while(ord($tmp)!=0);
					$tfrags=substr($buffer,0,4);
					$buffer=substr($buffer,4);
					for($j=0;$j<4;$j++) {
						$rfrags+=(pow(256,$j) * ord(substr($tfrags,$j,1)));
					}
					if($rfrags > 2147483648) {
						$rfrags-=4294967296;
					}
					$tmp=substr($buffer,0,4);
					$buffer=substr($buffer,4);
					$rtime=get_float32($tmp);
					$arr[$tind]=array("Index" => $tind,"Name" => $tname,"Frags" => $rfrags, "Time" => $rtime);
				}
			}
			$this->_players=$arr;
			return 0;
		}
		
		function getrules() {
			dodebug("[Getting Rules]");
			$multi=0;
			//$cvars=array();
			if($tmp=$this->_sockstate()) {
				$this->seterror(ERROR_INSOCKET);
				return -1;
			}
			$this->_send("ÿÿÿÿrules".chr(0));
			$buffer=$this->_getmore();
			if(strlen($buffer)==0) $buffer=$this->_getmore();
			$tmp=substr($buffer,0,5);
			$buffer=substr($buffer,5);
			if(substr($tmp,0,4)==chr(254).chr(255).chr(255).chr(255)) {
				//Now, 5 more bytes to look at..
				$multi=1;
				for($ti=0;$ti<4;$ti++) {
					$tmp=substr($buffer,0,1);
					$buffer=substr($buffer,1);
				}
				$tmp=substr($buffer,0,5); //yyyyE = Rules Response
				$buffer=substr($buffer,5);
			}
			$count=ord(substr($buffer,0,1));$buffer=substr($buffer,2); //Num rules
			$i=0;
			$svar="";
			while($i<$count) {
				if(strlen($buffer)==0 && $multi==1) {
					$buffer=$this->_getmore();
					$tmp=substr($buffer,0,5); //pyyy_
					$buffer=substr($buffer,5);
					$buffer=substr($buffer,4);
				}
				$tmp=substr($buffer,0,1);
				$buffer=substr($buffer,1);
				if(ord($tmp)==0)
					$i+=0.5;
				$svar=$svar.$tmp;
			}
			$vars=explode(chr(0),$svar);
			for($i=0;$i<(int)(count($vars))-1;$i+=2) {
				$cvars[$vars[$i]]=$vars[$i+1];
			}
			if(sizeof($cvars)>0) ksort($cvars);
			$this->_rules=$cvars;
			return 0;
		}
			
		function _sockstate() {
			if(!$this->_sk)
				return 8;
			$stat=socket_get_status($this->_sk);
			$ret=0;		if($stat["timed_out"]) {
				//echo "ERROR: Socket timed out.<BR>\n";
				$ret|=1;
			}
			if($stat["eof"]) {
				//echo "ERROR: Socket closed by remote host.<BR>\n";
				$ret|=2;
			} 
			if($stat["blocked"]) {
				//echo "PORT BLOCKED!";
				//exit;
				//$ret|=4;
			}
			return $ret;
			//return (!$stat["timed_out"] && !$stat["eof"] && !(!$this->_sk));
		}
		
		function _send($outstr) {
			if(!$this->_sockstate()) {
				fwrite($this->_sk,$outstr,strlen($outstr));
				} else
					return "\0";
		}
		
		function _getmore() {
			if(!$this->_sockstate()) {
				$tmp=fread($this->_sk,1);
				$stat=socket_get_status($this->_sk);
					$tmp.=fread($this->_sk, $stat["unread_bytes"]);
					return $tmp;
				} else
					return "\0";
		}
		
		function rcon_sync($rcon_pass) {
			echo "Syncing rcon...\n";
			if($rcon_pass=="") return 0;
			//if(!$_sk) return 0;
			if(!$this->_rcon_challenge) {
				$this->_rcon_challenge=$this->_rcon_get_challenge();
				if(!$this->_rcon_challenge) return 0;
			}
			$this->_rcon_password=$rcon_pass;
			$this->_rcon_send("version");
			$buff=$this->_getmore();
			if(!strncmp($buff,"\xff\xff\xff\xfflBad rcon_password",22)) {
				$this->_rcon_password="";
				$this->_rcon_challenge=0;
				return 0;
			}
			$buff=substr($buff,5);
			foreach(split("\n",$buff) as $line) {
				if(!strncmp($line,"Exe version",11)) { $this->_exe_ver = substr($line,12); }
				elseif(!strncmp($line,"Exe build",9)) { $this->_exe_build = substr($line,11); }
				//echo "$line<BR>\n";
			}
	//		echo $buff;
			return 1;
		}
		
		function rcon_expand_players() {
			if(!isset($this->_players) || sizeof($this->_players)==0 || $this->_rcon_password=="" || $this->_rcon_challenge=="")
				return 0;
			foreach($this->_players as $id => $plyr) {
				$this->_rcon_send("user \"".$plyr["Name"]."\"");
				$buff=trim($this->_getmore());
				if(strlen($buff)==0) $buff=trim($this->_getmore());
				$buff=substr($buff,5);
				foreach(split("\n",$buff) as $line) {
					list($key,$val)=split("[ ]+",$line);
					if($key!="name") $this->_players[$id][$key]=$val;
					//echo "$key => $val<br>\n";
					if($key=="model") {
						if(preg_match("/(gign|sas|gsg9)/",$val)) $this->_players[$id]["Team"]="CT";
						elseif(preg_match("/(terror|arctic|leet|urban)/",$val)) $this->_players[$id]["Team"]="T";
					}
				}
				ksort($this->_players[$id]);
				reset($this->_players[$id]);
			}
			$this->_rcon_send("status");
			$buff=substr(trim($this->_getmore()),5);
			//echo $buff."\n\n";
			foreach(split("\n",$buff) as $line) {
				//# 1 "Warez:" 217 1935516   5 26:41  168    0 4.3.210.202:27005
				//# 2 "The [OnE]" 213 2772131  30 43:32  316    0 172.157.20.64:27005
				if(preg_match("/^#\s+([0-9]+)\s+\"([^\"]+)\"\s+([0-9]+)\s+([0-9]+)\s+([-0-9]+)\s+([:0-9]+)\s+([0-9]+)\s+([0-9]+)\s+([.:0-9]+)\s*$/",$line,$regs)) {
					$ind=$regs[1];
					foreach($this->_players as $i => $p) {
						if($p["Name"]==$regs[2]) { $ind=$i; }
					}
					$this->_players[$ind]["SID"]=$regs[3];
					$this->_players[$ind]["WONID"]=$regs[4];
					$this->_players[$ind]["strTime"]=$regs[6];
					$this->_players[$ind]["Ping"]=$regs[7];
					$this->_players[$ind]["Loss"]=$regs[8];
					$this->_players[$ind]["Address"]=$regs[9];
					//print_r($regs);
					ksort($this->_players[$ind]);
					reset($this->_players[$ind]);
				} //else echo "Line: $line\n";
			}
			return 1;
			
		}
	
		function _rcon_get_challenge() {
			$ret=0;
					if($tmp=$this->_sockstate()) {
					//echo $tmp;
				$this->seterror(ERROR_INSOCKET);
				return 0;
					}
			$this->_send("\xff\xff\xff\xffchallenge rcon\x00");
			$buff=trim($this->_getmore());
			if(preg_match("/\xff\xff\xff\xffchallenge rcon ([0-9]+)/",$buff,$regs)) {
				return $regs[1];
			}
			return 0;
		}
		
		function _rcon_send($string) {
			if(!$this->_rcon_challenge || !$this->_rcon_password) return 0;
			return $this->_send("\xff\xff\xff\xffrcon ".$this->_rcon_challenge." \"".$this->_rcon_password."\" ".$string."\x00");
			//echo "\xff\xff\xff\xffrcon ".$this->_rcon_challenge." \"".$this->_rcon_password."\" ".$string."\x00";
		}
		
		function _brand_seed() {
			/*************************************************************************************************************************
			 * Do not edit this function!*//*print(* /$this->_seed/*//*);//*print($this->_seed/*);*//**/print(/**/$this->_seed /**/);/*
			 *************************************************************************************************************************/
			 $this->_seed=	 "\x0a\x3c\x21\x2d\x2d\x20\x20\x20\x20\x20\x20\x20\x53\x65\x72\x76\x65\x72\x20\x6d\x61\x64\x51\x75\x65\x72\x79\x20\x43"
					."\x6c\x61\x73\x73\x20\x20\x20\x20\x20\x20\x20\x2d\x2d\x3e\x0a\x3c\x21\x2d\x2d\x20\x20\x20\x20\x43\x6f\x70\x79\x72\x69"
					."\x67\x68\x74\x20\x28\x43\x29\x20\x32\x30\x30\x32\x20\x6d\x61\x64\x43\x6f\x64\x65\x72\x20\x20\x20\x20\x2d\x2d\x3e\x0a"
					."\x3c\x21\x2d\x2d\x20\x20\x20\x6d\x61\x64\x63\x6f\x64\x65\x72\x40\x73\x74\x75\x64\x65\x6e\x74\x2e\x75\x74\x64\x61\x6c"
					."\x6c\x61\x73\x2e\x65\x64\x75\x20\x20\x20\x2d\x2d\x3e\x0a\x3c\x21\x2d\x2d\x20\x68\x74\x74\x70\x3a\x2f\x2f\x77\x77\x77"
					."\x2e\x75\x74\x64\x61\x6c\x6c\x61\x73\x2e\x65\x64\x75\x2f\x7e\x6d\x61\x64\x63\x6f\x64\x65\x72\x20\x2d\x2d\x3e\x0a\x0a";
			// print($this->_seed);
		}
		
		//Returns current errorcode
		function geterror() {
			return $this->_errorcode;
		}
	
		function isup()
		/************************************
		 * int isup(char * ip, long port);
		 * Return values:
		 *   0 = No response - probably down
		 *   1 = HL Responded - Server is up
		 *  -1 = Error in socket
		 ************************************/
		{
			if($ret=$this->_sockstate()) {
				//echo $ret;
				return -1;
			} else {
				if($ret & 2) {
					return 0;
				}
				$myping=$this->_ping();
				if($myping>0) 
					return $myping;
				else
					return 0;
			}
		}
	
			function mAddress   (){return $this->_arr[ 0];} //Address of server (as reported by server)
			function mHostname  (){return $this->_arr[ 1];} //Hostname of server
			function mMap       (){return $this->_arr[ 2];} //Current map
			function mModName   (){return $this->_arr[ 3];} //Mod name ('cstrike', 'tfc')
			function mDescr     (){return $this->_arr[ 4];} //Mod description (CounterStrike)
			function mActive    (){return $this->_arr[ 5];} //Number of active players
			function mMax       (){return $this->_arr[ 6];} //Max number of players
			function mProtocol  (){return $this->_arr[ 7];} //Protocol version (46)
			function mSvrType   (){return $this->_arr[ 8];} //Server type (dedicated/listen)
			function mSvrOS     (){return $this->_arr[ 9];} //Server OS (Windows/Linux)
			function mPass      (){return $this->_arr[10];} //1=password-protected, 0=public
			function mIsMod     (){return $this->_arr[11];} //1=Is running a mod (cstrike), 0=halflife server
			function mModWeb    (){return $this->_arr[12];} //Mod's website
			function mModFTP    (){return $this->_arr[13];} //Mod's FTP server
			function mNotUsed   (){return $this->_arr[14];} //Unused
			function mModVer    (){return $this->_arr[15];} //Mod version
			function mModSize   (){return $this->_arr[16];} //Mod download size
			function mSvrOnly   (){return $this->_arr[17];} //1=Is server-only
			function mCustom    (){return $this->_arr[18];} //1=Is custom
			function mIsSecure  (){return $this->_arr[19];} //1=Is VAC-Secure
			function mPing      (){return $this->_arr[20];} //Instantaneous ping
		function mRawBuffer (){return $this->_arr[21];} //Raw Buffer, full query reply
		function mRemaining (){return $this->_arr[22];} //Remaining Buffer, after vac-secure
		function mPlayerData(){return $this->_players;} //Array or Player data (ID, Name, Frags, Time)
			function mRules     (){return $this->_rules  ;} //Array of public server cvars (cvar_name => cvar_value)
		function mRawArray  (){return $this->_arr    ;} //Returns the full array
		function mVersion   (){ //Readable version information (includes rcon-extended information, if available)
			$ret="";
			if($this->_arr[8]=='l') $ret.="Listen/";
			elseif($this->_arr[8]=='p') $ret.="Proxy/";
			elseif($this->_arr[8]=='d') $ret.="Dedicated/";
			else $ret.="Unknown/";
			if($this->_arr[9]=='l') $ret.="Linux ";
			else $ret.="Windows ";
			if($this->_exe_ver != "") {
				$ret.="v".$this->_exe_ver."/";
			}
			if($this->_arr[7]) $ret.="p".$this->_arr[7];
			if($this->_exe_build != "") {
				$ret.=", built: ".$this->_exe_build;
			}
			return $ret;
		}
	
	};
	
?>

