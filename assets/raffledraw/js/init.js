window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-86567323-32');

$(function() {
	setTimeout(function(){
		startRaffleAniamtion(1);
	}, 2000);

	setTimeout(function(){
		$('#firstDrumHolder').raffleDrumAnimation('result');
	}, 6000);
	setTimeout(function(){
		$('#showWinner').html("<marquee><div class='alert alert-success container' role='alert' id='winner'>"+ drawprize() +"</div></marquee>");
	}, 9000);

	$('#example1').click(function(){
		startRaffleAniamtion(1);
	});

	$('#example2').click(function(){
		startRaffleAniamtion(2);
	});

	$('#example3').click(function(){
		startRaffleAniamtion(3);
	});

	$('#toggleSpin').click(function(){
		$('#firstDrumHolder').raffleDrumAnimation('toggleSpin');
	});

	$('#startSpin').click(function(){
		$('#firstDrumHolder').raffleDrumAnimation('spin');
	});

	$('#stopSpin').click(function(){
		$('#firstDrumHolder').raffleDrumAnimation('stop');
	});

	$('#showResult').click(function(){
		$('#firstDrumHolder').raffleDrumAnimation('result');
	});

	$('#destroy').click(function(){
		$('#firstDrumHolder').raffleDrumAnimation('destroy');
	});
});

function startRaffleAniamtion(con){
	if(con == 1){
		$('#firstDrumHolder').raffleDrumAnimation(
			{
				itemImage:['http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_a_1.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_a_2.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_a_3.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_a_4.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_a_5.svg'],
				displayNumber:true
			}
		);
	}else if(con == 2){
		$('#firstDrumHolder').raffleDrumAnimation(
			{
				itemImage:['http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_b_1.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_b_2.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_b_3.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_b_4.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ball_b_5.svg'],
			}
		);
	}else if(con == 3){
		$('#firstDrumHolder').raffleDrumAnimation(
			{
				itemImage:['http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ticket1.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ticket2.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ticket3.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ticket4.svg',
							'http://localhost:8080/JooLottery/assets/raffledraw/raffledrumanimation/assets/ticket5.svg'],
				itemWidth:25
			}
		);
	}

	$('#firstDrumHolder').raffleDrumAnimation('spin');
}
function getdate(){
	var d = new Date();

	var month = d.getMonth()+1;
	var day = d.getDate();

	var output = d.getFullYear() + '-' +
			((''+month).length<2 ? '0' : '') + month + '-' +
			((''+day).length<2 ? '0' : '') + day;
		alert(output);
	}
function gettime(){
	var dt = new Date();
	var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
	alert(time);
}
