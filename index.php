<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<?php require_once "layouts/_header.php"; ?>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>

	<?php require_once "layouts/_navigation.php"; ?>

	<!-- header -->
	<div class="main-container">
		<div class="header">
			<div class="header__background"></div>
			<div class="header__border">
				<img class="header__logo" src="img/index-logo.png">
				<ul class="header__list">
					<li class="header__item">
						Художественная ковка
					</li>
					<li class="header__item">
						Реставрация исторических решеток
					</li>
					<li class="header__item">
						Производство металлоконструкций: <br> ворот, заборов, ограждений
					</li>
 					<li class="header__item">
						Металлический декор: <br> валюты, кольца, вензеля
					</li>	
				</ul>				
			</div>
		</div>
	</div>

	<!-- stats -->
	<div class="main-container">
		<ul class="stats">
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-1.png">
				</div>
				Более 15 лет опыта
			</li>
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-2.png">
				</div>
				Индивидуальный подход
			</li>
			<li class="stats__item">
				<div class="stats__icon-background">
					<img class="stats__icon" src="img/index-stats-icon-3.png">
				</div>
				Гарантия качества
			</li>
		</ul>
	</div>

	<!-- catalog -->
	<div class="main-container">
		<div class="catalog">
			<div class="catalog__block catalog__block-1">
				<div class="catalog__title">Ворота</div>
				<img src="img/index-catalog/block-1.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Распашные</li>
					<li>Откатные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-2">
				<div class="catalog__title">Ограждения</div>
				<img src="img/index-catalog/block-2.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Декоративные</li>
					<li>Уличные</li>
					<li>Балконные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-3">
				<div class="catalog__title">Козырьки</div>
				<img src="img/index-catalog/block-3.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Подвесные</li>
					<li>Двускатные</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-4">
				<div class="catalog__title">Лестницы</div>
				<img src="img/index-catalog/block-4.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Перила</li>
					<li>Ограждения</li>
					<li>Каркасы</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-5">
				<div class="catalog__title">Декор</div>
				<img src="img/index-catalog/block-5.png" class="catalog__image">
				<ul class="catalog__list">
					<li>Кольца</li>
					<li>Валюты</li>
					<li>Вензеля</li>
				</ul>
			</div>
			<div class="catalog__block catalog__block-6">
				<div class="catalog__title">Интерьерный <br> декор</div>
				<img src="img/index-catalog/block-6.png" class="catalog__image">
			</div>
			<div class="catalog__block catalog__block-7">
				<span class="catalog__link">Пеейти <br> в каталог</span>
				<i class="fal fa-chevron-right catalog__icon"></i>
			</div>		
		</div>
	</div>

	<!-- services -->
	<div class="main-container services">
		<div class="main-title">Услуги</div>
	
		<ul class="services__list">
			<li class="services__item">
				Реставрационные работы <br> по металлу и ковке
				<i class="fal fa-chevron-right services__icon"></i>
			</li>
			<li class="services__item">
				Ручная художественная <br> ковка
				<i class="fal fa-chevron-right services__icon"></i>
			</li>
			<li class="services__item">
				Литье чугуна <br> и алюминия
				<i class="fal fa-chevron-right services__icon"></i>
			</li>
			<li class="services__item">
				Производство <br> металлоконструкций
				<i class="fal fa-chevron-right services__icon"></i>
			</li>
		</ul>
	</div>

	<!-- gallery -->
	<div class="main-container gallery">
		<div class="main-title">Галерея</div>

		<div class="gallery__slider">
			<div class="gallery__container swiper-container">
			    <div class="swiper-wrapper">
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/1.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/2.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/3.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/4.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/5.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/6.webp" class="gallery__image ">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide swiper-slide gallery__slide">
						<img src="img/index-gallery/9.webp" class="gallery__image ">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
					<div class="swiper-slide gallery__slide">
						<img src="img/index-gallery/8.webp" class="gallery__image">
						<!-- <div class="swiper-lazy-preloader"></div> -->
					</div>
			    </div>
			</div>	
			<div class="swiper-button-prev gallery__button gallery__button__prev"></div>
			<div class="swiper-button-next gallery__button gallery__button__next"></div>	
		</div>
	    <div class="swiper-pagination gallery__pagination"></div>
		<button class="gallery__link">
		    Перейти в галерею
			<i class="fal fa-chevron-right gallery__icon"></i>
		</button>
	</div>

	<script type="text/javascript">
		var mySwiper = new Swiper('.swiper-container', {			
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},

			slidesPerView: 1,
			spaceBetween: 16,

			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			breakpoints: {
				0: { slidesPerView: 1 },
				740: { slidesPerView: 2 },
				1025: {slidesPerView: 3 },
				1329: { slidesPerView: 4 }
			}
		})
	</script>

	<!-- projects -->
	<div class="main-container projects">
		<div class="main-title">Проекты</div>
		<ul class="projects__container">
			<li class="projects__item">
				<img src="img/index-gallery/3.webp" class="projects__image">
				<span class="projects__title">
					Изготовление ворот, решеток, ограждений
				</span>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>

			<li class="projects__item">
				<img src="img/index-gallery/3.webp" class="projects__image">
				<span class="projects__title">
					Изготовление ворот, решеток
				</span>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>
			
			<li class="projects__item">
				<img src="img/index-gallery/3.webp" class="projects__image">
				<span class="projects__title">
					Изготовление ворот
				</span>
				<span class="projects__date">6 июня, 2020 г.</span>
			</li>
		</ul>
	    <button class="projects__link">
		    Перейти в проекты
			<i class="fal fa-chevron-right services__icon"></i>
		</button>
	</div>

	<?php require_once "layouts/_footer.php"; ?>

</body>
</html>