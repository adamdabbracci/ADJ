



$(window).load(function(){
	var screenwidth = window.innerWidth;
	var screenheight = window.innerHeight;
	
	
	
	
	//===================render display====================
		
	//size the canvas
	$('#handcanvas').css({
		width: screenwidth ,
		height: screenheight * .9
						 });
	
	//set those variables
	var handcanvaseheight = $('#handcanvas').height();
	var handcanvaswidth = $('#handcanvas').width();
	
	
		
	//draw the cards
	$("canvas").drawImage({
	  source: "http://upload.wikimedia.org/wikipedia/commons/9/9b/Poker-sm-212-Ks.png",
	  x: 5, y: 5,
	  height: 105,
	  width: 75,
	  fromCenter: false
	});
	$("canvas").drawImage({
	  source: "http://upload.wikimedia.org/wikipedia/commons/9/9b/Poker-sm-212-Ks.png",
	  x: 130, y: 5,
	  height: 105,
	  width: 75,
	  fromCenter: false
	});


	
	
	
	//AJAX
	//client
	$('.check').click(function(){
		var playernum = $(this).attr('value');
		$.ajax({
			url: '../server/dealer.php',
			data: 'player=' + playernum,
			dataType: 'json',
			success: function(response){
				console.log(response);
				$('#display').text('Place your bets');
			}
			   });
							   });
	//host
	$('#board').click(function(){
		$.ajax({
			url: '../server/dealer.php',
			data: 'player=board',
			dataType: 'json',
			success: function(response){
				console.log(response);
				for (i=0;i <= 4;i++){
					$('#display').append('Value:  ' + response[i].value + ' of ' + response[i].suit + '<br>');
				};
			}
			   });

							   });
	
	
	
						
						
						});//jquery