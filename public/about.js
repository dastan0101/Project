function auto() {
	var video = document.getElementById('video_1');
	if (video.autoplay == false) {
		video.autoplay = true;
		video.play();
	}
	else if (video.autoplay == true) {
		video.autoplay = false;
	}
}
function mute() {
	var video = document.getElementById('video_1');

	if (video.muted == false) {
		video.muted = true;
	}
	else if (video.muted == true) {
		video.muted = false;
	}
}
function loop() {
	var video = document.getElementById('video_1');

	if (video.loop == false) {
		video.loop = true;
	}
	else if (video.loop == true) {
		video.loop = false;
	}
}

function light(a) {
	var image = document.getElementById('img' + a);
	image.css.border = '3px solid blue';
}