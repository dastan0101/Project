<!DOCTYPE html>
<html>
<head>
	<title>About our school</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script type="text/javascript" src="about.js"></script>
</head>
<body id="body_2">
	<div id="videos">
		<video id="video_1" height="200" width="200" controls>
			<source src="D:\sdu video\sdukz+InstaUtility_-00_Bz0p2JQFA0G_11-.mp4" type="video/mp4">
		</video>
		<div id="btns">
			<button class="btn-info video_btn" onclick="auto()">AutoPlay</button>
			<button class="btn-info video_btn" onclick="loop()">Loop</button>
			<button class="btn-info video_btn" onclick="mute()">Mute</button>
		</div>
		<iframe width="560" height="315" src="https://www.youtube.com/embed/VvR_9UBcNEs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>

	<div id="photos">
		<embed id="img1" onmouseenter="light(1)" class="posit" type="image/jpeg" src="img_about\img_1.jpeg" width="200" height="300">
		<embed id="img2" onmouseenter="light(2)" class="posit" type="image/jpeg" src="img_about\img_2.jpeg" width="300" height="200">
		<embed id="img3" onmouseenter="light(3)" class="posit" type="image/jpeg" src="img_about\img_3.jpeg" width="300" height="200">

	</div>

	
</body>
</html>