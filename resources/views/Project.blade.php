<!DOCTYPE html>
<html>
<head>
	<title>Заңғар-М</title>
	<link rel="shortcut icon" href="img/7.jpeg">
	<link rel="stylesheet" type="text/css" href="Project.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="servises.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<link rel="stylesheet" type="text/css" href="blog.css">
	<script type="text/javascript" src="Project_1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style type="text/css">
		.content {
		    padding: 16px;
		}

		.sticky {
		    position: fixed;
		    top: 0;
		    width: 100%;
		}

		.sticky + .content {
		    padding-top: 102px;
		}
	</style>
</head>
<body>
	<div id="home">
		<div id="top_part">
			<div class="rows">
				<img id="1" class="size-img-2" src="img/1.jpeg">
				<img id="2" class="size-img-1" src="img/2.jpeg">
				<img id="3" class="size-img-1" src="img/3.jpeg">
				<img id="4" class="size-img-2" src="img/4.jpeg">
			</div>
			<div class="rows">
				<img id="5" class="size-img-1" src="img/5.jpeg">
				<img id="6" class="size-img-1" src="img/6.jpeg">
				<img id="7" class="size-img-2" src="img/7.jpeg">
				<img id="8" class="size-img-1" src="img/8.jpeg">
				<img id="9" class="size-img-1" src="img/9.jpeg">
			</div>
			<div class="rows">
				<img id="10" class="size-img-2" src="img/10.jpeg">
				<img id="11" class="size-img-1" src="img/11.jpeg">
				<img id="12" class="size-img-1" src="img/12.jpeg">
				<img id="13" class="size-img-2" src="img/13.jpeg">
			</div>
		<!----------------------------------- For mobile version --------------------------------->
			<div id="menu-mobile">
				<img src="https://thumbs.dreamstime.com/b/web-site-menu-icon-flat-style-vector-illustration-gray-white-icon-made-79323204.jpg">
				<h2><strong>ZANGAR-M</strong></h2>
			</div>
			<div id="panel" class="panel-mobile">
				<button class="btn-menu"><a href="#home">Home</a></button>
				<button class="btn-menu"><a href="\about">About</a></button>			
				<button class="btn-menu"><a href="#services">Services</a></button>			
				<button class="btn-menu"><a href="#blogg">Blog</a></button>			
				<button class="btn-menu"><a href="#contact">Contact</a></button>			
				<button class="btn-menu"><a href="\login">Log In</a></button>
			</div>

			<div id="mobile">
				<img src="img/7.jpeg">
			</div>
		<!-- ---------------------------------------------------- -->

			<div id="menu">
				<button class="btn-menu"><a href="#home">Home</a></button>
				<button class="btn-menu"><a href="\about">About</a></button>			
				<button class="btn-menu"><a href="#services">Services</a></button>			
				<button class="btn-menu"><a href="#blogg">Blog</a></button>			
				<button class="btn-menu"><a href="#contact">Contact</a></button>			
				<button class="btn-menu"><a href="\login">Log In</a></button>			
			</div>

		
		</div>
	</div>
	<div class="content">
		<div id="services">
		<div id="service">
		<div id="left_part">
			<div class="lp-btns" onclick="get_img(1)"  onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<div class="left"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-award-fill" fill="currentColor" 
							xmlns="http://www.w3.org/2000/svg">
						  	<path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 		12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
						  	<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
						</svg></div>
				<div class="right">First Tab Section</div>
			</div>
			<div class="lp-btns" onclick="get_img(2)"  onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<div class="left"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill" fill="currentColor" 
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
						</svg></div>
				<div class="right">Second Tab Section</div>
			</div>
			<div class="lp-btns" onclick="get_img(4)" onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<div class="left"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-shield-fill-check" fill="currentColor" 
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 .5c-.662 0-1.77.249-2.813.525a61.11 61.11 0 0 0-2.772.815 1.454 1.454 0 0 0-1.003 1.184c-.573 4.197.756 7.307 2.368 9.365a11.192 11.192 0 0 0 2.417 2.3c.371.256.715.451 1.007.586.27.124.558.225.796.225s.527-.101.796-.225c.292-.135.636-.33 1.007-.586a11.191 11.191 0 0 0 2.418-2.3c1.611-2.058 2.94-5.168 2.367-9.365a1.454 1.454 0 0 0-1.003-1.184 61.09 61.09 0 0 0-2.772-.815C9.77.749 8.663.5 8 .5zm2.854 6.354a.5.5 0 0 0-.708-.708L7.5 8.793 6.354 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
						</svg></div>
				<div class="right">Third Tab Section</div>
			</div>
			<div class="lp-btns" onclick="get_img(3)"  onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<div class="left"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-mic-fill" fill="currentColor" 
							xmlns="http://www.w3.org/2000/svg">
							<path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
							<path fill-rule="evenodd" d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
						</svg></div>
				<div class="right">Title Fourth comes up</div>
			</div>
			<div class="lp-btns" onclick="get_img(4)"  onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<div class="left"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-globe" fill="currentColor" 
							xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4H2.255a7.025 7.025 0 0 1 3.072-2.472 6.7 6.7 0 0 0-.597.933c-.247.464-.462.98-.64 1.539zm-.582 3.5h-2.49c.062-.89.291-1.733.656-2.5H3.82a13.652 13.652 0 0 0-.312 2.5zM4.847 5H7.5v2.5H4.51A12.5 12.5 0 0 1 4.846 5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5H7.5V11H4.847a12.5 12.5 0 0 1-.338-2.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12H7.5v2.923c-.67-.204-1.335-.82-1.887-1.855A7.97 7.97 0 0 1 5.145 12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11H1.674a6.958 6.958 0 0 1-.656-2.5h2.49c.03.877.138 1.718.312 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12h2.355a7.967 7.967 0 0 1-.468 1.068c-.552 1.035-1.218 1.65-1.887 1.855V12zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5h-2.49A13.65 13.65 0 0 0 12.18 5h2.146c.365.767.594 1.61.656 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4H8.5V1.077c.67.204 1.335.82 1.887 1.855.173.324.33.682.468 1.068z"/>
						</svg></div>
				<div class="right">Fifth Title goes here</div>
			</div>
		</div>
		<div id="right_part">
			<div id="right_part_img">
				<img id="image_info" src="img/1.jpeg">
			</div>
			<div id="right_part_info"  onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)">
				<p id="info_1">A school is an educational institution designed to provide learning spaces and learning environments for the teaching of students (or "pupils") under the direction of teachers. Most countries have systems of formal education, which is commonly compulsory.</p>
			</div>
		</div>
		</div>
	</div>

	<div id="blogg">
			<div class="blogClass" onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)" id="blog_1">
				There are many opportunities to go in for sports in our school. Our school has a gym, a sports ground, a football field, a swimming pool, and other sports facilities. There are many different sports groups: table tennis, swimming, athletics, football, volleyball, wrestling, and rhythmic gymnastics. Many pupils of our school attend these sports groups.
			</div>
			<div class="blogClass" onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)" id="blog_2">
				In our school we have also painting group, dance group, theatre group and rock group. All these groups are very popular and many pupils attend them.

				The teachers in our school are very skilled. They try to give us all their knowledge and awake our interest to their subjects and to self study. Besides the school subjects, our teachers tell us about everything, about different problems of our world, such as ecology, nature protection, climat changes etc.
			</div>
			<div class="blogClass" onmouseout="setBgOpacity(this,0)" onmouseover="setBgOpacity(this, 0.9)" id="blog_3">
				There is a good tradition in our school. Every year people who graduated our school come here to meet their teachers and classmates. These meetings take place every first Saturday of February.

				I think that school years are very important for every person. It’s a period of becoming adult, achieving knowledges, and choosing your way in life. Often school friends remain your friends for all your life. So I’ll never forget my school, my teachers, and my classmates.
			</div>
	</div>

	<div class="div">
        <div class="div1">
            <img src="https://cdn.pixabay.com/photo/2017/08/25/09/19/los-angeles-2679490_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2018/08/03/11/18/rain-3581659_960_720.jpg" alt="">
            <img src="https://cdn.pixabay.com/photo/2020/12/01/10/03/cathedral-5793622_960_720.jpg" alt="">
            <img src="https://www.bclocalnews.com/wp-content/uploads/2020/09/22578706_web_200909-SAA-schools-mask-use_1.jpg" alt="">
        </div>
	    <div class="words">
            <h3>ZANGAR-M</h3>
            <p>The main task is to apply the Object-Oriented design approach and rewrite the whole Pizza Ordering System (Projects 1 and 2). Having UML diagrams that are correct and complete, classes that are fully implemented, and a testing sample is among the general requirements. <br><br> The purpose of the project is to provide you with the opportunity to review and practice some of the fundamental principles of object-oriented development. </p>
	    </div>
	</div>


	<hr>
	<div  id="contact">
		<div id="container_of_contact">
			<a href="https://www.instagram.com/d_a_s_t_a_n_01/"><img class="size_of_contact" id="contact_1" src="img/instagram.png"></a>
			<a href="https://www.facebook.com/dastan.talipov.90"><img class="size_of_contact" id="contact_2" src="img/facebook.png"></a>
			<a href="87478831801"><img class="size_of_contact" id="contact_3" src="img/whatsapp.png"></a>
			<a href="https://mail.google.com/mail/u/0/#inbox"><img class="size_of_contact" id="contact_4" src="img/gmail.png"></a>
		</div>
	</div> 

	<!-- <div id="map">
		<h2>Our address</h2>
		<div id="map_address">
			<address>The Turkestan region, Kentau town, village Juinek, street Turkestan,<br> № 123</address >
			<object data="C:\Users\user\Desktop\SDU\Course 2\Semester 1\Web programming\Laboratory\Project\map.html" id="object_1">	
		</div>
			
	</div> -->

	<div class="demo">

<h3>Contact Form</h3>

<div class="container">
  <form method = 'post' action="{{ route('sendemail')}}">
  {{ csrf_field() }}
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Email address</label>
    <input type="text" id="lname" name="email" placeholder="Your email..">


    <label for="subject">Message</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Send">
  </form>
</div>
	</div>
	
	</div>
	<script type="text/javascript">
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("menu");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}

		$(document).ready(function(){
		  $("#menu-mobile").click(function(){
		    $("#panel").slideToggle("slow");
		  });
		});

	</script>
	
</body>
</html>
