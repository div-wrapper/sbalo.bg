@extends('master')


@section('head')
	<title>Начало | Специализирана Болница за Актвно Лечение по Онкология "Свети Мина" ЕООД гр. Благоевград</title>
@stop

@section('content')
<div class="col-sm-6 col-sm-offset-4" style="text-align: justify;">
	@foreach($second_inner as $str)
		{!! $str->title !!}
		{!! $str->text !!}
	@endforeach
</div>
@stop