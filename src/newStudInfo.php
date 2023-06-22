
<html>

<button type="submit" class="back-button"  ><a href="adminPage.php" >BACK</a></button>

<!-- multistep form -->
<form id="msform" action="StudInfodb.php" method="POST" >
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Personal Details</li>
    <li>Academic Details</li>
    <li>External Details</li>
  </ul>
  <!-- fieldsets -->

  

  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <input type="text" name="name" placeholder="Student Name" />
    <input type="text" name="fname" placeholder="Father's Name" />
    <input type="text" name="mname" placeholder="Mother's Name" />
    <input type="date" name="dob" placeholder="Date of Birth" />
    <select name="gender">
		<option value="none" selected>Gender</option> 
    	<option value="Male">Male</option>
    	<option value="Female">Female</option>
    	<option value="Female">Others</option>
    </select>
	<input type="text" name="email" placeholder="Email" />
    <input type="tel" name="studphone" placeholder="Student's Phone" maxlength="10"  />
    <input type="tel" name="parentphone" placeholder="Parent's Phone" maxlength="10"  />
    <input type="text" name="address" placeholder="Address" maxlength="200" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>


  <fieldset>
    <h2 class="fs-title">Academic Details</h2>
    <input type="text" name="usn" placeholder="USN" />
	<input type="float" name="sslcmarks" placeholder="SSLC Marks" />
	<input type="float" name="pumarks" placeholder="PUC/Diploma Marks" />
	<input type="float" name="one" placeholder="1st Sem CGPA" />
	<input type="float" name="two" placeholder="2nd Sem CGPA" />
	<input type="float" name="three" placeholder="3rd Sem CGPA" />
	<input type="float" name="four" placeholder="4th Sem CGPA" />
	<input type="float" name="five" placeholder="5th Sem CGPA" />
	<input type="float" name="six" placeholder="6th Sem CGPA" />
	<input type="float" name="seven" placeholder="7th Sem CGPA" />
	<input type="float" name="eight" placeholder="8th Sem CGPA" />
	<!-- <select name="sem">
		<option value="none" selected>Sem Marks</option> 
    	<option value="one">1st</option>
    	<option value="two">2nd</option>
    	<option value="three">3rd</option>
		<option value="four">4th</option>
		<option value="five">5th</option>
		<option value="six">6th</option>
		<option value="seven">7th</option>
		<option value="eight">8th</option>
    </select> -->
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <input type="button" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">Additional Details</h2>
    <input type="text" name="achievement" placeholder="Achievements" />
    <input type="text" name="skill" placeholder="Skills " />
    <textarea name="extra" placeholder="Extra Curricular Activities "></textarea>
    <input type="button" name="previous" class="previous action-button" value="Previous" />
    <button type="submit" class="action-button">Submit </button>
  </fieldset>
</form>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</html>



<style>


/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {margin: 0; padding: 0;}

html {
	height: cover;
	/*Image only BG fallback*/
	background-image: url("https://graphicloot.com/wp-content/uploads/2016/02/36.jpg");
	background-size : 100% 100%;
	/*background = gradient + image pattern combo*/
	/* background: linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6)); */
}

body {
	font-family: montserrat, arial, verdana;
}

.back-button {
	padding: 15px 32px;
  	text-align: center;
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	
}

/*form styles*/
#msform {
	width: 700px;
	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea, #msform select {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}

/*buttons*/

#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}


</style>

<script>



    


//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

</script>


<!-- Code for navigation bar 

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #04AA6D;
  color: black;
}



</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div>

<div style="padding-left:16px">
  <h2>Top Navigation Example</h2>
  <p>Some content..</p>
</div>

</body>
</html> -->

