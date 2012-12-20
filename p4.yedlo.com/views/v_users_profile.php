<script>
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


if (g == "male") {
	document.getElementById("myResults").innerHTML = calf;
	}
else{
	document.getElementById("myResults").innerHTML = calff;
	}
}

</script>	
<div id="reg">

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
	Sex: <?=$user->gender?><br>
	Activity Level: <?=$user->activity?>	<br>
	Daily Calories Needed: <span id="myResults"></span>
</div>