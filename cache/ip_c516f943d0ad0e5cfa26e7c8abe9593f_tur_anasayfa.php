<!DOCTYPE html>
<html lang="ru">
<head><meta http-equiv="Content-Type" content="text/html; charset=big5">
	<title>
			
			Blue Eye Tour Турции			</title>
	
	
		
		<meta name="description" content="BlueEyeTour: Tours & Attractions, Tickets, Things to Do, Tours around Turkey">
		<meta name="keyword" content="
	Blue,Eye,Travel,Tour,Cappadocia,İstanbul,Tours,Blue Eye Tour,Blue Eye Travel,Fethiye,Ephesus,Nemrut,daily tours, night activity,pamukkale,blue eye travel
">
		
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="Back end: Yusuf Öcalmış, Front end: Muhammed Teuvajukov">

	<meta name="description" content="
	Blue Eye Tour Турции">
	<meta name="google-site-verification" content="Ntznq4vtKJfxUHqObo7B3dARMAPU7fo2FQG8BQ_bCA4" />
	<meta name="yandex-verification" content="691771445a0b9baf" />
	<meta name="keyword" content="
	Blue,Eye,Travel,Tour,Cappadocia,İstanbul,Tours,Blue Eye Tour,Blue Eye Travel,Fethiye,Ephesus,Nemrut,daily tours, night activity,pamukkale,blue eye travel
">

<meta name="msapplication-TileColor" content="#1A2B49"> 
<meta name="theme-color" content="#1A2B49">
<meta name="msapplication-navbutton-color" content="#1A2B49">
<meta name="apple-mobile-web-app-status-bar-style" content="#1A2B49"> 
<link rel="apple-touch-icon" sizes="180x180" href="https://www.blueeyetour.com/assets_user/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://www.blueeyetour.com/assets_user/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://www.blueeyetour.com/assets_user/img/favicon/favicon-16x16.png">
<link rel="manifest" href="https://www.blueeyetour.com/assets_user/img/favicon/site.webmanifest">
<script>

	var
	oncki_gun_secmzns 	= 'Вы не можете выбрать предыдущий день.',
	onc_bas_t_sec 		= 'Вы должны сначала выбрать дату начало.',
	ltfn_yolcu_scnz 	= 'Пожалуйста, выберите количество пассажиров.',
	a_18yaskck 			= 'Если вам не исполнилось 18 лет, вам запрещено путешествовать самостоятельно.',
	ltfn_kisi_dgru 		= 'Пожалуйста, выберите правильное количество людей.',
	ism_bos_olmz 		= 'Вы не можете оставить свое имя пустым.',
	ism_kisa 			= 'Ваше имя слишком короткое.',
	ism_uzun			= 'Ваше имя слишком длинное.',
	kllnc_bos_olmz		= 'Вы не можете оставить имя пользователя пустым.',
	kllnc_ad_kisa		= 'Имя пользователя слишком короткое.',
	kllnc_ad_uzun		= 'Имя пользователя слишком длинное.',
	sfre_bs_olmz		= 'Вы не можете оставить пароль пустым.',
	sfre_ck_kisa		= 'Пароль слишком короткий.',
	sfre_ck_uzun		= 'Пароль слишком длинный.',
	sfre_ayni_dagel		= 'Пароли не совпадают',
	ltfn_emal_adrs_dgru	= 'Пожалуйста, напишите адрес электронной почты правильно.',
	bslk_gir			= 'Тема',
	brya_yazn			= 'Пишите здесь',
	yrm_ck_kisa			= 'Отзыв слишком короткий.',
	ltfn_zyrtc_dldr		= 'Пожалуйста, заполните поля для посетителей.',
	ltfn_eksk_dldr		= 'Пожалуйста, заполните все поля',
	tmm					= 'Ок',
	eksik				= 'missing areas',
	yetiskin			= 'Взрослый',
	cocuk				= 'Ребёнок',
	bebek				= 'Ребенок';

	var is_babe;
	var iptalTarih = [];


	var datepicker_i18 = {
		cancel			: 'Закрыть',
		clear			: 'Очистить',
		done			: 'Ок',
		months			: [
		'Январь', 
		'Февраль', 
		'Март', 
		'Апрель', 
		'Май', 
		'Июнь',
		'Июль', 
		'Август',
		'Сентябрь',
		'Октябрь',
		'Ноябрь',
		'Декабрь'
		],

		monthsShort		: [
		'Январь', 
		'Февраль', 
		'Март', 
		'Апрель', 
		'Май', 
		'Июнь',
		'Июль', 
		'Август',
		'Сентябрь',
		'Октябрь',
		'Ноябрь',
		'Декабрь'
		],

		weekdays		: [
		'Воскресенье',
		'Понедельник',
		'Вторник',
		'Среда',
		'Четверг',
		'Пятница',
		'Суббота'
		],
		
		weekdaysShort 	: [
		'Вс.',
		'Пн.',
		'Вт.',
		'Ср.',
		'Чт.',
		'Пт.',
		'Сб.'
		],
		
		weekdaysAbbrev	: ['В', 'П', 'В', 'С', 'Ч', 'П', 'С']	};
	window.base_url = 'https://www.blueeyetour.com/';
	window.i18n = {
		error: 'Упс, что то пошло не так.',
		cart: {
			code_not_correct: 'Неправильный промокод',
			enter_correct_code: 'Пожалуйста напишите правильный промокод.',
			same_lider_person: 'Тот же лидер'
		},
		rezerv: {
			enter_correct_card: 'Пожалуйста напишите правильные данные..',
			cart_update_ok: 'Ваша карта успешно обновлена..',
			cancellation_ok: 'Успешно, вы получите письмо об отмене в течение 24 часов.',
			change_date_ok: 'Успешно, вы получите информационное письмо.',
			post_comment_ok: 'Успешно, вы можете посетить страницу тура.'
		}
	}


