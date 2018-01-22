<?php

$appid = uniqid().uniqid();

$randnb = rand(1, 5);

if ($randnb == 1) {
	$bg = "https://i.imgur.com/TRBbGNE.jpg";
} elseif ($randnb == 2) {
	$bg = "https://wallup.net/wp-content/uploads/2016/01/130013-Far_Cry_4-video_games-landscape.jpg";
} elseif ($randnb == 3) {
	$bg = "http://wallpapersin4k.net/wp-content/uploads/2017/02/League-of-Legends-Wallpapers-2.jpg";
} elseif ($randnb == 4) {
	$bg = "https://i.ytimg.com/vi/9fUAt3bMIek/maxresdefault.jpg";
} elseif ($randnb == 5) {
	$bg = "https://i.imgur.com/TRBbGNE.jpg";
}

if(!is_dir("sessions")) {
	mkdir("sessions");
}

file_put_contents("sessions/app".$appid.".css", str_replace(" gray ", " url('".$bg."') ", file_get_contents("app.css")));

$discordusrname = substr(file_get_contents("http://discordapp.com/channels/@me"), stripos(file_get_contents("http://discordapp.com/channels/@me"), "username") + 10, stripos(file_get_contents("http://discordapp.com/channels/@me"), "</span>"));

/*echo file_get_contents("https://discordapp.com/oauth2/authorize?response_type=code&client_id=159985415099514880&redirect_uri=http%3A%2F%2Fmee6.xyz%2Fconfirm_login&scope=identify+guilds&state=Mteyig7lDXvB1hamBJ6Pzd9RSUcx1D&access_type=offline");*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>WeAreOne - Discord :: SHOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://cdn.discordapp.com/icons/295959610043531264/bacf9f595ceb76ccb0b90794ec2ea70f.png">
	<link rel="stylesheet" type="text/css" href="sessions/app<?php echo $appid; ?>.css">
	<script src="app.js"></script>
	<script src="https://use.fontawesome.com/8fa51b8daf.js"></script>
	<link href="https://use.fontawesome.com/8fa51b8daf.css" media="all" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
	<div class="widget center">
		<center>
			<div class="blur"></div>
			<table border="0" style="width: 600px; height: 500px;">
				<tr>
					<td style='width: 600px;'>
						<center>
							<div id="login" class="text center" style="border-radius: 3.5px; width: 600px; background: rgba(0,0,0,.5);">
								<h1>Bine ai venit.</h1>
								<p>Te rugam sa iti scrii Discord#Tag-ul:</p><br>
								<input type="text" placeholder="ItsM#3333" id="discordtag" class="input-login">
    						</div>
						</center>
					</td>
					<td>
						<div>
						</div>
					</td>
				</tr>
			</table>
		</center>
	</div>
	<a id="discord-recom" style="z-index: 11;" onmouseover='toggleTurnOver(1)' onmouseout='toggleTurnOver(2)' href="http://discord.gg/29hbQCx" target="_blank">
		<img src="https://cdn.discordapp.com/icons/295959610043531264/bacf9f595ceb76ccb0b90794ec2ea70f.png" style="border-radius: 10px;width: 60px;">
	</a>
	<div id="notif-bar" onclick="toggleNotifs();"></div>
	<div id="after-login"></div>
	<div id='turnover'></div>
	<script id="step-1" type="text/javascript">
		pushNotification("Bine ai revenit! Sesiunea ta a fost salvata via cookie-uri.");

		var updater = setInterval(updateStuff, 1);
		var discorduser = document.getElementById('discordtag').value;

		function updateStuff() {
			discorduser = document.getElementById('discordtag').value;

			if(discorduser.length - discorduser.indexOf("#") == 5 && discorduser.indexOf("#") > 0 && isNaN(discorduser.substr(discorduser.indexOf("#") + 1)) == false) {
				document.getElementById('login').innerHTML = "@" + discorduser.substr(0, discorduser.indexOf("#")) + ", pagina se incarca!";
				/*document.getElementsByTagName('body')[0].innerHTML = document.getElementsByTagName('body')[0].innerHTML + "<script id='step-2' type='text/javascript'>";
				document.getElementById("step-1").innerHTML = "//script was already used";*/
				document.getElementById('after-login').style.height = "100%";
				document.getElementById('after-login').innerHTML = "<center>You are now logged in as " + discorduser + "</center>";
				pushNotification("Pentru ca te-ai logat in perioada [BETA], ai primit 100 de puncte gratuit.");
			}
		}

		function toggleTurnOver(y) {
			var x = document.getElementById('turnover');
			if(y == 1) {
				x.style.zIndex = "1000";
				x.style.background = "rgba(0, 0, 0, .7)";
			} else {
				x.style.zIndex = "-10";
				x.style.background = "rgba(0, 0, 0, 0)";
			}
		}
	</script>
</body>
</html>