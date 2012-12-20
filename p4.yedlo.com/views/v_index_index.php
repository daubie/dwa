<script type="text/javascript">
		 $(document).ready(function(){
			 $.getJSON('http://api.punchfork.com/recipes?key=477f7c96c7812bc8&q=healthy,chicken,rosemary&count=1&jsonp=?', function(data) {
				var output="";
				var title1="";
				var url="";
				for (var i in data.recipes) {
					output+="<img src='" + data.recipes[i].thumb + "'/>";
					title1+= data.recipes[i].title + "<br><br>" + "Get it free at: <br> <a style='font-size:12pt' target='_blank' href='" + data.recipes[i].source_url + "'>" + data.recipes[i].source_name + "</a>";
				}
		 
				output+="";
				document.getElementById("todaysRecPic").innerHTML=output;
				document.getElementById("title").innerHTML=title1;
				});
		});
	</script>
	

	<h1>Today's Featured Recipe</h1>
	<hr>
	<div id="mainBar">
	<div id="title"></div></br>
	<div id="todaysRecLink"></div>
	<div id="todaysRecPic"></div>

	<div style="clear:both"><!-- --></div>
	</div>

	<div id="sideBar">
	<h2 style="text-align:center">Calculators</h3>
	<hr>
	</div>