</script>	<!-- materialize.css -->
	<link type="text/css" rel="stylesheet" href="https://www.blueeyetour.com/assets_user/css/materialize.min.css" 
	media="screen,projection" defer/>
	<!-- master.css -->
	<link rel="stylesheet" type="text/css" href="https://www.blueeyetour.com/assets_user/css/master.css" />
</head>

<body>
	<header>
	<style>i{font-style: normal;}</style>
	<nav>
		<div class="nav-wrapper container main-menu">
			<a href="https://www.blueeyetour.com/" class="brand-logo">
				<img src="https://www.blueeyetour.com/assets_user/img/blue_eye_logo.svg" alt="Blue Eye Logo">
				<div class="l_t">
					<h3>Blue Eye</h3>
						
						<p>
							Не откладывайте свои праздничные мечты						</p>
									</div>
			</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger">
				<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-menu-24px.svg'></span>			</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li>
					<a href="https://www.blueeyetour.com/">
						<span class="nav__icon">
							<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-directions_bus-24px.svg'></span>						</span>
						Тур					</a>
				</li> 
				<!--		<li>
					<a href="https://www.blueeyetour.com/otels">
						<i class="material-icons left">hotel</i>
						Отель					</a>
				</li-->
				<li>
					<a href="https://www.blueeyetour.com/help">
						<span class="nav__icon">
							<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-help-24px.svg'></span>						</span>

						Помощь					</a>
				</li>
				<!-- Giriş Yapılmış -->

				<li>
					<a href="https://www.blueeyetour.com/cart">
						<span class="nav__icon">
							<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-local_grocery_store-24px.svg'></span>						</span>
						Корзина					</a>
				</li>
							
				<!-- Giriş Yapılmamış -->
				<li class="big">
					<a>
						<span class="nav__icon">
							<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-person-24px.svg'></span>						</span>
						Вход					</a>
					<div class="minDrop">
						<a href="https://www.blueeyetour.com/giris/kayit">
							Вход						</a>
						<a href="https://www.blueeyetour.com/giris/kayit">
							Регистрация						</a>
					</div>
				</li>
					</ul>
	</div>
</nav>
<div class="sidenav" id="mobile-demo" data-tab="false">
		
		<!-- Giriş Yapılmamış -->
		<ul>
			<li>
				<a href="https://www.blueeyetour.com/">
					<span class="sidenav__icon">
						<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-directions_bus-24px.svg'></span>					</span>
					Тур				</a>
			</li>
			<li>
				<a href="#" role="button" data-target="lng_crs" class="sidenav-trigger">
					<span class="sidenav__icon">
						<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-language-24px.svg'></span>					</span>
					Ru 
					/ 
					Euro 
					(€)
				</a>
			</li>
			<li>
				<a href="https://www.blueeyetour.com/cart">
					<span class="sidenav__icon">
						<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-local_grocery_store-24px.svg'></span>					</span>
					Корзина				</a>
			</li>
			<li>
				<a href="https://www.blueeyetour.com/giris/kayit">
					<span class="sidenav__icon">
						<span data-url='https://www.blueeyetour.com/assets_user/img/icons/outline-person-24px.svg'></span>					</span>
					Вход					/ 
					Регистрация				</a>
			</li>
			<li class="divider" tabindex="-1"></li>
			<li>
				<a href="https://www.blueeyetour.com/help">
					<span class="sidenav__icon">
						<span data-url='https://www.blueeyetour.com/assets_user/img/icons/help-24px.svg'></span>					</span>
					Помощь				</a>
			</li>
		</ul>
	
	</div>
<a href="#" data-target="lng_crs" class="l-g_c-s sidenav-trigger">
	Ru	/ 
	Euro 
	(€)
</a>
<div id="lng_crs" class="sidenav" tabindex="-1">
	<h5>Language</h5>
	<p class="divider" tabindex="-1"></p>
	<div class="lng_crs--l">
		<a href="https://www.blueeyetour.com/lang/index/Tr" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/turkey.svg" 
			alt="Türkçe Flag">
			Türkçe		</a>
		<a href="https://www.blueeyetour.com/lang/index/Eng" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/united-kingdom.svg" 
			alt="English Flag">
			English		</a>
		<a href="https://www.blueeyetour.com/lang/index/Ru" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/russia.svg" 
			alt="Pусский Flag">
			Pусский		</a>
		<!--
		<a href="https://www.blueeyetour.com/" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/china.svg" alt="中文 Flag">
			中文		</a>
		<a href="https://www.blueeyetour.com/" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/india.svg" alt="भारतीय Flag">
			भारतीय		</a>
		<a href="https://www.blueeyetour.com/" class="waves-effect">
			<img src="https://www.blueeyetour.com/assets_user/img/flags/spain.svg" alt="Español Flag">
			Español		</a>
	-->
