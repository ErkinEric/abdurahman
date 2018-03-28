<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<title></title>
			<link rel="stylesheet" href="style.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script>
			$(function() {
			var sldr = $('.sldr'),
			sldrContent = sldr.html(),
			slideWidth = $('.sl_ctr').outerWidth(),
			slideCount = $('.sldr img').length,
			prv_b = $('.prv_b'),
			nxt_b = $('.nxt_b'),
			sldrInterval = 3300,
			animateTime = 1000,
			course = 1,
			margin = - slideWidth;
			$('.sldr img:last')
			.clone().prependTo('.sldr');$('.sldr img')
			.eq(1).clone().appendTo('.sldr');$('.sldr')
			.css('margin-left',-slideWidth);
			function nxt_bSlide(){interval=window.setInterval(animate,sldrInterval)}
			function animate(){
			if(margin==-slideCount*slideWidth-slideWidth){sldr.css({'marginLeft':-slideWidth});margin=-slideWidth*2}
			else if(margin==0&&course==-1){sldr.css({'marginLeft':-slideWidth*slideCount});margin=-slideWidth*slideCount+slideWidth}
			else{margin=margin-slideWidth*(course)}sldr.animate({'marginLeft':margin},animateTime)}
			function sldrStop(){window.clearInterval(interval)}prv_b.click(function(){
			if(sldr.is(':animated')){return false}
			var course2=course;course=-1;animate();course=course2});nxt_b.click(function(){
			if(sldr.is(':animated')){return false}
			var course2=course;course=1;animate();course=course2});sldr.add(nxt_b).add(prv_b)
			.hover(function(){sldrStop()},nxt_bSlide);nxt_bSlide()});
		</script>
		</head>
		<body>

			<div class="wrapper">
				<div class="header">
					<div class="headleftside">
						<p class="logotype"></p>
					</div>
					<div class="headrightside">
						<nav>
							<a href="" class="headmenu">Главная</a>
							<a href="" class="headmenu">О нас</a>
							<a href="" class="headmenu">Новости</a>
							<a href="" class="headmenu">Реклама</a>
							<a href="" class="headmenu">Контакты</a>
						</nav>
					</div>
				</div>
				<div class="content">
					<div class="sl_ctr">
					<div class="sldr">  
						<img src="images/1.jpg" alt="">
						<img src="images/2.jpg" alt="">
						<img src="images/3.jpg" alt="">
						<img src="images/4.jpg" alt="">
					</div>
					<div class="prv_b"></div>
					<div class="nxt_b"></div>
				</div>
				<div class="infobox">
					
				</div>
				</div>

				<div class="footer">
					<div class="menu">
						<a href="" class="footermenu"><p>Главная</p></a/>
						<a href="" class="footermenu"><p>О нас</p></a/>
						<a href="" class="footermenu"><p>Новости</p></a/>
						<a href="" class="footermenu"><p>Разделы</p></a/>
						<a href="" class="footermenu"><p>Реклама</p></a/>
						<a href="" class="footermenu"><p>Контакты </p></a/>
					</div>
					<div class="copyright">© 2018 ADU information.Все права защищены</div>
					<div class="social">
						<a href="http://twitter.com" target="_blanck"><div class="twit"></div></a>
						<a href="http://fb.com" target="_blanck"><div class="face"></div></a>
						<a href="http://instagram.com" target="_blanck"> <div class="insta"></div></a>
						<a href="http://youtube.com" target="_blanck"><div class="youtub"></div></a>
					</div>
				</div>

			</div>

		</body>
	</html> 