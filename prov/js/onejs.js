function init() {
	sec = 0;
	setInterval(tick, 1000);
}
function tick() {
	sec++;
	document.getElementById("timer").childNodes[0].nodeValue = sec;
}
init();
function textdelete() {
let getId = document.getElementById("command");
getId.select();
document.execCommand('cut');
}