</div>
<h5>Currency</h5>
<p class="divider" tabindex="-1"></p>
<div class="lng_crs--c">
	<a href="https://www.blueeyetour.com/currency/index/dollar" class="waves-effect">
		<span>$</span> 
		USD Dollars
	</a>
	<a href="https://www.blueeyetour.com/currency/index/ruble" class="waves-effect">
		<span>₽</span> 
		Pубль
	</a>
	<a href="https://www.blueeyetour.com/currency/index/euro" class="waves-effect">
		<span>€</span> 
		Euro
	</a>
	<a href="https://www.blueeyetour.com/currency/index/tl" class="waves-effect">
		<span>₺</span> 
		Türk Lirası
	</a>
	<a href="https://www.blueeyetour.com/currency/index/pound" class="waves-effect">
		<span>£</span> 
		Pound
	</a>
	<a href="https://www.blueeyetour.com/currency/index/dinar" class="waves-effect">
		<span>د.ك</span> 
		Dinnar
	</a>
</div>
</div></header>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '461011591258150');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=461011591258150&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	<main>
		<script>
			(function navFix() {
				var getNav;
				var mq = window.matchMedia('(max-width: 768px)');

				if (mq.matches) {
					getNav = document.querySelector('nav > .nav-wrapper');
				} else {
					getNav = document.querySelector('nav > .nav-wrapper:not(.main-menu)');
				}

				if (getNav == null) {
					return false;
				}

				var getHeight = getNav.offsetHeight;
				document.querySelector('main').style.marginTop = getHeight + 'px';
			})();
		</script>
		<section class="rezerv">
			<div class="parallax-container">
				<div class="parallax">
						
						<img src="https://www.blueeyetour.com/assets/resimler/home/1559f-cappadocia-turkey.jpg">
					</div>
					<style>
						.buy-ticket .btn.waves-effect:not(.modal-close){display:-webkit-flex;display:-moz-flex;display:-ms-flex;display:-o-flex;display:flex;-ms-align-items:center;align-items:center;justify-content:space-around;text-align:center;font-weight:500;background-color:var(--light-blue);border-radius:32px;margin-top:0;width:100%}
					</style>
					<div class="rezerv-inner">
						<div class="buy-ticket card-panel">
							<p>
	<span style="font-family:roboto,sans-serif;"><strong><span style="font-size:48px;">Исследуйте Турцию</span></strong></span></p>
