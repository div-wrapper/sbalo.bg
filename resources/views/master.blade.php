<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css') }}">
	@yield('head')
</head>

<body>
	<div class="hospital_info">
		<p>
			"СПЕЦИАЛИЗИРАНА БОЛНИЦА ЗА
			АКТИВНО ЛЕЧЕНИЕ ПО ОНКОЛОГИЯ
			СВЕТИ МИНА" ЕООД,<br>
			БЛАГОЕВГРАД 
		</p>
		<img src="{{ URL::asset('img/bolnica.png') }}">
		<img src="{{ URL::asset('img/ikoni.png') }}">
	</div>
	
	<header>
		<div class="navbar navbar-default main-navigation col-sm-12">
	        <div class="container-fluid">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	            </div>
	           



	            <!-- Collect the nav links, forms, and other content for toggling -->
            	
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-center" id="singlePageNavigation">
	                    <li class="{{ set_active('home') }}">
	                    	<a href="{{URL::to('home')}}">Начало</a>
	                    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('home/contacts')}}">Контакти</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('home/map')}}">Карта</a></li>
							</ul>
	                    </li>
	                    <li class="{{ Request::is('current') ? 'active' : '' }}"><a href="{{URL::to('current')}}">Актуално</a></li>
	                    <li class="{{ Request::is('structure') ? 'active' : '' }}">
	                    	<a href="{{URL::to('structure')}}">Структура</a>
	                    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation">
									<a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb')}}">Диагностично консултативен блок</a>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/omcrcr')}}">Организационно-Методично Отделение и Регионален Раков Регистър</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/foster-advisory')}}">Приемно-Консултативни Кабинети</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/gynecology')}}">Гинекологичен Кабинет</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/radiotherapy')}}">Радиологичен/Лъчетерепевтичен Кабинет</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/gastro-broncho')}}">Гастроентерологичен/Бронхоскопичен Кабинет</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/clinical')}}">Клинична Лаборатория</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/microbiological')}}">Микробиологична Лаборатория</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/surgery')}}">Хириргичен Кабинет</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/pain')}}">Кабинет по Болката</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/chemotherapy')}}">Химиотерепевтичен Кабинет</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/imaging')}}">Отделение по Образна Диагностика</a></li>
									    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/dcb/pathology')}}">Отделение по Обща и Клинична Патология</a></li>
									</ul>
								</li>
							    <li role="presentation">
							    	<a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary')}}">Стационарен блок</a>
							    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary/radiotherapy-compartment')}}">ОТДЕЛЕНИЕ ПО ЛЪЧЕЛЕЧЕНИЕ</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary/medical-oncology')}}">ОТДЕЛЕНИЕ ПО МЕДИЦИНСКА ОНКОЛОГИЯ</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary/surgery-compartment')}}">ХИРУРГИЧНО ОТДЕЛЕНИЕ</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary/gynecology-compartment')}}">ГИНЕКОЛОГИЧНО ОТДЕЛЕНИЕ</a></li>
										<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/stationary/resuscitation')}}">ОТДЕЛЕНИЕ ПО АНЕСТЕЗИОЛОГИЯ, РЕАНИМАЦИЯ И ИНТЕНЗИВНО ЛЕЧЕНИЕ /ОАРИЛ/</a></li>
									</ul>
							    </li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/administration')}}">Административно стопански блок</a></li>
							    <li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('structure/pharmacy')}}">Аптека</a></li>
							</ul>
	                    </li>
	                    <li class="{{ Request::is('patient-contditions') ? 'active' : '' }}">
	                    	<a href="{{URL::to('uzpnp')}}">Условия за прием на пациенти</a>
	                    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Постъпване</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Списък на клинични пътеки</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Списък на клинични процедури</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Високоспециализирани дейности</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Какво трябва да знаете</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Диспансеризация</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('patient-conditions/')}}">Профилактика</a></li>
	                    	</ul>
	                    </li>
	                    <li class="{{ Request::is('euprojects') ? 'active' : '' }}"><a href="{{URL::to('eu-projects')}}">Европейски проекти</a></li>
	                    <li class="{{ Request::is('buyer-profile') ? 'active' : '' }}">
	                    	<a href="{{URL::to('buyer-profile')}}">Профил на купувача</a>
	                    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('buyer-profile/')}}">Обществени поръчки</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('buyer-profile/')}}">Публични покани</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('buyer-profile/')}}">Архив на обществените поръчки и публични покани</a></li>
	                    		<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('buyer-profile/')}}">Вътрешни правила за провеждане на обществени поръчки на „Областен диспансер за онкологични заболявания със стационар-Благоевград“ ЕООД</a></li>
	                    	</ul>
	                    </li>
	                    <li class="{{ Request::is('gallery') ? 'active' : '' }}">
	                    	<a href="{{URL::to('gallery')}}">Галерия</a>
	                    	<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="{{URL::to('gallery/video')}}">Видео</a></li>
							</ul>
	                    </li>
	                </ul>
	            </div><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	        <div class="row col-sm-12" id="fading_menu">
	            <!-- <img src="../public/images/bolnica.png"> -->
	        </div>
	    </div>
	</header>
	<div class="content">
		@yield('content')
	</div>
	<footer class="col-sm-12">
		<a href="javascript:;" id="top">TOP</a>
	</footer>
</body>
<script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</html> 