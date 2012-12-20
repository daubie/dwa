<script type="text/javascript">
//********I wanted to have more targeting choices for recipes - but I haven't found a Free API that provides the ingredients and nutritional info.  I'm not ready to pay yet, so I made a //simple javascript function to pass a variable into the JSON url to show the idea.******
		 $(document).ready(function(){
		 var now = <?=$user->weight ?>;
		 var then = <?=$user->gweight ?>;
		 var diff = now - then;
		 var food = "";
		 if (diff <= 10) {
			food = "beef";}
		 else if (diff <= 11 && diff <= 20) {
		 food = "chicken";}
		 else if (diff <= 21 && diff <= 30) {
		 food = "fish";}
		 else {food = "chocolate"}
		 var request = 'http://api.punchfork.com/recipes?key=477f7c96c7812bc8&q=' + food + '&count=10&jsonp=?';
			 $.getJSON(request, function(data) {
				var output="";
				var title1="";
				var url="";
				for (var i in data.recipes) {
					output+="<a href='" + data.recipes[i].source_url + "'>" + data.recipes[i].title + "</a><br><br>";
				
				}
		 
				output+="";
				document.getElementById("try").innerHTML=output;
				});
		});
//*******Users can see calories needed to sustain current weight - using BMR formula in Javascript**********
function bmr(){
var w= <?= $user->weight ?>;
var g= "<?= $user->gender ?>";
var h= <?= $user->height ?>;
var a= "<?= $user->activity ?>";
var b= <?= $user->birthday ?>;
var cala= 6.3*w;
var calb= 66 + cala;
var calc= 12.9*h;
var cald= calc+calb;
var cale= 6.8*b;
var calf= cald - cale;
var calaa= 4.3*w;
var calbb= 655 + calaa;
var calcc= 4.7*h;
var caldd= calcc+calbb;
var calee= 4.7*b;
var calff= caldd - calee;

var mas = calf.toPrecision(4);
var fem = calff.toPrecision(4);

var sedm = calf*.20;
var sedm2 = sedm + calf;
var sedf = calff*.20;
var sedf2 = sedf + calff;

var litem = calf*.30;
var lite2 = litem + calf;
var litef = calff*.30;
var litef2 = litef + calff;

var modm = calf*.40;
var modm2 = modm + calf;
var modf = calff*.40;
var modf2 = modf + calff;

var hevm = calf*.50;
var hevm2 = hevm + calf;
var hevf = calff*.50;
var hevf2 = hevf + calff;


if (a == "sedentary" && g == "male") {
	document.getElementById("myResults").innerHTML = sedm2;
	}
else if(a == "light" && g == "male") {
	document.getElementById("myResults").innerHTML = lite2;
	}
else if(a == "moderate" && g == "male") {
	document.getElementById("myResults").innerHTML = modm2;
	}
else if(a == "heavy" && g == "male") {
	document.getElementById("myResults").innerHTML = hevm2;
	}
else if(a == "sedentary" && g == "female") {
	document.getElementById("myResults").innerHTML = sedf2;
	}
else if(a == "light" && g == "female") {
	document.getElementById("myResults").innerHTML = litef2;
	}
else if(a == "heavy" && g == "female") {
	document.getElementById("myResults").innerHTML = hevf2;
	}
else{
	document.getElementById("myResults").innerHTML = modf2;
	}
}

</script>	
<div id="mainBar">

	<h1>Members Area</h1>
	
	<hr>
	
	<div id=reg_welcome">
		
		<p>
			<strong>Hey, <?=$user->first_name?></strong></br></br>
		
			Welcome to the members area, where your data is put to use.  Try our recipes, catered to your daily caloric needs.
		</p>

	</div>

	<h2 style="float:left">Your Stats</h2> <a style="float:left;line-height:60px; margin-left:10px;" href="/users/edit_profile">edit</a>
	<div style="clear:both"><!-- --></div>
	<hr>
	
	Age: <?=$user->birthday?><br>
	Height: <?=$user->height?>"<br>
	Weight: <?=$user->weight?>lbs<br>
	Goal Weight: <?=$user->gweight?>lbs<br>
	Sex: <?=$user->gender?><br>
	Activity Level: <?=$user->activity?>	<br>
	Daily Calories Needed: <span id="myResults"></span>
</div>

<div id="sideBar"><h3 style="text-align:center;padding:4px">Try these recipes selected just for you!</h3><br><hr>
<div style="padding:20px" id="try"></div>
</div>

<div style="clear:both"><!-- --></div>
<div>