<p>
	<span style="font-family:roboto,sans-serif;"><span style="font-size:26px;">Бронирование туров и мероприятий по всей Турции.</span></span></p>
						
						<!--<ul class="i_t-o_t tabs">
							<li class="tab">
								<a class="active" href="#tur_tab">
									Тур								</a>
							</li>
						</ul>-->
						<div id="tur_tab">
							<form action="https://www.blueeyetour.com/Search/Word" method="Post" class="buy-form">
								<div class="ticket-form-inner">
									<div class="input-field">
										<input id="where" name="word" type="text" class="autocomplete">
										<label for="where">
											Города или отели										</label>
									</div>
									<div class="input-field takvim">
										<input id="start_date"  name="bas_t" type="text" class="datepicker">
										<label for="start_date">
											Дата начала										</label>
									</div>
									<div class="input-field takvim">
										<input id="end_date" name="bit_t" type="text" class="datepicker">
										<label for="end_date">
											Дата окончания										</label>
									</div>
									<div class="input-field">
										<button type="submit" value="" class="btn waves-effect">
											Поиск										</button>
									</div>
								</div>
							</form>
						</div>
						<div id="otel_tab" style="display: none;">
							<form action="https://www.blueeyetour.com/otels/Search/Word" method="Post" class="buy-form">
								<div class="ticket-form-inner">
									<div class="input-field">
										<input id="where" name="word" type="text" class="autocomplete">
										<label for="where">
											Города или отели										</label>
									</div>
									<div class="input-field takvim">
										<input id="start_date"  name="bas_t" type="text" class="datepicker">
										<label for="start_date">
											check-in
										</label>
									</div>
									<div class="input-field takvim">
										<input id="end_date" name="bit_t" type="text" class="datepicker">
										<label for="end_date">
											check-out
										</label>
									</div>
									<div class="input-field">
										<button type="submit" value="" class="btn waves-effect">	Поиск									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="specs">
		<div class="container center-align">
			<div class="specs-inner">
				<div class="specs-inner__spec spec">
					<h6 class="spec__title">
						<span data-url="https://www.blueeyetour.com/assets_user/img/icons/explore-24px.svg"></span>
						Best Selection					</h6>
					<p class="spec__text">
						Our strict screening process means that yor're only seeing the best quality tours, activities and attractions.					</p>
				</div>
				<div class="specs-inner__spec spec">
					<h6 class="spec__title">
						<span data-url="https://www.blueeyetour.com/assets_user/img/icons/thumb_up-24px.svg"></span>
						Best Price Garantee					</h6>
					<p class="spec__text">
						Found a lower price elsewhere? We'll match it.					</p>
				</div>
				<div class="specs-inner__spec spec">
					<h6 class="spec__title">
						<span data-url="https://www.blueeyetour.com/assets_user/img/icons/security-24px.svg"></span>
						Secure Payments					</h6>
					<p class="spec__text">
						We use stripe to make your payments safe and secure.					</p>
				</div>
				<div class="specs-inner__spec spec">
					<h6 class="spec__title">
						<span data-url="https://www.blueeyetour.com/assets_user/img/icons/contact_support-24px.svg"></span>
						24/7 Support					</h6>
					<p class="spec__text">
						We are available to answer any questions or concerns via online chat, phone or email.					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="place">
		<div class="container center-align">
			<h4>
				Лучшие туристические поездки			</h4>

			

			<div class="places-inner">
			<div class="places-main">
				<div class="places-main__image">
					<img
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/04837-stocksnap_f90e2e0647.jpg"
					class="lazy" alt="Каппадокия" />
				</div>
				<div class="places-main-text">				<h4>Каппадокия</h4>

				<p></p>
				<a class="btn" href="
				https://www.blueeyetour.com/Categories/detail/Cappadocia">
				Узнайте больше			</a>
		</div>
	</div>
	<div class="places-other">
		<div class="places-row">
			<!-- İndirim varsa -->
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Hot-Air-Balloon-Flight-standard-flight"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/a35df-hot-air-balloons.jpg"
					class="lazy" alt="Полёт на воздушном шаре (стандартный полёт)" />
				</div>
				<div class="other-text-inner">
					<a>
						Полёт на воздушном шаре (стандартный полёт)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								7								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																120 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Hot-Air-Balloon-Flight-comfort-flight"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/2e1ad-hot-air-balloons-1920x1080.jpg"
					class="lazy" alt="Полет на воздушном шаре (комфортный полёт)" />
				</div>
				<div class="other-text-inner">
					<a>
						Полет на воздушном шаре (комфортный полёт)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																180 € 
							</p>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="places-row">				<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Hot-Air-Balloon-Flight-deluxe-flight"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/c75d9-hot-air-balloon-21.jpg"
					class="lazy" alt="Полёт на воздушном шаре (полёт люкс)" />
				</div>
				<div class="other-text-inner">
					<a>
						Полёт на воздушном шаре (полёт люкс)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																290 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Cappadocia-Camel-Tour1-hour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/4a42e-deve-turu-11.jpg"
					class="lazy" alt="Каппадокия на верблюде (1 час)" />
				</div>
				<div class="other-text-inner">
					<a>
						Каппадокия на верблюде (1 час)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																30 € 
							</p>
						</div>
					</div>
				</div>
			</div>
						






	</div>

</div>
</div>



			<div class="places-inner reverse">
			<div class="places-main">
				<div class="places-main__image">
					<img
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/cfeae-antalya-1_720x520.jpg"
					class="lazy" alt="Антальи" />
				</div>
				<div class="places-main-text">				<h4>Антальи</h4>

				<p></p>
				<a class="btn" href="
				https://www.blueeyetour.com/Categories/detail/Antalya">
				Узнайте больше			</a>
		</div>
	</div>
	<div class="places-other">
		<div class="places-row">
			<!-- İndirim varsa -->
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Perge-Aspendos-Side-Tour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/4989b-aspendos.jpg"
					class="lazy" alt="Тур по Перге, Аспендос, Сайд " />
				</div>
				<div class="other-text-inner">
					<a>
						Тур по Перге, Аспендос, Сайд 					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																49 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Termessos--Duden-Waterfalls-Tour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/630c4-duden-waterfall-1920x1080.jpg"
					class="lazy" alt="Тур по водопаду Термессос и Дюден" />
				</div>
				<div class="other-text-inner">
					<a>
						Тур по водопаду Термессос и Дюден					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																44 € 
							</p>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="places-row">				<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Demre-Myra--Kekova-Sunken-City-Tour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/51c92-kekova.jpg"
					class="lazy" alt="Городская экскурсия по Демре, Майра и затонувший город Кекова" />
				</div>
				<div class="other-text-inner">
					<a>
						Городская экскурсия по Демре, Майра и затонувший город Кекова					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																60 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Olympos--Chimera-Tour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/6fa6b-olympos-antalya.jpg"
					class="lazy" alt="Олимпос и тур химеры" />
				</div>
				<div class="other-text-inner">
					<a>
						Олимпос и тур химеры					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																45 € 
							</p>
						</div>
					</div>
				</div>
			</div>
						






	</div>

