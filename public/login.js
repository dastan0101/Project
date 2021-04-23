$(document).ready(function(){
	$("#btn").click(function(){
		$(".regester").animate({
			width:'toggle'
		});
	});
});



function login(name){
    document.getElementById("user_name").innerHTML = name;
}


$(document).ready(function(){
    $("#btn1").click(function(){
      $(".regester1").slideToggle("slow");
    });
  });

  
function login1(name){
    document.getElementById("user_name1").innerHTML = name;
}
