@extends('master')


@section('head')
	<title>Актуално | Специализирана Болница за Актвно Лечение по Онкология "Свети Мина" ЕООД гр. Благоевград</title>
@stop


@section('content')
	<div class="col-sm-10 col-sm-offset-1 news_wrapper">
		{{-- */$counter = 0/* --}}
	@foreach($news as $new)
		@if(($counter%2) == 0 )
		<div class="news_single col-xs-12 col-sm-5 col-md-3 col-lg-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-0">
		@else
		<div class="news_single col-xs-12 col-sm-5 col-md-3 col-lg-4 col-lg-offset-2 col-md-offset-1 col-sm-offset-2">
		@endif
			<div id="ns_title">
				<p>
					{!! $new->title !!}
				</p>
			</div>
			<div id="ns_image">
				<img src="{{ $new->img }}">
			</div>
			<div id="ns_preview">
				<p>
					{!! $new->novina !!}
				</p>
			</div>
			<div class="custom_hover">Виж повече</div>
		</div>
		{{-- */$counter++/* --}}
	@endforeach
	</div>
	<div class="clearfix"></div>
@stop