</div>
</div>



			<div class="places-inner">
			<div class="places-main">
				<div class="places-main__image">
					<img
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/42cd0-traverten.jpg"
					class="lazy" alt="Памуккале" />
				</div>
				<div class="places-main-text smoth">				<h4>Памуккале</h4>

				<p></p>
				<a class="btn" href="
				https://www.blueeyetour.com/Categories/detail/Pamukkale">
				Узнайте больше			</a>
		</div>
	</div>
	<div class="places-other">
		<div class="places-row">
			<!-- İndirim varsa -->
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Pamukkale-Tour-Full-Day"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/6ce62-traverten2.jpg"
					class="lazy" alt="Тур по Памуккале (на целый день)" />
				</div>
				<div class="other-text-inner">
					<a>
						Тур по Памуккале (на целый день)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																50 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Pamukkale-Tour-Full-Day-from-Kusadasi"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/5a313-traverten2.jpg"
					class="lazy" alt="Экскурсия по Памуккале на целый день (из Кушадасы)" />
				</div>
				<div class="other-text-inner">
					<a>
						Экскурсия по Памуккале на целый день (из Кушадасы)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																70 € 
							</p>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="places-row">				<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Aphrodisias-Tour-Full-Day"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/5be43-aphrodisias-05.jpg"
					class="lazy" alt="Тур по Афродизиас (на полный день)" />
				</div>
				<div class="other-text-inner">
					<a>
						Тур по Афродизиас (на полный день)					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																75 € 
							</p>
						</div>
					</div>
				</div>
			</div>
							<div class="other-main
								">
				
				<a href="https://www.blueeyetour.com/Tour/detail/Laodicea-Kaklik-Cave-Honaz-Waterfall-Full-Day-Tour"></a>
				<div class="other-image">
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/turlar/08c46-laodicea_temple-01.jpg"
					class="lazy" alt="Тур на целый день по Лаодикьи, пещере Каклык, водопад Хоназ " />
				</div>
				<div class="other-text-inner">
					<a>
						Тур на целый день по Лаодикьи, пещере Каклык, водопад Хоназ 					</a>
					<div class="bottom-inner">
						<div class="other-left">
							<div class="stars">



								<span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span><span data-url='https://www.blueeyetour.com/assets_user/img/icons/star_border.svg'></span>



							</div>
							<span>
								0								Комментарии							</span>
						</div>
						<div class="other-right">
							<p>
								Начальная цена							</p>
							<p class="">
																75 € 
							</p>
						</div>
					</div>
				</div>
			</div>
						






	</div>

</div>
</div>

	
</div>
</section>
		<section class="abone-inner">
			<div class="container">
				<h4>
					У нас есть отличные советы 				</h4>
				<p class="under-header">
					Подпишитесь на вдохновляющие новости про путешествия.				</p>
				<div class="container">
					<div class="row abone-row">
						<div class="col">
							<form id="abone" method="post" action="https://www.blueeyetour.com/giris/abone">
								<div class="input-field">
									<input id="email" type="email" name="email" required="required">
									<label for="email">
										Адрес электронной почты									</label>
								</div>
								<div class="input-field">
									<button class="btn waves-effect blue darken-1" type="submit">
										Подписка									</button>	
								</div>
							</form>
						</div>
					
					</div>
					<div class="container">
						<p class="abone-aciklama">
							Регистрируясь, вы даёте согласие на получение рекламных электронных писем. Вы можете отменить свою подписку в любое время. Для получения дополнительной информации прочитайте наше заявление о конфиденциальности:						</p>
					</div>
				</div>
			</div>
		</section>
<section class="top-places">
	<div class="container center-align">
		<h4>Самые популярные места</h4>
		<div class="top-places-inner">

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Ankara-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/d9ab9-anitkabir-05.jpg" 
							class="lazy"
							alt="Анкара Турс">
						</figure>
						<h5>Анкара Турс</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Konya-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/58caf-konya-1-720x520.jpg" 
							class="lazy"
							alt="Конья Турс Конья">
						</figure>
						<h5>Конья Турс Конья</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Nemrut-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/df452-adiyaman.jpg" 
							class="lazy"
							alt="Немрут Туры">
						</figure>
						<h5>Немрут Туры</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Sanliurfa-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/add45-goebeklitepe.jpg" 
							class="lazy"
							alt="Санлыурфа Тур">
						</figure>
						<h5>Санлыурфа Тур</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Fethiye-Tours-and-Activities">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/41d90-fethiye-paragliding-3.jpg" 
							class="lazy"
							alt="Фетхие Тур">
						</figure>
						<h5>Фетхие Тур</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Canakkale-Daily-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/56026-gallipoli-3.jpg" 
							class="lazy"
							alt="Чанаккале Ежедневные Туры">
						</figure>
						<h5>Чанаккале Ежедневные Туры</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Pamukkale-Daily-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/c7828-traverten.jpg" 
							class="lazy"
							alt="Памуккале Ежедневные Туры">
						</figure>
						<h5>Памуккале Ежедневные Туры</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/istanbul-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/af641-istanbul-tour-back.jpg" 
							class="lazy"
							alt="Стамбул Тур">
						</figure>
						<h5>Стамбул Тур</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Antalya-Daily-Tours">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/2ea22-antalya-1_720x520.jpg" 
							class="lazy"
							alt="Анталия Ежедневные Туры">
						</figure>
						<h5>Анталия Ежедневные Туры</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Cappadocia-Tours-and-Activities">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/3ee88-devrent-vadisi-3-kopya_720x520.jpg" 
							class="lazy"
							alt="Каппадокия Ежедневные Туры">
						</figure>
						<h5>Каппадокия Ежедневные Туры</h5>
					</a>
				</div>

			
				
				
				<div class="top-places-item">
					<a href="https://www.blueeyetour.com/Category/detail/Hot-Air-Balloon-Flights">
						<figure>
							<img 
							src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
							data-src="https://www.blueeyetour.com/assets/resimler/sehirler/c5ff1-hot-air-balloons_720x520.jpg" 
							class="lazy"
							alt="Полеты на воздушном шаре">
						</figure>
						<h5>Полеты на воздушном шаре</h5>
					</a>
				</div>

					</div>
		<a class="btn blue darken-1 waves-effect show-more">
			Еще		</a>
	</div>
