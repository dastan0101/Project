
// function big(a){
// 	var image = document.getElementById(a);
//     $(image).animate({
//     	height: '+=50px',
//     	width: '+=50px'
//     }, 
//     "fast"
//     );
// }
// function small(a){
// 	var image = document.getElementById(a);
//     $(image).animate({
//     	height: '-=50px',
//     	width: '-=50px'
//     }, 
//     "fast"
//     );
// }

function get_img(a) {
	if (a == 1) {
		document.getElementById("image_info").src = "img/1.jpeg";
        document.getElementById('info_1').innerHTML = 'A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.';

	}
	else if (a == 2) {
		document.getElementById("image_info").src = "img/2.jpeg";
        document.getElementById('info_1').innerHTML = 'School is an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.';

	}
	else if (a == 3) {
        document.getElementById('info_1').innerHTML = 'is an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.';
		      
        document.getElementById("image_info").src = "img/3.jpeg";

	}
	else if (a == 4) {
        document.getElementById('info_1').innerHTML = 'an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.';
	       
    	document.getElementById("image_info").src = "img/4.jpeg";
	}
	else if (a == 5) {
        document.getElementById('info_1').innerHTML = 'educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.';
	       
    	document.getElementById("image_info").src = "img/5.jpeg";
	}
}
function light(n) {
	if (n == 1) {
		document.getElementById('blog_1').background.opa
	}
}

function RGBA(red,green,blue,alpha) {
    this.red = red;
    this.green = green;
    this.blue = blue;
    this.alpha = alpha;
    this.getCSS = function() {
        return "rgba("+this.red+","+this.green+","+this.blue+","+this.alpha+")";
    }
}

// store a copy of the color
var bgColor = new RGBA(0,0,255,0.5);

function setBgOpacity(elem, opac) {
    bgColor.alpha = opac;
    elem.style.backgroundColor = bgColor.getCSS();
}
