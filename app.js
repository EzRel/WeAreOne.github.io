var notifysound = new Audio('notification.mp3');
var notifications = 0;
var notificationsdex = " ";
var isMinimized = 0;
var updateNotifications = setInterval(displayNotifications, 1);

function pushNotification(content) {
	notifysound.play();
	//document.getElementById('notif-bar').innerHTML = document.getElementById('notif-bar').innerHTML + '<div class="notification">' + content + '</div><br>';
	notificationsdex = notificationsdex  + '<div onclick="toggleNotifs();" class="notification">' + content + '</div><br>';
	notifications++;
}

function displayNotifications() {
	if(isMinimized == 1) {
		document.getElementById('notif-bar').innerHTML = "<div onclick='toggleNotifs();' style='height: 20px;width: 20px;background:  red; color: #fff; border-radius: 100%;font-size: 16px;'><center>" + notifications + "</center></div>";
	} else {
		document.getElementById('notif-bar').innerHTML = notificationsdex;
	}
}

function minimizeNotifs() {
	notificationsdex = document.getElementById('notif-bar').innerHTML;
	isMinimized = 1;
}

function maximizeNotifs() {
	isMinimized = 0;
}

function toggleNotifs() {
	if(document.getElementById('notif-bar').innerHTML == notificationsdex) {
		minimizeNotifs();
	} else {
		maximizeNotifs();
	}
}