</section>
<section class="top-places top-destination">
	<div class="container center-align">
		<h4>
			Самые популярные города		</h4>
		<div class="top-places-inner">
						<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Adiyaman"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/b09da-adiyaman.jpg"
					class="lazy"
					alt="адыяман ">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>адыяман </h5>

					<span>2					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Sanliurfa"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/6d708-goebeklitepe.jpg"
					class="lazy"
					alt="Шанлыурфа">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Шанлыурфа</h5>

					<span>2					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Trabzon"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/cc62c-uzungol_2.jpg"
					class="lazy"
					alt="Трабзон">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Трабзон</h5>

					<span>					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Konya"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/ca334-konya-1.jpg"
					class="lazy"
					alt="Конья">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Конья</h5>

					<span>2					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Safranbolu"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/8154a-safranbolu-evleri-720x520.jpg"
					class="lazy"
					alt="Сафранболу">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Сафранболу</h5>

					<span>					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Ankara"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/02909-anitkabir-05.jpg"
					class="lazy"
					alt="Анкара">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Анкара</h5>

					<span>2					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Canakkale"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/1f6f9-truva-ati.jpg"
					class="lazy"
					alt="Чанаккале">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Чанаккале</h5>

					<span>4					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Turkey-Package-Tours-"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/e9acb-ege-3019017_1920.jpg"
					class="lazy"
					alt="Турция пакета Туры ">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Турция пакета Туры </h5>

					<span>					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/istanbul"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/6b2e0-river-4873198_1920.jpg"
					class="lazy"
					alt="Стамбул">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Стамбул</h5>

					<span>6					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Pamukkale"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/42cd0-traverten.jpg"
					class="lazy"
					alt="Памуккале">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Памуккале</h5>

					<span>6					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Antalya"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/cfeae-antalya-1_720x520.jpg"
					class="lazy"
					alt="Антальи">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Антальи</h5>

					<span>4					Тур и отель				</span>
			</figcaption>

		</div>
					<div class="top-countries-item">
				<a href="https://www.blueeyetour.com/Categories/detail/Cappadocia"></a>
				<figure>
					<img 
					src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
					data-src="https://www.blueeyetour.com/assets/resimler/sehirler/04837-stocksnap_f90e2e0647.jpg"
					class="lazy"
					alt="Каппадокия">
				</figure>
				<figcaption class="top-destination-comment">
					<h5>Каппадокия</h5>

					<span>17					Тур и отель				</span>
			</figcaption>

		</div>
			

	</div>
	<a class="btn blue darken-1 waves-effect show-more-countries">
		Еще	</a>
