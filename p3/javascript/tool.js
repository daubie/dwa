        $(document).ready(function() {
                $('#mix').click(function() {
					$('#box2').animate({
					'opacity' : '0.4',
					'margin-left' : '-=322'
					});
				});
                $('#unmix').click(function() {
					$('#box2').animate({
					'opacity' : '1',
					'margin-left' : '0'
					});
				});
				
				$('#opacity_plus').click(function() {
					$('#box2').css({
					'opacity' : '+=.25'
					 });
				});
				
				$('#opacity_minus').click(function() {
					$('#box2').css({
					'opacity' : '-=.25'
					 });
				});
				$('#up').click(function() {
					$('#box2').css({
					'margin-top' : '-=1'
					 });
				});
				$('#down').click(function() {
					$('#box2').css({
					'margin-top' : '+=1'
					 });
				});
				$('#left').click(function() {
					$('#box2').css({
					'margin-left' : '-=1'
					 });
				});
				$('#right').click(function() {
					$('#box2').css({
					'margin-left' : '+=1'
					 });
				});
				$('#reset').click(function() {
					$('#box2').css({
					'margin-left' : '0',
					'margin-top' : '0',
					'opacity' : '1'
					 });
				});
});