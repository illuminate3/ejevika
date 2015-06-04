<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="token" content="{{csrf_token()}}">
	<link href="/css/style.css" rel="stylesheet">
	<link href="/css/jquery.fancybox.css" rel="stylesheet">
	<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="/js/slider.js"></script>
	<script type="text/javascript" src="/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>
	
</head>

<body>

<div class="top-menu-wrapper">
	<menu class="top-menu">	
		<div class="auth-block">
			<!--start component auth-->
			@widget('UserLink')
			<!--end component auth-->
		</div>	
		<div class="order-table">
			<!--start component order table-->
				<a class="order-ico"><img src="/images/order-ico.png"><span>Забронировать столик</span></a>
			<!--end component auth-->
		</div>
		<div class="back-call">
			<!--start component back call-->
				<a class="back-call-ico"><img src="/images/phone-ico.png"><span>Заказать обратный звонок</span></a>
			<!--end component back call-->
		</div>
		<div class="cart-block">
			<!--start component cart-->
				@widget('CartMini')
			<!--end component cart-->
		</div>
	</menu>
</div>
<div class="header-wrapper">
	<header class="header">
		<section class="top-info">
			<div class="header-left">
				<a href="/"><img src="/images/logo.png"></a>
			</div>
			<div class="header-center">
				<span class="devis">Зарядись энергией ягод</span>
			</div>
			<div class="header-right">
				<div class="table-row">
					<div class="table-cell">
						<!--start include area-->
							<span>Доставка ежедневно</span><br><span class="info-time">8:00 - 24:00</span>
						<!--end include aread-->
					</div>
					<div class="table-cell">
						<ul class="social-ico">
							<li><a class="vk-ico" href="#"></a></li>
							<li><a class="fb-ico" href="#"></a></li>
							<li><a class="tw-ico" href="#"></a></li>
							<li><a class="inst-ico" href="#"></a></li>
							<li><a class="ok-ico" href="#"></a></li>
						</ul>
					</div>
				</div>
				<div class="table-row">
					<div class="table-cell">
						<!--start include area-->
							<span>г. Краснодар ул. <br>Краснодармейская 33/1</span>
						<!--end include area-->
					</div>
					<div class="table-cell">
						<span class="phone-number">+7(918) 123-45-67</span>
					</div>
				</div>
			</div>
		</section>
	</header><!-- .header-->
</div>
<div class="catalog-menu-wrapper">
	<!--start component catalog menu-->
	<nav class="catalog-menu">
		<ul>
			<li><a href="#">Главная</a></li>
			<li><a href="#">Акции</a></li>
			<li><a href="#">Бонусная программа</a></li>
			<li><a href="#">Доставка блюд</a></li>
			<li><a href="#">Отзывы</a></li>
			<li><a href="#">Кафе-бар "Ежевика"</a></li>
		</ul>
		<div class="search-wrapper">
			<!--start component search-->
				<input type="text"><input type="submit" value="">
			<!--end component search-->
		</div>
	</nav>
	<!--end component catalog menu-->
</div>
@widget('Slider')
<div class="wrapper">
	<main class="content @if(Request::path()!=='/') second-page @endif">
		<div class="left-menu">
			{!!Menu::handler('catalog')->render()!!}
		</div>
		<div class="content-center">
			@widget('SectionList')
			@yield('content')
		</div>
	</main><!-- .content -->

</div><!-- .wrapper -->
<section class="bottom-wrapper">
	<div class="bottom">
		<!--start include area-->
		<div class="about">
			<br>
			<h1 style="color:#ac1848;font-size:19px;">Классическая кухня и суши. Доставка еды в Краснодаре.</h1><br>
			<p style="color:#afafaf">В процессе созревания плоды ежевики приобретают сначала зелёный, потом буроватый, а затем яркий красно-бурый цвет. Зрелые плоды ежевики имеют чёрный (чёрно-фиолетовый) цвет.<br><br>

			Оба вида представляют собой полукустарники, стебли и побеги которых усажены шипами; стеблевые побеги у них гибкие, то приподнимающиеся, то лежачие; у Rubus caesius листья тройчатые, нижние иногда даже с 5 листочками; у Rubus fruticosus листья состоят из 5 и 7 листочков.<br><br>

			У Rubus caesius плоды чёрные с сизым налётом, поэтому кое-где их называют бирюзой; у Rubus fruticosus налёта нет. Сок плодов тёмно-красный; вкус кислый, слегка смолистый; в южных странах эти плоды сладковаты. Могут быть использованы для приготовления варенья. Оба вида очень распространены в умеренных и тёплых странах Европы до Скандинавии и западной части Архангельской области включительно.
		</div>
		
		<!--end include area-->
		
		<!--start component news list on main page-->
		<div class="last-news">
			<div class="last-news-list">
				<ul>
					<li><span class="day">10</span><br><span class="month">декабря</span></li>
					<li><a href="">Название события</a></li>
				</ul>
				
				<ul>
					<li><span class="day">10</span><br><span class="month">декабря</span></li>
					<li><a href="">Название события</a></li>
				</ul>
				
				<ul>
					<li><span class="day">10</span><br><span class="month">декабря</span></li>
					<li><a href="">Название события</a></li>
				</ul>
			</div>
			<a class="see-detail-btn" href="">все события</a>
		</div>
		<!--end compoment news list on main page-->
	</div>
</section>
<footer>
	<div class="footer-wrapper">
		<div class="footer-left">
			<span>
				      ООО “Эврис”, 2014<br>
					info@ejevikacafe.ru<br>
					Публичная оферта
			</span>
		</div>
		<div class="footer-center">
			<ul class="social-ico">
				<li><a class="vk-bottom-ico" href="#"></a></li>
				<li><a class="fb-bottom-ico" href="#"></a></li>
				<li><a class="tw-bottom-ico" href="#"></a></li>
				<li><a class="inst-bottom-ico" href="#"></a></li>
				<li><a class="ok-bottom-ico" href="#"></a></li>
			</ul>
			<span>г. Краснодар, ул. Красноармейская 33/1</span>
		</div>
		<div class="footer-right">
			<span>Создание сайта:</span><a href=""> ALIENS.PRO<br>
						Информация о проекте
			</a>
		</div>
	</div>
</footer>
	@yield('js')

</body>
</html>