</div>
</section>
<section class="top-tabs">
	<div class="container">
		<div class="main-t-e">
			<div class="col s12">
				<ul class="tabs">
					<li class="tab col s3">
						<a class="active" href="#topEvents">
							Самые популярные города						</a>
					</li>
					<li class="tab col s3">
						<a href="#topCountry">
							10 лучших городов						</a>
					</li>
				</ul>
			</div>
			<div id="topEvents" class="col s12">
				<div class="topEvents">
					<h5>
						Популярные в BlueEye					</h5>	
					<div class="t-e-inner">
						<div class="t-e-r">
														<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Cabaret-Night">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Ночное Кабаре Шоу</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Turkish-Bath-">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Хаммам</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/White-Water-Rafting-Fethiye">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Рафтинг</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Sunset-Moonlight-Cruise">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Прогулка по лунному свету на закате</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Camel-Riding">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур на верблюде (Фетхие)</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Olympos-Cabin-Cruise-4-Days">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур Фетхие Олимпос - Синий Круиз  на 4 дня</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Marmaris-icmeler-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по Мармарису и  Ичмелер </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Scuba-Diving-Fethiye">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Погружение с аквалангом в Фетхие</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Horse-Riding-Tours">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Конный тур (Фетхие)</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Jeep-Safari">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Сафари на джипе</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/12-Islands-Daily-Boat-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Дневной тур на лодке по 12 островам </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Saklikent-Tlos-Yakapark-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по Саклыкент Тлос Якапарк </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Fethiye-Dalyan-Mud-Bath-">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Грязевые ванны Дальян</span>
							</a>
							</div><div class="t-e-l">														<a href="https://www.blueeyetour.com/Tour/detail/3-Days-Safranbolu-Amasra-Tour-From-istanbul">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>3-дневный тур по Сафранболу и Амасре из Стамбула</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/2-Days-Safranbolu-Amasra-Tour-From-istanbul">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>2-дневный тур по Сафранболу - Амасра из Стамбула</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Daily-Uzungol-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по Узунгёль</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Daily-Ayder-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по Айдеру</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Giresun-Ordu-Cable-Car-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по Гиресун Орду</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Sumela-Karaca-Zigana-Hamsikoy-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур  Сюмела – Караджа – Зигана – Хамсикёй </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Daily-Hidirnebi--Cal-Cave-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Озеро Хыдырнеби Чал Sera </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Daily-Trabzon-City-Tour">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Дневной Тур по Трабзону</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Green-Bursa-Tour-From-Istanbul">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Тур по зелёной Бурсе (из Стамбула)</span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Ankara-Day-Tour-Private-From-Cappadocia">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>(Специальный) тур на целый день из Каппадокии в Анкару </span>
							</a>
																					<a href="https://www.blueeyetour.com/Tour/detail/Ankara-Daily-Tour-Private">
								<!-- icon implementation in function.js/425 -->
								<span class="t-e__icon"></span>
								<span>Дневной Тур в Анкару (Специальный)</span>
							</a>
															

						</div>

					</div>
					<p>
						Вам интересно, какие еще события у нас?						<a href="https://www.blueeyetour.com/All_categories">
							Выберите туры и события по городу.						</a>
					</p>
				</div>
			</div>
			<div id="topCountry" class="col s12">
				<div class="topCountry">
					<h5>
						10 лучших городов					</h5>

					<section class="top-places">
						<div class="top-places-inner">

								

							<div class="top-places-inner__div">
								<a href="https://www.blueeyetour.com/Categories/detail/Adiyaman"></a>
								<figure>
									<img 
									src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
									data-src="https://www.blueeyetour.com/assets/resimler/sehirler/b09da-adiyaman.jpg"
									class="lazy"
									alt="адыяман " />
								</figure>
								<h5>адыяман </h5>
							</div>

								

							<div class="top-places-inner__div">
								<a href="https://www.blueeyetour.com/Categories/detail/Sanliurfa"></a>
								<figure>
									<img 
									src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
									data-src="https://www.blueeyetour.com/assets/resimler/sehirler/6d708-goebeklitepe.jpg"
									class="lazy"
									alt="Шанлыурфа" />
								</figure>
								<h5>Шанлыурфа</h5>
							</div>

								

							<div class="top-places-inner__div">
								<a href="https://www.blueeyetour.com/Categories/detail/Trabzon"></a>
								<figure>
									<img 
									src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
									data-src="https://www.blueeyetour.com/assets/resimler/sehirler/cc62c-uzungol_2.jpg"
									class="lazy"
									alt="Трабзон" />
								</figure>
								<h5>Трабзон</h5>
							</div>

								

						</div>
					</section>

					<div class="t-e-inner justify-center">
						
							



						
							



						
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Konya"><span>2</span><span>
								Конья							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Safranbolu"><span></span><span>
								Сафранболу							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Ankara"><span>2</span><span>
								Анкара							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Canakkale"><span>4</span><span>
								Чанаккале							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Turkey-Package-Tours-"><span></span><span>
								Турция пакета Туры 							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/istanbul"><span>6</span><span>
								Стамбул							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Pamukkale"><span>6</span><span>
								Памуккале							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Antalya"><span>4</span><span>
								Антальи							</span></a>	
							



						
							

							<a href="https://www.blueeyetour.com/Categories/detail/Cappadocia"><span>17</span><span>
								Каппадокия							</span></a>	
							



											</div>

				</div>
			</div>
		</div>
	</div>
</section>
</main>

<div class="fixed-action-btn">
	<a class="btn-floating btn-large whatsapp-green tooltipped" data-tooltip="Как мы можем вам помочь?" href="https://wa.me/905435052677">
		<svg version="1.1" fill="white" id="whatsapp-green__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 90 90" xml:space="preserve">
			<g>
				<path id="WhatsApp" d="M90,43.841c0,24.213-19.779,43.841-44.182,43.841c-7.747,0-15.025-1.98-21.357-5.455L0,90l7.975-23.522
				c-4.023-6.606-6.34-14.354-6.34-22.637C1.635,19.628,21.416,0,45.818,0C70.223,0,90,19.628,90,43.841z M45.818,6.982
				c-20.484,0-37.146,16.535-37.146,36.859c0,8.065,2.629,15.534,7.076,21.61L11.107,79.14l14.275-4.537
				c5.865,3.851,12.891,6.097,20.437,6.097c20.481,0,37.146-16.533,37.146-36.857S66.301,6.982,45.818,6.982z M68.129,53.938
				c-0.273-0.447-0.994-0.717-2.076-1.254c-1.084-0.537-6.41-3.138-7.4-3.495c-0.993-0.358-1.717-0.538-2.438,0.537
				c-0.721,1.076-2.797,3.495-3.43,4.212c-0.632,0.719-1.263,0.809-2.347,0.271c-1.082-0.537-4.571-1.673-8.708-5.333
				c-3.219-2.848-5.393-6.364-6.025-7.441c-0.631-1.075-0.066-1.656,0.475-2.191c0.488-0.482,1.084-1.255,1.625-1.882
				c0.543-0.628,0.723-1.075,1.082-1.793c0.363-0.717,0.182-1.344-0.09-1.883c-0.27-0.537-2.438-5.825-3.34-7.977
				c-0.902-2.15-1.803-1.792-2.436-1.792c-0.631,0-1.354-0.09-2.076-0.09c-0.722,0-1.896,0.269-2.889,1.344
				c-0.992,1.076-3.789,3.676-3.789,8.963c0,5.288,3.879,10.397,4.422,11.113c0.541,0.716,7.49,11.92,18.5,16.223
				C58.2,65.771,58.2,64.336,60.186,64.156c1.984-0.179,6.406-2.599,7.312-5.107C68.398,56.537,68.398,54.386,68.129,53.938z"/>
			</g>
		</svg>
	</a>
