<header class="container-fluid site-header">
	<div class="container">
		<div class="row h-100 align-items-center">
			<div class="col-3 d-md-block d-none text-left px-0">
				<h1><i class="fas fa-home"></i> Жкг: розрахунковий центр</h1>
				<h4 class="m-0"><?=$factory_name?></h4>
				<p class="m-0 "><?=$factory_city?></p>
				<p class="m-0"><?=$factory_region?></p>
			</div>
			<div class="col-1 px-0">
				<img src="<?=site_url('assets/img/logo.svg')?>" alt="Федерація роботодавців ЖКГ україни">
			</div>
			<div class="col-7 px-1">
				<div class="row">
					<div class="col-4">
						<button class="col ml-2 btn btn-primary btn-header">Житловий фонд</button>
					</div>
					<div class="col-4">
						<button class="col ml-2 btn btn-primary btn-header">Бюджет</button>
					</div>
					<div class="col-4">
						<button class="col ml-2 btn btn-primary btn-header">Інші споживачі</button>
					</div>
				</div>
			</div>
			<div class="col-1 text-right">
				<a href="#" data-toggle="modal" data-target="#settings_window"><img src="<?=site_url('assets/img/settings.png')?>" alt=""></a>
			</div>
		</div>
	</div>
</header>
<div class="container-fluid nav-section">
	<div class="container h-100">
		<div class="row h-100 align-items-center">
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Тарифи</a>
			</div>
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Пільги</a>
			</div>
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Алгоритми</a>
			</div>
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Друк рахунків</a>
			</div>
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Заготовка</a>
			</div>
			<div class="col-2">
				<a class="col btn btn-danger btn-header" href="#">Звіти</a>
			</div>
		</div>
	</div>
</div>
<section class="container-fluid characteristics-cards">
	<div class="container py-5">
		<div class="row">
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">1</p>
						<div class="col-10">
							<h3 class="mb-4 pb-2">Характеристики будинків</h3>
							<a href="#" data-toggle="modal" data-target="#flats_references" class="mr-4 characteristics-cards__link--black">Довідники</a>
							<a href="<?=site_url('tables/houses')?>" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			<!--
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">2</p>
						<div class="col-10">
							<h3>Характеристики приміщень</h3>
							<p class="mb-2"><a href="#" class="characteristics-cards__link--grey">Скачати шаблон</a></p>
							<a href="#" class="mr-4 characteristics-cards__link--black">Імпорт файлу</a>
							<a href="#" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">3</p>
						<div class="col-10">
							<h3>Характеристики мешканців</h3>
							<p class="mb-2"><a href="#" class="characteristics-cards__link--grey">Скачати шаблон</a></p>
							<a href="#" class="mr-4 characteristics-cards__link--black">Імпорт файлу</a>
							<a href="#" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">4</p>
						<div class="col-10">
							<h3>Нарахування та оплат</h3>
							<p class="mb-2"><a href="#" class="characteristics-cards__link--grey">Скачати шаблон</a></p>
							<a href="#" class="mr-4 characteristics-cards__link--black">Імпорт файлу</a>
							<a href="#" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">5</p>
						<div class="col-10">
							<h3>Лічильники</h3>
							<p class="mb-2"><a href="#" class="characteristics-cards__link--grey">Скачати шаблон</a></p>
							<a href="#" class="mr-4 characteristics-cards__link--black">Імпорт файлу</a>
							<a href="#" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4 mb-4">
				<div class="py-4 card">
					<div class="row">
						<p class="col-2 pl-4 text-left characteristics-cards__number">6</p>
						<div class="col-10">
							<h3>Договори</h3>
							<p class="mb-2"><a href="#" class="characteristics-cards__link--grey">Скачати шаблон</a></p>
							<a href="#" class="mr-4 characteristics-cards__link--black">Імпорт файлу</a>
							<a href="#" target="_blank" class="characteristics-cards__link--blue">Редагувати</a>
						</div>
					</div>
				</div>
			</div>
			-->
		</div>
	</div>
</section>