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