</div>


<div class="carousel">
	<a class="carousel-item" href="#tripadvisor!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/tripadvisor.jpg"
		class="lazy"
		alt="tripadvisor logo"
		/>
	</a>
	<a class="carousel-item" href="#tursap!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/tursap.jpg"
		class="lazy"
		alt="tursab logo"
		/>
	</a>
	<a class="carousel-item" href="#viator!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/viator.jpg"
		class="lazy"
		alt="viator logo"
		/>
	</a>
	<a class="carousel-item" href="#ctrip!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/ctrip.jpg"
		class="lazy"
		alt="ctrip logo"
		/>
	</a>
	<a class="carousel-item" href="#expedia!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/expedia.jpeg"
		class="lazy"
		alt="expedia logo"
		/>
	</a>
	<a class="carousel-item" href="#trip!">
		<img src="https://www.blueeyetour.com/assets_user/img/placeholder.svg"
		data-src="https://www.blueeyetour.com/assets_user/img/trip.jpg"
		class="lazy"
		alt="trip logo"
		/>
	</a>
</div>

<footer class="page-footer">
	<div class="container">
		<div class="row">
			
			<div class="col l3 s12">
				<h5 class="white-text">
					Поддержка				</h5>
				<ul>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/contact">
							Связаться с нами						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/yasal">
							Юридическая информация						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/gizlilik-politikasi">
							Политика конфиденциальности						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/kullanim-kosullari">
							Условия использования						</a>
					</li>
				</ul>
			</div>
			<div class="col l3 s12">
				<h5 class="white-text">
					Компания				</h5>

				<ul>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/hakkimizda">
							Компания						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/kariyer">
							Карьера						</a>
					</li>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/mesafeli-satis-sozlesmesi">
							Договор о удаленной продаже						</a>
					</li>
					<li>
						
					</li>
				</ul>
			</div>
			
			<div class="col l3 s12">
				<h5 class="white-text">
					Сотрудничество				</h5>
				<ul>
					<li>
						<a class="grey-text text-lighten-3" href="https://www.blueeyetour.com/pages/detail/ortaklik-yonetimi">
							Поставщиками						</a>
					</li>
				</ul>
				<h5 class="white-text">
					Варианты оплаты				</h5>
				<div class="payments">
					<img src="https://www.blueeyetour.com/assets_user/img/visa.svg" alt="visa">
					<img src="https://www.blueeyetour.com/assets_user/img/maestro.svg" alt="maestro">
					<img src="https://www.blueeyetour.com/assets_user/img/mastercard.svg" alt="mastercard">
				</div>
			</div>
			<div class="col l3 s12">
				<a href="https://www.tursab.org.tr/tr/ddsv" rel="noreferrer" target="_blank">
					<img style="margin: 1.0933333333rem 0 .656rem 0;" src="https://www.blueeyetour.com/assets_user/img/tursab-en.png" alt="TURSAB logo" />
				</a>
				
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<a href="?php echo base_url(); ?>pages/detail/hakkimizda">© 2020 Blue Eye.
				Все права защищены			</a>
			<div class="social">
					
											<a href="https://www.facebook.com/blueeyetour">
							<img src="https://www.blueeyetour.com/assets_user/img/001-facebook.svg" alt="facebook">
						</a>
					
											<a href="https://www.instagram.com/blueeyetour">
							<img src="https://www.blueeyetour.com/assets_user/img/002-instagram.svg" alt="instagram">
						</a>
					
					
					
					
					
									</a>

					</div>
	</div>
</div>
</footer>

<script src="https://www.blueeyetour.com/assets_user/js/lazy-load.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144549165-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	
	gtag('config', 'UA-144549165-1');
</script>


<!-- jQuery.js -->
<script src="https://www.blueeyetour.com/assets_user/js/jquery-3.4.1.min.js"></script>
<!-- materalize.js -->
<script src="https://www.blueeyetour.com/assets_user/js/materialize.min.js"></script>
<script>
	var elem = document.querySelector('.tabs');
	var instance = M.Tabs.init(elem);
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.parallax');
		var instances = M.Parallax.init(elems);
	});
</script>
<!-- function.js -->
<script src="https://www.blueeyetour.com/assets_user/js/function.js"></script>
</body>
</html>